<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('loginn/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginn/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginn/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginn/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginn/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginn/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginn/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginn/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('loginn/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>


<div class="limiter">
		<div class="container-login100">
			<div class="wrap-register100 p-l-50 p-r-50 p-t-77 p-b-30">
            <span class="login100-form-title p-b-55">
					{{ __('Register') }}</span>

                <div class="card-body">
                    <form method="POST" action="/post_daftar">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="name" type="text" class="input100" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nama">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="                                <input id="alamat" type="Alamat Lengkap" class=" input100" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus placeholder="alamat">
                                " type="alamat" class=" input100" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus placeholder="alamat">

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>







                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class=" input100" name="password" required autocomplete="new-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="konfirmasi password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="container-login100-form-btn p-t-25">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Register') }}
                                </button>

                                <div class="text-center w-full p-t-55">
						<span class="txt1">
							Sudah punya akun?
						</span>
						<a class="txt1 bo1 hov1" href="/login">
							Login disini
						</a>
					</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="{{asset('loginn/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loginn/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('loginn/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loginn/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loginn/js/main.js')}}"></script>

</body>
</html>
