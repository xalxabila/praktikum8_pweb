<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"/>
  <title>Produk Manis</title>
</head>

<body class="bg-[url('/images/background2.png')] bg-cover bg-center min-h-screen px-4 py-10 font-sans">

<!-- Container Utama -->
<div class="max-w-5xl mx-auto flex flex-col gap-12">

  <!-- Form Input Produk -->
  <div class="bg-white bg-opacity-90 shadow-2xl rounded-2xl p-8 w-full">
    <h1 class="text-3xl font-bold text-rose-900 mb-6 text-center font-serif italic">
      Input Produk
    </h1>

    <form action="{{ route('produk.simpan') }}" method="POST" class="space-y-5">
      @csrf
      <!-- Nama Produk -->
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama produk"
          class="px-4 py-2 border border-rose-300 rounded-xl w-full focus:outline-none focus:ring-2 focus:ring-rose-500 transition shadow-sm">
      </div>

      <!-- Deskripsi -->
      <div>
        <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi produk"
          class="px-4 py-2 border border-rose-300 rounded-xl w-full focus:outline-none focus:ring-2 focus:ring-rose-500 transition shadow-sm">
      </div>

      <!-- Harga -->
      <div>
        <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
        <input type="number" name="harga" id="harga" placeholder="Contoh: 50000"
          class="px-4 py-2 border border-rose-300 rounded-xl w-full focus:outline-none focus:ring-2 focus:ring-rose-500 transition shadow-sm">
      </div>

      <!-- Tombol Simpan -->
      <div class="text-center pt-4">
        <button type="submit"
          class="bg-rose-600 hover:bg-rose-700 text-white font-semibold px-6 py-2 rounded-xl shadow-md transition duration-200">
          Simpan Produk
        </button>
      </div>
    </form>
  </div>

  <!-- Daftar Produk Dalam Tabel -->
  <div class="bg-white bg-opacity-90 shadow-2xl rounded-2xl p-6 w-full overflow-x-auto">
    <h2 class="text-xl font-semibold text-center text-rose-800 mb-4">Daftar Produk</h2>
    <table class="min-w-full text-left border border-gray-300 rounded-xl overflow-hidden">
      <thead class="bg-rose-700 text-white">
        <tr>
          <th class="py-3 px-4">No</th>
          <th class="py-3 px-4">Nama Produk</th>
          <th class="py-3 px-4">Deskripsi</th>
          <th class="py-3 px-4">Harga</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($nama as $index => $item)
        <tr class="hover:bg-rose-50 transition">
          <td class="py-2 px-4">{{ $index + 1 }}</td>
          <td class="py-2 px-4 font-semibold text-gray-800">{{ $item }}</td>
          <td class="py-2 px-4 text-sm text-gray-600">{{ $desc[$index] }}</td>
          <td class="py-2 px-4 text-green-600 font-semibold">{{ $harga[$index] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</body>
</html>
