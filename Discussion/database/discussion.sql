CREATE DATABASE discussion;

CREATE TABLE customer
(
user_id int not null primary key,
email varchar(256) not null,
password text not null,
display_name varchar(50) not null,
auth_token varchar(256) not null,
birthday date, /*not null,*/
status varchar(256),
image_cover text,
image_profile text,
created_date date not null,
updated_date date not null
);

CREATE TABLE post
(
post_id int not null primary key,
title text,
content text not null,
user_id int not null,
created_date date not null,
updated_date date not null,
CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE grade
(
grade_id int not null primary key,
name varchar(50) not null
);

CREATE TABLE subject
(
subject_id int not null primary key,
name varchar(50) not null
);

CREATE TABLE category
(
category_id int not null primary key,
grade_id int not null,
subject_id int not null,
name varchar(50) not null,
CONSTRAINT fk_grade FOREIGN KEY (grade_id) REFERENCES grade(grade_id),
CONSTRAINT fk_subject FOREIGN KEY (subject_id) REFERENCES subject(subject_id)
);

CREATE TABLE comment
(
comment_id int not null primary key,
content text not null,
user_id int not null,
post_id int not null,
created_date date not null,
updated_date date not null,
CONSTRAINT fk_post FOREIGN KEY (post_id) REFERENCES post(post_id),
CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES users(user_id)
);