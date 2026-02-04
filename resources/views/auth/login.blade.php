<form action="{{ route('login') }}" method="POST">
    @csrf
    <h2>Masuk ke Toko</h2>
    <input type="email" name="email" placeholder="Email Anda" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Masuk</button>
    <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>
</form>