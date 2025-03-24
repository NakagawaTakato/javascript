const menu = document.querySelector('#header-menu')
const btn = document.querySelector('#hamburger')

btn.addEventListener('click', () => {
    btn.classList.toggle('open')
    menu.classList.toggle('open')
    if (menu.classList.contains("open")) {
        menu.style.width = "350px"
        menu.style.right = '0'
         // オーバーレイを表示
        overlay.style.display = 'block'
    } else {
        menu.style.width = "0"
        // オーバーレイを非表示
        overlay.style.display = 'none'
    }
    
})

// オーバーレイをクリックしたときにメニューを閉じる機能を追加（オプション）
overlay.addEventListener('click', () => {
    btn.classList.remove('open')
    menu.classList.remove('open')
    menu.style.width = "0"
    overlay.style.display = 'none'
})