<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href={{ asset('css/styleL.css') }} rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

<!-- font-awesome icons -->
<link href={{ asset('css/font-awesomeL.css') }} rel="stylesheet"> 
<!-- //font-awesome icons -->

<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Cormorant+Unicase:300,400,500,600,700" rel="stylesheet"><!--web font-->
<!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main agileits-w3layouts">
        <h1 style="height: 55px; margin-top: -20px;"><img src="images/logo.jpg" alt="" /></h1>
        <div class="main-agileinfo"> 
            <div class="agileui-forms">
                <div class="container-form">
                    <div class="form-item log-in"><!-- login form-->
                        <div class="w3table agileinfo"> 
                            <div class="w3table-cell register"> 
                                <div class="w3table-tophead">
                                    <h2>Sign in</h2>
                                </div>
                                <form action="{{ route('login') }}" method="post"> 
                                    {{ csrf_field() }}
                                    <div class="fields-grid">
                                        <div class="styled-input agile-styled-input-top">
                                            <input id="email" type="email" name="email" required="" value="{{old('email')}}" autofocus>
                                            <label>Email</label>
                                            <span></span>
                                        </div>
                                        <div class="styled-input">
                                            <input id="password" type="password" name="password" required="">
                                            <label>Password</label>
                                            <span></span>
                                        </div>
                                        <label class="checkbox" style="margin-left: 25px;">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <i></i>Remember Me</a>
                                        </label>
                                        <a href="{{ route('password.request') }}">forgot password?</a>            
                                        <input type="submit" value="Sign in"> 
                                    </div>
                                    <div class="social-grids">
                                        <div class="social-text">
                                            <p>Or Sign in with</p>
                                        </div>
                                        <div class="social-icons">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>

                                </form>  
                            </div>
                        </div>
                    </div>
                    <div class="form-item sign-up"><!-- sign-up form-->
                        <div class="w3table w3-agileits">
                            <div class="w3table-cell register">   
                                    <h3>Sign up</h3>
                                <form action="{{ route('register') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="fields-grid">
                                        <div class="styled-input agile-styled-input-top">
                                            <input id="name" type="text" name="name" required="" value="{{ old('name') }}"> 
                                            <label>Name</label>
                                            <span></span>
                                        </div>
                                        <div class="styled-input">
                                            <input id="email" type="email" name="email" required="" value="{{old('email')}}">
                                            <label>Email</label>
                                            <span></span>
                                        </div>
                                        <div class="styled-input">
                                            <input id="password" type="password" name="password" required="">
                                            <label>Password</label>
                                            <span></span>
                                        </div>
                                        <div class="styled-input">
                                            <input id="password-confirm" type="password" name="password_confirmation" required="">
                                            <label>Confirm Password</label>
                                            <span></span>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <input type="submit" value="Sign up">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-info">
                    <div class="info-w3lsitem">
                        <div class="w3table">
                            <div class="w3table-cell">
                                <p> Have an account? </p>
                                <div class="btn"> Sign in </div>
                            </div>
                        </div>
                    </div>
                    <div class="info-w3lsitem">
                        <div class="w3table">
                            <div class="w3table-cell">
                                <p> Dont have an account?</p>
                                <div class="btn">Sign up</div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div> 
                
                
            </div> 
        </div>  
    </div>   
    <!-- //main -->
    <!-- js -->  
    <script  src={{ asset('js/jquery-2.0.3.min.js') }}></script> 
    <script>
        $(".info-w3lsitem .btn").click(function() {
              $(".main-agileinfo").toggleClass("log-in");
            });
            $(".container-form .btn").click(function() {
              $(".main-agileinfo").addClass("active");
        });
    </script>
    <!-- //js --> 
</body>
</html>
