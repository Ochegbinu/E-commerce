@extends('admin.navbar')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    @foreach ($products as $product)
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td><img src="{{ asset($product->image) }}" style="width: 100px" /></td>
                        <td><span>&#8358</span> {{ $product->price }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->description }}</td>
                        <td><a href=""><button class="btn btn-sm btn-success">Edit</button></a>
                        <td><a href="{{route('destroyProduct',[$product->id])}}"><button class="btn btn-sm btn-danger">Delete</button></a>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
