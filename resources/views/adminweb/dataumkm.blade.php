@extends('adminweb.mainweb')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="text-white">Data UMKM</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/admin-web">Home</a></li>
                    <li class="breadcrumb-item text-white">Data UMKM</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card rounded">
            <h2 class="card-title text-center">Data UMKM</h2>
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
                        <td>Nama Usaha</td>
                        <td>No Whatsapp</td>
                        <td>Instaram</td>
                        <td>Facebook</td>
                        <td>Tiktok</td>
                        <td>Shopee</td>
                        <td>Tokopedia</td>
                        <td>Aksi</td>
                    </thead>
                    @foreach ($datas as $isi)
                        <tbody>
                            <td>{{ $isi->nama_usaha }}</td>
                            <td>{{ $isi->wa }}</td>
                            <td>{{ $isi->ig }}</td>
                            <td>{{ $isi->fb }}</td>
                            <td>{{ $isi->tiktok }}</td>
                            <td>{{ $isi->shopee }}</td>
                            <td>{{ $isi->tokped }}</td>
                            <td>
                                <a href="{{ url('/data-umkm/' . $isi->id . '/edit') }}"><button class="btn btn-primary"><i
                                            class="bi bi-pencil-square"></i></button></a>
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
                                        <form action="{{ url('/data-umkm/' . $isi->id) }}" method="POST">
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
