<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;
use App\Models\kategoriLaporan;
use App\Models\notifikasi;
use Illuminate\Support\Facades\Http;

class LaporanController extends Controller
{
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
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2️⃣ Simpan foto laporan ke storage
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('laporan', 'public');
        }

        // 3️⃣ Simpan laporan
        $laporan = laporan::create($validated);

        // 4️⃣ Ambil kategori untuk dapatkan nomor petugas dan kades
        $kategori = kategoriLaporan::find($validated['kategori_id']);

        // 5️⃣ Buat pesan teks
        $pesan = "*Laporan Baru Masuk*\n\n" .
            "📝 Judul: {$laporan->judul}\n" .
            "📂 Kategori: {$kategori->nama_kategori}\n" .
            "📍 Lokasi: {$laporan->lokasi}\n" .
            "📋 Deskripsi:\n{$laporan->deskripsi}\n\n" .
            "📞 Nomor Pelapor: {$laporan->nomor_wa}";

        // 6️⃣ Buat URL gambar (public)
        $fotoUrl = asset('storage/' . $laporan->foto);

        // 7️⃣ Kirim pesan ke petugas
        if ($kategori->nomor_petugas) {
            $this->kirimFonnte($kategori->nomor_petugas, $pesan, $fotoUrl);
            notifikasi::create([
                'laporan_id' => $laporan->id,
                'pesan' => "Pesan & foto dikirim ke petugas: {$kategori->nomor_petugas}",
                'waktu_kirim' => now(),
            ]);
        }

        // 8️⃣ Kirim pesan ke kades
        if ($kategori->nomor_kades) {
            $this->kirimFonnte($kategori->nomor_kades, $pesan, $fotoUrl);
            notifikasi::create([
                'laporan_id' => $laporan->id,
                'pesan' => "Pesan & foto dikirim ke kades: {$kategori->nomor_kades}",
                'waktu_kirim' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Laporan berhasil dikirim dan notifikasi sudah dikirim ke WhatsApp!');
    }

    /**
     * Fungsi kirim pesan WhatsApp via Fonnte
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

        // Log respons jika perlu untuk debugging
        // \Log::info('Fonnte Response:', $response->json());

        return $response->successful();
    }
}
