@extends('head')

@section('isi')
    <!-- untuk grid kotak start -->
    <div class="container">
        <div class="text-center">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($datas as $isi)
                    <a href="{{ url('/detail-barang/' . $isi->id) }}" style="text-decoration: none;" class="text-white">
                        <div class="col">
                            <div class="card h-100 rounded-4 shadow">
                                <div id="slide{{ $isi->id }}" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#slide{{ $isi->id }}"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#slide{{ $isi->id }}"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#slide{{ $isi->id }}"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#slide{{ $isi->id }}"
                                            data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#slide{{ $isi->id }}"
                                            data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="5000">
                                            <img src="{{ url('storage/gambar/' . $isi->gambar1) }}"
                                                class="d-block w-100 rounded-4 gambar" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ url('storage/gambar/' . $isi->gambar2) }}"
                                                class="d-block w-100 gambar" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ url('storage/gambar/' . $isi->gambar3) }}"
                                                class="d-block w-100 rounded-4 gambar" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ url('storage/gambar/' . $isi->gambar4) }}"
                                                class="d-block w-100 rounded-4 gambar" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ url('storage/gambar/' . $isi->gambar5) }}"
                                                class="d-block w-100 rounded-4 gambar" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#slide{{ $isi->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#slide{{ $isi->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title produk">{{ $isi->nama_usaha }}</h5>
                                    <div class="d-flex justify-content-center align-item-center">
                                        <i class="fa-solid fa-heart love"></i>
                                        <p class="produk">50 follower</p>
                                    </div>
                                    <p class="card-text badge bg-primary p-2"><i
                                            class="fa-solid pe-2 fa-location-dot"></i>{{ $isi->alamat }}</p>
                                    <div class="d-flex justify-content-center align-item-center">
                                        @if ($isi->wa)
                                            <i class="icon fa-brands fa-whatsapp"></i>
                                        @endif
                                        @if ($isi->fb)
                                            <i class="icon fa-brands fa-facebook"></i>
                                        @endif
                                        @if ($isi->ig)
                                            <i class="icon fa-brands fa-instagram"></i>
                                        @endif
                                        @if ($isi->tiktok)
                                            <i class="icon fa-brands fa-tiktok"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
