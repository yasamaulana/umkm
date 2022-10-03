@extends('adminweb.mainweb')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="text-white">Kategori Usaha</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-web">Home</a></li>
                    <li class="breadcrumb-item text-white">Kategori Usaha</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card rounded">
            <div class="container">
                <h4 class="card-title text-center">Kategori Usaha</h4>
                @if (session()->has('success'))
                    <div class="alert mt-1 alert-success text-center alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahdata">
                    Tambah Kategori
                </button>
                <table class="table table-bordered">
                    <thead class="fw-bold text-center">
                        <td>No</td>
                        <td>Kategori</td>
                        <td>Aksi</td>
                    </thead>
                    @foreach ($datas as $isi)
                        <tbody>
                            <td style="width: 20px">{{ $loop->iteration }}</td>
                            <td>{{ $isi->kategori }}</td>
                            <td style="width: 15vw">
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                    data-bs-target="#edit{{ $isi->id }}">
                                    <i class="bi bi-pencil-square"></i>Edit
                                </button>
                                <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $isi->id }}">
                                    <i class="bi bi-trash3-fill"></i> Delete
                                </button>
                            </td>
                        </tbody>
                        <!-- Modal Delete -->
                        <div class="modal fade" id="delete{{ $isi->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <form action="{{ url('/kategori-usaha/' . $isi->id) }}" method="POST">
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

                        <!-- Modal edit data-->
                        <div class="modal fade" id="edit{{ $isi->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ url('/kategori-usaha/' . $isi->id . '/edit') }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Masukan Kategori</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" name="kategori" value="{{ $isi->kategori }}"
                                                class="form-control" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end modal edit data -->
                    @endforeach
                </table>
            </div>
        </div>

        <!-- Modal tambah data-->
        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ url('/kategori-usaha') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Masukan Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="kategori" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan Kategori</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end modal tambah data -->
    </main>
@endsection
