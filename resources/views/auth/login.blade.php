@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
	<link href="login.css"   rel="stylesheet" type="text/css" >
        <title> Iniciar sesion </title>
</head>   
<body> 
<center>
<div class="loginColor">

    <!--<div class="row justify-content-center">-->
       <div class="titulo">
            <!--<div class="card">-->
                <!--<div>-->
				 <!--<div>-->
				<br>
				<span class="texto"> {{ __('Login') }}</span>
				<br>
				<br>
				<img class="icon" src="img/login.png">
				<br>
				
				 <!--</div>-->

                <div class="formu">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                      <!--  <div class="form-group row">-->
                            <label for="email">{{ __('usuario') }}</label>
							
                            <!--<div class="col-md-6">-->
							<br>
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!--</div>-->
                       <!-- </div>-->

                      <!--  <div class="form-group row">--><br>
                            <label for="password">{{ __('contraseña') }}</label>

                           <!-- <div class="col-md-6">-->
						   <br>
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!--</div>-->
                        <!--</div>-->

                       <!-- <div >-->
                           <!--  <div>-->
                              <!--   <div>-->
							  <br>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="checkbox" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
									<br>
                              <!--   </div>-->
                          <!--   </div>-->
                        <!--</div>-->

                        <!--<div class="form-group row mb-0">-->
                            <div>
                                <button type="submit" class="btn2">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn3" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        <!--</div>-->
                    </form>
                </div>
            <!--</div>-->
        </div>
    </div>
</center>
</div>

@endsection

{{--
 
<div>
          <div class="login-page">
            <div class="form">
              <form action="sesion.php" method="POST">
               
                <input type="text" name="usuario"  placeholder="Introduzca su usuario"/>
                <input type="password" name="contraseña" placeholder="Introduzca su contraseña"/>

                <button >login</button>
                
              </form>
            </div>
          </div>
</div>

    </body>
   
    </html>
--}}