function change() {
    // チェックボックスの状態を取得
    let japCheckbox = document.getElementById("jap");
    let engCheckbox = document.getElementById("eng");
    
    // 住所カラムの表示/非表示
    let japElements = document.querySelectorAll("th[id='jap'], td[id='jap']");
    for (let i = 0; i < japElements.length; i++) {
        japElements[i].style.display = japCheckbox.checked ? "" : "none";
    }
    
    // 年齢カラムの表示/非表示
    let engElements = document.querySelectorAll("th[id='eng'], td[id='eng']");
    for (let i = 0; i < engElements.length; i++) {
        engElements[i].style.display = engCheckbox.checked ? "" : "none";
    }
}

// ページ読み込み時に関数を実行して初期状態を設定
window.onload = function() {
    change();
}