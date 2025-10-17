@extends('components.layouts.main')


@section('main')

<div class="bg-gray-100 font-sans antialiased">

      <div class="min-h-screen flex flex-col justify-center items-center p-6">
            <div class="w-full max-w-md bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">

                  <div class="bg-gradient-to-r bg-amber-300 text-white p-5 text-center">
                        <h1 class="text-2xl font-bold">Cek Status Laporan</h1>
                        <p class="text-sm opacity-90 mt-1">Masukkan kode laporan Anda di bawah ini</p>
                  </div>

                  <div class="p-6">
                        @if (session('error'))
                        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-md">
                              {{ session('error') }}
                        </div>
                        @endif

                        <form action="{{ route('laporan.status') }}" method="GET" class="space-y-4">
                              @csrf
                              <div>
                                    <label for="kode" class="block text-gray-700 font-medium mb-1">Kode Laporan</label>
                                    <input type="text" id="kode" name="kode" placeholder="Contoh: LPR-ABC123"
                                          class="text-black w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                                          required>
                              </div>

                              <button type="submit"
                                    class="w-full bg-amber-300 hover:bg-amber-400 text-white font-semibold py-2.5 rounded-lg transition">
                                    Cari Laporan
                              </button>
                        </form>
                  </div>
            </div>
      </div>
</div>

@endsection