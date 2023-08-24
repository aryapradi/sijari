@extends('layout.main')


@section('content') 


<div class="container border rounded p-5" style="background-color:#ffffff">
    <h4 class="card-title mb-4" >FormPartai</h4>
    <form action="/store_partai" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="id" class="text-dark">ID</label>
            <input type="text" class="form-control" name="id" placeholder="Enter ID">
        </div>

        <div class="form-group mb-3">
            <label for="nama" class="text-dark">Nama</label>
            <input type="text" class="form-control" id="nama_partai" name="nama_partai"  placeholder="Enter Nama">
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a class="btn btn-secondary" style="margin-left: 850px;" href="/DataPartai">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>




















@endsection