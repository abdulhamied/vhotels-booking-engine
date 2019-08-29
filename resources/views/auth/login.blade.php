
<!DOCTYPE html>
<html >

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Page title set in pageTitle directive -->
        <title>Spark | Hotel Space</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Font awesome -->
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Main Inspinia CSS files -->
        <link href="css/animate.css" rel="stylesheet">
        <link id="loadBefore" href="css/style.css" rel="stylesheet">


    </head>

    <!-- ControllerAs syntax -->
    <!-- Main controller with serveral data used in Inspinia theme on diferent view -->
    <body  class="black-bg pace-done" >
        <div >
            
            <div class="middle-box text-center loginscreen  animated fadeInDown">
                <div style='margin-top: 20px;'>
                    <div >
                        <h1 class="fa fa-flash" style="font-size: 90px;">Spark</h1>
                    </div>
                    <!-- <div>
                        <img src='/img/headerlogo.png' />
                    </div> -->
                    <h3 class='text-white'  style='margin-top: 40px;'>Please Login</h3>
                    <!-- <p class='text-white'>Integrated Hotel Booking Engine</p> -->
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-12">E-Mail Address</label>

                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-12">Password</label>

                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary block full-width m-b">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                    <p class="m-t"> <small>{{ date("Y") }}&copy; HotelSpace</small> </p>

                </div>
            </div>
        </div>
    </body>
</html>
