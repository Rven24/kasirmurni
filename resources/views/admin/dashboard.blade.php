<h1>Dashboard Admin 👑</h1>
<p>Selamat datang, {{ Auth::user()->name }}</p>
<div style="display: flex; gap: 20px;">
    <div style="background: gold; padding: 20px;">Total Pendapatan: Rp 1.000.000</div>
    <div style="background: silver; padding: 20px;">Jumlah Stok: 50 Barang</div>
</div>
<a href="/logout">Keluar</a>