@extends('layouts.master')

@section('content')

<div class="mb-3"></div>
<div class="container">

    <h1> The following services are provided: </h1>
    <ul class="list-group">

        <li class="list-group-item">programming  </li>
        <hr>
        <a href="" type="button" class="btn btn-info"> Learn More </a>
        <hr>


        <li class="list-group-item">automation  </li>
        <hr>
        <a href="" type="button" class="btn btn-info"> Learn More </a>
        <hr>


        <li class="list-group-item"> web desing  </li>
        <hr>
        <a href="" type="button" class="btn btn-info"> Learn More </a>
        <hr>


        <hr>
    </ul>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!------ Include the above in your HEAD tag ---------->

    <div class="box">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="box-part text-center">

                        <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>

                        <div class="title">
                            <h4>Instagram</h4>
                        </div>

                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-info"> Learn More </button>
                        </div>


                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="box-part text-center">

                        <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>

                        <div class="title">
                            <h4>Twitter</h4>
                        </div>

                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-info"> Learn More </button>
                        </div>
                        </form>

                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="box-part text-center">

                        <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>

                        <div class="title">
                            <h4>Facebook</h4>
                        </div>

                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-info"> Learn More </button>
                        </div>
                        </form>

                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="box-part text-center">

                        <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i>

                        <div class="title">
                            <h4>Pinterest</h4>
                        </div>

                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.
                                Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>

                        <div class="form-group">
                            <button href="#" type="button" class="btn btn-info"> Learn More </button>
                        </div>
                        </form>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="box-part text-center">

                        <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>

                        <div class="title">
                            <h4>Google</h4>
                        </div>

                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore
                                te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>

                        <div class="form-group">
                            <button href="#" type="button" class="btn btn-info"> Learn More </button>
                        </div>
                        </form>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="box-part text-center">

                        <i class="fa fa-github fa-3x" aria-hidden="true"></i>

                        <div class="title">
                            <h4>Github</h4>
                        </div>

                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum
                                decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-info"> Learn More </button>

                        </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>

    </div>

    <div>
        <a type="button" class=" btn btn-info nav-link nav-link-icon"   href="dashboard" target="_blank">
            <i class="ni ni-planet"></i>
            <span class="nav-link-inner--text">Dashboard</span>
        </a>

        <hr>


    </div>

    <style>


        body{
            background: #eee;
        }
        span{
            font-size:15px;
        }
        a{
            text-decoration:none;
            color: #0062cc;
            border-bottom:2px solid #0062cc;
        }
        .box{
            padding:60px 0px;
        }

        .box-part{
            background:#FFF;
            border-radius:0;
            padding:60px 10px;
            margin:30px 0px;
        }
        .text{
            margin:20px 0px;
        }

        .fa{
            color:#4183D7;
        }
    </style>

</div>
<script src="http://bestblog.com/js/app.js"></script>

@include('pages.footer')

@endsection
