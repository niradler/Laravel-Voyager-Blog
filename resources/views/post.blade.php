@extends('layouts.main')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{url('assets/blog')}}/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{$post->title}}</h1>
                        <hr class="small">
                        <span class="subheading">{{$post->excerpt}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
 <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {!! $post->body !!}
               </div>
            </div>
        </div>
    </article>
   @include('components.comments')
@endsection
