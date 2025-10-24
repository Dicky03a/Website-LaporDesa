<!DOCTYPE html>
<html lang="id">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>FAQ - Lapor Kades Desa Mojoagung</title>
      @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 text-gray-800">
      <div class="max-w-4xl mx-auto px-6 py-12">
            <h1 class="text-3xl font-bold text-center mb-8 text-amber-600">
                  Pertanyaan yang Sering Diajukan (FAQ)
            </h1>

            <div class="space-y-4">
                  <!-- FAQ Item -->
                  <details class="group bg-white rounded-2xl shadow-md p-6 transition hover:shadow-lg">
                        <summary class="flex justify-between items-center cursor-pointer font-semibold text-lg text-gray-700">
                              Bagaimana cara membuat laporan baru?
                              <span class="transition-transform group-open:rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                              </span>
                        </summary>
                        <p class="mt-3 text-gray-600 leading-relaxed">
                              Anda dapat membuat laporan baru dengan masuk ke halaman utama aplikasi, lalu klik tombol <b>"Buat Laporan"</b>.
                              Isi semua data yang diminta seperti judul, deskripsi, dan kategori laporan, lalu kirim.
                        </p>
                  </details>

                  <details class="group bg-white rounded-2xl shadow-md p-6 transition hover:shadow-lg">
                        <summary class="flex justify-between items-center cursor-pointer font-semibold text-lg text-gray-700">
                              Bagaimana cara mengecek status laporan saya?
                              <span class="transition-transform group-open:rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                              </span>
                        </summary>
                        <p class="mt-3 text-gray-600 leading-relaxed">
                              Masukkan <b>kode laporan</b> Anda di kolom pencarian status pada halaman “Cek Status Laporan”.
                              Sistem akan menampilkan apakah laporan Anda sedang diproses, diterima, atau sudah selesai.
                        </p>
                  </details>

                  <details class="group bg-white rounded-2xl shadow-md p-6 transition hover:shadow-lg">
                        <summary class="flex justify-between items-center cursor-pointer font-semibold text-lg text-gray-700">
                              Apakah saya bisa mengirim foto atau lokasi saat melapor?
                              <span class="transition-transform group-open:rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                              </span>
                        </summary>
                        <p class="mt-3 text-gray-600 leading-relaxed">
                              Ya, sistem kami mendukung <b>unggah foto</b> dan <b>bagikan lokasi Anda</b> secara langsung agar laporan lebih akurat.
                        </p>
                  </details>

                  <details class="group bg-white rounded-2xl shadow-md p-6 transition hover:shadow-lg">
                        <summary class="flex justify-between items-center cursor-pointer font-semibold text-lg text-gray-700">
                              Berapa lama laporan saya akan ditindaklanjuti?
                              <span class="transition-transform group-open:rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                              </span>
                        </summary>
                        <p class="mt-3 text-gray-600 leading-relaxed">
                              Setiap laporan akan ditindaklanjuti maksimal <b>3×24 jam</b> oleh tim kami. Anda akan mendapat notifikasi
                              jika status laporan berubah.
                        </p>
                  </details>

                  <details class="group bg-white rounded-2xl shadow-md p-6 transition hover:shadow-lg">
                        <summary class="flex justify-between items-center cursor-pointer font-semibold text-lg text-gray-700">
                              Siapa yang bisa melihat laporan saya?
                              <span class="transition-transform group-open:rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                              </span>
                        </summary>
                        <p class="mt-3 text-gray-600 leading-relaxed">
                              Laporan hanya dapat dilihat oleh Anda dan pihak desa yang berwenang menangani laporan tersebut.
                        </p>
                  </details>
            </div>
      </div>
</body>

</html>