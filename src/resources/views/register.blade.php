@extends('app_admin')


@section('css')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('link')
    <div class="login">
        <a href="/login" class="login_link">login</a>
    </div> 
@endsection

@section('content')
    <div class="register-form__content">
        <div class="register-form__heading">
            <p>Register</p>
        </div>
        
        <form class="form_register" action="/register" method="post">
            @csrf
            <div class="register_card_inner">
                <div class="name">
                    <p class="name_text">お名前</p>
                    <input type="text" name="name" placeholder="例:山田太郎" value="{{ old('name') }}"/>
                    @error("name")
                        <div class="error_message">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
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
                    <input type="password" name="password" placeholder="例:coachtech1106" />
                    @error("password")
                        <div class="error_message">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
                <div class="register_button">
                    <button class="register_button_text" type="submit">登録</button>
                </div>
            </div>
        </form>
    </div>    
@endsection