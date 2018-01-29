window.onload = function changeBodyImg() {
    if (location.pathname !== '/' && location.pathname !== '/ganga/') {
        document.body.removeAttribute('style');
    }
}
changeBodyImg();