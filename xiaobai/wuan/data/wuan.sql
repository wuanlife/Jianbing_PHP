CREATE DATABASE IF NOT EXISTS wuan ;
USE wuan;

-- 用户列表
DROP TABLE IF EXISTS users;
CREATE TABLE  users (
userID TINYINT UNSIGNED AUTO_INCREMENT KEY,
userName VARCHAR(20) NOT NULL UNIQUE ,
userPassword VARCHAR(32) NOT NULL,
userNickname VARCHAR(20) NOT NULL ,
userEmail VARCHAR(20) NOT NULL
);

-- 帖子列表
DROP TABLE IF EXISTS note;
CREATE TABLE IF NOT EXISTS note (
noteID TINYINT UNSIGNED AUTO_INCREMENT KEY,
title VARCHAR(100) NOT NULL ,
content TEXT NOT NULL,
createTime DATETIME NOT NULL ,
createID VARCHAR(20) NOT NULL ,
topicID VARCHAR(20) NOT NULL,
groupName VARCHAR(20) NOT NULL
);


-- 小组列表
DROP TABLE IF EXISTS groups;
CREATE TABLE IF NOT EXISTS groups (
groupID TINYINT UNSIGNED AUTO_INCREMENT KEY,
groupName VARCHAR(20) NOT NULL UNIQUE ,
groupUser VARCHAR(20)
);