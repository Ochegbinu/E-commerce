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
                    @foreach ($carts as $cart)
                        <td>{{ $cart->name }}</td>
                        <td><img src="{{ asset($cart->image) }}" style="width: 100px" /></td>
                        <td><span>&#8358</span>{{ $cart->price }}</td>
                        <td> <a href="{{ route('removeCart', [$cart->id]) }}"><button
                                    class="btn btn-sm btn-danger">Remove</button></a></td>

                </tr>
                @endforeach

            </tbody>
        </table>
<span style="font-size: 30px">Total: <span>&#8358</span>{{$item_sum}}</span> 



        <form method="POST" action="{{ route('pay') }}">
            @csrf


         
            {{-- <input type="hidden" name="email" value=""> required --}}
            {{-- <input type="hidden" name="orderID" value=""> --}}
            {{-- <input type="hidden" name="amount" value=""> required in kobo --}}
            {{-- <input type="hidden" name="quantity" value="">
                    <input type="hidden" name="currency" value="NGN"> --}}
            {{-- <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > For other necessary things you want to add to your payload. it is optional though --}}
            {{-- <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {--required --}}

            {{-- <input type="hidden" name="split_code" value="SPL_EgunGUnBeCareful"> to support transaction split. more details https://paystack.com/docs/payments/multi-split-payments/#using-transaction-splits-with-payments --}}
            {{-- <input type="hidden" name="split" value=""> to support dynamic transaction split. More details https://paystack.com/docs/payments/multi-split-payments/#dynamic-splits --}}
            {{-- {{ csrf_field() }} works only when using laravel 5.1, 5.2 --}}

            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> employ this in place of csrf_field only in laravel 5.0 --}}

            <p>
                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">Pay Now!</button>
            </p>


        </form>

    </div>
@endsection
