var title = document.querySelector('#title');
var imgUrl = document.querySelector('#imgUrl');
var bodyText = document.querySelector('#body-text');

var titleDiv = document.querySelector('.page-title');
var img = document.querySelector('.post-img').firstChild;
var bodyTextDiv = document.querySelector('.post-text');

titleDiv.innerText = title.value;
img.src = imgUrl.value;
bodyTextDiv.innerHTML = bodyText.value;

title.addEventListener('keyup', keyupListener);
imgUrl.addEventListener('keyup', keyupListener);
bodyText.addEventListener('keyup', keyupListener);

function keyupListener(e) {
    titleDiv.innerText = title.value;
    img.src = imgUrl.value;
    bodyTextDiv.innerHTML = bodyText.value;
}