<h1>Halaman Kasir 🛒</h1>
<p>Petugas: {{ Auth::user()->name }}</p>
<table border="1">
    <tr>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    <tr>
        <td>Buku Gambar</td>
        <td>5000</td>
        <td><button>Tambah ke Keranjang</button></td>
    </tr>
</table>
<a href="{{ route('logout') }}">Keluar</a>