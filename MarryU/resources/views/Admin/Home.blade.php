@extends('masteradmin')
@section('home')
active
@endsection
@section('konten')
<!-- konten -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="description">Bookings</h3>

        <div class="container mt-5 mb-5 p-5" style="background-color:white">
            <table class="table table-striped">

                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Tanggal</th>
                    <th>Durasi</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Foto Produk</th>
                    <th>Aksi</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Tiara Dwi Syaputri</td>
                    <td>2021/12/12</td>
                    <td>1 jam</td>
                    <td>Dress</td>
                    <td>Rp.70000</td>
                    <td><img style="height:80px;width:auto;" src="{{asset('Template/images/p7.png')}}"></td>
                    <td>
                        <form action="" method="post"><button type="submit" name="hapus" value="" class="btn btn-danger">Hapus</button></form>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>Total</b></td>
                    <td>Rp.70000</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>



@endsection


