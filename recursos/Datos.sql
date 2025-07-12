drop schema if exists `user`;

-- Crea el esquema (base de datos) 'user' si no existe, usando el conjunto de caracteres utf8 y la colación utf8_sapanish_ci
create schema if not exists `user` default character set utf8 collate utf8_sapanish_ci;

-- Selecciona la base de datos 'user' para trabajar sobre ella
USE `user`;


-- Crear un tabla

CREATE TABLE `user`(
`id` int auto_increment PRIMARY KEY not null,
`nombre` text not null,
`apaterno` text not null,
`amaterno` text,
`calle` text not null,
`numero` text not null ,
`cp` text not null,
`municipio` text not null ,
`estado` text not null ,
`email` text not null,
`contrasena` text not null,
`fecha_registro` datetime not null default current_timestamp

) engine=Innodb default charset=utf8;

