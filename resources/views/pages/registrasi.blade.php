@extends('layouts.app')

@section('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">


        
        <div class="hero-v1">
            <div class="container" style="display:none" id="message">
                <div class="alert alert-primary" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>Registrasi kamu berhasil, data kamu akan diproses oleh admin.</p>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mr-auto text-center text-lg-left">
                        <span class="d-block subheading">Covid-19 Awareness</span>
                        <h1 class="heading mb-3">List Peserta Vaksinisasi Covid 19</h1>
                        <p class="mb-5">Berikut data peserta yang sudah melakukan registrasi</p>
                        <p class="mb-4"><button class="btn btn-primary" style="color: white !important;" onclick="showModal()">Register Now</button></p>
                    </div>
                    <div class="col-lg-6">
                        <figure class="illustration">
                            <img src="{{ asset('frontend/images/vaksin.png') }}" alt="Image" class="img-fluid"  style="margin-top: -90px !important;">
                        </figure>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <h2 class="section-heading mb-4 text-center">Data Peserta Vaksinisasi Covid 19</h2>
                <div class="row">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Tempat Melakukan Vaksin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $no => $us)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $us->user_nama }}</td>
                                <td>{{ $us->user_email }}</td>
                                <td>{{ $us->user_alamat }}</td>
                                <td>{{ $us->user_tempat_vaksin }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register Vaksin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('aksiregistrasi') }}" method="POST">
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control form-control @error('nama') {{ 'is-invalid' }} @enderror" name="nama" value="{{ old('nama') ?? '' }}">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control form-control @error('email') {{ 'is-invalid' }} @enderror" name="email" value="{{ old('email') ?? '' }}" name="email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Telpon</label>
                        <input type="text" class="form-control form-control @error('no_telpon') {{ 'is-invalid' }} @enderror" name="no_telpon" value="{{ old('no_telpon') ?? '' }}" name="no_telpon">
                        @error('no_telpon')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea name="alamat" id="" rows="2" class="form-control @error('alamat') {{ 'is-invalid' }} @enderror" >{{ old('alamat') ?? '' }}</textarea>
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Vaksin</label>
                        <textarea name="tempat_vaksin" id="" rows="2" class="form-control @error('tempat_vaksin') {{ 'is-invalid' }} @enderror" >{{ old('tempat_vaksin') ?? '' }}</textarea>
                        @error('tempat_vaksin')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Register</button>
                </div>
                </form>
                </div>
            </div>
        </div>


        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
                $(".dataTables_wrapper").css("width","100%");
                @if (count($errors) > 0)
                    $('#modalRegister').modal('show');
                @endif

            });

            function showModal() { 
                $('#modalRegister').modal();
            }

        </script>

        @if (session()->has('message'))
        <script>
            $('#message').show();
            setInterval(function(){ $('#message').hide(); }, 5000);
        </script>
        @endif
@endsection