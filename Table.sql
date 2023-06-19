CREATE TABLE relation
(user_id INT NOT NULL,
 follower_id INT NOT NULL,
 PRIMARY KEY(user_id),
 FOREIGN KEY fkey9(user_id)
             REFERENCES user(user_id)
)

CREATE TABLE post
(post_id INT NOT NULL,
 user_id INT NOT NULL,
 post_contents VARCHAR(191) NOT NULL,
 post_image VARCHAR(191) NOT NULL,
 post_date DATE NOT NULL,
 PRIMARY KEY(post_id),
 FOREIGN KEY fkey10(user_id)
             REFERENCES user(user_id)
)

CREATE TABLE comment
(comment_id INT NOT NULL,
 post_id INT NOT NULL,
 user_id INT NOT NULL,
 comment_contents VARCHAR(191) NOT NULL,
 comment_date DATE NOT NULL,
 PRIMARY KEY(comment_id),
 FOREIGN KEY fkey11(post_id)
             REFERENCES post(post_id),
 FOREIGN KEY fkey12(user_id)
            REFERENCES user(user_id)
)

CREATE TABLE postitem
(postitem_id INT NOT NULL,
 post_id INT NOT NULL,
 item_id INT NOT NULL,
 PRIMARY KEY(postitem_id),
 FOREIGN KEY fkey13(post_id)
             REFERENCES post(post_id),
 FOREIGN KEY fkey14(item_id)
             REFERENCES items(item_id)
)
