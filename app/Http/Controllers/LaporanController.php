<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;
use App\Models\kategoriLaporan;
use App\Models\notifikasi;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class LaporanController extends Controller
{

    public function index()
    {
        $kategori = kategoriLaporan::pluck('nama_kategori', 'id');
        return view('front.index', compact('kategori'));
    }

    public function create()
    {
        $kategori = kategoriLaporan::pluck('nama_kategori', 'id');
        return view('laporan.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        // 1️⃣ Validasi input laporan
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategori_laporans,id',
            'nomor_wa' => 'required|string|max:20',
            'deskripsi' => 'required|string|max:500',
            'lokasi' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2️⃣ Simpan foto laporan ke storage (jika ada)
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('laporan', 'public');
        } else {
            $validated['foto'] = null;
        }

        // 3️⃣ Buat kode laporan unik
        $validated['kode_laporan'] = 'LPR-' . strtoupper(Str::random(6));

        // 4️⃣ Simpan laporan ke database
        $laporan = laporan::create($validated);

        // 5️⃣ Ambil kategori untuk nomor petugas & kades
        $kategori = kategoriLaporan::find($validated['kategori_id']);

        // 6️⃣ Buat pesan utama laporan
        $pesanUtama = "*Laporan Baru Masuk*\n\n" .
            "🆔 Kode Laporan: {$laporan->kode_laporan}\n" .
            "📝 Judul: {$laporan->judul}\n" .
            "📂 Kategori: {$kategori->nama_kategori}\n" .
            "📍 Lokasi: {$laporan->lokasi}\n" .
            "📋 Deskripsi:\n{$laporan->deskripsi}\n\n" .
            "📞 Nomor Pelapor: {$laporan->nomor_wa}";

        // Tambahkan keterangan jika ada foto
        if ($laporan->foto) {
            $pesanUtama .= "\n\n📸 Foto terlampir.";
        }

        // 7️⃣ Siapkan URL foto jika ada
        $fotoUrl = $laporan->foto ? asset('storage/' . $laporan->foto) : null;

        // 8️⃣ Kirim pesan ke Petugas (khusus kategori)
        if ($kategori->nomor_petugas) {
            $this->kirimFonnte($kategori->nomor_petugas, $pesanUtama, $fotoUrl);
            notifikasi::create([
                'laporan_id' => $laporan->id,
                'pesan' => "Pesan & foto dikirim ke petugas: {$kategori->nomor_petugas}",
                'waktu_kirim' => now(),
            ]);
        }

        // 9️⃣ Kirim pesan ke Kepala Desa (SEMUA laporan)
        $nomorKades = $kategori->nomor_kades ?? env('NOMOR_KADES_UTAMA');
        if ($nomorKades) {
            $this->kirimFonnte($nomorKades, $pesanUtama, $fotoUrl);
            notifikasi::create([
                'laporan_id' => $laporan->id,
                'pesan' => "Pesan & foto dikirim ke kepala desa: {$nomorKades}",
                'waktu_kirim' => now(),
            ]);
        }

        // 🔟 Kirim pesan konfirmasi ke Pelapor
        $pesanUser = "*Terima kasih telah melapor!*\n\n" .
            "Laporan Anda telah kami terima dengan rincian:\n" .
            "🆔 Kode Laporan: {$laporan->kode_laporan}\n" .
            "📝 Judul: {$laporan->judul}\n" .
            "📂 Kategori: {$kategori->nama_kategori}\n\n" .
            "Anda dapat memantau status laporan melalui link berikut:\n" .
            route('laporan.status', ['kode' => $laporan->kode_laporan]) . "\n\n" .
            "🙏 Mohon ditunggu, petugas akan segera menindaklanjuti laporan Anda.";

        $this->kirimFonnte($laporan->nomor_wa, $pesanUser);

        notifikasi::create([
            'laporan_id' => $laporan->id,
            'pesan' => "Pesan konfirmasi dikirim ke pelapor: {$laporan->nomor_wa}",
            'waktu_kirim' => now(),
        ]);

        // 🔁 Kembalikan ke halaman form dengan pesan sukses
        return redirect()->back()->with('success', 'Laporan berhasil dikirim dan notifikasi sudah dikirim ke WhatsApp!');
    }


    /**
     * Kirim pesan WhatsApp via Fonnte API
     */
    private function kirimFonnte($nomorTujuan, $pesan, $fotoUrl = null)
    {
        $data = [
            'target' => $nomorTujuan,
            'message' => $pesan,
        ];

        if ($fotoUrl) {
            $data['url'] = $fotoUrl; // kirim gambar via URL publik
        }

        $response = Http::withHeaders([
            'Authorization' => env('FONNTE_TOKEN'),
        ])->post('https://api.fonnte.com/send', $data);

        // Jika gagal, bisa dilog untuk debugging
        // \Log::info('Fonnte Response:', $response->json());

        return $response->successful();
    }

    public function status($kode)
    {
        $laporan = laporan::where('kode_laporan', $kode)->firstOrFail();
        return view('laporan.status', compact('laporan'));
    }

    public function cari()
    {
        return view('laporan.cari');
    }

    public function statusByKode(Request $request)
    {
        $laporan = laporan::where('kode_laporan', $request->kode)->first();

        if (!$laporan) {
            return redirect()->back()->with('error', 'Kode laporan tidak ditemukan. Pastikan Anda memasukkan kode dengan benar.');
        }

        return view('laporan.status', compact('laporan'));
    }
}
