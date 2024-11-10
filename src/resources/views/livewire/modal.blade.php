<div>
    <button wire:click="openModal" type="button" style="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
        open
    </button>
 
    @if($showModal)
        <div style="fixed z-10 inset-0 overflow-y-auto">
            <div style="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div style="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">aaa</div>               
 
                <div style="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div style="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h3 style="text-lg leading-6 font-medium text-gray-900">
                            モーダルウィンドウ
                        </h3>
                        <div style="mt-2">
                            <p style="text-sm text-gray-500">
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
                            </p>
                            <div class="button">
                                <button class="admin-table__button--detail" type="submit">削除</button>
                            </div>
                        </div>
                    </div>
                    <div style="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button wire:click="closeModal" type="button" style="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700">
                            閉じる
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>