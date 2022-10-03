@extends('adminweb.mainweb')

@section('isi')
    <div class="main" id="main">
        <div class="pagetitle">
            <h1 class="text-white">Data Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-web">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/data-profile">Data Profile</a></li>
                    <li class="breadcrumb-item text-white">Edt Data Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card">
            <h5 class="card-header fw-bold text-center">Data Profil UMKM</h5>
            <div class="container">
                <form class="m-3" method="POST" action="{{ url('/data-profile/' . $model->id) }}"
                    enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kategori</label>
                        <select name="kategori" class="form-control">
                            <option value="Keripik">Keripik</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="namausaha" class="form-label">Nama Usaha</label>
                        <input type="text" class="form-control" id="namausaha" name="nama_usaha"
                            value="{{ $model->nama_usaha }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik"
                            value="{{ $model->nama_pemilik }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            value="{{ $model->alamat }}">
                    </div>
                    <div class="mb-3">
                        <label for="wa" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" name="wa" id="wa"
                            value="{{ $model->wa }}">
                    </div>
                    <div class="mb-3">
                        <label for="desikripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" id="desikripsi"
                            value="{{ $model->deskripsi }}">
                    </div>

                    <div class="mb-3">
                        <label for="gambar1" class="form-label">Slide 1</label><br>
                        <img src="{{ url('storage/gambar/' . $model->gambar1) }}" width="300" alt=""
                            class="img-preview1">
                        <input type="file" class="form-control mb-3" id="gambar1" onchange="PreviewImage1()">
                    </div>
                    <input type="hidden" name="gambar1lama" value="{{ $model->gambar1 }}">

                    <div class="mb-3">
                        <label for="gambar2" class="form-label">Slide 2</label><br>
                        <img src="{{ url('storage/gambar/' . $model->gambar2) }}" width="300" alt=""
                            class="img-preview2">
                        <input type="file" class="form-control mb-3" id="gambar2" onchange="PreviewImage2()">
                    </div>
                    <input type="hidden" name="gambar2lama" value="{{ $model->gambar2 }}">

                    <div class="mb-3">
                        <label for="gambar3" class="form-label">Slide 3</label><br>
                        <img src="{{ url('storage/gambar/' . $model->gambar3) }}" width="300" alt=""
                            class="img-preview3">
                        <input type="file" class="form-control mb-3" id="gambar3" onchange="PreviewImage3()">
                    </div>
                    <input type="hidden" name="gambar3lama" value="{{ $model->gambar3 }}">

                    <div class="mb-3">
                        <label for="gambar4" class="form-label">Slide 4</label><br>
                        <img src="{{ url('storage/gambar/' . $model->gambar4) }}" width="300" alt=""
                            class="img-preview4">
                        <input type="file" class="form-control mb-3" id="gambar4" onchange="PreviewImage4()">
                    </div>
                    <input type="hidden" name="gambar4lama" value="{{ $model->gambar4 }}">

                    <div class="mb-3">
                        <label for="gambar5" class="form-label">Slide 5</label><br>
                        <img src="{{ url('storage/gambar/' . $model->gambar5) }}" width="300" alt=""
                            class="img-preview5">
                        <input type="file" class="form-control mb-3" id="gambar5" onchange="PreviewImage5()">
                    </div>
                    <input type="hidden" name="gambar5lama" value="{{ $model->gambar5 }}">

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
