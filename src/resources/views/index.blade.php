@extends('app')


@section('css')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <p>Contact</p>
        </div>


        <form class="form" action="/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--name">
                        <input type="text" name="first_name" placeholder="例:山田" value="{{old("first_name")}}"/>
                        <input type="text" name="last_name" placeholder="例:太郎" value="{{old("last_name")}}"/>
                    </div>
                    <div class="form__error">
                        @error("first_name")
                            {{ $message }} 
                        @enderror
                        @error("last_name")
                            {{ $message }} 
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--gender">
                        <input type="radio" name="gender" value="男性" {{old("gender") == "gender1" ? "checked" : "" }}checked/>男性
                        <input type="radio" name="gender" value="gender2" {{old("gender") == "gender2" ? "checked" : "" }}/>女性
                        <input type="radio" name="gender" value="gender3" {{old("gender") == "gender3" ? "checked" : "" }}/>その他
                    </div>
                    <div class="form__error">
                        @error("gender")
                            {{ $message }} 
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例:test@example.com" value="{{old("email")}}"/>
                    </div>
                    <div class="form__error">
                        @error("email")
                            {{ $message }} 
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--tel">
                        <input type="text" name="tel1" placeholder="090" value="{{old("tel1")}}"/>
                        <span>-</span>
                        <input type="text" name="tel2" placeholder="1234" value="{{old("tel2")}}"/>
                        <span>-</span>
                        <input type="text" name="tel3" placeholder="5678" value="{{old("tel3")}}"/>
                    </div>
                    <div class="form__error">
                        @error("tel1")
                            {{ $message }} 
                        @enderror
                        @error("tel2")
                            {{ $message }} 
                        @enderror
                        @error("tel3")
                            {{ $message }} 
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{old("address")}}"/>
                    </div>
                    <div class="form__error">
                        @error("address")
                            {{ $message }} 
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{old("building")}}"/>
                    </div>
                    <div class="form__error">
                    </div>
                </div>
            </div>


            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--category">
                    <select class="form__input--category" name="category">
                        <option selected disabled>選択してください</option>
                        <option value="category1" @if(old("category")=='category1') selected  @endif>商品のお届けについて</option>
                        <option value="category2" @if(old("category")=='category2') selected  @endif>商品の交換について</option>
                        <option value="category3" @if(old("category")=='category3') selected  @endif>商品トラブル</option>
                        <option value="category4" @if(old("category")=='category4') selected  @endif>ショップへのお問い合わせ</option>
                        <option value="category5" @if(old("category")=='category5') selected  @endif>その他</option>
                    </select>
                    <div class="form__error">
                        @error("category")
                            {{ $message }} 
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="content" placeholder="お問い合わせ内容をご記載ください" value="{{old("content")}}"></textarea>
                    </div>
                    <div class="form__error">
                        @error("content")
                            {{ $message }} 
                        @enderror
                    </div>
                </div>
            </div>

            
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>    
@endsection