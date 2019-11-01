var title = document.querySelector('#title');
var imgUrl = document.querySelector('#img-url');
var bodyText = document.querySelector('#body-text');
var editor = document.querySelector('.ql-editor');

var titleDiv = document.querySelector('.page-title');
var info = document.querySelector('.post-info');
var img = document.querySelector('.post-img').firstElementChild;
console.log(img);
var bodyTextDiv = document.querySelector('.post-body');

titleDiv.innerText = title.value;
img.src = imgUrl.value;
bodyTextDiv.innerHTML = editor.innerHTML;

title.addEventListener('keyup', keyupListener);
imgUrl.addEventListener('keyup', keyupListener);
editor.addEventListener('keyup', keyupListener);

title.addEventListener('blur', keyupListener);
imgUrl.addEventListener('blur', keyupListener);
editor.addEventListener('blur', keyupListener);

function keyupListener(e) {
    titleDiv.innerText = title.value;
    img.src = imgUrl.value;
    bodyTextDiv.innerHTML = editor.innerHTML;

    bodyText.value = editor.innerHTML;
}