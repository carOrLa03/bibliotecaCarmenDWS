use biblioteca;
-- ALTER TABLE prestamos
-- ADD CONSTRAINT FK_pre_Cod_libro
-- FOREIGN KEY (Cod_libro) REFERENCES libros (Cod_libro)
-- ON UPDATE CASCADE
-- ON DELETE RESTRICT;

-- ALTER TABLE prestamos
-- ADD CONSTRAINT FK_pre_cod_Usuario
-- FOREIGN KEY (Cod_usuario) REFERENCES usuarios (Cod_usuario)
-- ON UPDATE cascade
-- ON DELETE restrict;
-- commit;

-- ALTER TABLE biblioteca.usuarios
-- modify Cod_usuario INT AUTO_INCREMENT;
-- commit;
-- ALTER TABLE biblioteca.libros
-- modify Cod_libro INT AUTO_INCREMENT;
-- commit;
-- ALTER TABLE biblioteca.prestamos
-- modify Num_pedido INT AUTO_INCREMENT;
-- commit;

-- ALTER TABLE prestamos modify Cod_usuario INT;
-- ALTER TABLE biblioteca.prestamos DROP FOREIGN KEY FK_pre_Cod_libro; 
-- ALTER TABLE biblioteca.prestamos DROP FOREIGN KEY FK_pre_cod_Usuario; 


-- DELETE FROM prestamos WHERE Num_pedido = 0;
-- select * from prestamos;
DESCRIBE prestamos;

