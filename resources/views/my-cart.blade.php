@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>price</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    @foreach ($carts as $key => $cart)
                        <td>{{ $cart->name }}</td>
                        <td><img src="{{ asset($cart->image) }}" style="width: 100px" /></td>
                        <td><span>&#8358</span>{{ $cart->price }}</td>
                        <td> <a href="{{ route('removeCart', [$cart->id]) }}"><button
                                    class="btn btn-sm btn-danger">Remove</button></a></td>

                </tr>
                @endforeach

            </tbody>
        </table>
        <span style="font-size: 30px">Total: <span>&#8358</span>{{ $item_sum }}</span>






        <a href="{{ route('order') }}"> <button class="btn btn-success btn-lg btn-block">CheckOut Now!</button></a>





    </div>
@endsection
