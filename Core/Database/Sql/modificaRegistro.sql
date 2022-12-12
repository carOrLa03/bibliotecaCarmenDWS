use biblioteca;

UPDATE prestamos
SET Fecha_devolucion = '14/11/2015'
WHERE Num_pedido = 1;

SELECT * FROM prestamos;