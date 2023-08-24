@extends('layout.main')


@section('content')

<div class="card">
    <div class="card-body" style="display: flex; align-items: center;">
        <h4 class="card-title" style="margin-right: auto;">Data Partai</h4>
        <a href="/form_partai" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id_partai</th>
                    <th scope="col">Nama Partai</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a type="button" class="btn btn-success" style="border-radius: 10px;">Edit</a>
                        <a type="button" class="btn btn-danger" style="border-radius: 10px;">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>
                        <a type="button" class="btn btn-success" style="border-radius: 10px;">Edit</a>
                        <a type="button" class="btn btn-danger" style="border-radius: 10px;">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection