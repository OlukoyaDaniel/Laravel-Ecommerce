@extends('layout')

@section('title',$page_title)


@section('content')
<div class="products-details">
  <?php //dd($item)?>
  <div class="product-details-image">
    <img src="{{ asset('images/'.$item->image) }}" alt="">
  </div>
  <div class="product-detail">
    <div class="product-name">
      <h2>{{$item->item_name}}</h2>
    </div>
    <div class="product-price">
      <h2>Ghc{{$item->price}}</h2>
    </div>
    <hr>
    <div class="item-details">
      <p>{{$item->description}}</p>
    </div>
    <form action="/add_to_bag" method="POST">
        @csrf
      <input type="hidden" name="id" value="{{ $item->id }}">
      <input type="hidden" name="name" value="{{ $item->item_name }}">
      <input type="hidden" name="price" value="{{ $item->price }}">
      <input type="hidden" name="image" value="{{ $item->image }}">
      <div class="select-size">
        <div class="form-group">
          <label for="">Quantity</label><br>
          <select name='quantity' class="" id="">
            @for ($i = 1; $i <= $item->quantity; $i++)
                <option>{{$i}}</option>
            @endfor
          </select>
        </div>
      </div>

      <div class="add">
        <button type='submit' class="btn">Add to Bag</button>
      </div>
      <?php $check_login=false?>
      @if ($check_login)
          <div class='add'>
            <button name='save_item' type='submit' class='btn-other'>Save to Wishlist</button>
          </div>
      @endif

    </form>


  </div>
</div>

@endsection
