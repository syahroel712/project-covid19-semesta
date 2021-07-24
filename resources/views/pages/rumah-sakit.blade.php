@extends('layouts.app')

@section('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

        <div class="hero-v1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mr-auto text-center text-lg-left">
                        <span class="d-block subheading">Covid-19 Awareness</span>
                        <h1 class="heading mb-3">List Rumah Sakit Rujukan Covid 19</h1>
                        <p class="mb-5">Berikut data rumah sakit rujukan yang bisa jadi patokan anda</p>
                        <p class="mb-4"><a href="#" class="btn btn-primary" style="color: white !important;">How to prevent</a></p>
                    </div>
                    <div class="col-lg-6">
                        <figure class="illustration">
                            <img src="{{ asset('frontend/images/hospital-2.png') }}" alt="Image" style="margin-top: -90px !important;" class="img-fluid" >
                        </figure>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <h2 class="section-heading mb-4 text-center">Data Rumah Sakit Rujukan Covid 19</h2>
                <div class="row">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Telpon</th>
                                <th>Alamat</th>
                                <th>Kota/Kabupaten</th>
                                <th>Provinsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rumahsakit as $no => $rs)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $rs['name'] }}</td>
                                <td>{{ $rs['address'] }}</td>
                                <td>{{ $rs['phone'] }}</td>
                                <td>{{ $rs['region'] }}</td>
                                <td>{{ $rs['province'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
                $(".dataTables_wrapper").css("width","100%");
            } );
        </script>

@endsection