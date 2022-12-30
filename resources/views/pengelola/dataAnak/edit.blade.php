<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <!--sidebar-->
       @include('template.sidepengelola')
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
                    <h1 class="text-center"><b>Perbaharui Data Anak</b></h1><br><br>
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
                            <form method="POST" action="/pengelola/dataAnak/{{ $anak->nik_anak }}" id="myform">
                                @csrf
                                @method('PUT')
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="no_kk"><b>Nomor Kartu Keluarga</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="integer" name="no_kk" id="no_kk" class="form-control" value="{{ $anak->no_kk }}" disabled>
                                        <input type="hidden" name="no_kk" id="no_kk" class="form-control" value="{{ $anak->no_kk }}">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nik_anak"><b>NIK Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8"> 
                                        <input type="text" name="nik_anak" id="nik_anak" class="form-control" value="{{ $anak->nik_anak }}" disabled>
                                        <input type="hidden" name="nik_anak" id="nik_anak" class="form-control" value="{{ $anak->nik_anak }}" >
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nama_anak"><b>Nama Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nama_anak" id="nama_anak" class="form-control" value="{{ $anak->nama_anak }}">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="tmp_anak"><b>Tempat Lahir Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="tmp_anak" id="tmp_anak" class="form-control" value="{{ $anak->tmp_anak }}">                        
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="tgl_anak"><b>Tempat Lahir Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="date" name="tgl_anak" id="tgl_anak" class="form-control" value="{{ $anak->tgl_anak }}">                        
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="jenkel_anak"><b>Jenis Kelamin Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="jenkel_anak" id="lakilaki" value="L"  {{ $anak->jenkel_anak == 'L' ? 'checked' : '' }}>
                                            <label for="lakilaki" class="form-check-label">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="jenkel_anak" id="perempuan" value="P"  {{ $anak->jenkel_anak == 'P' ? 'checked' : '' }}>
                                            <label for="perempuan" class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="golongan_darah"><b>Golongan Darah</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <select class="form-select" aria-label="Default select example" style="border-radius: 30px; width: 250px;" name="golongan_darah" id="golongan_darah">
                                            <option value="A" {{ $anak->golongan_darah == 'A' ? 'selected' : '' }}>A</option>
                                            <option value="B" {{ $anak->golongan_darah == 'B' ? 'selected' : '' }}>B</option>
                                            <option value="AB" {{ $anak->golongan_darah == 'AB' ? 'selected' : '' }}>AB</option>
                                            <option value="O" {{ $anak->golongan_darah == 'O' ? 'selected' : '' }}>O</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col" colspan="3">
                                    <button class="btn btn-main" type="submit" style="margin-left: 260px;">Simpan</button>
                                    <a href="{{ url('/pengelola/dataAnak') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div><br>
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

</body>

</html>