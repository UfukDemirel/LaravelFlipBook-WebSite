@extends('Login.app')
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{route('registerpost')}}" method="post">
                    @csrf
					<span class="login100-form-title p-b-26">
						Welcome
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="name" value="{{old('name')}}">
                        <span class="focus-input100" data-placeholder="Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="surname" value="{{old('surname')}}">
                        <span class="focus-input100" data-placeholder="Surname"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="email" value="{{old('email')}}">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100" type="password" name="password" value="{{old('password')}}">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="phone" value="{{old('phone')}}">
                        <span class="focus-input100" data-placeholder="Phone"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
						<span class="txt1">
							Don’t have an account?
						</span>

                        <a class="txt2" href="{{route('login')}}">
                            Sign İn
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
