CREATE DATABASE pokemon;
USE pokemon;

create table users(
    id int AUTO_INCREMEN not null primary key,
    username varchar(128) not null,
    password varchar(225) not null
);