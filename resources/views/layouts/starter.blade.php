<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

        <title>DPPPA Sumsel </title>
    </head>

    <body>
        <section class="hero-section no-bg h-auto">
            <!-- Navbar -->
            <nav class="nav-custom">
                <div class="container navbar-content">
                    <div class="nav-logo">
                        <img src="{{ asset('img/logo/logo.png') }}" alt="" class="img-fluid" />
                    </div>
                    <div class="gap-r-sm"></div>
                    <div class="nav-links-custom" id="navbar">
                        <div class="nav-a-links">
                            <a class="a-link-nav" href="/">Beranda</a>
                            <div class="dropdown">
                                <a class="a-link-nav" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                    <img src="{{ asset('img/icon/arrow.svg') }}" alt="" />
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="a-link-nav" href="/blog-sejarah.html">Sejarah</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="a-link-nav" href="blog-visimisi.html">Visi dan Misi</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="a-link-nav" href="blog-strukturorganisasi.html">Struktur
                                            Organisasi</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="a-link-nav" href="pimpinan.html">Pimpinan dan Pegawai</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <a class="a-link-nav" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Tugas dan Fungsi
                                    <img src="{{ asset('img/icon/arrow.svg') }}" alt="" />
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="a-link-nav" href="#">Kepala Dinas</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="a-link-nav" href="#">Sekertariat</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="a-link-nav" href="#">Bidang Pengarusutamaan Gender dan Pemberdayaan
                                            Perempuan</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="a-link-nav" href="#">Bidang Tumbuh Kembang Anak</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="a-link-nav" href="#">Bidang Data dan Informasi Gender dan Anak</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="a-link-nav" href="#">Bidang Perlindungan Perempuan dan Anak</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="a-link-nav" href="#">UPTD P2TP2A</a>
                                    </li>

                                </ul>
                            </div>
                            <a href="/pelayanan.html" class="a-link-nav">Layanan</a>
                            <a href="/posts" class="a-link-nav">Berita</a>
                            <a href="/dokumen" class="a-link-nav">Dokumen</a>
                        </div>
                        <div class="nav-cta">
                            <a href="/login" class="button-primary">
                                <img src="{{ asset('img/icon/plus.svg') }}" class="mr-4" alt="" />
                            <div class="gap-r-xs"></div> Buat Pengaduan
                            </a>
                        </div>
                    </div>
                    <div class="nav-toggle d-lg-none d-block" id="toggleNav">
                        <img src="{{ asset('img/icon/toggle.svg') }}" alt="">
                    </div>
                </div>
            </nav>
            @yield('content')
            <footer class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
    
                        <div class="row">
                            <div class="col-1">
                                <img src="{{ asset('img/icon/map-pin.svg') }}" alt="">
                            </div>
    
                            <div class="col">
                                <p class="low-emp-100 text-pink" style="font-weight: 600;">
                                    Jl. Ade Irma Suryani Nasution No. 1254 Palembang
                                    Provinsi Sumatera Selatan Kode Pos 30129
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <img src="{{ asset('img/icon/phone.svg') }}" alt="">
                            </div>
    
                            <div class="col">
                                <p class="low-emp-100 text-pink" style="font-weight: 600;">
                                    (0711) 314004
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <img src="{{ asset('img/icon/mail.svg') }}" alt="">
                            </div>
    
                            <div class="col">
                                <p class="low-emp-100 text-pink" style="font-weight: 600;">
                                    dp3asumsel@gmail.com
                                </p>
                            </div>
                        </div>
    
                    </div>
                    <div class="col-lg-4 d-flex justify-content-end">
                        <div class="d-flex">
                            <a href="" style="text-decoration: none;"><img src="{{ asset('img/icon/fb.svg') }}" alt=""></a>
                            <div class="gap-r-xs"></div>
                            <a href="" style="text-decoration: none;"><img src="{{ asset('img/icon/ig.svg') }}" alt=""></a>
                            <div class="gap-r-xs"></div>
                            <a href="" style="text-decoration: none;"><img src="{{ asset('img/icon/twitter.svg') }}" alt=""></a>
                            <div class="gap-r-xs"></div>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col d-flex justify-content-center">
    
                        <p class="low-emp text-blue fw-bold text-center">
                            © DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK 2021
                        </p>
    
                    </div>
                </div>
            </footer>
    
    
            <img src="{{ asset('img/icon/up-arrow-with-scribble 1.svg') }}" class="d-lg-block d-none" alt=""
                style="position: absolute; top: 80%; left: 10%;">
            <img src="{{ asset('img/icon/paper-plane 1.svg') }}" alt="" class="d-lg-block d-none"
                style="position: absolute; top: 120%; right: 10%;">
            <!-- Optional JavaScript; choose one of the two! -->
            <script>
                document.getElementById("toggleNav").addEventListener("click", function () {
                    const navbar = document.getElementById("navbar");
                    navbar.classList.toggle("nav-active");
                })
    
                function toBottom() {
                    window.location.href = "#bottom"
                }
    
            </script>
            <!-- Option 1: Bootstrap Bundle with Popper
        <script src="{{ asset('bootstrap/bootstrap.js"></script> -->
    
            <!-- Option 2: Separate Popper and Bootstrap JS -->
    
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
                integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
            </script>
        </body>
    
    </html>