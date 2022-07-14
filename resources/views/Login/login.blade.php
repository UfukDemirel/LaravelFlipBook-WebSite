@extends('Login.app')
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{route('loginpost')}}" method="post">
                    @csrf
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="email" value="{{old('name')}}">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100" type="password" name="password" value="{{old('password')}}">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div align="center">
                        <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-dark">
                            Login
                        </button>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
						<span class="txt1">
							Şifrenizi mi unuttunuz?
						</span>
                        &nbsp;
                        <a class="txt2" href="{{route('forget.password.get')}}">
                            Değiştir
                        </a>
                    </div>
                    <br>
                    <div class="text-center">
						<span class="txt1">
							Hala kayıt olmadınız mı?
						</span>
                        &nbsp;
                        <a class="txt2" href="{{route('register')}}">
                            Kayıt ol
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
