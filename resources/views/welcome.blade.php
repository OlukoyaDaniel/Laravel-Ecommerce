@extends('layout')

@section('title','Home')

@section('content')
<div class="header"></div>
<div class="home-main">
  <div class="home-head">
    <h1>We offer products in a wide range</h1>
    <small>Our products span from clothing, to accessories to even gadgets</small>
  </div>
  <div class="home-body">
    <div class="category">
      <img src="images/header-male.png" alt="">
      <div class="category-name">
        <h3>Males</h3>
      </div>
    </div>
    <div class="category">
      <img src="images/header-female.jpg" alt="">
      <div class="category-name">
        <h3>Females</h3>
      </div>
    </div>
    <div class="category">
      <img src="images/header-unisex.jpg" alt="">
      <div class="category-name">
        <h3>Both</h3>
      </div>
    </div>
  </div>
</div>
@endsection