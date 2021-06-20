@extends('master')

@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h5 class="product-category-detail-page">Category: {{ $product['category'] }}</h5>
            <h2>{{ $product['name'] }}</h2>
            <h3><span>&#8377;</span>{{ $product['price'] }}</h3>
            <h4>Details:</h4>
            <h4>{{ $product['description'] }}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                <button class="btn btn-primary fa fa-cart-plus" style="font-size:24px"></button>
            </form>
            <button class="btn btn-buy-now" style="font-size:24px">Buy Now!</button>
        </div>
    </div>


</div>
@endsection