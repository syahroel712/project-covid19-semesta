@extends('layouts.app')

@section('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

        <div class="hero-v1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mr-auto text-center text-lg-left">
                        <span class="d-block subheading">Covid-19 Awareness</span>
                        <h1 class="heading mb-3">Statistik Terupdate Perkembangan Covid 19</h1>
                        <p class="mb-5">Lekas membaik Indonesiaku</p>
                        <p class="mb-4"><a href="#" class="btn btn-primary" style="color: white !important;">How to prevent</a></p>
                    </div>
                    <div class="col-lg-6">
                        <figure class="illustration">
                            <img src="{{ asset('frontend/images/statistik.png') }}" alt="Image" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>

        <div class="site-section stats">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-7 text-center mx-auto">
                        <h2 class="section-heading">Statistik Covid 19 di Indonesia</h2>
                        <p id="last_update"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="data">
                            <span class="icon text-primary">
                                <span class="flaticon-virus"></span>
                            </span>
                            <strong class="d-block number"><span id="kasus_positif"></span></strong>
                            <span class="label">Positif</span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="data">
                            <span class="icon text-primary">
                                <span class="flaticon-virus"></span>
                            </span>
                            <strong class="d-block number"><span id="kasus_sembuh"></span></strong>
                            <span class="label">Sembuh</span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="data">
                            <span class="icon text-primary">
                                <span class="flaticon-virus"></span>
                            </span>
                            <strong class="d-block number"><span id="kasus_rawat"></span></strong>
                            <span class="label">Dirawat</span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="data">
                            <span class="icon text-primary">
                                <span class="flaticon-virus"></span>
                            </span>
                            <strong class="d-block number"><span id="kasus_meninggal"></span></strong>
                            <span class="label">Meninggal</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <h2 class="section-heading mb-4 text-center">Data Terupdate Covid 19 Per Provinsi</h2>
                <div class="row">
                    <table id="example" class="table table-bordered" style="width:100%; margin-left: auto; margin-right: auto;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Provinsi</th>
                                <th>Kasus Positif</th>
                                <th>Total Sembuh</th>
                                <th>Total Dirawat</th>
                                <th>Total Meninggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datacovid as $no => $pro)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $pro['provinsi'] }}</td>
                                <td>{{ number_format($pro['kasus']) }}</td>
                                <td>{{ number_format($pro['sembuh']) }}</td>
                                <td>{{ number_format($pro['dirawat']) }}</td>
                                <td>{{ number_format($pro['meninggal']) }}</td>
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
                
                $.ajax({
                    url: "https://apicovid19indonesia-v2.vercel.app/api/indonesia",
                    dataType: "json",
                    contentType: "application/javascript;charset=utf-8",
                    success: function(response) {
                        $('#last_update').text("Last Update "  + new Date(response.lastUpdate).toLocaleString());
                        $('#kasus_positif').text(new Intl.NumberFormat().format(response.positif));
                        $('#kasus_rawat').text(new Intl.NumberFormat().format(response.dirawat));
                        $('#kasus_sembuh').text(new Intl.NumberFormat().format(response.sembuh));
                        $('#kasus_meninggal').text(new Intl.NumberFormat().format(response.meninggal));
                    }
                });
            });
        </script>

@endsection