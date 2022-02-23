<!DOCTYPE html>
<html lang="en">
<head>
    <title>Templating Blade Laravel</title>
</head>
<body>
    <header>
        <nav>
            <h2>WELCOME TO WEBSITE</h2>

            <a href="/rpl">HOME</a>

            <a href="/rpl/tentang">TENTANG</a>

            <a href="/rpl/tentang/kontak">KONTAK</a>
            </nav>
        </header>
        <hr/>
        <br/>

        <h3> @yield ('judul_halaman') </h3>

        @yield('konten')

        <br/>
        <br/>
        <hr/>
        <footer>
            <p>&copy; <a href="#">www.mywebsite.com</a> 2022 </p>
        </footer>
</body>
</html>