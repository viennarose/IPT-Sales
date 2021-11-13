@extends('base')
@section('content')
<div class="container-fluid ">
    <div class="align-self-center px-2 mt-4">
        <h1 class="text-white">Merchandises</h1>
        <table class="table table-bordered table table-striped table-light">
            <thead class="bg-info">
                <tr>
                    <th>Product Name</th>
                    <th>Brand Name</th>
                    <th>Retail Price</th>
                    <th>Wholesale Price</th>
                    <th>Wholesale Quantity</th>
                    <th>Quantity Stock</th>
                    <th>Unit ID</th>
                    <th>Category ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach($merchandises as $merch)
                <tr class="fs-5">
                    <td>{{$merch->product_name}}</td>
                    <td>{{$merch->brand_name}}</td>
                    <td>{{$merch->retail_price}}</td>
                    <td>{{$merch->wholesale_price}}</td>
                    <td>{{$merch->wholesale_qty}}</td>
                    <td>{{$merch->qty_stock}}</td>
                    <td>{{$merch->unit_id}}</td>
                    <td>{{$merch->category_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection