<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head>
    <body>  
        @include('template.nav0')
        {{-- @include('template.nav') --}}
        <div class="container">
            <div class="wrapper my-5">
                <div class="card greeting">
                    <div class="card-body text-center lg-h2 sm-h6 xm-h6 md-h6">
                        <h5><b>Selamat Datang, {{ Auth::user()->name }}</b></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#menu1">Profil</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="home" class="container-fluid tab-pane active"><br>
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#"><iconify-icon icon="bxs:id-card"></iconify-icon>
                                    <p>Data Anak</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#"><iconify-icon icon="fontisto:injection-syringe"></iconify-icon>
                                    <p>Riwayat Imunisasi</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#"><iconify-icon icon="fluent:history-24-filled"></iconify-icon>
                                    <p>Riwayat Penyakit</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#"><iconify-icon icon="ic:round-calculate"></iconify-icon>
                                    <p>IMT Anak</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <p>Ambil nomor antrian</p>
                                    <button type="button" class="btn btn-primary btn-sm">Klik untuk antrian</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Eveniet magni ipsam facilis numquam voluptatem accusamus 
                                    voluptatibus odit omnis dolore! Aliquid velit 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="container-fluid tab-pane fade"><br>         
                    <div class="card">
                        <div class="card-body">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Waduh!</strong>Kesalahan input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="/ortu" id="myform">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 d-flex mb-3 justify-content-center">
                                    <img src="{{ asset('template/img/picture_dasboard.svg') }}" alt="">
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Username</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Email</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>No. Telepon</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">Logout</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        @include('template.modalLogout')
        @include('template.script')
        @include('sweetalert::alert')
    </body>
</html>