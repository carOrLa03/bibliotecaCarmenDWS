use biblioteca;
CREATE TABLE colaboradores(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(20) NOT NULL,
    descripcion varchar(60) NOT NULL,
    archivo varchar(60) NOT NULL
);