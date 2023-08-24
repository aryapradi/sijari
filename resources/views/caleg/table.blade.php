@extends('layout.main')


@section('content')

<div class="card">
    <div class="card-body" style="display: flex; align-items: center;">
        <h4 class="card-title" style="margin-right: auto;">Data Caleg</h4>
        <a href="/form_caleg" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
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