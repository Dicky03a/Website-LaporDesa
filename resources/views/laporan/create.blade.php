<!DOCTYPE html>
<html lang="id">

<head>
      @include('partials.head')
</head>

<body class="bg-gray-100">
      <div class="min-h-screen bg-gradient-to-br from-[#fff8f0] to-[#f4f9ff] flex flex-col">

            <div class="max-w-5xl mx-auto bg-white shadow-xl rounded-2xl p-10 mt-10">
                  <h2 class="text-2xl font-semibold text-gray-800 text-center mb-8">Formulir Pengaduan Masyarakat</h2>

                  @if (session('success'))
                  <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-center">
                        {{ session('success') }}
                  </div>
                  @endif

                  <form action="{{ route('lapor.store') }}" method="POST" enctype="multipart/form-data"
                        class="max-w-5xl mx-auto mt-12 bg-white rounded-2xl shadow-lg px-10 py-12">
                        @csrf

                        <h2 class="text-3xl font-semibold text-gray-800 text-center mb-10">Formulir Laporan Masyarakat</h2>

                        @if (session('success'))
                        <div class="bg-green-100 text-green-700 p-3 rounded mb-6 text-center">
                              {{ session('success') }}
                        </div>
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
                              <!-- Kolom kiri -->
                              <div class="space-y-6">
                                    <!-- Nama -->
                                    <div>
                                          <label class="block font-medium text-gray-700 mb-2">Nama</label>
                                          <input type="text" name="judul" value="{{ old('judul') }}"
                                                class="text-black w-full border border-gray-300 rounded-full px-6 py-3 placeholder-gray-400 focus:ring-2 focus:ring-green-400 focus:outline-none">
                                          @error('judul') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>

                                    <!-- Nomor Telepon -->
                                    <div>
                                          <label class="block font-medium text-gray-700 mb-2">Nomor Telepon</label>
                                          <input type="text" name="nomor_wa" value="{{ old('nomor_wa') }}" placeholder="0857xxxxxxx"
                                                class="text-black w-full border border-gray-300 rounded-full px-6 py-3 placeholder-gray-400 focus:ring-2 focus:ring-green-400 focus:outline-none">
                                          @error('nomor_wa') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>

                                    <!-- Kategori -->
                                    <div>
                                          <label class="block font-medium text-gray-700 mb-2">Kategori</label>
                                          <select name="kategori_id"
                                                class="text-black w-full border border-gray-300 rounded-full px-6 py-3 focus:ring-2 focus:ring-green-400 focus:outline-none">
                                                <option value="">-- Pilih Kategori --</option>
                                                @foreach ($kategori as $id => $nama)
                                                <option value="{{ $id }}" {{ old('kategori_id') == $id ? 'selected' : '' }}>
                                                      {{ $nama }}
                                                </option>
                                                @endforeach
                                          </select>
                                          @error('kategori_id') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>

                                    <!-- File Upload -->
                                    <div>
                                          <label class="block font-medium text-gray-700 mb-2">File Upload</label>
                                          <input type="file" name="foto" accept="image/*"
                                                class="text-black w-full border border-gray-300 rounded-full px-6 py-3 file:mr-3 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-green-100 file:text-green-700 hover:file:bg-green-200 focus:ring-2 focus:ring-green-400 focus:outline-none">
                                          @error('foto') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                              </div>

                              <!-- Kolom kanan -->
                              <div>
                                    <label class="block font-medium text-gray-700 mb-2">Deskripsi</label>
                                    <textarea name="deskripsi" rows="10"
                                          class="text-black w-full border border-gray-300 rounded-2xl px-6 py-4 resize-none focus:ring-2 focus:ring-green-400 focus:outline-none placeholder-gray-400"
                                          placeholder="Tuliskan deskripsi laporan Anda di sini...">{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                              </div>
                        </div>

                        <!-- Tombol -->
                        <div class="text-center mt-12">
                              <button type="submit"
                                    class="bg-green-500 text-white text-lg font-medium px-12 py-3 rounded-full shadow-md hover:bg-green-600 hover:scale-[1.02] transform transition-all duration-200">
                                    Bagikan
                              </button>
                        </div>
                  </form>

            </div>
      </div>

</body>

</html>