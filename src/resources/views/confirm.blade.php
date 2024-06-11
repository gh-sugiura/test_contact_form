@extends("app")


@section("css")
    <link rel="stylesheet" href="{{asset("css/confirm.css")}}">
@endsection

@section("content")
    <div class="confirm-form__content">
        <div class="confirm-form__heading">
            <p>Confirm</p>
        </div>


        <form class="form">
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__text">
                            <input type="text" name="name" value="{{$contact["first_name"] . $contact["last_name"]}}" readonly />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">
                            <input type="text" name="gender" value="{{$contact["gender"]}}" />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text">
                            <input type="email" name="email" value="{{$contact["email"]}}" />
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__text">
                            <input type="tel" name="tel" value="{{$contact["tel1"] . $contact["tel2"] .  $contact["tel3"]}}" readonly />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                        <td class="confirm-table__text">
                            <input type="text" name="address" value="{{$contact["address"]}}" />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                        <td class="confirm-table__text">
                            <input type="text" name="building" value="{{$contact["building"]}}" />
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの種類</th>
                        <td class="confirm-table__text">
                            <input type="text" name="category" value="{{$contact["category"]}}" />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ内容</th>
                        <td class="confirm-table__text">
                            <input type="text" name="content" value="{{$contact["content"]}}" />
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