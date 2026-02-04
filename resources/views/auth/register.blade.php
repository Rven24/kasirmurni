<form action="{{ route('register') }}" method="POST">
    @csrf
    <h2>Daftar Petugas Baru</h2>
    <input type="text" name="name" placeholder="Nama Lengkap">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <select name="role">
        <option value="petugas">Petugas Kasir</option>
        <option value="admin">Admin Toko</option>
    </select>
    <button type="submit">Daftar Sekarang</button>
</form>