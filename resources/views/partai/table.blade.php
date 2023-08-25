@extends('layout.main')

@section('content')
<div class="card">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <div class="card-body d-flex align-items-center">
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
                        <td style="display: flex; align-items: center; ">
                            <a href="/edit_partai/{{$row->id}}" style="border-radius: 5px" class="btn btn-success btn-sm mr-1">Edit</a>
                            @foreach ($data as $row)
                               <div class="data-item">
                                 <p>{{ $row->nama }}</p>
                               <form action="{{ route('hapus_partai', ['id' => $row->id]) }}" method="post">
                                @csrf
                                @method('delete')
                               <button type="submit" style="border-radius: 5px" class="btn btn-danger btn-sm mr-2">Hapus Data</button>
                            </form>
                               </div>
                            @endforeach

                        
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
