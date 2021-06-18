@extends('master')

@section("content")
<div class="custom-product">

     

        <div class="searched-wrapper">
            <h2 class="seached-result-heading">Cart List</h2>
            @foreach ($products as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                        <img class="searched-img" src="{{ $item->gallery }}" alt="{{ $item->name }}">
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="detail/{{ $item->id }}">
                        <div class="">
                            <h2>{{ $item->name }}</h2>
                            <h5>{{ $item->description }}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a>
                </div>

            </div>
            @endforeach
        </div>


</div>
@endsection