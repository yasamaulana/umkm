@extends('adminuser.main')

@section('isi')
    <div class="main" id="main">
        <div class="pagetitle">
            <h1 class="text-white">Data UMKM</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-user">Home</a></li>
                    <li class="breadcrumb-item text-white">Data UMKM</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Masukan Link Sosial Media</h5>
                <h5 class="card-title">Media Sosial</h5>

                <!-- General Form Elements -->
                @forelse ($produk as $isi)
                    <form action="{{ url('/data-umkm-user/' . $isi->id) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Whatsapp</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Masukan Nomor Whatsapp" class="form-control"
                                    name="wa" value="{{ $isi->wa }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Masukan Link Instagram Kamu" class="form-control"
                                    name="ig" value="{{ $isi->ig }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Masukan Link Facebook Kamu" class="form-control"
                                    name="fb" value="{{ $isi->fb }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Tik-Tok</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Masukan Link Tiktok Kamu" class="form-control"
                                    name="tiktok" value="{{ $isi->tiktok }}">
                            </div>
                        </div>

                        <h5 class="card-title">Marketplace</h5>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Shopee</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Masukan Link Toko Kamu" class="form-control"
                                    name="shopee" value="{{ $isi->shopee }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Tokopedia</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Masukan Link Tokopedia Kamu" class="form-control"
                                    name="tokped" value="{{ $isi->tokped }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                        <!-- star get value from produk for update data -->
                        <!-- star get value from produk for update data -->

                    </form><!-- End General Form Elements -->
                @empty
                    <div class="text-center">
                        <form action="{{ url('/data-umkm-user') }}" method="POST">
                            @csrf
                            <input type="hidden" name="idproduk" value="{{ auth()->user()->id }}">
                            <button class="btn btn-primary"><i class="bi bi-bag-check-fill me-2"></i>Mulai Memasarkan
                                Produk</button>
                        </form>
                    </div>
                @endforelse
            </div>
        </div>

    </div><!-- End Page Title -->
@endsection
