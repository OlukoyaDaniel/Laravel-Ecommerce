@extends('layout')

@section('title',$page_title)


@section('content')
<div class="products">
  @foreach ($products as $item)
  <a href="/product/{{ $item->id }}">
  <div class="product">
    <img src="{{asset('images/'.$item->image)}}" alt="">
    <p>{{$item->item_name}}</p>
    <div class="details">
      <p class="price">Ghc {{$item->price}}</p>
      <p class="brand">{{$item->brand}}</p>
    </div>
  </div>
  </a>
  @endforeach
</div>

@endsection
