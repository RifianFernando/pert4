<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <title>BNCC</title>
</head>

<body>

    {{-- navbar --}}
    <div class="navbar-container">
        <div class="navbar-left">
            <img class="logo-img" src="{{ asset('/assets/logo.png') }}" alt="">
            <p>Lorem Ipsum</p>
        </div>
        <div class="navbar-right">
            <a href="">Home</a>
            <a href="#content-achievement">Achievement</a>
            <a href="{{ route('bootstrap') }}">BootStrap</a>
            <a href="/contact">Contact</a>


            {{-- dari function naming routing laravel --}}
            {{-- <a href="{{ route('contact') }}">Contact ez</a> --}}
        </div>
    </div>

    <div class="content-home">
        <h1 class="judul-home">Lorem ipsum dolor sit amet consectetur adipisicing elit
        </h1>
        <h1 class="judul-home">Contact Here
        </h1>
        <button class="contact-btn">
            <p>Contact</p>
        </button>
    </div>

    <div class="content-achievement" id="content-achievement">
        <h1>Achievement</h1>
        <div class="winner-box">
            <div class="first-box">
                <h2>
                    First Winner
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam iste eius voluptatum odit explicabo,
                    mollitia ducimus iusto repudiandae perspiciatis a ut delectus, optio maiores molestias dolor quam
                    laboriosam vero in.</p>
            </div>
            <div class="second-box">
                <h2>
                    Second Winner
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam iste eius voluptatum odit explicabo,
                    mollitia ducimus iusto repudiandae perspiciatis a ut delectus, optio maiores molestias dolor quam
                    laboriosam vero in.</p>
            </div>
        </div>
    </div>
    </div>

    <div class="about-us">

        <div class="card">

            <img class="about-img" src="{{ asset('assets/company.jpg') }}" alt="">
            <div class="about-us-content">
                <h2>
                    About Us
                </h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates minus, quisquam quasi id animi
                    nobis necessitatibus tempore reiciendis perspiciatis ea! Nulla facilis sequi accusamus placeat
                    recusandae qui aliquid dolore assumenda</p>
            </div>
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
