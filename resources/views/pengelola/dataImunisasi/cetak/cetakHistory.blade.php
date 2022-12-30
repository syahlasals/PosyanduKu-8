<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>

<body id="page-top" onload="window.print();">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <!--sidebar-->
    <!--End Sidebar-->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!--Topbar-->
                <!--End of Topbar-->
    <div class="container m-y-5"><br>

        <h2 class="text-center mt-5 mb-3"><b>LAPORAN HASIL KEGIATAN POSYANDU RW 05<br>DESA LAGADAR KECAMATAN MARGAASIH KABUPATEN BANDUNG</b></h2>
        <h6 class="text-center mb-5">Jl. Nanjung Kp. Mekar Bakti RT 02 RW 05 Desa Lagadar Kecamatan Margaasih Kabupaten Bandung</h6>
        <div class="card" style="background-color: black; height:5px;"></div><br><br>

        <h3 class="text-center"><b>Riwayat Imunisasi Anak</b></h3>
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
                <h5 class="text-center">Data An. {{$anak->nama_anak}}</h5>
                <hr>
                <div class="row">
                    <div class="col card text-center mx-2">
                        <h6 class="text-center my-3"><b>Riwayat Vaksin</b></h6>
                        <div class="row mb-3">
                            <div class="col">
                                <span><h6><u>Tanggal</u></h6>
                                    @foreach ($vaksins as $key => $vaksin)
                                        {{ $vaksin->tgl_vaksin }} <br>
                                    @endforeach
                                </span>
                            </div>
                            <div class="col">
                                <span><h6><u>Jenis Vaksin</u></h6>
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
                                <span><h6><u>Tanggal</u></h6>
                                    @foreach ($vitamins as $key => $vitamin)
                                    {{ $vitamin->tgl_vitamin }}    <br>
                                    @endforeach
                                </span>
                            </div>
                            <div class="col">
                                <span><h6><u>Jenis Vaksin</u></h6>
                                    @foreach ($vitamins as $key => $vitamin)
                                    {{ $vitamin->jenis_vitamin }}    <br>
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <table id="datahistory" class="table table-bordered text-center my-3">
                    <tbody>
                        <tr>
                            <td colspan="2"><b>Pertumbuhan Anak</b></td>
                        </tr>
                        @foreach ($pertumbuhans as $key => $ptm)
                        <tr style="background-color: white; color:black">
                            <td>{{ $ptm->tgl_hitung }}</td>
                            <td>Berat Badan : {{ $ptm->berat }}<br> Tinggi Badan : {{ $ptm->tinggi }}<br> Lingkar Kepala : {{ $ptm->lingkar_kepala }} <br></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <table id="datahistory" class="table table-bordered text-center my-3">
                    <tbody>
                        <tr>
                            <td colspan="2"><b>Status Penyimpangan</b></td>
                        </tr>
                        @foreach ($penyimpangans as $key => $simpang)
                        <tr style="background-color: white; color:black">
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
                {{-- <a href="{{ url('/pengelola/dataImunisasi') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a> --}}
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