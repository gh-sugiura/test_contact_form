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
                        <input type="text" name="last_name" placeholder="例:山田" value="{{old("last_name")}}"/>
                        <input type="text" name="first_name" placeholder="例:太郎" value="{{old("first_name")}}"/>
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
                        <input type="radio" name="gender" value="1" {{old("gender") == "gender1" ? "checked" : "" }}checked/>男性
                        <input type="radio" name="gender" value="2" {{old("gender") == "gender2" ? "checked" : "" }}/>女性
                        <input type="radio" name="gender" value="3" {{old("gender") == "gender3" ? "checked" : "" }}/>その他
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
                    <div class="form__input--tell">
                        <input type="text" name="tell1" placeholder="090" value="{{old("tell1")}}"/>
                        <span>-</span>
                        <input type="text" name="tell2" placeholder="1234" value="{{old("tell2")}}"/>
                        <span>-</span>
                        <input type="text" name="tell3" placeholder="5678" value="{{old("tell3")}}"/>
                    </div>
                    <div class="form__error">
                        @error("tell1")
                            {{ $message }} 
                        @enderror
                        @error("tell2")
                            {{ $message }} 
                        @enderror
                        @error("tell3")
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
                    <select class="form__input--category" name="category_id">
                        <option selected disabled>選択してください</option>
                        <option value="1" @if(old("category_id")=="1") selected  @endif>商品のお届けについて</option>
                        <option value="2" @if(old("category_id")=="2") selected  @endif>商品の交換について</option>
                        <option value="3" @if(old("category_id")=="3") selected  @endif>商品トラブル</option>
                        <option value="4" @if(old("category_id")=="4") selected  @endif>ショップへのお問い合わせ</option>
                        <option value="5" @if(old("category_id")=="5") selected  @endif>その他</option>
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
                        <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{old("detail")}}"></textarea>
                    </div>
                    <div class="form__error">
                        @error("detail")
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