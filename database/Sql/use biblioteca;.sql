use biblioteca;
-- select * from libros;
SELECT *
FROM libros
WHERE Cod_libro NOT IN (SELECT Cod_libro
                    FROM  prestamos
                    WHERE devuelto = 'false');