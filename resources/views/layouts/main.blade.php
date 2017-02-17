<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
     <link href="{{url('assets/blog/css/clean-blog.min.css')}}" rel="stylesheet">
 <link href="{{url('assets/blog/css/clean-blog-custom.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{url('assets/blog/vendor/font-awesome/css/font-awesome.min.css')}}'" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="app">
  @include('components.nav')



        @yield('content')

         <hr>

        @include('components.footer')

    </div>
    
@push('scripts')
       <!-- jQuery -->
    <script src="{{url('assets/blog/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('assets/blog/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{url('assets/blog/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{url('assets/blog/js/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{url('assets/blog/js/clean-blog.min.js')}}"></script>
@endpush
    @stack('scripts')
</body>
</html>
