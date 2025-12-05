CREATE TABLE persona(
    idpersona int not null PRIMARY KEY,
    nombre varchar(40) not null,
    paterno varchar(40) not null,
    materno varchar(40) not null,
    fechanacimiento date not null   
);

CREATE TABLE `agendacion` (
    `idagendacion` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `fecha` DATE NOT NULL,
    `hora` TIME NOT NULL,
    `actividad` VARCHAR(40) NOT NULL,
    `completado` ENUM('si', 'no') NOT NULL
);

INSERT INTO persona (idpersona, nombre, paterno, materno, fechanacimiento) VALUES
(1, 'Carlos', 'Pérez', 'Romero', '1995-04-12'),
(2, 'María', 'López', 'Guzmán', '1988-11-23'),
(3, 'Jorge', 'Vargas', 'Salinas', '2000-01-05'),
(4, 'Ana', 'Rojas', 'Mendoza', '1992-07-19'),
(5, 'Luis', 'Flores', 'Quispe', '1985-03-28');

INSERT INTO agendacion (fecha, hora, actividad, completado) VALUES
('2025-01-10', '09:00:00', 'Reunión con cliente', 'no'),
('2025-01-11', '14:30:00', 'Consulta médica', 'si'),
('2025-01-12', '08:00:00', 'Clase de capacitación', 'no'),
('2025-01-13', '16:00:00', 'Entrega de reporte', 'si'),
('2025-01-14', '10:15:00', 'Llamada telefónica', 'no');
