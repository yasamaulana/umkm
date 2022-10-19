@extends('head')

@section('isi')
    <div class="container">
        <div class="card">
            <div class="container mt-2 mb-2">
                <div class="row">
                    <div class="col-md-4 kotak-slide">
                        <div id="slide{{ $datas->id }}" class="carousel slide-detail pe-2" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slide{{ $datas->id }}" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#slide{{ $datas->id }}" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#slide{{ $datas->id }}" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#slide{{ $datas->id }}" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#slide{{ $datas->id }}" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="{{ url('storage/gambar/' . $datas->gambar1) }}"
                                        class="d-block w-100 rounded-4 gambar" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ url('storage/gambar/' . $datas->gambar2) }}"
                                        class="d-block w-100 rounded-4 gambar" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ url('storage/gambar/' . $datas->gambar3) }}"
                                        class="d-block w-100 rounded-4 gambar" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ url('storage/gambar/' . $datas->gambar4) }}"
                                        class="d-block w-100 rounded-4 gambar" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ url('storage/gambar/' . $datas->gambar5) }}"
                                        class="d-block w-100 rounded-4 gambar" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#slide{{ $datas->id }}"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slide{{ $datas->id }}"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card gambar-bawah mb-2 mt-2 pe-2">
                            <div class="row">
                                <div class="col kotak-bawah">
                                    <img src="{{ url('storage/gambar/' . $datas->gambar1) }}" class="img-fluid m-1"
                                        type="button" data-bs-target="#slide{{ $datas->id }}" data-bs-slide-to="0"
                                        aria-label="Slide 1">
                                </div>

                                <div class="col kotak-bawah">
                                    <img src="{{ url('storage/gambar/' . $datas->gambar2) }}" type="button"
                                        class="img-fluid m-1" data-bs-target="#slide{{ $datas->id }}"
                                        data-bs-slide-to="1" aria-label="Slide 2">
                                </div>

                                <div class="col kotak-bawah">
                                    <img src="{{ url('storage/gambar/' . $datas->gambar3) }}" type="button"
                                        class="img-fluid m-1" data-bs-target="#slide{{ $datas->id }}"
                                        data-bs-slide-to="2" aria-label="Slide 3">
                                </div>

                                <div class="col kotak-bawah">
                                    <img src="{{ url('storage/gambar/' . $datas->gambar4) }}"
                                        type="button"class="img-fluid m-1" data-bs-target="#slide{{ $datas->id }}"
                                        data-bs-slide-to="3" aria-label="Slide 4">
                                </div>

                                <div class="col kotak-bawah">
                                    <img src="{{ url('storage/gambar/' . $datas->gambar5) }}"
                                        type="button"class="img-fluid m-1" data-bs-target="#slide{{ $datas->id }}"
                                        data-bs-slide-to="4" aria-label="Slide 5">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="border: none;">
                            <div class="mt-2 mb-2">
                                <h2>{{ $datas->nama_usaha }}</h2>
                                <p class="fw-bold t-kotak">Kategori</p>
                                <p>{{ $datas->kategori }}</p>

                                <p class="fw-bold t-kotak">Informasi Kontak</p>
                                @if ($datas->wa)
                                    <div class="d-flex">
                                        <i class="icon fa-brands fa-whatsapp"></i>
                                        <p>{{ $datas->wa }}</p>
                                    </div>
                                @endif
                                @if ($datas->fb)
                                    <div class="d-flex">
                                        <i class="icon fa-brands fa-facebook"></i>
                                        <p>{{ $datas->fb }}</p>
                                    </div>
                                @endif
                                @if ($datas->ig)
                                    <div class="d-flex">
                                        <i class="icon fa-brands fa-instagram"></i>
                                        <p>{{ $datas->ig }}</p>
                                    </div>
                                @endif
                                @if ($datas->tiktok)
                                    <div class="d-flex">
                                        <i class="icon fa-brands fa-tiktok"></i>
                                        <p>{{ $datas->tiktok }}</p>
                                    </div>
                                @endif
                                <button class="btn btn-primary"><i class="fa-solid fa-cart-shopping me-2"></i>Simpan
                                    Toko</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="container mt-2 mb-2 d-flex">
                <img src="{{ url('img/profile-img.jpg') }}" alt="" class="rounded-circle" height="90"
                    width="90">
                <div class="profile-nama mt-2 ms-3~">
                    <p class="fw-bold nama">{{ $datas->nama_pemilik }}</p>
                    <div class="d-flex ms-1">
                        <a href="http://wa.me/{{ $datas->wa }}" target="_blank"
                            class="btn me-1 btn-primary kontak"><i class="fa-brands fa-whatsapp me-1"></i>Chat Penjual</a>
                        @auth
                            @forelse ($follow as $ikuti)
                                <form action="{{ url('/follow/' . $ikuti->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger kontak"><i
                                            class="fa-regular fa-heart me-1"></i>Berhenti Mengikuti</button>
                                </form>
                            @empty
                                <form action="{{ url('/follow') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="idtoko" value="{{ $datas->id }}">
                                    <button type="submit" class="btn btn-danger kontak"><i
                                            class="fa-regular fa-heart me-1"></i>Ikuti</button>
                                </form>
                            @endforelse
                        @else
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="container mt-4">
                <p class="t-kotak">Deskripsi</p>
                <div class="container">
                    <p class="mb-2">{{ $datas->deskripsi }}</p>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="container mt-4 mb-2">
                <p class="t-kotak mb-4">Penilaian/Komentar Toko</p>
                <button class="btn mb-3 btn-primary" data-bs-toggle="modal"
                    data-bs-target="@auth #komentar @else #logindulu @endauth"><i
                        class="fa-solid fa-comment me-1"></i>Tambahkan
                    Komentar</button>

                <div class="container">
                    @foreach ($comment as $komen)
                        <div class="kotak-komentar">
                            <div class="d-flex">
                                <img src="{{ url('img/profile-img.jpg') }}" height="25" width="25"
                                    class="rounded-circle">
                                <p class="ms-2">{{ $komen->namauser }}</p>
                            </div>
                            <div class="container">
                                <p class="t-komentar">{{ $komen->komentar }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <!-- kumpulan semua modal -->
    <!-- moddal komentar -->
    <div class="modal fade" id="komentar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ url('/komentar') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Komentar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <textarea class="form-control" id="" name="komentar" rows="3"></textarea>
                        </div>
                        <input type="hidden" name="idtoko" value="{{ $datas->id }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal login dahulu -->
    <div class="modal fade" id="logindulu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title text-white fs-5" id="exampleModalLabel">Peringatan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 text-center">
                        <i class="fa-solid fa-circle-exclamation icon-warning"></i>
                        <h5>Silahkan login terlebih dahulu untuk bisa berkomentar</h5>
                        <a href="/login" class="btn btn-danger pe-5 ps-5">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
@endsection
