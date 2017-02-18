@extends('layouts.main')

@section('content')
    <header class="intro-header" style="background-image: url('{{url('/')}}/storage/{{$currentPage->image or ''}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{$currentPage->title or ''}}</h1>
                        <hr class="small">
                        <span class="subheading">{{$currentPage->excerpt}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div >
        {!! $currentPage->body or '' !!}
                </div>
                <hr>
              
       
            </div>
        </div>
    </div>
 
@endsection
