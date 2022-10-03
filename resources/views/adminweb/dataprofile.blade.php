@extends('adminweb.mainweb')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="text-white">Data Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-web">Home</a></li>
                    <li class="breadcrumb-item text-white">Data Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card rounded">
            <h2 class="card-title text-center">Data Profile</h2>
            <div class="container">
                @if (session()->has('success'))
                    <div class="alert mt-1 alert-success text-center alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead class="fw-bold text-center">
                        <td>Kategori</td>
                        <td>Nama Usaha</td>
                        <td>Nama Pemilik</td>
                        <td>Alamat</td>
                        <td>No. Telepon</td>
                        <td>Deskripsi</td>
                        <td>Slide 1</td>
                        <td>Slide 2</td>
                        <td>Slide 3</td>
                        <td>Slide 4</td>
                        <td>Slide 5</td>
                        <td>Aksi</td>
                    </thead>
                    @foreach ($datas as $isi)
                        <tbody>
                            <td>{{ $isi->kategori }}</td>
                            <td>{{ $isi->nama_usaha }}</td>
                            <td>{{ $isi->nama_pemilik }}</td>
                            <td>{{ $isi->alamat }}</td>
                            <td>{{ $isi->wa }}</td>
                            <td>{{ $isi->deskripsi }}</td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal1">
                                    Lihat
                                </button></td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal2">
                                    Lihat
                                </button></td>
                            </td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal3">
                                    Lihat
                                </button></td>
                            </td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal4">
                                    Lihat
                                </button></td>
                            </td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal5">
                                    Lihat
                                </button></td>
                            </td>
                            <td>
                                <a href="{{ url('/data-profile/' . $isi->id . '/edit') }}"><button
                                        class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </td>
                        </tbody>

                        <!-- Modal Delete -->
                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <button type="button" class="btn-close m-2 ms-auto" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="modal-body">
                                        <div class="d-flex justify-content-center mb-3">
                                            <i class="bi bi-trash3-fill text-danger" style="font-size: 120px;"></i>
                                        </div>
                                        <h1 class="text-center fw-bold">DELETE</h1>
                                        <h4 class="text-center mb-3">Yakin data akan dihapus?</h4>
                                        <form action="{{ url('/data-profile/' . $isi->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <div class="d-grid gap-2 col-5 mx-auto d-flex">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="bi bi-trash3-fill text-white me-1"></i>Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal 1-->
                        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ url('storage/gambar/' . $isi->gambar1) }}" width="1110vw"
                                            alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Modal 1-->

                        <!-- Modal 2-->
                        <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ url('storage/gambar/' . $isi->gambar2) }}" width="1110vw"
                                            alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Modal 2-->

                        <!-- Modal 3-->
                        <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ url('storage/gambar/' . $isi->gambar3) }}" width="1110vw"
                                            alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Modal 3-->

                        <!-- Modal 4-->
                        <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ url('storage/gambar/' . $isi->gambar4) }}" width="1110vw"
                                            alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Modal 4-->

                        <!-- Modal 5-->
                        <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ url('storage/gambar/' . $isi->gambar5) }}" width="1110vw"
                                            alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Modal 5-->
                    @endforeach
                </table>
            </div>
        </div>
    </main>
@endsection
