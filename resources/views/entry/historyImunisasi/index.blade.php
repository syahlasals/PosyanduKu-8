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
    <div class="container"><br>
        <h2 class="text-center" ><b>History Imunisasi</b></h2>
        <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        </div>
    </div>

    <div class="container">
        <div class="card my-5">
            <div class="card-body">
                <h5 class="text-center">{{$anak->nama_anak}}</h5>
                <hr>
                <div class="row">
                    <div class="col card text-center mx-2">
                        <h6 class="text-center my-3"><b>Riwayat Vaksin</b></h6>
                        <div class="row mb-3">
                            <div class="col">
                                <span><h6>Tanggal</h6>
                                    @foreach ($vaksins as $key => $vaksin)
                                        {{ $vaksin->tgl_vaksin }} <br>
                                    @endforeach
                                </span>
                            </div>
                            <div class="col">
                                <span><h6>jenis_vaksin</h6>
                                    @foreach ($vaksins as $key => $vaksin)
                                        {{ $vaksin->jenis_vaksin }} <br>
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col card text-center mx-2">
                        <h5 class="text-center my-3"><b>Riwayat Vitamin</b></h5>
                        <div class="row mb-3">
                            <div class="col">
                                <span><h6>Tanggal</h6>
                                    @foreach ($vitamins as $key => $vitamin)
                                    {{ $vitamin->tgl_vitamin }}    <br>                                
                                    @endforeach
                                </span>
                            </div>
                            <div class="col">
                                <span><h6>jenis_vaksin</h6>
                                    @foreach ($vitamins as $key => $vitamin)
                                    {{ $vitamin->jenis_vitamin }}    <br>                                
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <table id="datahistory" class="table table-striped table-bordered text-center my-3">
                    <tbody>
                        <tr>
                            <td colspan="2"><b>pertumbuhan</b></td>
                        </tr>
                        @foreach ($pertumbuhans as $key => $ptm)
                        <tr style="background-color: white;">
                            <td>{{ $ptm->tgl_hitung }}</td>
                            <td>bb : {{ $ptm->berat }}<br> tb : {{ $ptm->tinggi }}<br> lk : {{ $ptm->lingkar_kepala }} <br></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <table id="datahistory" class="table table-striped table-bordered text-center my-3">
                    <tbody>
                        <tr>
                            <td colspan="2"><b>Status Penyimpangan</b></td>
                        </tr>
                        @foreach ($penyimpangans as $key => $simpang)
                        <tr>
                            <td colspan="2">
                                {{ $simpang->tgl_hitung }}<br>            
                                {{ $simpang->status_penyimpangan }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col" colspan="3">
                {{-- <button class="btn btn-main" type="submit" style="margin-left: 260px;">Simpan</button> --}}
                <a href="{{ url('entry/InputImunisasi') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
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