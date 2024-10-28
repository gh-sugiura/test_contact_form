@extends('app_admin')


@section('css')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('link')
    <div class="register">
        <a href="/register" class="register_link">register</a>
    </div> 
@endsection

@section('content')
    <div class="login-form__content">
        <div class="login-form__heading">
            <p>Login</p>
        </div>
        
        <form class="form_login" action="/login" method="post">
            @csrf
            <div class="login_card_inner">
                <div class="email">
                    <p class="email_text">メールアドレス</p>
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}"/>
                    @error("email")
                        <div class="error_message">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
                <div class="password">
                    <p class="password_text">パスワード</p>
                    <input type="password" name="password" placeholder="例: coachtech1106" />
                    @error("password")
                        <div class="error_message">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
                <div class="login_button">
                    <button class="login_button_text" type="submit">ログイン</button>
                </div>
            </div>
        </form>

    </div>    
@endsection