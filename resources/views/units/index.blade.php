@extends('base')
@section('content')
<div class="container-fluid ">
    <div class="align-self-center px-3 mt-3">
        <h1 class="text-white">Units</h1>
        <table class="table table-bordered table table-striped table-light">
            <thead class="bg-info">
                <tr>
                    <th>Unit Id</th>
                    <th>Unit Type</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($units as $u)
                <tr class="fs-5">
                    <td>{{$u->id}}</td>
                    <td>{{$u->unit_type}}</td>
                    <td>{{$u->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection