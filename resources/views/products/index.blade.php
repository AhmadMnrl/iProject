@extends('layouts-admin.master')
@section('content')
    <div class="card">
        <div class="d-flex justify-content-end pt-2" style="padding-right: 25px">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
                <i class='bx bxs-plus-circle'></i> Add Products
            </button>
        </div>
        <br>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead style="">
                    <tr style="color: #f1faee;">
                        <th>No</th>
                        <th>Name Products</th>
                        <th>price</th>
                        <th>Description</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php $countData = count($products); ?>
                @if ($countData < 1)
                    <tbody class="table-border-bottom">
                        <tr>
                            <td colspan="11" height="200px">
                                <h4 align="center">
                                    Data Not Found
                                </h4>
                            </td>
                        </tr>
                    </tbody>
                @else
                    @foreach ($products as $no => $value)
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->price }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ $value->stock }}</td>
                                <td>
                                    <a href="/products/edit/{{ $value->id }}" class="btn btn-success">Edit</a>
                                    <a href="/products/delete/{{ $value->id }}" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        </tbody>
                    @endforeach
                @endif
            </table>
        </div>
        @include('products.create')
    </div>
@endsection
