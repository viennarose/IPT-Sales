@extends('base')
@section('content')
<div class="container">
        <div class="align-self-center px-9 mt-5">
            <h1 class="text-white">Categories</h1>
            <table class="table table-bordered table table-striped table-light table-sm">
                <thead class="bg-info">
                    <tr>
                        <th>Category Id</th>
                        <th>Category</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody class="table-striped">
                    @foreach($categories as $cat)
                    <tr class="fs-5">
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->category}}</td>
                        <td>{{$cat->description}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection