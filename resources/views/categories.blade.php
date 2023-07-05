@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories</h1>
@foreach ($categories as $category)
    
<div class="container">
    <div class="row">
        <div class="col-md-4 mb-3">
            <a href="/blog?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://picsum.photos/seed/picsum/500/500" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                      <h5 class="card-title p-2 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
            
    </div>
</div>
@endforeach




@endsection