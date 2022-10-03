@extends('adminweb.mainweb')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="text-white">Data Wisata</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-web">Home</a></li>
                    <li class="breadcrumb-item text-white">Data Wisata</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card rounded">
            <h4 class="card-title fw-bold text-center">Data Wisata</h4>
            <div class="container">
                @if (session()->has('success'))
                    <div class="alert mt-1 alert-success text-center alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#wisata">
                    Tambah Data Wisata
                </button>
                <table class="table text-center table-bordered">
                    <thead class="fw-bold">
                        <td>Nama Wisata</td>
                        <td>Deskripsi</td>
                        <td>Alamat</td>
                        <td>GMaps</td>
                        <td>Facebook</td>
                        <td>Instagram</td>
                        <td>Youtube</td>
                        <td>Status</td>
                        <td>Slide 1</td>
                        <td>Slide 2</td>
                        <td>Slide 3</td>
                        <td>Slide 4</td>
                        <td>Slide 5</td>
                        <td>Aksi</td>
                    </thead>
                    @foreach ($datas as $isi)
                        <tbody>
                            <td>{{ $isi->nama_wisata }}</td>
                            <td>{{ $isi->deskripsi }}</td>
                            <td>{{ $isi->alamat }}</td>
                            <td>{{ $isi->gmaps }}</td>
                            <td>{{ $isi->fb }}</td>
                            <td>{{ $isi->ig }}</td>
                            <td>{{ $isi->yt }}</td>
                            <td><button
                                    class="btn btn-sm rounded-4 {{ $isi->status == 1 ? 'btn-success' : 'btn-danger' }}">{{ $isi->status == 1 ? 'Active' : 'Disabled' }}</button>
                            </td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#gambar1">
                                    Lihat</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="gambar1" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Gambar Slide</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ url('storage/wisata/' . $isi->gambar1) }}" alt=""
                                                width="1100">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#gambar2">
                                    Lihat</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="gambar2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Gambar Slide</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ url('storage/wisata/' . $isi->gambar2) }}" alt=""
                                                width="1100">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#gambar3">
                                    Lihat</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="gambar3" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Gambar Slide</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ url('storage/wisata/' . $isi->gambar3) }}" alt=""
                                                width="1100">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#gambar4">
                                    Lihat</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="gambar4" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Gambar Slide</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ url('storage/wisata/' . $isi->gambar4) }}" alt=""
                                                width="1100">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#gambar5">
                                    Lihat</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="gambar5" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Gambar Slide</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ url('storage/wisata/' . $isi->gambar5) }}" alt=""
                                                width="1100">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->
                            <td><a href="{{ url('/data-wisata/' . $isi->id . '/edit') }}"><button
                                        class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </td>
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
                                            <form action="{{ url('/data-wisata/' . $isi->id) }}" method="POST">
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
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="wisata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <form method="POST" action="{{ url('/data-wisata') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-white fw-bold" id="exampleModalLabel">Tambah Data Wisata</h5>
                            <button type="button" class="btn-close " data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Wisata</label>
                                        <input type="text" class="form-control" id="nama" name="nama_wisata"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control" id="nama" name="deskripsi"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="nama" name="alamat"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">GMaps</label>
                                        <input type="text" class="form-control" id="nama" name="gmaps"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Facebook</label>
                                        <input type="text" class="form-control" id="nama" name="fb"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Instagram</label>
                                        <input type="text" class="form-control" id="nama" name="ig"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Youtube</label>
                                        <input type="text" class="form-control" id="nama" name="yt"
                                            required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Slide 1</label>
                                        <img class="img-preview1 img-fluid">
                                        <input type="file" class="form-control" onchange="PreviewImage1()"
                                            id="gambar1" name="gambar1" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Slide 2</label>
                                        <img class="img-preview2 img-fluid">
                                        <input type="file" class="form-control" onchange="PreviewImage2()"
                                            id="gambar2" name="gambar2" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Slide 3</label>
                                        <img class="img-preview3 img-fluid">
                                        <input type="file" class="form-control" onchange="PreviewImage3()"
                                            id="gambar3" name="gambar3" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Slide 4</label>
                                        <img class="img-preview4 img-fluid">
                                        <input type="file" class="form-control" onchange="PreviewImage4()"
                                            id="gambar4" name="gambar4" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Slide 5</label>
                                        <img class="img-preview5 img-fluid">
                                        <input type="file" class="form-control" onchange="PreviewImage5()"
                                            id="gambar5" name="gambar5" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
