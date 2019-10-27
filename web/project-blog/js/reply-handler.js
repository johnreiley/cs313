function openCommentBlock(commentId) {
    let comment = document.querySelector(`#comment-${commentId}`);
    let name = document.querySelector(`#comment-${commentId} .comment-details`).innerText.split(" -")[0];
    console.log(name);
}


let commentBlock = `
<form class="fancy-form" method="post" action="actions/submit-comment.php?id=<?php echo $id ?>&type=1">
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
</div>
</form>`