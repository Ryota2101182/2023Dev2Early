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
 item_id INT NOT NULL,
 post_contents VARCHAR(191) NOT NULL,
 post_image VARCHAR(191) NOT NULL,
 post_date DATE NOT NULL,
 PRIMARY KEY(post_id),
 FOREIGN KEY fkey10(user_id)
             REFERENCES user(user_id),
 FOREIGN KEY fkey11(item_id)
             REFERENCES items(item_id)
)

CREATE TABLE comment
(comment_id INT NOT NULL,
 post_id INT NOT NULL,
 user_id INT NOT NULL,
 comment_contents VARCHAR(191) NOT NULL,
 comment_date DATE NOT NULL,
 PRIMARY KEY fkey12(post_id)
             REFERENCES post(post_id),
 PRIMARY KEY fkey13(user_id)
            REFERENCES user(user_id)
)