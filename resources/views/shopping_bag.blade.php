@extends('layout')

@section('title',$page_title)


@section('content')

<div class="bag-body">
    <div class="bag">
        <div class="shopping-bag">
        <h4 style="text-align:center;">My Bag</h4>
        @foreach ($bag_items as $item)
            <div class="shopping-item">
                <img src="{{ asset('images/'.$item['image']) }}" alt="">
                <div class="shopping-item-info">
                <h1 class="subtotal">Ghc {{ $item['quantity'] * $item['price'] }}</h1>
                <h1 class="name">{{ $item['name'] }}</h1>
                <h2 class="quantity">Qty {{ $item['quantity'] }} | Unit Price Ghc {{ $item['price'] }}</h2>
                <a href="/product/{{ $item['id'] }}" class="red"><small>Edit</small></a><a href="/remove_bag_item/{{ $item['id'] }}"><small>Delete</small></a>
                </div>
            </div>
        @endforeach

        </div>
        <div class="grand-total">
        <h4>Total</h4>
        <div class="total-details">
            <p class="subtotal">Sub-total</p>
            <p class="subtotal-value">Ghc {{ '100' }}</p>
        </div>
        <div class="checkout btn-success">
            <a href="">CHECKOUT</a></a>
        </div>
        </div>
    </div>
</div>

@endsection
