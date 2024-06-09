@extends('app')


@section('css')
    <link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
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
                            <input type="text" name="name" value="サンプルテキスト" />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">
                            <input type="text" name="gender" value="サンプルテキスト" />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text">
                            <input type="email" name="email" value="サンプルテキスト" />
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__text">
                            <input type="tel" name="tel" value="09012345678" />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                        <td class="confirm-table__text">
                            <input type="text" name="address" value="サンプルテキスト" />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                        <td class="confirm-table__text">
                            <input type="text" name="building" value="サンプルテキスト" />
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの種類</th>
                        <td class="confirm-table__text">
                            <input type="text" name="category" value="サンプルテキスト" />
                        </td>
                    </tr>


                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ内容</th>
                        <td class="confirm-table__text">
                            <input type="text" name="content" value="サンプルテキスト" />
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-send" type="submit">送信</button>
                <button class="form__button-fix" type="submit">修正</button>
            </div>
        </form>
    </div>    
@endsection