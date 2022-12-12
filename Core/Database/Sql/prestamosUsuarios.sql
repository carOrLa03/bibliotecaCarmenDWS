use biblioteca;
-- SELECT * from usuarios;
SELECT  prestamos.Num_pedido, Fecha_salida, Fecha_maxima_dev, Fecha_devolucion, Devuelto, libros.nombre_libro
from prestamos, libros 
WHERE   prestamos.Cod_libro = libros.Cod_libro and
        prestamos.Cod_usuario in (Select Cod_usuario
                            from usuarios
                            where Nombre = 'Miguel');

