<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <!--sidebar-->
       @include('template.sideentry')
    <!--End Sidebar-->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!--Topbar-->
                @include('template.nav')
                <!--End of Topbar-->

                <!-- Begin Page Content -->
                <div class="container-fluid"><br>
                    <h1 class="text-center"><b>Pendaftaran Anak</b></h1><br><br>
                    <div class="container d-flex justify-item-center justify-content-center"><br>
                        <div class="card card-form">
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
                            @if (Session::has('msg'))
                                <div class="alert alert-danger">{{ Session::get('msg') }}</div>
                            @endif
                            @if (Session::has('anak'))
                                <div class="alert alert-danger">{{ Session::get('anak') }}</div>
                            @endif
                            <form method="POST" action="/entry/pendaftaranAnak" id="myform" style="margin-top: 15px; margin-bottom: 15px;">
                                @csrf
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="no_kk"><b>Nomor Kartu Keluarga</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="number" name="no_kk" id="no_kk" class="form-control">
                                    </div>
                                </div>
                                        
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nik_anak"><b>NIK Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="number" name="nik_anak" id="nik_anak" class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nama_anak"><b>Nama Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nama_anak" id="nama_anak" class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="jenkel_anak"><b>Jenis Kelamin</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="jenkel_anak" id="lakilaki"
                                                value="L">
                                            <label for="lakilaki" class="form-check-label">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="jenkel_anak" id="perempuan"
                                                value="P">
                                            <label for="perempuan" class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="tgl_anak"><b>Tanggal Lahir</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="date" name="tgl_anak" id="tgl_anak" class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="tmp_anak"><b>Tempat Lahir</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="tmp_anak" id="tmp_anak" class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="golongan_darah"><b>Golongan Darah</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <select class="form-select" aria-label="Default select example" style="border-radius: 30px; width: 250px;" name="golongan_darah" id="golongan_darah">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col" colspan="3">
                                        <button class="btn btn-main" type="submit" style="margin-left: 260px;">Daftar</button>
                                        <a href="{{ url('entry') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
                </div>
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('template.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('template.modalLogout')

    <!--Script-->
    @include('template.script')
    <!-- End of Script-->

    @include('sweetalert::alert')

</body>

</html>