function equalHeight(elements) {
    const target = Array.from(document.querySelectorAll(elements));
    const heightList = [];
    target.forEach(element => {
        const height = element.clientHeight;
        heightList.push(height);
    });
    const maxHeight = Math.max.apply(null,heightList);
    target.forEach(element => {
        element.style.height = maxHeight + 'px';
    });
    }

    equalHeight('.news-height');

    
document.getElementById("navbtn").onclick = function(){
    document.querySelector('html').classList.toggle('open');
    document.getElementById("navlist").onclick = function(){
    document.querySelector('html').classList.toggle('open');
    }
}