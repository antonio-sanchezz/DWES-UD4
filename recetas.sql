create table recetas (
    nombre VARCHAR(50) NOT NULL,
    dificultad VARCHAR(25) NOT NULL,
    tipoCocina VARCHAR(50) NOT NULL,
    duracion INT(3) NOT NULL,
    comensales INT(2) NOT NULL,
    fechaPublicacion DATE NOT NULL,
    imagen VARCHAR(250)
);

INSERT INTO recetas VALUES ('Roscón de Reyes', 'Media', 'Postres', 50, 4, '2021-09-18', 'https://www.demoslavueltaaldia.com/sites/default/files/roscon-reyes-relleno.jpg');
INSERT INTO recetas VALUES ('Croquetas de jamón', 'Fácil', 'Carnes', 45, 3, '2020-10-22', 'https://www.demoslavueltaaldia.com/sites/default/files/IMGL7440.jpg'); 
INSERT INTO recetas VALUES ('Pasta fresca', 'Media', 'Arroces y Pastas', 20, 2, '2021-06-16', 'https://www.demoslavueltaaldia.com/sites/default/files/pasta_fresca.jpg'); 
INSERT INTO recetas VALUES ('Bizcocho de chocolate', 'Fácil', 'Postres', 20, 3, '2021-03-23', 'https://www.demoslavueltaaldia.com/sites/default/files/IMGL8816.jpg'); 
INSERT INTO recetas VALUES ('Mega Hot Dog', 'Fácil', 'Carnes', 15, 1, '2020-02-25', 'https://www.demoslavueltaaldia.com/sites/default/files/IMGL8683.jpg'); 
INSERT INTO recetas VALUES ('Cuscús con verduritas al curry', 'Media', 'Verduras', 25, 3, '2021-07-01', 'https://www.demoslavueltaaldia.com/sites/default/files/IMGL8176.jpg'); 