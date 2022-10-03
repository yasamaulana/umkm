@extends('adminuser.main')

@section('isi')
    <div class="main" id="main">
        <div class="pagetitle">
            <h1 class="text-white">Setting Akun</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-user">Home</a></li>
                    <li class="breadcrumb-item text-white">Setting Akun</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pengarutan Akun</h5>
                @if (session()->has('success'))
                    <div class="alert mt-1 alert-success text-center alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- General Form Elements -->
                <form action="{{ url('/setting-akun/' . auth()->user()->id) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="{{ auth()->user()->nama }}"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" value="{{ auth()->user()->alamat }}"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomor" value="{{ auth()->user()->nomor }}"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" required
                                value="{{ auth()->user()->email }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="bi bi-key-fill me-2"></i> Edit Password
                            </button>
                        </div>
                    </div>

                    <br>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i
                                    class="bi bi-save-fill me-2"></i>Simpan</button>
                        </div>
                    </div>

                </form><!-- End General Form Elements -->

                <!-- Start modal -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form action="{{ url('/setting-akun/sandi') }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    @if (session()->has('error'))
                                        <div class="alert alert-danger text-center alert-dismissible fade show"
                                            role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <label for="exampleInputpassword" class="form-label">Password Lama</label>
                                        <input type="password" class="form-control" id="exampleInputpassword"
                                            aria-describedby="emailHelp" required name="passwordlama">
                                        <div id="emailHelp" class="form-text">Masukan Password lama untuk memastikan bahwa
                                            ini Anda
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password Baru</label>
                                        <input type="password" name="password1" class="form-control" required
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Konfirmasi Password
                                            Baru</label>
                                        <input type="password" name="password2" required class="form-control"
                                            id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

            </div>
        </div>

    </div><!-- End Page Title -->
    @if (session()->has('error'))
        <script>
            $(function() {
                $('#exampleModal').modal('show');
            });
        </script>
    @endif
@endsection
