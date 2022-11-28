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
-- ALTER TABLE biblioteca.libros
-- modify Cod_libro INT AUTO_INCREMENT;
-- commit;

ALTER TABLE prestamos DROP INDEX FK_pre_cod_Usuario; 
DESCRIBE prestamos;

