@extends('master')

@section("content")
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>

        <div class="searched-wrapper">
            <h2 class="seached-result-heading">Searched Results</h2>
            @foreach ($products as $item)
            <div class="searched-item">
                <a href="detail/{{ $item['id'] }}">
                    <img class="searched-img" src="{{ $item['gallery'] }}" alt="{{ $item["name"] }}">
                    <div class="">
                        <h2>{{ $item['name'] }}</h2>
                        <h5>{{ $item['description'] }}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

</div>
@endsection