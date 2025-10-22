@extends('components.layouts.main')


@section('main')

<div class="bg-gray-100 font-sans antialiased mb-8">

      <div class="relative flex flex-col w-full min-h-screen max-w-full lg:max-w-full mx-auto bg-[#F8F8F9]">

            <!-- MAIN CONTENT -->
            <main class="flex-1 overflow-y-auto pb-24">
                  <!-- HEADER -->
                  <div class="bg-amber-300 rounded-b-4xl">
                        <nav class="flex items-center justify-between bg-amber-300 p-5">
                              <div>
                                    <img src="{{ asset('img/Frame 6.svg') }}" alt="Frame 6"
                                          class="w-40 h-auto" loading="lazy" decoding="async">
                              </div>
                        </nav>

                        <!-- FORM PENCARIAN -->
                        <form action="{{ route('laporan.status') }}" method="GET"
                              class="px-5 py-6 flex justify-center items-center">
                              @csrf
                              <input type="text" name="kode"
                                    value="{{ request('kode') }}"
                                    placeholder="Isi Kode Laporan Anda"
                                    disabled
                                    class="mx-auto block text-center w-full sm:w-[80%] md:w-[60%] lg:w-[40%] border-2 border-white rounded-full px-6 py-3 focus:ring-2 focus:ring-green-400 focus:outline-none">
                        </form>
                  </div>

                  <!-- ALERT ERROR -->
                  @if (session('error'))
                  <div
                        class="bg-red-100 border border-red-300 text-red-700 text-center rounded-lg mx-5 mt-5 p-3">
                        {{ session('error') }}
                  </div>
                  @endif

                  <!-- HASIL PENCARIAN -->
                  @isset($laporan)
                  <div
                        class="flex flex-col justify-center items-center w-[90%] sm:w-4/5 md:w-2/3 lg:w-1/2 px-8 m-auto mt-10 rounded-3xl shadow-lg bg-white p-8">
                        <div class="w-full space-y-3">
                              <div>
                                    <p class="text-gray-600 text-sm">Kode Laporan</p>
                                    <h2 class="font-semibold text-lg text-gray-900">
                                          {{ $laporan->kode_laporan }}
                                    </h2>
                              </div>

                              <div>
                                    <p class="text-gray-600 text-sm">Judul Laporan</p>
                                    <p class="font-medium text-gray-800">{{ $laporan->judul }}</p>
                              </div>

                              <div>
                                    <p class="text-gray-600 text-sm">Kategori</p>
                                    <p class="font-medium text-gray-800">
                                          {{ $laporan->kategoriLaporan->nama_kategori ?? '-' }}
                                    </p>
                              </div>

                              <div>
                                    <p class="text-gray-600 text-sm">Status</p>
                                    <span
                                          class="px-3 py-1 rounded-full text-white text-sm font-semibold
                                @if ($laporan->status == 'pending') bg-yellow-400
                                @elseif($laporan->status == 'proses') bg-blue-500
                                @else bg-green-500 @endif">
                                          {{ ucfirst($laporan->status) }}
                                    </span>
                              </div>

                              <div>
                                    <p class="text-gray-600 text-sm">Deskripsi</p>
                                    <p class="text-gray-700 leading-relaxed">{{ $laporan->deskripsi }}</p>
                              </div>

                              <div>
                                    <p class="text-gray-600 text-sm">Tanggal Dibuat</p>
                                    <p class="text-gray-800">
                                          {{ $laporan->created_at->format('d M Y, H:i') }}
                                    </p>
                              </div>

                              <div>
                                    <p class="text-gray-600 text-sm mb-2">Foto Bukti</p>
                                    @if ($laporan->foto)
                                    <img src="{{ asset('storage/' . $laporan->foto) }}"
                                          alt="Bukti Laporan"
                                          class="rounded-lg w-full object-cover shadow-md">
                                    @else
                                    <p class="text-gray-500 text-sm italic">Tidak ada foto</p>
                                    @endif
                              </div>

                              <div class="border-t pt-4">
                                    <p class="text-gray-600 text-sm">Pelapor</p>
                                    <p class="text-gray-800 font-medium">
                                          {{ $laporan->nomor_wa }}
                                    </p>
                              </div>
                        </div>
                  </div>
                  @endisset
            </main>
      </div>
</div>

@endsection