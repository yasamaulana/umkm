@extends('head')

@section('isi')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-m-4 col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-4">
                    <div class="card-body p-0">
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                <div class="p-3">
                                    <div class="text-center">
                                        <h3 class="h3" style="font-weight:bold;">Daftar Akun UMKM</h3>
                                        <h3 class="h6 mb-4">Lengkapi semua form dibawah ini</h3>
                                    </div>
                                    @if (session()->has('success'))
                                        <div class="alert mt-1 alert-success text-center alert-dismissible fade show"
                                            role="alert">
                                            <i class="fa-solid fa-circle-check text-success"></i>
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if (session()->has('eror'))
                                        <div class="alert alert-danger text-center alert-dismissible fade show"
                                            role="alert">
                                            {{ session('eror') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <form action="{{ url('/daftar') }}" method="post">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="nama"><i
                                                        class="fa-regular fa-user"></i></span>
                                                <input type="text"
                                                    class="form-control @error('nama') is-invalid @enderror" id="nama"
                                                    value="{{ old('nama') }}" name="nama"
                                                    aria-describedby="inputGroupPrepend" placeholder="Nama Lengkap">
                                            </div>
                                            @error('nama')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="alamat"><i
                                                        class="fa-solid fa-location-dot"></i></span>
                                                <input type="text"
                                                    class="form-control @error('alamat') is-invalid @enderror"
                                                    id="alamat" value="{{ old('alamat') }}" name="alamat"
                                                    aria-describedby="inputGroupPrepend" placeholder="Alamat">
                                            </div>
                                            @error('alamat')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <input type="hidden" name="status" value="user">
                                        <input type="hidden" name="produk" value="produk">
                                        <input type="hidden" name="slide" value="slide">
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="nomor"><i
                                                        class="fa-solid fa-phone"></i></span>
                                                <input type="text"
                                                    class="form-control @error('nomor') is-invalid @enderror" id="nomor"
                                                    value="{{ old('nomor') }}" name="nomor"
                                                    aria-describedby="inputGroupPrepend" placeholder="Nomor Telepon">
                                            </div>
                                            @error('nomor')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="username"><i
                                                        class="fa-regular fa-user"></i></span>
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror" id="username"
                                                    value="{{ old('email') }}" name="email"
                                                    aria-describedby="inputGroupPrepend" placeholder="Username">
                                            </div>
                                            @error('email')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="password"><i
                                                        class="fa-solid fa-key"></i></span>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid
                                            @enderror"
                                                    id="password" name="password" aria-describedby="inputGroupPrepend"
                                                    placeholder="Password">
                                            </div>
                                            @error('password')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="d-grid gap-2 mb-5">
                                            <button class="btn btn-primary" name="masuk" type="submit">Daftar</button>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p>Sudah punya akun? Masuk <a href="/login">disini</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="footer-bottom bg-white mt-2 shadow">
        <div class="text-center">
            Made By Polibang Creative Studio
        </div>
    </div>
@endsection
