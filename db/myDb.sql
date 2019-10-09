/******* CREATE THE TABLES *******/
CREATE TABLE users
( user_id       INTEGER     PRIMARY KEY
, username      VARCHAR(30) UNIQUE NOT NULL
, password      VARCHAR(30) NOT NULL
, email         VARCHAR(50) UNIQUE NOT NULL
, first_name    VARCHAR(30) NOT NULL
, last_name     VARCHAR(30) NOT NULL
, creation_date TIMESTAMP   NOT NULL
);
CREATE SEQUENCE users_s1 START WITH 1001;


CREATE TABLE administrators
( admin_id INTEGER  PRIMARY KEY
, user_id  INTEGER  NOT NULL REFERENCES users(user_id)
);
CREATE SEQUENCE administrators_s1 START WITH 1001;


CREATE TABLE posts
( post_id       INTEGER      PRIMARY KEY
, user_id       INTEGER      NOT NULL REFERENCES users(user_id)
, post_date     TIMESTAMP    NOT NULL
, post_title    VARCHAR(100) NOT NULL
, post_text     TEXT         NOT NULL
);
CREATE SEQUENCE posts_s1 START WITH 1001;


CREATE TABLE comments
( comment_id    INTEGER     PRIMARY KEY
, user_id       INTEGER     NOT NULL REFERENCES users(user_id)
, post_id       INTEGER     NOT NULL REFERENCES posts(post_id)
, comment_time  TIMESTAMP   NOT NULL
, comment_text  TEXT        NOT NULL
);
CREATE SEQUENCE comments_s1 START WITH 1001;


CREATE TABLE second_level_comments
( id            INTEGER     PRIMARY KEY
, user_id       INTEGER     NOT NULL REFERENCES users(user_id)
, comment_id    INTEGER     NOT NULL REFERENCES comments(comment_id)
, comment_time  TIMESTAMP   NOT NULL
, comment_text  TEXT        NOT NULL
);
CREATE SEQUENCE sl_comments_s1 START WITH 1001;


/******** ADD MYSELF AS ADMIN ********/
INSERT INTO users( user_id, username, password, email, first_name, last_name, creation_date)
VALUES( nextval('users_s1'), 'jlreiley', 'JLpass19', 'johnlouisreiley@gmail.com', 'John', 'Reiley', transaction_timestamp());

INSERT INTO administrators(admin_id, user_id)
VALUES( nextval('administrators_s1'), currval('users_s1'));

/******** ADD SOME DUMMY POSTS BY ME ********/
INSERT INTO posts
( post_id
, user_id
, post_date
, post_title
, post_text
)
VALUES
( nextval('posts_s1')
, currval('users_s1')
, transaction_timestamp()
, 'Test Post'
, 'This is just a sample blog post.  It is not about anything in particular.  I just wanted to make sure it is working.'
);

INSERT INTO posts
( post_id
, user_id
, post_date
, post_title
, post_text
)
VALUES
( nextval('posts_s1')
, currval('users_s1')
, transaction_timestamp()
, 'Learn How To Use console.log()'
, 'If you don''t know how to use console.log() in ES6, then this post is not for you.'
);


/******** ADD SOME DUMMY USERS ********/
INSERT INTO users( user_id, username, password, email, first_name, last_name, creation_date)
VALUES( nextval('users_s1'), 'dabum', 'password', 'fakeremail@gmail.com', 'Henry', 'Ford', transaction_timestamp());

INSERT INTO users( user_id, username, password, email, first_name, last_name, creation_date)
VALUES( nextval('users_s1'), 'grimeygiraffe', 'password', 'fakeemail@gmail.com', 'James', 'Polk', transaction_timestamp());
