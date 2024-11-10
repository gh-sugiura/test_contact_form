"use strict";
//要素を取得
const modal = document.querySelector(".modal")
const open = document.querySelector(".admin-table__button--detail")
const close = document.querySelector(".button_close");

//「開くボタン」をクリックしてモーダルを開く
function modalOpen() {
    modal.classList.add("active");
}
open.addEventListener("click", modalOpen);

//「閉じるボタン」をクリックしてモーダルを閉じる
function modalClose() {
    modal.classList.remove("active");
}
close.addEventListener("click", modalClose);

//「モーダルの外側」をクリックしてモーダルを閉じる
function modalOut(e) {
    if (e.target == modal) {
        modal.classList.remove("active");
    }
}
addEventListener("click", modalOut);




// < !--モーダルを開くボタン -->
// <button class="modal-open js-modal-open">モーダルを開く</button>

// <!--モーダル本体 -->
// <div class="modal js-modal">
//     <div class="modal-container">
//         <!-- モーダルを閉じるボタン -->
//         <div class="modal-close js-modal-close">×</div>
//         <!-- モーダル内部のコンテンツ -->
//         <div class="modal-content">
//             <p>開きました。</p>
//         </div>
//     </div>
// </div>

/* モーダルと背景の指定 */
// .modal{
//     position: fixed;
//     top: 0;
//     left: 0;
//     width: 100 %;
//     height: 100 %;
//     text - align: center;
//     background: rgba(0, 0, 0, 50 %);
//     padding: 40px 20px;
//     overflow: auto;
//     opacity: 0;
//     visibility: hidden;
//     transition: .3s;
//     box - sizing: border - box;
// }

/* モーダルの擬似要素の指定 */
// .modal:before{
//     content: "";
//     display: inline - block;
//     vertical - align: middle;
//     height: 100 %;
//     margin - left: -0.2em;
// }

/* クラスが追加された時の指定 */
// .modal.active{
//     opacity: 1;
//     visibility: visible;
// }

/* モーダル内側の指定 */
// .modal-inner{
//     position: relative;
//     display: inline - block;
//     vertical - align: middle;
//     max - width: 600px;
//     width: 90 %;
// }