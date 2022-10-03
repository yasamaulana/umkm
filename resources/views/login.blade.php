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
                                        <h3 class="h3" style="font-weight:bold;">Login Akun UMKM</h3>
                                        <h3 class="h6 mb-2">Masukkan Email dan Password</h3>
                                    </div>
                                    @if (session()->has('eror'))
                                        <div class="alert alert-danger text-center alert-dismissible fade show"
                                            role="alert">
                                            {{ session('eror') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if (session()->has('success'))
                                        <div class="alert alert-success text-center alert-dismissible fade show"
                                            role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="username"><i
                                                        class="fa-regular fa-user"></i></span>
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror" id="username"
                                                    value="{{ old('email') }}" name="email"
                                                    aria-describedby="inputGroupPrepend" required placeholder="Username">
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
                                                <input type="password" class="form-control" id="password" name="password"
                                                    aria-describedby="inputGroupPrepend" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="d-grid gap-2 mb-5">
                                            <button class="btn btn-primary" name="masuk" type="submit">Log In</button>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p>Belum punya akun? Daftar <a href="/daftar">disini</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="footer-bottom bg-white fixed-bottom mt-2 shadow">
        <div class="text-center m-2">
            Made By Polibang Creative Studio
        </div>
    </div>
@endsection
