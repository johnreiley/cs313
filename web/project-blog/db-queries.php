<?php

/****************SELECT QUERIES ***************/

// get user credentials
function getUserInfo()
{ }


// check if the user is an admin
function isAdminUser($userId)
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
function getAllPosts()
{
    $query = 'SELECT * FROM posts';
    $stmt = $db->prepare($query);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}


// get blog post and its comments
function getSinglePost($postId)
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
function registerNewUser($username, $password, $email, $firstName, $lastName)
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
function postNewBlogPost($userId, $postTitle, $postText)
{ }


// post new comment
function postNewComment($userId, $postId, $commentText)
{ }


// post new secondary comment
function postNewSecondaryComment($userId, $commentId, $commentText)
{ }



/****************UPDATE QUERIES**************/

// edit blog post
function updateBlogPost()
{ }



/***************DELETE QUERIES****************/

// delete blog post
function deleteBlogPost($postId)
{ }


// delete comment
function deleteComment($commentId)
{ }


// delete secondary comment
function deleteSecondaryComment($commentId)
{ }
