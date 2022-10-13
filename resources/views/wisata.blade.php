@extends('head')

@section('isi')
    <div class="container">
        <form class="d-flex mb-2" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        @foreach ($datas as $isi)
            <div class="card rounded-4 m-2">
                <h4 class="text-center fw-bold m-3">{{ $isi->nama_wisata }}</h4>
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-2">
                    <div class="col">
                        <div class="card h-100" style="width:;">
                            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                                        aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                                        aria-label="Slide 5"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="5000">
                                        <img src="{{ url('storage/gambar/' . $isi->gambar1) }}"
                                            class="d-block w-100 rounded-4 gambarwisata" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('storage/gambar/' . $isi->gambar2) }}"
                                            class="d-block w-100 gambarwisata" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('storage/gambar/' . $isi->gambar3) }}"
                                            class="d-block w-100 rounded-4 gambarwisata" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('storage/gambar/' . $isi->gambar4) }}"
                                            class="d-block w-100 rounded-4 gambarwisata" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('storage/gambar/' . $isi->gambar5) }}"
                                            class="d-block w-100 rounded-4 gambarwisata" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="align-items-center justify-content-center d-flex m-1">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/ImCPCA940J0" frameborder="0"></iframe>
                                </div>
                            </div>
                            <h4 class="fw-bold mt-2 text-center">Informasi Youtube</h4>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $isi->nama_wisata }}</h5>
                                <p class="card-text">{{ $isi->deskripsi }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center">
                                    <i class="fa-brands fa-instagram sosmed"></i>
                                    <i class="fa-brands fa-square-facebook sosmed"></i>
                                    <i class="fa-solid fa-location-dot sosmed"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="footer-bottom bg-white mt-2 shadow">
        <div class="text-center">
            Made By Polibang Creative Studio
        </div>
    </div>
@endsection
