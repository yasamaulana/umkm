@extends('head')

@section('isi')
    <div class="container">
        <form class="d-flex mb-2" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($datas as $isi)
                <div class="col">
                    <a href="" class="link-kotak">
                        <div class="card mb-3" style="max-width:;">
                            <div class="row g-0">
                                <div class="col-md-4">
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
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $isi->nama_usaha }}</h5>
                                        <p class="card-text">{{ $isi->deskripsi }}</p>
                                        @if ($isi->wa)
                                            <div class="d-flex">
                                                <i class="icon fa-brands fa-whatsapp"></i>
                                                <p>{{ $isi->wa }}</p>
                                            </div>
                                        @endif
                                        @if ($isi->fb)
                                            <div class="d-flex">
                                                <i class="icon fa-brands fa-facebook"></i>
                                                <p>{{ $isi->fb }}</p>
                                            </div>
                                        @endif
                                        @if ($isi->ig)
                                            <div class="d-flex">
                                                <i class="icon fa-brands fa-instagram"></i>
                                                <p>{{ $isi->ig }}</p>
                                            </div>
                                        @endif
                                        @if ($isi->tiktok)
                                            <div class="d-flex">
                                                <i class="icon fa-brands fa-tiktok"></i>
                                                <p>{{ $isi->tiktok }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="footer-bottom bg-white fixed-bottom mt-2 shadow">
        <div class="text-center m-2">
            Made By Polibang Creative Studio
        </div>
    </div>
@endsection
