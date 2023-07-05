

@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                
                <h1 class="mb-3">{{ $post->title }}</h1>
                @if ($post->image)
                <div style="max-height:350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else  
                <img src="https://picsum.photos/seed/picsum/1200/400" alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <p class="mt-2">By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category=/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                
                
               <article class="my-3">
                 {!! $post->body !!}
               </article>

                <a href="/blog" class="d-block mt-3" >Back to Posts</a>
            </div>
        </div>
    </div>

@endsection