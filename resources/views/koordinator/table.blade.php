@extends('layout.main')


@section('content')


<div class="card">
    <div class="card-body">
        <h4 class="card-title">Default Table</h4>
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
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th class="border-bottom-0" scope="row">3</th>
                        <td class="border-bottom-0">Larry</td>
                        <td class="border-bottom-0">the Bird</td>
                        <td class="border-bottom-0">@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h6 class="card-title"><i
                class="me-1 font-18 mdi mdi-numeric-2-box-multiple-outline"></i> Table Without
            Outside Padding</h6>
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
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th class="border-bottom-0" scope="row">3</th>
                    <td class="border-bottom-0">Larry</td>
                    <td class="border-bottom-0">the Bird</td>
                    <td class="border-bottom-0">@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>





@endsection