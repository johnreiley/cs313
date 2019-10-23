DROP TABLE second_level_comments;
DROP TABLE comments;
DROP TABLE posts;
DROP TABLE administrators;
DROP TABLE users;

DROP SEQUENCE users_s1;
DROP SEQUENCE administrators_s1;
DROP SEQUENCE posts_s1;
DROP SEQUENCE comments_s1;
DROP SEQUENCE sl_comments_s1;

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
, post_img      TEXT         NOT NULL
, post_text     TEXT         NOT NULL
);
CREATE SEQUENCE posts_s1 START WITH 1001;


CREATE TABLE comments
( comment_id    INTEGER      PRIMARY KEY
, post_id       INTEGER      NOT NULL REFERENCES posts(post_id)
, comment_name  VARCHAR(100) NOT NULL
, comment_email VARCHAR(100) NOT NULL
, comment_time  TIMESTAMP    NOT NULL
, comment_text  TEXT         NOT NULL
);
CREATE SEQUENCE comments_s1 START WITH 1001;


CREATE TABLE second_level_comments
( id            INTEGER     PRIMARY KEY
, comment_id    INTEGER     NOT NULL REFERENCES comments(comment_id)
, comment_name  VARCHAR(100) NOT NULL
, comment_email VARCHAR(100) NOT NULL
, comment_time  TIMESTAMP   NOT NULL
, comment_text  TEXT        NOT NULL
);
CREATE SEQUENCE sl_comments_s1 START WITH 1001;


/******** ADD MYSELF AS ADMIN ********/
INSERT INTO users( user_id, username, password, email, first_name, last_name, creation_date)
VALUES( nextval('users_s1'), 'jlreiley', 'cangetin', 'johnlouisreiley@gmail.com', 'John', 'Reiley', transaction_timestamp());

INSERT INTO administrators(admin_id, user_id)
VALUES( nextval('administrators_s1'), currval('users_s1'));

/******** ADD SOME DUMMY POSTS BY ME ********/
INSERT INTO posts
( post_id
, user_id
, post_date
, post_title
, post_img
, post_text
)
VALUES
( nextval('posts_s1')
, currval('users_s1')
, transaction_timestamp()
, 'Test Post'
, 'https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fspecials-images.forbesimg.com%2Fdam%2Fimageserve%2F1106530967%2F960x0.jpg%3Ffit%3Dscale'
, 'This is just a sample blog post.  It is not about anything in particular.  I just wanted to make sure it is working. This is just a sample blog post.  It is not about anything in particular.  I just wanted to make sure it is working. This is just a sample blog post.  It is not about anything in particular.  I just wanted to make sure it is working. This is just a sample blog post.  It is not about anything in particular.  I just wanted to make sure it is working.'
);

INSERT INTO posts
( post_id
, user_id
, post_date
, post_title
, post_img
, post_text
)
VALUES
( nextval('posts_s1')
, currval('users_s1')
, transaction_timestamp()
, 'Learn How To Use console.log()'
, 'https://i.udemycdn.com/course/750x422/1395136_3f8a_3.jpg'
, 'If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you. If you don''t know how to use console.log() in ES6, then this post is not for you.'
);

INSERT INTO posts
( post_id
, user_id
, post_date
, post_title
, post_img
, post_text
)
VALUES
( nextval('posts_s1')
, currval('users_s1')
, transaction_timestamp()
, 'Let''s Learn Some Italian!'
, 'https://www.trafalgar.com/-/media/Project/Trafalgar/Product/hero-images/Northern-Italy-Including-Cinque-Terre-w.jpg?smartCrop=1&centreCrop=1&w=1000&h=600'
, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque viverra mauris in aliquam sem fringilla ut. Nunc lobortis mattis aliquam faucibus purus in massa. Diam vel quam elementum pulvinar etiam non quam lacus. Elementum tempus egestas sed sed risus pretium quam vulputate dignissim. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Risus in hendrerit gravida rutrum quisque non tellus orci. Quis enim lobortis scelerisque fermentum dui faucibus in ornare quam. Hendrerit gravida rutrum quisque non tellus orci ac. Amet consectetur adipiscing elit ut aliquam purus sit. Ac feugiat sed lectus vestibulum mattis ullamcorper velit. Tortor condimentum lacinia quis vel eros donec ac odio tempor. Eget sit amet tellus cras adipiscing enim eu turpis. Tristique risus nec feugiat in fermentum posuere urna. Congue quisque egestas diam in arcu cursus euismod quis viverra. Id interdum velit laoreet id donec ultrices tincidunt arcu non. Enim ut tellus elementum sagittis vitae.<br>

Ultrices gravida dictum fusce ut. Ac feugiat sed lectus vestibulum mattis ullamcorper velit sed. Mattis enim ut tellus elementum sagittis vitae et leo duis. Ac auctor augue mauris augue. Rhoncus est pellentesque elit ullamcorper. Sagittis eu volutpat odio facilisis mauris sit amet. Elit duis tristique sollicitudin nibh sit amet commodo nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. In pellentesque massa placerat duis ultricies lacus sed. Sagittis eu volutpat odio facilisis. Egestas congue quisque egestas diam in arcu cursus euismod.<br>

Tortor aliquam nulla facilisi cras fermentum odio eu. Elementum sagittis vitae et leo duis ut. Diam vulputate ut pharetra sit amet aliquam. Arcu bibendum at varius vel pharetra. Nec feugiat in fermentum posuere urna nec. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Pharetra diam sit amet nisl suscipit adipiscing. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Odio pellentesque diam volutpat commodo. Sed odio morbi quis commodo odio aenean. Sed pulvinar proin gravida hendrerit lectus a.<br>

Vitae sapien pellentesque habitant morbi tristique senectus et netus et. In mollis nunc sed id semper. Amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus. Lectus magna fringilla urna porttitor rhoncus. Elementum integer enim neque volutpat ac tincidunt vitae semper. Sed augue lacus viverra vitae. Nunc faucibus a pellentesque sit amet porttitor eget. Sit amet volutpat consequat mauris. Nibh sit amet commodo nulla facilisi nullam vehicula ipsum. Tellus id interdum velit laoreet id donec ultrices tincidunt. Mi sit amet mauris commodo quis imperdiet. Amet mattis vulputate enim nulla. Ultrices mi tempus imperdiet nulla malesuada. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim. Rutrum tellus pellentesque eu tincidunt tortor aliquam. Dolor purus non enim praesent elementum facilisis leo. Velit aliquet sagittis id consectetur. Et netus et malesuada fames ac turpis egestas. In mollis nunc sed id semper. Sed augue lacus viverra vitae congue eu consequat ac felis.<br>

Quam elementum pulvinar etiam non quam lacus. Fames ac turpis egestas maecenas pharetra. Ut morbi tincidunt augue interdum. Elementum eu facilisis sed odio morbi quis commodo odio. Scelerisque felis imperdiet proin fermentum leo vel orci porta. Quis eleifend quam adipiscing vitae. Eget nunc scelerisque viverra mauris in aliquam. Consequat semper viverra nam libero justo. Mollis nunc sed id semper. Leo urna molestie at elementum eu facilisis sed odio. Ornare lectus sit amet est placerat in egestas erat. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Interdum varius sit amet mattis. Egestas congue quisque egestas diam. Erat imperdiet sed euismod nisi porta lorem mollis aliquam. Ridiculus mus mauris vitae ultricies leo integer malesuada nunc vel. Arcu cursus euismod quis viverra nibh cras pulvinar. Est lorem ipsum dolor sit amet consectetur. Eget magna fermentum iaculis eu non. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et.'
);


INSERT INTO comments
( comment_id
, post_id
, comment_name
, comment_email
, comment_time
, comment_text)
VALUES
( nextval('comments_s1')
, currval('posts_s1')
, 'John'
, 'fake@email.com'
, transaction_timestamp()
, 'Wow man, I really enjoyed learning all of this Italian.  I actually don''t think it''s Italian though..'
);

INSERT INTO comments
( comment_id
, post_id
, comment_name
, comment_email
, comment_time
, comment_text)
VALUES
( nextval('comments_s1')
, currval('posts_s1')
, 'George'
, 'fake@email.com'
, transaction_timestamp()
, 'I couldn''t understand any of this so I''m going to find another language to study.'
);

INSERT INTO comments
( comment_id
, post_id
, comment_name
, comment_email
, comment_time
, comment_text)
VALUES
( nextval('comments_s1')
, currval('posts_s1')
, 'Patricia'
, 'fake@email.com'
, transaction_timestamp()
, 'I thought this was a made-up langauge at first.'
);

INSERT INTO second_level_comments
( id
, comment_id
, comment_name
, comment_email
, comment_time
, comment_text)
VALUES
( nextval('sl_comments_s1')
, currval('comments_s1')
, 'James'
, 'fake@email.com'
, transaction_timestamp()
, 'Dude, me too!  Then I was like, "Oh wait, I''m a gerbal."'
);
