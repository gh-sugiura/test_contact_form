@extends("app_admin")


@section("css")
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal_js.css')}}">
@endsection


@section("link")
    <form class="logout" action="/logout" method="post">
        @csrf
        <button class="logout_button">logout</button>
    </form> 
@endsection


@section("content")
    <div class="admin__content">
        <div class="admin__heading">
            <p>Admin</p>
        </div>
        

        <form action="/admin" class="search" type="submit" method="get">
            @csrf
            <div class="search__input--name">
                {{-- <input type="text" name="name" placeholder="名前やメールアドレスを入力してください" value="{{ request('name') }}"/> --}}
                <input type="text" name="name" placeholder="名前やメールアドレスを入力してください"/>
            </div>

            <select class="search__input--gender" name="gender">
                <option selected disabled>性別</option>
                <option value="0">全て</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>

            <select class="search__input--category" name="category">
                <option selected disabled>お問い合わせの種類</option>
                <option value="1">商品のお届けについて</option>
                <option value="2">商品の交換について</option>
                <option value="3">商品トラブル</option>
                <option value="4">ショップへのお問い合わせ</option>
                <option value="5">その他</option>
            </select>

            {{-- <input type="date" class="search__input--date" name="date" value="{{ request('date') }}"> --}}
            <input type="date" class="search__input--date" name="date">
            
            <div class="search__button">
                <button class="search__button--search" type="submit" name="button" value="search">検索</button>
            </div>

            <div class="search__button">
                <button class="search__button--reset" type="submit" name="button" value="reset">リセット</button>
            </div>
        </form>


        <div class="function">
            <form action="/csv-export" class="function__export" method="get">
                @csrf
                <button class="function__button--export" type="submit">エクスポート</button>
                <input type="hidden" name="name" value="{{request("name")}}">
                <input type="hidden" name="gender" value="{{request("gender")}}">
                <input type="hidden" name="category" value="{{request("category")}}">
                <input type="hidden" name="date" value="{{request("date")}}">
            </form>
            <div class="fuction-pagenation">
                {{$contacts->appends(request()->query())->links()}}
                {{-- {{$contacts->appends(request()->query())->links("vendor.pagination.)}} --}}
            </div>
        </div>

        
        {{-- browser display --}}
        <table class="admin__table">
            <tr class="admin__row">
                <th class="admin__label">お名前</th>
                <th class="admin__label">性別</th>
                <th class="admin__label">メールアドレス</th>
                <th class="admin__label">お問い合わせの種類</th> 
                <th class="admin__label"></th>
            </tr>

            @foreach ($contacts as $contact)
                <tr class="admin__row">
                    <td class="admin__data">{{$contact["last_name"]}}{{$contact["first_name"]}}</td>
                    <td class="admin__data">
                        @if ($contact["gender"] == 1)
                            男性
                        @elseif ($contact["gender"] == 2)
                            女性
                        @else
                            その他
                        @endif
                    </td>
                    <td class="admin__data">{{$contact["email"]}}</td>
                    <td class="admin__data">{{$contact["category"]["content"]}}</td>
                    <td class="admin__data">
                        {{-- <form class="admin-table__button" action="/test-modal-js" method="get"> --}}
                            {{-- @csrf --}}
                            {{-- <button class="admin-table__button--detail" wire:click="openModal()" type="button">詳細</button> --}}
                            {{-- <button class="admin-table__button--detail" type="submit">詳細</button> --}}
                            <div class="admin-table__button--detail">詳細</div>
                            <input type="hidden" name="id" value={{$contact["id"]}}>
                        {{-- </form> --}}
                    </td>                  
                </tr>
            @endforeach
        </table>



        {{-- modal winndw --}}
        <div class="modal">
            <div class="modal_inner">
                <div class="button_top">
                    <button class="button_close" type="submit">✖</button>
                </div> 
                <table class="modal_table">
                    <tr>
                        <td class="title">お名前</td>
                        <td class="content">山田太郎</td>
                    </tr>
                    <tr>
                        <td class="title">性別</td>
                        <td class="content">男性</td>
                    </tr>
                    <tr>
                        <td class="title">メールアドレス</td>
                        <td class="content">yamada@example.com</td>
                    </tr>
                    <tr>
                        <td class="title">電話番号</td>
                        <td class="content">09012345678</td>
                    </tr>
                    <tr>
                        <td class="title">住所</td>
                        <td class="content">東京都</td>
                    </tr>
                    <tr>
                        <td class="title">建物名</td>
                        <td class="content">ABCビルディング</td>
                    </tr>
                    <tr>
                        <td class="title">お問い合わせの種類</td>
                        <td class="content">商品のお届けについて</td>
                    </tr>
                    <tr>
                        <td class="title">お問い合わせ内容</td>
                        <td class="content">あああ</td>
                    </tr>
                </table>
                <div class="button_bottom">
                    <button class="button_delete" type="submit">削除</button>
                </div>  
            </div>
        </div>
@endsection