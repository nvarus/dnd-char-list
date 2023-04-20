CREATE DATABASE Char_List;
USE Char_List;

CREATE TABLE Hero_prop (
   id int AUTO_INCREMENT PRIMARY KEY,
   name varchar(50) NOT NULL ,
   race varchar(50) NOT NULL ,
   class varchar(30) NOT NULL,
   level int NOT NULL,
   armor_class int NOT NULL,
   speed int NOT NULL,
   initiative int NOT NULL,
   current_hp int NOT NULL,
   max_hp int NOT NULL,
   age int NOT NULL
);

INSERT INTO Hero_prop (name, race, class, level, armor_class, speed, initiative, current_hp, max_hp, age) VALUE (
   'Растик', 'Лесной эльф', 'Друид', 7, 15, 30, 3, 164, 164, 52);

INSERT INTO Hero_prop (name, race, class, level, armor_class, speed, initiative, current_hp, max_hp, age) VALUE (
   'Гыршак', 'Полуорк', 'Варвар', 6, 18, 35, 3, 190, 204, 37);