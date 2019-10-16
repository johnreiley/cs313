<?php

/****************SELECT QUERIES ***************/

// get user credentials
function getUserInfo()
{ }


// check if the user is an admin
function isAdminUser($db, $userId)
{
    $query = '
    SELECT admin_id FROM administrators
    WHERE user_id = id=:user_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':user_id' => $userId));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row['admin_id'] != null) {
        return true;
    } else {
        return false;
    }
}


// get all blog posts
function getAllPosts($db)
{
    $query = 'SELECT post_date, post_title, post_text FROM posts';
    $stmt = $db->prepare($query);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}


// get blog post and its comments
function getSinglePost($db, $postId)
{
    $query = '
    SELECT * FROM posts
    WHERE post_id = id=:post_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':post_id' => $postId));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}




/************INSERT QUERIES**************/

// register new user
function registerNewUser($db, $username, $password, $email, $firstName, $lastName)
{
    $query = '
    INSERT INTO users
    ( user_id
    , username
    , password
    , email
    , first_name
    , last_name
    , creation_date
    VALUES
    ( users_s1.NEXTVAL
    , username=:username
    , password=:password
    , email=:email
    , first_name=:first_name
    , last_name=:last_name
    , transaction_timestamp()
    )';
    $stmt = $db->prepare($query);
    $stmt->execute(array(
        ':username' => $username, 
        ':password' => $password, 
        ':email' => $email, 
        ':first_name' => $firstName, 
        ':last_name' => $lastName
    ));
}


// post new blog post
function postNewBlogPost($db, $userId, $postTitle, $postText)
{ 
    $query = '
    INSERT INTO posts
    ( post_id
    , user_id
    , post_date
    , post_title
    , post_text
    VALUES
    ( posts_s1.NEXTVAL
    , user_id=:user_id
    , transaction_timestamp()
    , post_title=:post_title
    , post_text=:post_text
    )';
    $stmt = $db->prepare($query);
    $stmt->execute(array(
        ':user_id' => $userId,
        ':post_title' => $postTitle,
        ':post_text' => $postText
    ));
}


// post new comment
function postNewComment($db, $userId, $postId, $commentText)
{ }


// post new secondary comment
function postNewSecondaryComment($db, $userId, $commentId, $commentText)
{ }




/****************UPDATE QUERIES**************/

// edit blog post
function updateBlogPost($db, $postTitle, $postText)
{ }



/***************DELETE QUERIES****************/

// delete blog post
function deleteBlogPost($db, $postId)
{
    $query = '
    DELETE FROM posts
    WHERE post_id = id=:post_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':post_id' => $postId));
}


// delete comment
function deleteComment($db, $commentId)
{ 
    $query = '
    DELETE FROM comments
    WHERE comment_id = id=:comment_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':comment_id' => $commentId));
}


// delete secondary comment
function deleteSecondaryComment($db, $commentId)
{
    $query = '
    DELETE FROM second_level_comments
    WHERE id = id=:comment_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':comment_id' => $commentId));
}
