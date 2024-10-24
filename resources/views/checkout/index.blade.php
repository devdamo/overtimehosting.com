@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Checkout</h1>
        <p>You are purchasing: <strong>{{ $product->name }}</strong></p>
        <p>Price: £{{ $product->price }}</p>

        @if($product->sale)
            <p><strong>Sale Price:</strong> £{{ $product->price - $product->sale }}</p>
        @endif

        <form action="{{ route('payment.process', $product->id) }}" method="POST">
            @csrf
            <!-- Add payment processing fields here -->
            <button type="submit" class="btn btn-success">Proceed to Payment</button>
        </form>
    </div>
@endsection
