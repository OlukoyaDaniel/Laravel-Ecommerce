@extends('layout')

@section('title',$page_title)


@section('content')
<div class="wishlist">
  <div class="wishlist-bag">
    <h4 style="text-align:center;">My Wishlist</h4>
    @foreach ($wishlist as $items)
      <?php $item=Items::find_by_id($items->item_id); ?>
      <div class="shopping-item">
      <img src="{{ asset('images/'.$item->image) }}" alt="">
      <div class="shopping-item-info">
        <h1 class="name">{{ $item->item_name }}</h1>
        <h2 class="quantity">Qty Available {{ $item->quantity }} | Price Ghc {{ $item->price }}</h2>
        <a href="/products-details?id={{ $item->item_id }}" class="red"><small>View</small></a><a href="/remove_wish_item.php?id={{$items->id}}"><small>Delete</small></a>
      </div>
    </div>
    @endforeach
  </div>
</div>
    
@endsection