@extends('adminweb.mainweb')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="text-white">Data Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-web">Home</a></li>
                    <li class="breadcrumb-item text-white">Data Users</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card rounded">
            <h4 class="card-title text-center">Data Pengguna</h4>
            <div class="container">
                <table class="table table-bordered">
                    <thead class="text-center fw-bold">
                        <td>No</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Nomor</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>Aksi</td>
                    </thead>
                    @foreach ($datas as $isi)
                        <tbody>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $isi->nama }}</td>
                            <td>{{ $isi->alamat }}</td>
                            <td>{{ $isi->nomor }}</td>
                            <td>{{ $isi->email }}</td>
                            <td>Encrypt</td>
                            <td>
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                    data-bs-target="#edit{{ $isi->id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $isi->id }}">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </td>
                        </tbody>

                        <!-- Modal edit -->
                        <div class="modal fade" id="edit{{ $isi->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ url('/data-user/' . $isi->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Pengguna</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="form" class="form-label">Nama</label>
                                                <input type="text" name="nama" value="{{ $isi->nama }}"
                                                    class="form-control" id="form">
                                            </div>
                                            <div class="mb-3">
                                                <label for="form" class="form-label">Alamat</label>
                                                <input type="text" name="alamat" value="{{ $isi->alamat }}"
                                                    class="form-control" id="form">
                                            </div>
                                            <div class="mb-3">
                                                <label for="form" class="form-label">Nomor</label>
                                                <input type="text" name="nomor" value="{{ $isi->nomor }}"
                                                    class="form-control" id="form">
                                            </div>
                                            <div class="mb-3">
                                                <label for="form" class="form-label">Email</label>
                                                <input type="text" name="email" value="{{ $isi->email }}"
                                                    class="form-control" id="form">
                                            </div>
                                            <div class="mb-3">
                                                <label for="form" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    value="{{ $isi->password }}" id="form">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal edit -->

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
                                        <form action="{{ url('/data-user/' . $isi->id) }}" method="POST">
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
                    @endforeach
                </table>
            </div>
        </div>
    </main>
@endsection
