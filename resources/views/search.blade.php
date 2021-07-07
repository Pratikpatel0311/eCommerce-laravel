@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h3>List of found Products</h3>
            @foreach ($products as $item)
                <div class="searched-items">
                    <a href="details/{{$item['id']}}">
                        <img class="trending-img" src="{{ $item['gallery'] }}" alt="{{ $item['name'] }}">
                        <div class="">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
