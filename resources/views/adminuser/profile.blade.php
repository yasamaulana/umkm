@extends('adminuser.main')

@section('isi')
    <div id="main" class="main">
        <div class="pagetitle">
            <h1 class="text-white">Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-user">Home</a></li>
                    <li class="breadcrumb-item text-white">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <!-- bagian profile bos -->
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{ url('storage/fotoprofile/' . auth()->user()->foto) }}" alt="Profile"
                                class="rounded-circle">
                            <button class="btn btn-primary"><i class="fa-solid fa-house"></i></button>
                            <h2>{{ auth()->user()->nama }}</h2>
                            <h3>Penjual</h3>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <!-- Profile Edit Form -->
                            @forelse ($produk as $value)
                                <form method="POST" action="{{ url('/profile/' . $value->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <p class="small text-center fst-italic">Lengkapi semua form serta slide foto agar produk
                                        anda bisa
                                        terlihat di beranda
                                    </p>
                                    <h4 class="card-title">Informasi Penjual</h4>
                                    <input type="hidden" name="idproduk" value="{{ auth()->user()->id }}">
                                    <div class="row mb-3">
                                        <label for="kategori" class="col-md-4 col-lg-3 col-form-label">Kategori</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select name="kategori" id="" class="form-control" required>
                                                <option value="" required>- Pilih -</option>
                                                @foreach ($kategori as $kate)
                                                    <option value="{{ $kate->kategori }}"
                                                        {{ $kate->kategori == $value->kategori ? 'selected' : '' }}>
                                                        {{ $kate->kategori }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="nama_usaha" class="col-md-4 col-lg-3 col-form-label">Nama
                                            Usaha</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="nama_usaha" type="text" class="form-control" id="nama_usaha"
                                                value="{{ $value->nama_usaha }}" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="nama_pemilik" class="col-md-4 col-lg-3 col-form-label">Nama
                                            Pemilik</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="nama_pemilik" type="text" class="form-control" id="nama_pemilik"
                                                value="{{ $value->nama_pemilik }}" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="alamat" type="text" class="form-control" id="alamat"
                                                value="{{ $value->alamat }}" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Deskripsi
                                            Usaha</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="deskripsi" class="form-control" id="about" style="height: 100px">{{ $value->deskripsi }}</textarea>
                                        </div>
                                    </div>

                                    <h5 class="card-title">Slide Foto</h5>
                                    <div class="row mb-3">
                                        <label for="gambar1" class="fw-bold">Gambar
                                            1</label>
                                        @if ($value->gambar1)
                                            <img src="{{ 'storage/gambar/' . $value->gambar1 }}"
                                                class="img-preview1 img-fluid mb-3 col-sm-7">
                                        @else
                                            <img class="img-preview1 img-fluid mb-3 col-sm-7">
                                        @endif
                                        <div class="">
                                            <input name="gambar1" type="file" class="form-control" id="gambar1"
                                                value="" onchange="PreviewImage1()">
                                        </div>
                                    </div>
                                    <input type="hidden" name="gambar1lama" value="{{ $value->gambar1 }}">

                                    <div class="row mb-3">
                                        <label for="gambar2" class="fw-bold">Gambar
                                            2</label>
                                        @if ($value->gambar2)
                                            <img src="{{ 'storage/gambar/' . $value->gambar2 }}"
                                                class="img-preview2 img-fluid mb-3 col-sm-7">
                                        @else
                                            <img class="img-preview2 img-fluid mb-3 col-sm-7">
                                        @endif
                                        <div class="">
                                            <input name="gambar2" type="file" class="form-control" id="gambar2"
                                                value="" onchange="PreviewImage2()">
                                        </div>
                                    </div>
                                    <input type="hidden" name="gambar2lama" value="{{ $value->gambar2 }}">

                                    <div class="row mb-3">
                                        <label for="gambar3" class="fw-bold">Gambar
                                            3</label>
                                        @if ($value->gambar3)
                                            <img src="{{ 'storage/gambar/' . $value->gambar3 }}"
                                                class="img-preview3 img-fluid mb-3 col-sm-7">
                                        @else
                                            <img class="img-preview3 img-fluid mb-3 col-sm-7">
                                        @endif
                                        <div class="">
                                            <input name="gambar3" type="file" class="form-control" id="gambar3"
                                                value="" onchange="PreviewImage3()">
                                        </div>
                                    </div>
                                    <input type="hidden" name="gambar3lama" value="{{ $value->gambar3 }}">

                                    <div class="row mb-3">
                                        <label for="gambar4" class="fw-bold">Gambar
                                            4</label>
                                        @if ($value->gambar4)
                                            <img src="{{ 'storage/gambar/' . $value->gambar4 }}"
                                                class="img-preview4 img-fluid mb-3 col-sm-7">
                                        @else
                                            <img class="img-preview4 img-fluid mb-3 col-sm-7">
                                        @endif
                                        <div class="">
                                            <input name="gambar4" type="file" class="form-control" id="gambar4"
                                                value="" onchange="PreviewImage4()">
                                        </div>
                                    </div>
                                    <input type="hidden" name="gambar4lama" value="{{ $value->gambar4 }}">

                                    <div class="row mb-3">
                                        <label for="gamba51" class="fw-bold">Gambar
                                            5</label>
                                        @if ($value->gambar5)
                                            <img src="{{ 'storage/gambar/' . $value->gambar5 }}"
                                                class="img-preview5 img-fluid mb-3 col-sm-7">
                                        @else
                                            <img class="img-preview5 img-fluid mb-3 col-sm-7">
                                        @endif
                                        <div class="">
                                            <input name="gambar5" type="file" class="form-control" id="gambar5"
                                                value="" onchange="PreviewImage5()">
                                        </div>
                                    </div>
                                    <input type="hidden" name="gambar5lama" value="{{ $value->gambar5 }}">

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->
                            @empty
                                <div class="text-center">
                                    <h4 class="card-title">Ayo mulai memasarkan produkmu</h4>
                                    <form action="{{ url('/profile') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="idproduk" value="{{ auth()->user()->id }}">
                                        <button class="btn btn-primary"><i class="bi bi-bag-check-fill me-2"></i>Mulai
                                            Memasarkan Produk</button>
                                    </form>
                                </div>
                            @endforelse ($produk as $value)
                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </section>

    </div>
    <script></script>
@endsection
