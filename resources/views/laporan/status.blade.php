<!DOCTYPE html>
<html lang="id">

<head>
      @include('partials.head')
</head>

<body>


      <div class="max-w-lg mx-auto bg-white shadow-md rounded p-6 mt-10">
            <h2 class="text-xl font-bold mb-4 text-center">Status Laporan</h2>
            <p><strong>Kode Laporan:</strong> {{ $laporan->kode_laporan }}</p>
            <p><strong>Judul:</strong> {{ $laporan->judul }}</p>
            <p><strong>Kategori:</strong> {{ $laporan->kategori->nama_kategori }}</p>
            <p><strong>Status:</strong>
                  <span class="px-3 py-1 rounded 
            @if($laporan->status == 'pending') bg-yellow-200 text-yellow-800 
            @elseif($laporan->status == 'proses') bg-blue-200 text-blue-800 
            @else bg-green-200 text-green-800 @endif">
                        {{ ucfirst($laporan->status) }}
                  </span>
            </p>
            <p><strong>Deskripsi:</strong> {{ $laporan->deskripsi }}</p>
      </div>
</body>

</html>