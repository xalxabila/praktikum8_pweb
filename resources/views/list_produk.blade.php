<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <div>
    <h1>Input Produk</h1>
</div>
<form action="{{ route('produk.simpan') }}" method="POST" class="space-y-4">
    @csrf
    <input type="text" name="nama" placeholder="Nama Produk" class="border rounded p-2 w-full">
    <input type="text" name="deskripsi" placeholder="Deskripsi Produk" class="border rounded p-2 w-full">
    <input type="number" name="harga" placeholder="Harga Produk" class="border rounded p-2 w-full">
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
</form>

<div class="mx-auto mt-20 max-w-6xl px-4">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4 border-b bg-blue-600 text-white text-lg font-semibold">
            Daftar Produk
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6 bg-gray-50">
            @foreach ($nama as $index => $item)
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="text-sm text-gray-500 mb-1">No: {{ $index + 1 }}</div>
                <div class="text-lg font-bold text-gray-800 mb-2">{{ $item }}</div>
                <div class="text-gray-600 mb-2">{{ $desc[$index] }}</div>
                <div class="text-green-600 font-semibold">{{ $harga[$index] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>


