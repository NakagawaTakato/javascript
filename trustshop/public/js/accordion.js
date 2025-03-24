const buttons = document.querySelectorAll('.accordion__button');

buttons.forEach((button) => {
    button.addEventListener('click', (e) => {
        const body = e.currentTarget.nextElementSibling;
        // すべてのテキスト要素の高さを計算
        const allTexts = body.querySelectorAll('p');
        let totalHeight = 0;
        
        allTexts.forEach(text => {
            totalHeight += text.offsetHeight;
        });

        const menu = e.currentTarget.parentNode;
        menu.classList.toggle('open');

        if (menu.classList.contains('open')) {
            body.style.height = totalHeight + 'px';
        } else {
            body.style.height = 0;
        }
    });
});
