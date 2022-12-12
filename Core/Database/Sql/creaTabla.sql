use biblioteca;
-- CREATE TABLE colaboradores(
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     nombre varchar(20) NOT NULL,
--     descripcion varchar(60) NOT NULL,
--     archivo varchar(60) NOT NULL
-- );

CREATE TABLE mensajes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(20) NOT NULL,
    mail varchar(50) NOT NULL,
    mensaje varchar(300) NOT NULL
);
describe mensajes;