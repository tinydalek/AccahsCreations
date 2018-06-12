@extends('layouts.layout')

@section('content')

<div class="row">

    @foreach ($posts as $post)

    <div class="col-md-3">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="" alt="Product Image">
            <div class="card-header">
                {{ $post->product_name }}
            </div>
            <div class="card-body">
                <p class="card-text"> {{ $post->product_desc }} </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" href="" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" href="" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection