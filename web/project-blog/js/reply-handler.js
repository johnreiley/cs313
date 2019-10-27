var popupFormIsOpen = false;

function openCommentBlock(commentId) {
    if (popupFormIsOpen) {
        closePopupForm();
    }

    let comment = document.querySelector(`#comment-${commentId}`);
    let name = document.querySelector(`#comment-${commentId} .comment-details`).innerText.split(" -")[0];

    let commentBlock = `
        <form class="fancy-form" method="post" action="actions/submit-comment.php?id=${}&comment-id=${commentId}">
            <div class="reply-prompt">Reply to ${name}'s comment</div>
            <div class="break"></div>
            <div class="fancy-input">
                <input type="text" id="name" name="name" required>
                <div class="fancy-input-txt">name</div>
            </div>
            <div class="fancy-input">
                <input type="email" id="email" name="email" required>
                <div class="fancy-input-txt">email</div>
            </div>
            <div class="fancy-input">
                <textarea name="comment" id="comment" cols="30" rows="10" required></textarea>
                <div class="fancy-input-txt">comments</div>
            </div>
            <div class="break"></div>
            <div class="fancy-btn">
                <input type="submit" value="Submit">
                <input type="button" value="Cancel" id="cancel-reply-btn">
            </div>
        </form>`;

    let popupForm = document.createElement('div');
    popupForm.id = 'popup-form';
    popupForm.innerHTML = commentBlock;

    comment.appendChild(popupForm);
    intializeFancyForm();
    popupFormIsOpen = true;

    document.querySelector('#cancel-reply-btn').onclick = () => {
        closePopupForm();
    }
}

function closePopupForm() {
    let popupForm = document.querySelector('#popup-form');
    popupForm.parentNode.removeChild(popupForm);
    popupFormIsOpen = false;
}