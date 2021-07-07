@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Cart List</h2>
            @foreach ($products as $item)
                <div class="row searched-items cart-list-divider">
                    <div class="col-sm-3">
                        <a href="details/{{$item->id}}">
                            <img class="trending-img" src="{{ $item->gallery }}" alt="{{ $item->name }}">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="">
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/remove-item/{{ $item->cart_id }}" class="btn btn-danger">Remove</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
