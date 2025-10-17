@extends('components.layouts.main')


@section('main')
<div class="relative flex flex-col w-full min-h-screen max-w-6xl mx-auto mb-8 bg-white shadow-lg overflow-hidden">

      <main class="flex-1 overflow-y-auto pb-24">
            <!-- Header -->
            <div class="bg-amber-300 rounded-4xl">
                  <nav class="flex items-center justify-between rounded-b-4xl bg-amber-300 p-6 lg:px-10">
                        <div>
                              <img src="{{ asset('img/Frame 6.svg') }}" alt="Frame 6"
                                    class="w-48 h-auto lg:w-56" loading="lazy" decoding="async">
                        </div>
                  </nav>
            </div>

            <!-- FORM TAMBAH LAPORAN -->
            <form action="{{ route('lapor.store') }}" method="POST" enctype="multipart/form-data"
                  class="px-5 pt-6 lg:px-10 lg:pt-10">
                  @csrf

                  @if (session('success'))
                  <div class="bg-green-100 text-green-700 border border-green-300 px-4 py-3 rounded-lg mb-6">
                        {{ session('success') }}
                  </div>
                  @endif

                  @if ($errors->any())
                  <div class="bg-red-100 text-red-700 border border-red-300 px-4 py-3 rounded-lg mb-6">
                        <ul class="list-disc list-inside">
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                        </ul>
                  </div>
                  @endif

                  <div class="max-w-4xl mx-auto">
                        <div class="flex items-center justify-center mb-10">
                              <h2 class="text-black text-3xl font-semibold">Formulir Pengaduan Masyarakat</h2>
                        </div>

                        <!-- Form Grid -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                              <!-- Kolom Kiri -->
                              <div>
                                    <div>
                                          <label class="block font-medium text-gray-700 mb-2">Nama</label>
                                          <input type="text" name="judul" placeholder="Masukkan nama Anda"
                                                class="text-black w-full border border-gray-300 rounded-full px-6 py-3 focus:ring-2 focus:ring-green-400 focus:outline-none">
                                    </div>

                                    <div class="mt-5">
                                          <label class="block font-medium text-gray-700 mb-2">Nomor WhatsApp</label>
                                          <input type="text" name="nomor_wa" placeholder="Contoh: 6281234567890"
                                                class="text-black w-full border border-gray-300 rounded-full px-6 py-3 focus:ring-2 focus:ring-green-400 focus:outline-none">
                                    </div>

                                    <div class="mt-5">
                                          <label class="block font-medium text-gray-700 mb-2">Kategori</label>
                                          <select name="kategori_id"
                                                class="text-black w-full border border-gray-300 rounded-full px-6 py-3 focus:ring-2 focus:ring-green-400 focus:outline-none">
                                                <option value="" disabled selected>Pilih Kategori</option>
                                                @foreach ($kategori as $id => $nama)
                                                <option value="{{ $id }}">{{ $nama }}</option>
                                                @endforeach
                                          </select>
                                    </div>
                              </div>

                              <!-- Kolom Kanan -->
                              <div>
                                    <div>
                                          <label class="block font-medium text-gray-700 mb-2">Bukti / Foto</label>
                                          <input type="file" name="foto" accept="image/*"
                                                class="text-black w-full border border-gray-300 rounded-full px-6 py-3 file:mr-3 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-green-100 file:text-green-700 hover:file:bg-green-200 focus:ring-2 focus:ring-green-400 focus:outline-none">
                                    </div>

                                    <div class="mt-5">
                                          <label class="block font-medium text-gray-700 mb-2">Lokasi</label>
                                          <input type="text" name="lokasi" placeholder="Contoh: Dusun Soko RT 02 RW 01"
                                                class="text-black w-full border border-gray-300 rounded-full px-6 py-3 placeholder-gray-400 focus:ring-2 focus:ring-green-400 focus:outline-none">
                                    </div>
                              </div>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mt-8">
                              <label class="block font-medium text-gray-700 mb-2">Deskripsi</label>
                              <textarea name="deskripsi" rows="8"
                                    class="text-black w-full border border-gray-300 rounded-2xl px-6 py-4 resize-none focus:ring-2 focus:ring-green-400 focus:outline-none placeholder-gray-400"
                                    placeholder="Tuliskan deskripsi laporan Anda di sini..."></textarea>
                        </div>

                        <div class="mt-10">
                              <button type="submit"
                                    class="w-full bg-amber-400 text-white font-semibold py-3 rounded-full hover:bg-amber-500 transition duration-300">
                                    Kirim Laporan
                              </button>
                        </div>
                  </div>
            </form>
      </main>
</div>

@endsection