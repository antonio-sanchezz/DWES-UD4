CREATE DATABASE cocina;

create table recetas (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    dificultad VARCHAR(25) NOT NULL,
    tipoCocina VARCHAR(50) NOT NULL,
    duracion INT(3) NOT NULL,
    comensales INT(2) NOT NULL,
    fechaPublicacion DATE NOT NULL,
    imagen VARCHAR(250)
);

INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Roscón de Reyes', 'Media', 'Postres', 50, 4, '2021-09-18', 'https://www.demoslavueltaaldia.com/sites/default/files/roscon-reyes-relleno.jpg');
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Croquetas de jamón', 'Fácil', 'Carnes', 45, 3, '2020-10-22', 'https://www.demoslavueltaaldia.com/sites/default/files/IMGL7440.jpg'); 
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Pasta fresca', 'Media', 'Arroces y Pastas', 20, 2, '2021-06-16', 'https://www.demoslavueltaaldia.com/sites/default/files/pasta_fresca.jpg'); 
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Bizcocho de chocolate', 'Fácil', 'Postres', 20, 3, '2021-03-23', 'https://www.demoslavueltaaldia.com/sites/default/files/IMGL8816.jpg'); 
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Mega Hot Dog', 'Fácil', 'Carnes', 15, 1, '2020-02-25', 'https://www.demoslavueltaaldia.com/sites/default/files/IMGL8683.jpg'); 
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Cuscús con verduritas al curry', 'Media', 'Verduras', 25, 3, '2021-07-01', 'https://www.demoslavueltaaldia.com/sites/default/files/IMGL8176.jpg');
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Mermelada de tomate','Fácil','Postres', 55, 2, '2021-02-02', 'http://www.demoslavueltaaldia.com/sites/default/files/IMGL9051.jpg');
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Salteado de merluza con verduras','Media','Pescados y Mariscos', 20, 2, '2021-08-06', 'https://www.demoslavueltaaldia.com/sites/default/files/salteado_de_merluza_con_pimientos_rojos600.jpg');
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Lentejas','Fácil','Legumbres', 60, 5, '2021-06-09', 'http://www.demoslavueltaaldia.com/sites/default/files/upload/lentejas_caseras_plato_final.jpg');
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Garbanzos con espinacas y bacalao','Media','Legumbres', 55, 4, '2020-06-03', 'http://www.demoslavueltaaldia.com/sites/default/files/upload/garbanzos_con_espinacas_y_bacalao_0.jpg');