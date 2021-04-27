<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('front/css/blog-home.css')}}" rel="stylesheet">

</head>



<body>
    <!-- /.header nav -->
    @section('header')
    @include('layouts.front.inc.header')
    @show
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            @yield('content')



            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- /.footer -->
    @section('footer')
    @include('layouts.front.inc.footer')
    @show



    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>