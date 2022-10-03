@extends('adminweb.mainweb')

@section('isi')
    <div class="main" id="main">
        <div class="pagetitle">
            <h1 class="text-white">Data Wisata</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-web">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/data-wisata">Data Wisata</a></li>
                    <li class="breadcrumb-item text-white">Edt Data Wisata</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card">
            <h5 class="card-header fw-bold text-center">Data Profil UMKM</h5>
            <div class="container">
                <form class="m-3" method="POST" action="{{ url('/data-wisata/' . $model->id) }}"
                    enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="namausaha" class="form-label">Nama Wisata</label>
                                <input type="text" class="form-control" id="namausaha" name="nama_wisata"
                                    value="{{ $model->nama_wisata }}">
                            </div>
                            <div class="mb-3">
                                <label for="namausaha" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="namausaha" name="deskripsi"
                                    value="{{ $model->deskripsi }}">
                            </div>
                            <div class="mb-3">
                                <label for="namausaha" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="namausaha" name="alamat"
                                    value="{{ $model->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="namausaha" class="form-label">GMaps</label>
                                <input type="text" class="form-control" id="namausaha" name="gmaps"
                                    value="{{ $model->gmaps }}">
                            </div>
                            <div class="mb-3">
                                <label for="namausaha" class="form-label">Facebook</label>
                                <input type="text" class="form-control" id="namausaha" name="fb"
                                    value="{{ $model->fb }}">
                            </div>
                            <div class="mb-3">
                                <label for="namausaha" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="namausaha" name="ig"
                                    value="{{ $model->ig }}">
                            </div>
                            <div class="mb-3">
                                <label for="namausaha" class="form-label">Youtube</label>
                                <input type="text" class="form-control" id="namausaha" name="yt"
                                    value="{{ $model->yt }}">
                            </div>
                            <div class="mb-3">
                                <label for="namausaha" class="form-label">Nama Usaha</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $model->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $model->status == 0 ? 'selected' : '' }}>Disable</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="gambar1" class="form-label">Slide 1</label><br>
                                <img src="{{ url('storage/wisata/' . $model->gambar1) }}" width="300" alt=""
                                    class="img-preview1">
                                <input type="file" class="form-control mb-3" name="gambar1" id="gambar1"
                                    onchange="PreviewImage1()">
                            </div>
                            <input type="hidden" name="gambar1lama" value="{{ $model->gambar1 }}">

                            <div class="mb-3">
                                <label for="gambar2" class="form-label">Slide 2</label><br>
                                <img src="{{ url('storage/wisata/' . $model->gambar2) }}" width="300" alt=""
                                    class="img-preview2">
                                <input type="file" class="form-control mb-3" id="gambar2"
                                    onchange="PreviewImage2()" name="gambar2">
                            </div>
                            <input type="hidden" name="gambar2lama" value="{{ $model->gambar2 }}">

                            <div class="mb-3">
                                <label for="gambar3" class="form-label">Slide 3</label><br>
                                <img src="{{ url('storage/wisata/' . $model->gambar3) }}" width="300" alt=""
                                    class="img-preview3">
                                <input type="file" class="form-control mb-3" id="gambar3"
                                    onchange="PreviewImage3()" name="gambar3">
                            </div>
                            <input type="hidden" name="gambar3lama" value="{{ $model->gambar3 }}">

                            <div class="mb-3">
                                <label for="gambar4" class="form-label">Slide 4</label><br>
                                <img src="{{ url('storage/wisata/' . $model->gambar4) }}" width="300" alt=""
                                    class="img-preview4">
                                <input type="file" class="form-control mb-3" id="gambar4"
                                    onchange="PreviewImage4()" name="gambar4">
                            </div>
                            <input type="hidden" name="gambar4lama" value="{{ $model->gambar4 }}">

                            <div class="mb-3">
                                <label for="gambar5" class="form-label">Slide 5</label><br>
                                <img src="{{ url('storage/wisata/' . $model->gambar5) }}" width="300" alt=""
                                    class="img-preview5">
                                <input type="file" class="form-control mb-3" id="gambar5"
                                    onchange="PreviewImage5()" name="gambar5">
                            </div>
                            <input type="hidden" name="gambar5lama" value="{{ $model->gambar5 }}">
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
