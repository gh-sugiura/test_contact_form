@extends("app")


@section("css")
    <link rel="stylesheet" href="{{asset("css/confirm.css")}}">
@endsection

@section("content")
    <div class="confirm-form__content">
        <div class="confirm-form__heading">
            <p>Confirm</p>
        </div>


        <form class="form" action="/thanks" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__text-name">
                            <input type="text" name="last_name" value="{{$contact["last_name"]}}" readonly />
                            <input type="text" name="first_name" value="{{$contact["first_name"]}}" readonly />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">
                            <input type="hidden" name="gender" value="{{$contact["gender"]}}" readonly/>
                            @if ($contact["gender"] == 1)
                                <input value="男性" readonly/>
                            @elseif ($contact["gender"] == 2)
                                <input value="女性" readonly/>
                            @else
                                <input value="その他" readonly/>
                            @endif
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text">
                            <input type="email" name="email" value="{{$contact["email"]}}" readonly/>
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__text">
                            <input type="tell" name="tell" value="{{$contact["tell1"] . $contact["tell2"] . $contact["tell3"]}}" readonly />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                        <td class="confirm-table__text">
                            <input type="text" name="address" value="{{$contact["address"]}}" readonly/>
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                        <td class="confirm-table__text">
                            <input type="text" name="building" value="{{$contact["building"]}}" readonly/>
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの種類</th>
                        <td class="confirm-table__text">
                            <input type="hidden" name="category_id" value="{{$contact["category_id"]}}" readonly/>
                            @if ($contact["category_id"] == 1)
                                <input value="商品のお届けについて" readonly/>
                            @elseif ($contact["category_id"] == 2)
                                <input value="商品の交換について" readonly/>
                            @elseif ($contact["category_id"] == 3)
                                <input value="商品トラブル" readonly/>
                            @elseif ($contact["category_id"] == 4)
                                <input value="ショップへのお問い合わせ" readonly/>
                            @else
                                <input value="その他" readonly/>
                            @endif
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ内容</th>
                        <td class="confirm-table__text">
                            <input type="text" name="detail" value="{{$contact["detail"]}}" readonly/>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-send" type="submit">送信</button>
                <button class="form__button-fix" type="submit" name ="back" value="back">修正</button>
            </div>
        </form>
    </div>    
@endsection