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
        
        <form class="form_register">
            <div class="register_card_inner">
                <div class="email">
                    <p class="email_text">お名前</p>
                    <input type="text" name="name" placeholder="例:山田　太郎" />
                </div>
                <div class="email">
                    <p class="email_text">メールアドレス</p>
                    <input type="email" name="email" placeholder="例:test@example.com" />
                </div>
                <div class="password">
                    <p class="password_text">パスワード</p>
                    <input type="text" name="password" placeholder="例: coachtech1106" />
                </div>
                <div class="register_button">
                    <button class="register_button_text" type="submit">登録</button>
                </div>
            </div>
        </form>

    </div>    
@endsection