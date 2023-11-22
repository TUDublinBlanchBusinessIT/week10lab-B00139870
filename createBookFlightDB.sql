drop database if exists bookflight;
create database bookflight;
use bookflight;
create table flightbooking (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    bagsUnderTenKG int,
    bagsOverTenKG int,
    primary key(id)
);