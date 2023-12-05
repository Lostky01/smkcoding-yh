{{-- BY RIFKY NO TEMPLATE TEMPLATE CLUB MASA NGAKU FULLSTACK TAPI BIKIN UI PAKE TEMPLATE --}}
@extends('layouts/layout-v2_2')
@section('css-after')
@endsection
@section('konten')
    <section class="atas" style="padding-top:2%;padding-left:10%;padding-right:10%;padding-bottom:10%">
        <div class="row">
            <div class="col-lg-6" style="padding-top:10%">
                <h1 style="color:#000;font-size:65px; font-weight:800;font-family: 'DM Sans', sans-serif !important;">
                    Bergabunglah</h1>
                <h1 style="color:#000;font-size:65px; font-weight:800;font-family: 'DM Sans', sans-serif !important;">Dengan
                    jutaan</h1>
                <h1 style="color:#000;font-size:65px; font-weight:800;font-family: 'DM Sans', sans-serif !important;">orang
                    dan</h1>
                <h1 style="color:#000;font-size:65px; font-weight:800;font-family: 'DM Sans', sans-serif !important;">Belajar
                    hal baru</h1>
                <p style="color:#747474;font-size:25px;">Mengubah Kehidupan Bisnis Dan Bangsa Melalui <br> Transformasi
                    talenta di bidang teknologi digital</p>
                <a class="btn btn-primary" href=""
                    style="width:25vh;background-color:#2d17f5;border-radius:2px !important;">Mulai belajar <img
                        src="{{ asset('assets/icon-arrowlong-right.svg') }}" style="margin-left:30%" alt=""></a>
            </div>
            <div class="col-lg-6" style="padding-left:10%">
                <img src="{{ asset('assets/shape-diagram.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="kedua" style="padding-left:10%;padding-right:10%; background-color:#ffc800">
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-4 d-flex justify-content-end">
                        <center><img src="{{ asset('assets/icon-online-education.svg') }}" alt=""></center>
                    </div>
                    <div class="col-8">
                        <p style="color:#000;font-size:20px;font-weight:500">Membangun karir</p>
                        <p style="color:#000;font-size:15px;">Semua Yang Butuh Kerja</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-4 d-flex justify-content-end">
                        <center><img src="{{ asset('assets/icon-globe-handphone.svg') }}" alt=""></center>
                    </div>
                    <div class="col-8">
                        <p style="color:#000;font-size:20px;font-weight:500">Cari Materi Belajar</p>
                        <p style="color:#000;font-size:15px;">Seberapa pengetahuan kamu</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-4 d-flex justify-content-end">
                        <center><img src="{{ asset('assets/icon-online-education-laptop.svg') }}" alt=""></center>
                    </div>
                    <div class="col-8">
                        <p style="color:#000;font-size:20px;font-weight:500">Kuasai Skill baru</p>
                        <p style="color:#000;font-size:15px;">Fokus apa yang dibutuhkan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ketiga" style="padding-left:10%;padding-right:10%;padding-top:5%;padding-bottom:5%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <p style="color:#000;font-size:30px;font-weight:800;">Pembelajaran populer</p>
                </div>
                <div class="col-8">
                    <ul class="nav justify-content-end">
                        <li class="nav-item" style="background-color: #d0d0d0">
                            <a style="color:#000;font-size:15px" class="nav-link active" href="#">Javascript</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:#000;font-size:15px" class="nav-link disabled" href="#">Python</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:#000;font-size:15px" class="nav-link disabled" href="#">Web
                                Development</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:#000;font-size:15px" class="nav-link disabled" href="#">Art&Design</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:#000;font-size:15px" class="nav-link disabled" href="#">Business</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5 d-flex justify-content-center">
                <div class="col-3">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/course-1.png') }}">
                            <div class="card-body">
                                <p style="color:#8306ff;font-size:15px;font-weight:500">Allen Mask</p>
                                <p style="color:#000;font-size:20px;font-weight:800">Why Learn Intermediate <br> SQL For
                                    Marketers?
                                </p>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-hamburger.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p style="color:grey;font-size:15px;">Beginner</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-copy.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p
                                                    style="color:grey;font-size:15px;line-height:normal;margin-bottom:0 !important">
                                                    3 Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/course-2.png') }}">
                            <div class="card-body">
                                <p style="color:#8306ff;font-size:15px;font-weight:500">Allen Mask</p>
                                <p style="color:#000;font-size:20px;font-weight:800">Why Learn Intermediate <br> SQL For
                                    Marketers?
                                </p>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-hamburger.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p style="color:grey;font-size:15px;">Beginner</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-copy.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p
                                                    style="color:grey;font-size:15px;line-height:normal;margin-bottom:0 !important">
                                                    3 Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/course-3.png') }}">
                            <div class="card-body">
                                <p style="color:#8306ff;font-size:15px;font-weight:500">Allen Mask</p>
                                <p style="color:#000;font-size:20px;font-weight:800">Why Learn Intermediate <br> SQL For
                                    Marketers?
                                </p>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-hamburger.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p style="color:grey;font-size:15px;">Beginner</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-copy.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p
                                                    style="color:grey;font-size:15px;line-height:normal;margin-bottom:0 !important">
                                                    3 Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/course-4.png') }}">
                            <div class="card-body">
                                <p style="color:#8306ff;font-size:15px;font-weight:500">Allen Mask</p>
                                <p style="color:#000;font-size:20px;font-weight:800">Why Learn Intermediate <br> SQL For
                                    Marketers?
                                </p>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-hamburger.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p style="color:grey;font-size:15px;">Beginner</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-copy.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p
                                                    style="color:grey;font-size:15px;line-height:normal;margin-bottom:0 !important">
                                                    3 Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3 mt-5">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/course-5.png') }}">
                            <div class="card-body">
                                <p style="color:#8306ff;font-size:15px;font-weight:500">Allen Mask</p>
                                <p style="color:#000;font-size:20px;font-weight:800">Why Learn Intermediate <br> SQL For
                                    Marketers?
                                </p>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-hamburger.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p style="color:grey;font-size:15px;">Beginner</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-copy.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p
                                                    style="color:grey;font-size:15px;line-height:normal;margin-bottom:0 !important">
                                                    3 Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3 mt-5">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/course-6.png') }}">
                            <div class="card-body">
                                <p style="color:#8306ff;font-size:15px;font-weight:500">Allen Mask</p>
                                <p style="color:#000;font-size:20px;font-weight:800">Why Learn Intermediate <br> SQL For
                                    Marketers?
                                </p>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-hamburger.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p style="color:grey;font-size:15px;">Beginner</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-copy.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p
                                                    style="color:grey;font-size:15px;line-height:normal;margin-bottom:0 !important">
                                                    3 Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3 mt-5">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/course-7.png') }}">
                            <div class="card-body">
                                <p style="color:#8306ff;font-size:15px;font-weight:500">Allen Mask</p>
                                <p style="color:#000;font-size:20px;font-weight:800">Why Learn Intermediate <br> SQL For
                                    Marketers?
                                </p>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-hamburger.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p style="color:grey;font-size:15px;">Beginner</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-copy.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p
                                                    style="color:grey;font-size:15px;line-height:normal;margin-bottom:0 !important">
                                                    3 Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3 mt-5">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/course-8.png') }}">
                            <div class="card-body">
                                <p style="color:#8306ff;font-size:15px;font-weight:500">Allen Mask</p>
                                <p style="color:#000;font-size:20px;font-weight:800">Why Learn Intermediate <br> SQL For
                                    Marketers?
                                </p>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-hamburger.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p style="color:grey;font-size:15px;">Beginner</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4 justify-content-end" style="padding-right:0 !important">
                                                <img src="{{ asset('assets/icon-copy.svg') }}" alt="">
                                            </div>
                                            <div class="col-8 d-flex justify-content-start"
                                                style="padding-left:0 !important">
                                                <p
                                                    style="color:grey;font-size:15px;line-height:normal;margin-bottom:0 !important">
                                                    3 Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="gatau keberapa"
        style="padding-top:5%;padding-bottom:5%; padding-left:5%;padding-right:5%;background-color:#FFF0E5">
        <div class="row justify-content-center">
            <div class="col-2">
                <img src="{{ asset('assets/membership-image.png') }}" alt="">
            </div>
            <div class="col-6 d-flex-justify-content-center" style="padding-top:5%;padding-left:10%">
                <h1 style="color:#000;font-size:40px;font-weight:bold;font-family: 'DM Sans', sans-serif !important;">
                    DAPATKAN membership pro <br> GRATIS untuk kelas kamu
                </h1>
            </div>
            <div class="col-2" style="padding-top:5%">
                <a class="btn btn-primary" href=""
                    style="width:25vh;height:50px;background-color:#6117f5;border-radius:5px !important;padding:5%">Lihat
                    Semua Kelas</a>
            </div>
        </div>
    </section>
    <section class="gatau juga keberapa" style="padding-top:5%;padding-left:15%;padding-right:15%;background: #F9F9FB;">
        <center>
            <h2 style="font-weight:bold;font-size:40px;color:#000;font-family: 'DM Sans', sans-serif !important;">Kategori
                populer</h2>
        </center>
        <div class="container-fluid" style="margin-top:10%">
            <div class="row">
                <div class="col-3">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-end">
                            <img src="{{ asset('assets/icon-chemical.svg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <p style="color:#000;font-size:20px;font-weight:bold;line-height:normal">Kimia</p>
                            <p style="color:grey;font-size:12px;">2 Kelas</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-end">
                            <img src="{{ asset('assets/icon-calendar.svg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <p style="color:#000;font-size:20px;font-weight:bold;line-height:normal">Management</p>
                            <p style="color:grey;font-size:12px;">2 Kelas</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-end">
                            <img src="{{ asset('assets/icon-pencil-ruler.svg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <p style="color:#000;font-size:20px;font-weight:bold;line-height:normal">Seni Budaya</p>
                            <p style="color:grey;font-size:12px;">2 Kelas</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-end">
                            <img src="{{ asset('assets/icon-briefcase.svg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <p style="color:#000;font-size:20px;font-weight:bold;line-height:normal">Bisnis</p>
                            <p style="color:grey;font-size:12px;">2 Kelas</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-5">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-end">
                            <img src="{{ asset('assets/icon-science.svg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <p style="color:#000;font-size:20px;font-weight:bold;line-height:normal">Astrologi</p>
                            <p style="color:grey;font-size:12px;">2 Kelas</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-5">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-end">
                            <img src="{{ asset('assets/icon-rocket.png') }}" alt="">
                        </div>
                        <div class="col-6">
                            <p style="color:#000;font-size:20px;font-weight:bold;line-height:normal">SEO</p>
                            <p style="color:grey;font-size:12px;">2 Kelas</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-5">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-end">
                            <img src="{{ asset('assets/icon-space.svg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <p style="color:#000;font-size:20px;font-weight:bold;line-height:normal">Kosmologi</p>
                            <p style="color:grey;font-size:12px;">2 Kelas</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-5">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-end">
                            <img src="{{ asset('assets/icon-microscope.svg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <p style="color:#000;font-size:20px;font-weight:bold;line-height:normal">Kimia</p>
                            <p style="color:grey;font-size:12px;">2 Kelas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12" style="margin-top:10%">
                <center><a href="" style="color:#6117f5;font-size:15px">Explore All Courses</a><img
                        src="{{ asset('assets/icon-double-next.svg') }}" alt=""></center>
            </div>
        </div>
    </section>
    <section class="udah banyak kayaknya" style="padding:15%">
        <div class="container-fluid" style="background-color: #F0F3FF;padding:10%">
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('assets/business-image.png') }}" alt="">
                </div>
                <div class="col-6">
                    <h1 style="color:#000;font-size:50px;font-weight:bold;font-family: 'DM Sans', sans-serif !important;">
                        Tingkatkan skill tim <br> Anda.</h1>
                    <p style="color:grey;font-size:15px">Berikan Tim Anda Pengetahuan,pengalaman, dan keyakinan <br> yang
                        mereka butuhkan untuk mengatasi setiap masalah <br> kami ingin menciptakan dunia di mana siapa pun
                        dapat <br> membangun sesuatu yang bermakna</p>
                    <a class="btn btn-primary" href=""
                        style="width:25vh;height:50px;background-color:#6117f5;border-radius:5px !important;padding-bottom:10px;padding-top:10px">Try
                        For Business</a>
                </div>
            </div>
        </div>
    </section>
    <section class="TERAKHIR BOYYYYY">
        <div class="container-fluid" style="padding:10%">
            <center>
                <h1 style="color:#000;font-size:55px;font-weight:bold">Event Sedang Berlangsung Di Dekatmu</h1>
            </center>
            <div class="row mt-5 d-flex justify-content-center">
                <div class="col-4">
                    <img src="{{ asset('assets/event-1.png') }}" alt="">
                </div>
                <div class="col-4">
                    <img src="{{ asset('assets/event-2.png') }}" alt="">
                </div>
                <div class="col-4">
                    <img src="{{ asset('assets/event-3.png') }}" alt="">
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-2">
                            <p style="font-weight: 800; font-size: 30px; color: #6117f5; margin: 0;">21</p>
                            <p style="color: grey; font-size: 11px; margin: 0;">March</p>
                        </div>
                        <div class="col-10 d-flex-justify-content-start" style="padding-top:5%;padding-left:0 !important">
                            <p style="font-size:11px;color:grey"><img src="{{ asset('assets/icon-location.svg') }}"
                                    alt=""> North Caroline, United States</p>
                        </div>
                    </div>
                    <p style="color:#000;font-size:25px;font-weight:bold">Linear Regression In Python: <br> Introduction To Simple Linear</p>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-2">
                            <p style="font-weight: 800; font-size: 30px; color: #6117f5; margin: 0;">21</p>
                            <p style="color: grey; font-size: 11px; margin: 0;">March</p>
                        </div>
                        <div class="col-10 d-flex-justify-content-start" style="padding-top:5%;padding-left:0 !important">
                            <p style="font-size:11px;color:grey"><img src="{{ asset('assets/icon-location.svg') }}"
                                    alt=""> North Caroline, United States</p>
                        </div>
                    </div>
                    <p style="color:#000;font-size:25px;font-weight:bold">Linear Regression In Python: <br> Introduction To Simple Linear</p>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-2">
                            <p style="font-weight: 800; font-size: 30px; color: #6117f5; margin: 0;">21</p>
                            <p style="color: grey; font-size: 11px; margin: 0;">March</p>
                        </div>
                        <div class="col-10 d-flex-justify-content-start" style="padding-top:5%;padding-left:0 !important">
                            <p style="font-size:11px;color:grey"><img src="{{ asset('assets/icon-location.svg') }}"
                                    alt=""> North Caroline, United States</p>
                        </div>
                    </div>
                    <p style="color:#000;font-size:25px;font-weight:bold">Linear Regression In Python: <br> Introduction To Simple Linear</p>
                </div>
            </div>
        </div>
    </section>
@endsection
