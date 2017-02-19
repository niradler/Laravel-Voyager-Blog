@extends('layouts.main')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{url('assets/blog')}}/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Latest Posts</h1>
                        <hr class="small">
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{url('/posts/'.$post->id)}}">
                        <h2 class="post-title">
                      {!!$post->title !!}
                        </h2>
                        <h3 class="post-subtitle">
                            {!!$post->excerpt !!}
                        </h3>
                    </a>
                    <p class="post-meta"> {!! $post->created_at->format('d M Y') !!}</p>
                </div>
                <hr>
              @endforeach
                <!-- Pager -->
             
                <!--  <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
@endsection
