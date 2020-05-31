<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - {{config('app.name')}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" href="img/core-img/school_logo.png">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_v1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_v1/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_v1/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_v1/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_v1/css/util.css">
    <link rel="stylesheet" type="text/css" href="login_v1/css/main.css">
    <!--===============================================================================================-->
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/school_logo.png">
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/school_logo.png" alt="IMG">
            </div>
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
					<span class="login100-form-title">
                        Members Login
					</span>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <div class="panel-body">
                        <div class="wrap-input100" >
                            <input class="input100" type="text" id="tssss_id" name="tssss_id" placeholder="Enter School ID Card #" value="{{ old('tssss_id') }}" required autofocus>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" id="password"  type="password" name="password" placeholder="Password" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                        </div>

                            <div class="txt2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> @lang('Remember Me')
                                    </label>
                                </div>
                            </div>
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">
                                    @lang('Login')
                                </button>

                                <!--<a class="txt2" href="{{ route('password.request') }}">-->
                                <!--    @lang('Forgot Your Password?')-->
                                <!--</a>-->
                            </div>
                    </div>
                </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="login_v1/vendor/bootstrap/js/popper.js"></script>
<script src="login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="login_v1/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="login_v1/js/main.js"></script>
</body>
</html>
