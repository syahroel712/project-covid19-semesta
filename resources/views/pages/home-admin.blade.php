@extends('layouts.app-admin')

@section('content')
        <div class="hero-v1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mr-auto text-center text-lg-left">
                        <span class="d-block subheading">Covid-19 Awareness</span>
                        <h1 class="heading mb-3">Stay Safe. Stay Home.</h1>
                        <p class="mb-5">Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.</p>
                        <p class="mb-4"><a href="#" class="btn btn-primary" style="color: white !important;">How to prevent</a></p>
                    </div>
                    <div class="col-lg-6">
                        <figure class="illustration">
                            <img src="{{ asset('frontend/images/illustration.png') }}" alt="Image" class="img-fluid">
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


       
        <script>
            $(document).ready(function () {
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