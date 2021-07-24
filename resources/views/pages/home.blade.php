@extends('layouts.app')

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


        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <figure class="img-play-vid">
                            <img src="{{ asset('frontend/images/hero_3.jpg') }}" alt="Image" class="img-fluid">
                            <div class="absolute-block d-flex">
                                <span class="text">Watch the Video</span>
                                <a href="https://www.youtube.com/watch?v=9pVy8sRC440" data-fancybox class="btn-play">
                                    <span class="icon-play"></span>
                                </a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <h2 class="mb-4 section-heading">Apa itu Corona Virus?</h2>
                        <p>Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.</p>
                        <p>Gejala umum:</p>
                        <ul class="list-check list-unstyled mb-5">
                            <li>Demam (suhu tubuh di atas 38 derajat Celsius)</li>
                            <li>Batuk kering</li>
                            <li>Sesak napas</li>
                        </ul>
                        <!-- <p><a href="#" class="btn btn-primary">Learn more</a></p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-primary-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-6 col-lg-6 mt-lg-5">
                                <div class="media-v1 bg-1">
                                    <div class="icon-wrap">
                                        <span class="flaticon-stay-at-home"></span>
                                    </div>
                                    <div class="body">
                                        <h3>Dirumah Saja</h3>
                                        <p>Kapan lagi menyelamatkan dunia dengan cara di rumah saja.</p>
                                    </div>
                                </div>

                                <div class="media-v1 bg-1">
                                    <div class="icon-wrap">
                                        <span class="flaticon-patient"></span>
                                    </div>
                                    <div class="body">
                                        <h3>Gunakan Masker</h3>
                                        <p>Jika harus keluar rumah, jangan lupa gunakan masker. Masker akan membuat kamu lebih tampil ok.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6">
                                <div class="media-v1 bg-1">
                                    <div class="icon-wrap">
                                        <span class="flaticon-social-distancing"></span>
                                    </div>
                                    <div class="body">
                                        <h3>Tetap Jaga Jarak</h3>
                                        <p>Kamu harus jaga jarak agar kesempatan kamu menyelamatkan dunia lebih tinggi.</p>
                                    </div>
                                </div>

                                <div class="media-v1 bg-1">
                                    <div class="icon-wrap">
                                        <span class="flaticon-hand-washing"></span>
                                    </div>
                                    <div class="body">
                                        <h3>Cuci Tangan</h3>
                                        <p>Jangan lupa ketika selesai melakukan aktifitas cuci tanganmu terlebih dahulu.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <h2 class="section-heading mb-4">Bagaimana Cara Mencegah Penyebaran Covid 19?</h2>
                        <p>Selain dengan cara di sampsing, kamu juga bisa melakukan hal berikut ini:</p>
                        <ul class="list-check list-unstyled mb-5">
                            <li>Cukup Istirahat </li>
                            <li>Konsumsi Makanan Sehat dan Cukup Minum Air</li>
                            <li>Menjaga Kebersihan</li>
                            <li>Stok Kebutuhan Obat dan Makanan </li>
                            <li>Tetap Tenang </li>
                            <li>Berolahraga </li>
                            <li>Pakai Barang Pribadi </li>
                            <li>Konsumsi Suplemen </li>
                        </ul>
                        <p><a href="#" class="btn btn-primary">Read more about prevention</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-7 mx-auto text-center">
                        <span class="subheading">Apa yang kamu butuhkan</span>
                        <h2 class="mb-4 section-heading">Untuk Melindungi Dirimu</h2>
                        <p>Lakukan hal berikut ini</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="row mt-5 pt-5">
                            <div class="col-lg-6 do ">
                                <h3>Apa Yang Harus Dilakukan</h3>
                                <ul class="list-unstyled check">
                                    <li>Dirumah saja</li>
                                    <li>Memakai masker</li>
                                    <li>Menggunakan sanitizer</li>
                                    <li>Melakukan disinfektan pada rumahmu</li>
                                    <li>Cuci tangan</li>
                                    <li>Sering mengisolasi diri</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 dont ">
                                <h3>Apa Yang Harus Dihindari</h3>
                                <ul class="list-unstyled cross">
                                    <li>Hindari Orang yang Terinfeksi</li>
                                    <li>Hindari hewan</li>
                                    <li>Hindari berjabat tangan</li>
                                    <li>Jangan sentuh wajahmu</li>
                                    <li>Jangan mudah panik</li>
                                    <li>Hindari memakai barang secara bersama</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('frontend/images/protect.png') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-primary-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-7 mx-auto text-center">
                        <h2 class="mb-4 section-heading">Gejala Covid 19</h2>
                        <p>berikut gejala dari covid 19: </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="symptom d-flex">
                            <div class="img">
                                <img src="{{ asset('frontend/images/symptom_high-fever.png') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <h3>Demam Tinggi</h3>
                                <p> Demam adalah salah satu gejala awal Covid-19. Jika demam yang Anda alami tak kunjung turun dari hari pertama Anda merasakannya, jangan tunda waktu lagi untuk segera konsultasi dengan dokter. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="symptom d-flex">
                            <div class="img">
                                <img src="{{ asset('frontend/images/symptom_cough.png') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <h3>Bersin</h3>
                                <p> Tahukah Anda bahwa bersin juga bisa jadi salah satu gejala Virus Corona? gejala tersebut lebih banyak dialami oleh mereka yang sudah divaksin daripada pasien Covid-19 yang belum mendapat vaksin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="symptom d-flex">
                            <div class="img">
                                <img src="{{ asset('frontend/images/symptom_sore-troath.png') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <h3>Sakit Tenggorokan</h3>
                                <p> Jika Anda mengalami sakit tenggorokan, jangan ragu untuk menghubungi tenaga kesehatan. Apalagi jika Anda baru saja melakukan kontak dekat dengan pasien Covid-19 atau baru saja mengunjungi lokasi dengan risiko penularan tinggi. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="symptom d-flex">
                            <div class="img">
                                <img src="{{ asset('frontend/images/symptom_headache.png') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <h3>Sakit Kepala</h3>
                                <p> Para peneliti mengamati gejala Virus Corona yang dialami oleh penerima vaksin, baik dosis pertama atau dosis kedua, dan mereka yang belum menerima vaksin. Hasilnya, sakit kepala jadi salah satu gejala yang dialami oleh ketiga kelompok tersebut. </p>
                            </div>
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