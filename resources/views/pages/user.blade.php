@extends('layouts.app-admin')

@section('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">


        
        <div class="hero-v1">
            <div class="container" style="display:none" id="message">
                <div class="alert alert-primary" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>{{ session()->get('message') }}</p>
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
                                <th>No Telpon</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Tempat Melakukan Vaksin</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $no => $us)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $us->user_nama }}</td>
                                <td>{{ $us->user_notelp }}</td>
                                <td>{{ $us->user_email }}</td>
                                <td>{{ $us->user_alamat }}</td>
                                <td>{{ $us->user_tempat_vaksin }}</td>
                                <td>{{ $us->user_status }}</td>
                                <th>
                                    <button class="btn btn-warning btn-sm" onclick="mEdit('{{ route('user.edit', $us->user_id) }}', '{{ $us->user_nama }}','{{ $us->user_notelp }}','{{ $us->user_email }}','{{ $us->user_alamat }}','{{ $us->user_tempat_vaksin }}','{{ $us->user_status }}',)">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="mHapus('{{ route('user.delete', $us->user_id) }}')"> Delete </button>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- modal edit -->
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formEdit" method="POST">
                    @csrf
                    @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control form-control @error('nama') {{ 'is-invalid' }} @enderror" name="nama" value="{{ old('nama') ?? '' }}" id="nama">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control form-control @error('email') {{ 'is-invalid' }} @enderror" name="email" value="{{ old('email') ?? '' }}" id="email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>No Telpon</label>
                        <input type="text" class="form-control form-control @error('no_telpon') {{ 'is-invalid' }} @enderror" name="no_telpon" value="{{ old('no_telpon') ?? '' }}" id="no_telpon">
                        @error('no_telpon')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" rows="2" class="form-control @error('alamat') {{ 'is-invalid' }} @enderror" >{{ old('alamat') ?? '' }}</textarea>
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tempat Vaksin</label>
                        <textarea name="tempat_vaksin" id="tempat_vaksin" rows="2" class="form-control @error('tempat_vaksin') {{ 'is-invalid' }} @enderror" >{{ old('tempat_vaksin') ?? '' }}</textarea>
                        @error('tempat_vaksin')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control @error('status') {{ 'is-invalid' }} @enderror">
                            <option value="show">Show</option>
                            <option value="hide">Hide</option>
                        </select>
                        @error('no_telpon')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
                </form>
                </div>
            </div>
        </div>

        <!-- modal hapus -->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST" id="formDelete">
                        <div class="modal-body">
                            @csrf
                            @method('delete')
                            Yakin Hapus Data ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info btn-sm">Delete</button>
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
                    $('#ModalEdit').modal('show');
                @endif
            });
        </script>
        
        <script>
            // untuk hapus data
            function mHapus(url) {
                $('#ModalHapus').modal()
                $('#formDelete').attr('action', url);
            }
            // ustk edit
            function mEdit(url,nama,notelp,email,alamat,tempat_vaksin) {  
                $('#ModalEdit').modal()
                $('#formEdit').attr('action', url);
                $('#nama').val(nama)
                $('#no_telpon').val(notelp)
                $('#email').val(email)
                $('#alamat').val(alamat)
                $('#tempat_vaksin').val(tempat_vaksin)

            }

        </script>

        @if (session()->has('message'))
        <script>
            $('#message').show();
            setInterval(function(){ $('#message').hide(); }, 5000);
        </script>
        @endif
@endsection