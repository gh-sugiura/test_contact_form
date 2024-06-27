@extends('app_admin')


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('link')
    <div class="logout">
        <a href="" class="logout_link">logout</a>
    </div> 
@endsection

@section('content')
    <div class="admin__content">
        <div class="admin__heading">
            <p>Admin</p>
        </div>
        

        <div class="search">
            <div class="search__input--name">
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

            <input type="date" class="search__input--date" name="date">
            
            <div class="search__button">
                <button class="search__button--search" type="submit">検索</button>
            </div>

            <div class="search__button">
                <button class="search__button--reset" type="submit">リセット</button>
            </div>
        </div>


        <div class="function">
            <div class="function__export">
                <button class="function__button--export" type="submit">エクスポート</button>
            </div>
            <div class="fuction-pagenation">
                {{$contacts->links()}}
            </div>
        </div>


        <table class="admin-table">
            <tr class="admin-table__row">
                <th class="admin-table__header">
                    <span class="admin-table__header--name">お名前</span>
                    <span class="admin-table__header--gender">性別</span>
                    <span class="admin-table__header--email">メールアドレス</span>
                    <span class="admin-table__header--category">お問い合わせの種類</span> 
                    <span class="admin-table__header--detail"></span>
                </th>
            </tr>

            @foreach ($contacts as $contact)
                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <span class="admin-table__item--name">{{$contact["last_name"]}}{{$contact["first_name"]}}</span>
                        <span class="admin-table__item--gender">
                            @if ($contact["gender"] == 1)
                                男性
                            @elseif ($contact["gender"] == 2)
                                女性
                            @else
                                その他
                            @endif
                        </span>
                        <span class="admin-table__item--email">{{$contact['email']}}</span>
                        <span class="admin-table__item--category">
                            {{$contact["category"]["content"]}}
                        </span>
                        {{-- <div class="admin-table__button">
                            <button class="admin-table__button--detail" wire:click="openModal()" type="button">詳細</button>
                        </div> --}}
                        <form class="admin-table__button" action="/modal" method="get">
                            @csrf
                            <button class="admin-table__button--detail" wire:click="openModal()" type="button">詳細</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection