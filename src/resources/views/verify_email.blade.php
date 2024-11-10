{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('メールアドレスをご確認ください') }}</div>
 
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('ご登録いただいたメールアドレスに確認用のリンクをお送りしました。') }}
                        </div>
                    @endif
 
                    {{ __('メールをご確認ください。') }}
                    {{ __('もし確認用メールが送信されていない場合は、下記をクリックしてください。') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('確認メールを再送信する') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}




@extends('app_admin')


@section('css')
    <link rel="stylesheet" href="{{asset('css/verify_email.css')}}">
@endsection


@section('link')
    <div class="login">
        <a href="/login" class="login_link">login</a>
    </div>  
@endsection


@section('content')
    <div class="login-form__content">
        <div class="login-form__heading">
            <p>Confirmation</p>
        </div>

        <div class="confirmation">
            <div class="title">
                <p class="title_text">確認メール送信完了</p>
            </div>
            <div class="color_area">
                <p class="color_area_text1">✔</p>
                <p class="color_area_text2">確認メールを送信しました</p>
            </div>
            <div class="message">
                <p class="message_text">ご登録いただいたメールアドレスに確認メールを送信しました。メール本文中の確認ボタン「認証完了」をクリックして登録を完了させて下さい。</p>
            </div>
        </div>                        
    </div>
@endsection