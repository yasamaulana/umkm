@extends('adminweb.mainweb')

@section('isi')
    <div class="main" id="main">
        <div class="pagetitle">
            <h1 class="text-white">Data Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-web">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/data-umkm">Data UMKM</a></li>
                    <li class="breadcrumb-item text-white">Edt Data Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card">
            <h5 class="card-header fw-bold text-center">Data Profil UMKM</h5>
            <div class="container">
                <form class="m-3" method="POST" action="{{ url('/data-umkm/' . $model->id) }}"
                    enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="mb-3">
                        <label for="namausaha" class="form-label">Nama Usaha</label>
                        <input type="text" class="form-control" id="namausaha" name="nama_usaha"
                            value="{{ $model->nama_usaha }}">
                    </div>
                    <div class="mb-3">
                        <label for="nomor" class="form-label">No Whatsapp</label>
                        <input type="text" class="form-control" name="wa" id="wa"
                            value="{{ $model->wa }}">
                    </div>
                    <div class="mb-3">
                        <label for="ig" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="ig" name="ig"
                            value="{{ $model->ig }}">
                    </div>
                    <div class="mb-3">
                        <label for="wa" class="form-label">Facebook</label>
                        <input type="text" class="form-control" name="fb" id="wa"
                            value="{{ $model->fb }}">
                    </div>
                    <div class="mb-3">
                        <label for="desikripsi" class="form-label">Tiktok</label>
                        <input type="text" class="form-control" name="tiktok" id="desikripsi"
                            value="{{ $model->tiktok }}">
                    </div>
                    <div class="mb-3">
                        <label for="desikripsi" class="form-label">Shopee</label>
                        <input type="text" class="form-control" name="shopee" id="desikripsi"
                            value="{{ $model->shopee }}">
                    </div>
                    <div class="mb-3">
                        <label for="desikripsi" class="form-label">Tokopedia</label>
                        <input type="text" class="form-control" name="tokped" id="desikripsi"
                            value="{{ $model->tokped }}">
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
