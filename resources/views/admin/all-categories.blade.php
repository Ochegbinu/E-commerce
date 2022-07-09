@extends('admin.navbar')

@section('content')
    <div class="container">
        <table class="table table-striped table-bordered table-condensed">
            <tr>
                <thead>
                    <th>Category Name</th>
                    <th>Category Title</th>
                    <th>Update</th>
                    <th>Delete</th>
                </thead>
            </tr>
            <tr>
                @foreach ($categorys as $category)
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td><a href=""><button class="btn btn-sm btn-success">Update</button></a></td>
                    <td><a href="{{route('destroyCategory', [$category->id])}}"><button class="btn btn-sm btn-danger">Delete</button></a></td>

            </tr>
            @endforeach


        </table>
    </div>
@endsection
