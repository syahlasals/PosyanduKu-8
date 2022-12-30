<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>
<body id="page-top" onload="window.print();">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!--Topbar-->
                <!--End of Topbar-->

    <div class="container">
        <h2 class="text-center mt-5 mb-3"><b>LAPORAN HASIL KEGIATAN POSYANDU RW 05<br>DESA LAGADAR KECAMATAN MARGAASIH KABUPATEN BANDUNG</b></h2>
        <h6 class="text-center mb-5">Jl. Nanjung Kp. Mekar Bakti RT 02 RW 05 Desa Lagadar Kecamatan Margaasih Kabupaten Bandung</h6>

        <div class="card" style="background-color: black; height:5px;"></div><br><br>
        <div class="row justify-content-center">
            <div class="col">
                <h5 class="text-center">
                    Tanggal : {{ $tanggal }} <br><br>
                    Balita Terdaftar : {{ $semua }}
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 style="margin-left: 9%;">
                    Jumlah Balita Normal : {{ $normal }} <br>
                    Jumlah Balita Obesitas : {{ $obesitas }}
                </h5>
            </div>
            <div class="col">
                <h5 style="margin-left: 29%;">Jumlah Balita Gizi Buruk : {{ $giziBuruk }} <br>
                    Jumlah Balita Stunting : {{ $stunting }}
                </h5>
            </div>
        </div>

        <br><br>

        <table id="dataimunisasi" class="table table-bordered text-center" border="1">
        <thead>
            <tr>
                <th>Nomor</th>
                <!--<th>Nama Posyandu</th>-->
                <th>NIK Anak</th>
                <th>Nama Anak</th>
                <!--<th>Tanggal Imunisasi</th>-->
                <th>Vaksin</th>
                <th>Vitamin</th>
                <th>Status Pertumbuhan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anakList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <!--<td></td>-->
                <td>{{ $data->nik_anak }}</td>
                <td>{{ $data->nama_anak }}</td>
                {{-- <td>
                    @foreach ($data->vaksins as $item)
                    {{ $item->tgl_vaksin }}
                    @endforeach
                </td> --}}
                <td>
                    @foreach ($data->vaksins as $item)
                    {{ $item->jenis_vaksin }} <br>
                    @endforeach
                </td>
                <td>
                    @foreach ($data->vitamins as $item)
                    {{ $item->jenis_vitamin }} <br>
                    @endforeach
                </td>
                <td>@foreach ($data->tumbuhs as $item)
                    {{ $item->status_penyimpangan }} <br>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


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
</body>
<!-- <script> 
$(document).ready( function () {
    $('#dataimunisasi').DataTable();
} );
</script> -->
</html>