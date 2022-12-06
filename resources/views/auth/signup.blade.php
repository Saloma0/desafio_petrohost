<!DOCTYPE html>
<html lang="pt-AO">
<head>
	<title>Criar Conta</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('auth/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('auth/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{asset('auth/images/bg-01.jpg')}}');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="{{route('register')}}" method="POST"  class="login100-form validate-form flex-sb flex-w">
					@csrf
                    <div class="d-flex justify-content-center mb-4" style="margin: 0 auto">
						<a href="/">
							<img width="150" src="https://www.petrohost.ao/resources/uploads/logo/2022-01-23/petrohost-alojamento-web-criacao-de-websites-aplicativos-registo-de-dominios.png" alt="" srcset="">
						</a>
					</div>

                    <span class="login100-form-title p-b-53">
						Criar Conta
					</span>

					@if ($errors->any())
					<span class="login100-form-title p-b-53">
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li style="font-size: 10px;">{{ $error }}</li>
								@endforeach
							</ul>
						</div>	
					</span>
					@endif
					
					<div class="p-b-9">
						<span class="txt1">
							Nome
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Nome é obrigatório">
						<input class="input100" type="text" name="name" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-b-9">
						<span class="txt1">
							E-mail
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "E-mail é obrigatório">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-b-9">
						<span class="txt1">
							Telefone
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Telefone é obrigatório">
						<input class="input100" type="tel" name="telefone" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-b-9">
						<span class="txt1">
							Localização
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Localização é obrigatório">
						<input class="input100" placeholder="Ex:Luanda,Morro Bento" type="text" name="localidade" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-b-9">
						<span class="txt1">
							Data de nascimento
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Data de nascimento é obrigatório">
						<input class="input100" type="date" name="data_de_nascimento" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Senha
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Palavra-passe é obrigatória">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Confirmar Senha
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Confirme a palavra-passe">
						<input class="input100" type="password" name="password_confirmation" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn">
							Criar Conta
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Já tem uma conta?
						</span>

						<a href="{{route('login')}}" class="txt2 bo1" style="color: red;">
							Iniciar Sessão
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="{{asset('auth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('auth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('auth/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth/js/main.js')}}"></script>

</body>
</html>