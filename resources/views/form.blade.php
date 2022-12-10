<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
    <title>BNCC | Contact</title>
</head>
<body>
    {{-- navbar --}}
    <div class="navbar-container">
        <div class="navbar-left">
            <img class="logo-img" src="{{ asset('/assets/logo.png') }}" alt="">
            <p>Lorem Ipsum</p>
        </div>
        <div class="navbar-right">
            <a href="/">Home</a>
            <a href="#content-achievement">Achievement</a>
            <a href="">About Us</a>
            <a href="/contact">Contact</a>


            {{-- dari function naming routing laravel --}}
            {{-- <a href="{{ route('contact') }}">Contact ez</a> --}}
        </div>
        </div>
    </div>



    {{-- formulir --}}
    <div class="form-contact">
        <div class="kotak-formulir">
            <p class="form-text">Formulir</p> 
            <form action="http://localhost:8000/contact2" method="POST">
                <div class="kotak">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text">
                </div>
                <div class="kotak">
                    <label for="umur">Umur</label>
                    <input name="umur" type="number">
                </div>
                <div class="kotak">
                    <label for="tanggal">Tanggal</label>
                    <input name="tanggal" type="date">
                </div>
                <div class="kotak-1">
                    <input class="btn-submit" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>


    <div class="footer-home">

        <div class="logo-content">
            <img class="log-img-footer" src="{{ asset('/assets/logo.png') }}" alt="">
            <h1>
                Lorem Ipsum
            </h1>
        </div>

        <div class="sosmed-content">
            <p>Lorem Ipsum Street</p>

            <div class="sosmed-img">
                <a href="https://www.instagram.com/">
                    <img src="{{ asset('assets/ig.png') }}" alt="" target="_blank">
                </a>
                <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl" target="_blank">
                    <img src="{{ asset('assets/email.png') }}" alt="">
                </a>
            </div>

            <p>Copyright 2022</p>
        </div>
    </div>
</body>
</html>