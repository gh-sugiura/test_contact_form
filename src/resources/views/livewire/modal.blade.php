<!DOCTYPE html>
<html lang="ja">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app_admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}"> --}}
    @livewireStyles
</head>

{{-- @if($showModal == true) --}}
<body>
    @livewireScripts
    <div class="modal-window">
        <button wire:click="closeModal()" type="button">x</button>
        <button wire:click="openModal()" type="button">x</button>
    </div>

@if($showModal == true)
    <div class="modal-window">
        <table class="content">
            <tr>
                <td>お名前</td>
                <td>山田太郎</td>
            </tr>
            <tr>
                <td>性別</td>
                <td>男性</td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td>test@example.com</td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td>09012345678</td>
            </tr>
            <tr>
                <td>住所</td>
                <td>東京都</td>
            </tr>
            <tr>
                <td>建物名</td>
                <td>マンション101</td>
            </tr>
            <tr>
                <td>お問い合わせの種類</td>
                <td>商品のお届けについて</td>
            </tr>
            <tr>
                <td>お問い合わせ内容</td>
                <td>届いた商品が注文した商品ではありませんでした。商品の交換をお願いします。</td>
            </tr>
        </table>


        <div class="__button">
            <button class="admin-table__button--detail" type="submit">削除</button>
        </div>
    </div>
</body>
@endif