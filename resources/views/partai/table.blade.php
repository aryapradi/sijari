@extends('layout.main')


@section('content')

<div class="card">
    <div class="card-body" style="display: flex; align-items: center;">
        <h4 class="card-title" style="margin-right: auto;">Data Partai</h4>
        <a href="/create_partai" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Partai</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
              @foreach ($data as $row)
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->nama_partai }}</td>
                <td>
                    <a type="button" class="btn btn-success" style="border-radius: 10px;" href="/edit_partai/{{ $row->id }}">Edit</a>
                    <a type="button" class="btn btn-danger" style="border-radius: 10px;" href="/hapus_partai/{{ $row->id }}">Hapus</a>
                </td>
               </tr>       
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection