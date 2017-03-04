
<br>
<div class="container">
<div class="row">

<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<div class="panel panel-default">
 <div class="panel-heading text-center">Add comment</div>
  <div class="panel-body">
 <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts/'.$post->id.'/comment') }}">
                        {{ csrf_field() }}
<div class="form-group col-lg-6 col-lg-offset-1 col-md-10 col-md-offset-1">
<input type="text" class="form-control" placeholder="Name" name="author" >
</div>
<div class="form-group col-lg-8 col-lg-offset-1 col-md-10 col-md-offset-1">
<input type="email" class="form-control" placeholder="Email"  name="email">
</div>
<div class="form-group col-lg-12 col-lg-offset-1 col-md-10 col-md-offset-1">
<input type="text" class="form-control" placeholder="Comment" name="content">
</div>
<div class="form-group col-lg-11 col-lg-offset-1 col-md-10 col-md-offset-1">
<button class="btn btn-primary ">Submit</button>
</div>
</form>
  </div>

</div>
</div>

@if(isset($comments))
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<div class="panel panel-default">
 <div class="panel-heading text-center">
 <h2 class="panel-title">
 <strong>Comments</strong> <span class="badge">{{count($comments)}} </span>
 </h2>  
 </div>
 
</div>
</div>

 @foreach($comments as $comment)

     <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<div class="panel panel-default">
 <div class="panel-heading text-center">{{$comment->author}}  </div>
  <div class="panel-body">
    <p>
    {{$comment->content}}    
     </p>
    <small class="text-muted pull-right">on  {{$comment->created_at}} </small>
  </div>

</div>
</div>

 @endforeach

@endif

</div>
</div>
