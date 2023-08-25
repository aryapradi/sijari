@extends('layout.main')


@section('content')

<div class="card">
    <div class="card-body" style="display: flex; align-items: center;">
        <h4 class="card-title" style="margin-right: auto;">Data Caleg</h4>
        <a href="/create_caleg" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Caleg</th>
                    <th scope="col">Partai</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>
              @foreach ($data as $row)
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->nama_caleg }}</td>
                <td>{{ $row->partai->nama_partai }}</td>
                <td>
                    <a type="button" class="btn btn-success" style="border-radius: 10px;" href="/edit_caleg/{{ $row->id }}">Edit</a>
                    <a type="button" class="btn btn-danger" style="border-radius: 10px;" href="/hapus_caleg/{{ $row->id }}">Hapus</a>
                </td>
            </tr>  
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection