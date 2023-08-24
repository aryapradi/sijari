@extends('layout.main')


@section('content') 


<div class="container border rounded p-5" style="background-color:#ffffff">
    <h4 class="card-title mb-4" >Form Koordinator</h4>
    <form>
        <div class="form-group mb-3">
            <label for="id" class="text-dark">ID</label>
            <input type="text" class="form-control" id="id" placeholder="Enter ID">
        </div>

        <div class="form-group mb-3">
            <label for="nama" class="text-dark">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Enter Nama">
        </div>

        <div class="form-group mb-3">
            <label for="username" class="text-dark">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username">
        </div>

        <div class="form-group mb-3">
            <label for="password" class="text-dark">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>

        <div class="form-group mb-3">
            <label for="id_koordinator" class="text-dark">id_koordinator</label>
            <input type="test" class="form-control" id="password" placeholder="">
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a class="btn btn-secondary" style="margin-left: 670px;" href="/DataSaksi">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>




















@endsection