<?php

/****************SELECT QUERIES ***************/

// get user credentials
function getUserInfo($db)
{ }


// verify login credentials
function verifyLoginCredentials($db, $username, $password)
{
    $query = '
    SELECT 
      user_id
    , password
    , first_name
    , last_name
    FROM users
    WHERE username=:username';
    $stmt = $db->prepare($query);
    $stmt->execute(array(
        ':username' => $username
    ));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row != null && password_verify($password, $row['password'])) {
        return $row;
    } else {
        return null;
    }
}


// check if the user is an admin
function isAdminUser($db, $userId)
{
    $query = '
    SELECT admin_id FROM administrators
    WHERE user_id=:user_id';
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
    $query = '
    SELECT post_id, post_date, post_title, post_img, post_text 
    FROM posts 
    ORDER BY post_id DESC';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}


// get blog post
function getSinglePost($db, $postId)
{
    $query = '
    SELECT 
      post_id
    , post_date
    , post_title
    , post_img
    , post_text
    FROM posts
    WHERE post_id=:post_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':post_id' => $postId));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


// get blog post comments
function getPostComments($db, $postId)
{
    $query = '
    SELECT 
      comment_id
    , post_id
    , comment_name
    , comment_email
    , comment_time
    , comment_text
    FROM comments
    WHERE post_id=:post_id
    ORDER BY comment_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':post_id' => $postId));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}


// get blog post comments
function getSecondLevelComments($db, $commentId)
{
    $query = '
    SELECT 
      id
    , comment_id
    , comment_name
    , comment_email
    , comment_time
    , comment_text
    FROM second_level_comments 
    WHERE comment_id=:comment_id
    ORDER BY id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':comment_id' => $commentId));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
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
    , creation_date)
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
function postNewBlogPost($db, $postTitle, $postImg, $postText)
{
    $query = "
    INSERT INTO posts
    ( post_id
    , post_date
    , post_title
    , post_img
    , post_text)
    VALUES
    ( nextval('posts_s1')
    , transaction_timestamp()
    , :post_title
    , :post_img
    , :post_text
    )";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':post_title', $postTitle, PDO::PARAM_STR);
    $stmt->bindValue(':post_img', $postImg, PDO::PARAM_STR);
    $stmt->bindValue(':post_text', $postText, PDO::PARAM_STR);
    $stmt->execute();
}


// post new comment
function postNewComment($db, $postId, $name, $email, $commentText)
{
    $query = "
    INSERT INTO comments
    ( comment_id
    , post_id
    , comment_name
    , comment_email
    , comment_time
    , comment_text)
    VALUES
    ( nextval('comments_s1')
    , :post_id
    , :name
    , :email
    , transaction_timestamp()
    , :comment_text
    )";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':post_id', $postId, PDO::PARAM_INT);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':comment_text', $commentText, PDO::PARAM_STR);
    $stmt->execute();
}


// post new secondary comment
function postNewSecondLevelComment($db, $commentId, $name, $email, $commentText)
{
    $query = "
    INSERT INTO second_level_comments
    ( id
    , comment_id
    , comment_name
    , comment_email
    , comment_time
    , comment_text)
    VALUES
    ( nextval('sl_comments_s1')
    , :comment_id
    , :name
    , :email
    , transaction_timestamp()
    , :comment_text
    )";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':comment_id', $commentId, PDO::PARAM_INT);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':comment_text', $commentText, PDO::PARAM_STR);
    $stmt->execute();
}




/****************UPDATE QUERIES**************/

// edit blog post
function updateBlogPost($db, $postId, $postTitle, $postImg, $postText)
{ 
    $query = "
    UPDATE posts
    SET post_title = :post_title
    ,   post_img = :post_img
    ,   post_text = :post_text
    WHERE
      post_id = :post_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':post_id', $postId, PDO::PARAM_STR);
    $stmt->bindValue(':post_title', $postTitle, PDO::PARAM_STR);
    $stmt->bindValue(':post_img', $postImg, PDO::PARAM_STR);
    $stmt->bindValue(':post_text', $postText, PDO::PARAM_STR);
    $stmt->execute();
}


/***************DELETE QUERIES****************/

// delete blog post
function deleteBlogPost($db, $postId)
{
    $query = '
    SELECT comment_id FROM comments
    WHERE post_id=:post_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':post_id' => $postId));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        echo $row['comment_id'];
        // deleteComment($db, $row['comment_id']);
    }

    // $query = '
    // DELETE FROM posts
    // WHERE post_id=:post_id';
    // $stmt = $db->prepare($query);
    // $stmt->execute(array(':post_id' => $postId));
}


// delete comment
function deleteComment($db, $commentId)
{
    $query = '
    DELETE FROM second_level_comments
    WHERE comment_id=:comment_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':comment_id' => $commentId));

    $query = '
    DELETE FROM comments
    WHERE comment_id=:comment_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':comment_id' => $commentId));
}


// delete secondary comment
function deleteSecondaryComment($db, $commentId)
{
    $query = '
    DELETE FROM second_level_comments
    WHERE id=:comment_id';
    $stmt = $db->prepare($query);
    $stmt->execute(array(':comment_id' => $commentId));
}



/*********** RANDOM FUNCTIONS ***************/

function formatDatabaseTimestampFull($timestamp) {
    $date = date("F j, Y H:i", strtotime($timestamp . " -6 hours"));
    $dateArray = explode(" ", $date);
    $time = $dateArray[3];
    
    if ((int) substr($time, 0, 2) > 11) $time = "$time PM";
    else $time = "$time AM";
    if ((int) substr($time, 0, 2) > 12) $time = (int) substr($time, 0, 2) - 12 . substr($time, 2, 7);
    $dateArray[3] = " $time";
    
    return implode(" ", $dateArray) . " MDT";
}

function formatDatabaseTimestampDate($timestamp) {
    $date = date("F j, Y H:i", strtotime($timestamp . " -6 hours"));
    $dateArray = array_slice(explode(" ", $date), 0, 3);
    return implode(" ", $dateArray);
}