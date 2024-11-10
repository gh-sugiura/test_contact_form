<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal_js.css')}}">
</head>

<body>
    <div class="modal">
        <div class="button_top">
            <button class="button_close" type="submit">✖</button>
        </div> 
        <table class="modal_table">
            <tr>
                <td class="title">お名前</td>
                <td class="content">{{$contacts[0]["last_name"]}}{{$contacts[0]["first_name"]}}</td>
            </tr>
            <tr>
                <td class="title">性別</td>
                <td class="content">
                    @if ($contacts[0]["gender"] == 1)
                        男性
                    @elseif ($contacts[0]["gender"] == 2)
                        女性
                    @else
                        その他
                    @endif
                </td>
            </tr>
            <tr>
                <td class="title">メールアドレス</td>
                <td class="content">{{$contacts[0]["email"]}}</td>
            </tr>
            <tr>
                <td class="title">電話番号</td>
                <td class="content">{{$contacts[0]["tell"]}}</td>
            </tr>
            <tr>
                <td class="title">住所</td>
                <td class="content">{{$contacts[0]["address"]}}</td>
            </tr>
            <tr>
                <td class="title">建物名</td>
                <td class="content">{{$contacts[0]["building"]}}</td>
            </tr>
            <tr>
                <td class="title">お問い合わせの種類</td>
                <td class="content">
                    @if ($contacts[0]["category_id"] == 1)
                        商品のお届けについて
                    @elseif ($contacts[0]["category_id"] == 2)
                        商品の交換について
                    @elseif ($contacts[0]["category_id"] == 3)
                        商品トラブル
                    @elseif ($contacts[0]["category_id"] == 4)
                        ショップへのお問い合わせ
                    @else
                        その他
                    @endif
                </td>
            </tr>
            <tr>
                <td class="title">お問い合わせ内容</td>
                <td class="content">{{$contacts[0]["detail"]}}</td>
            </tr>
        </table>
        <div class="button_bottom">
            <button class="button_delete" type="submit">削除</button>
        </div>  
    </div>
</body>

</html>