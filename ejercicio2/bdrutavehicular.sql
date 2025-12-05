CREATE DATABASE IF NOT EXISTS bdrutavehicular;
USE bdrutavehicular;

CREATE TABLE chofer (
    idchofer INT NOT NULL PRIMARY KEY,
    nombrecompleto VARCHAR(100) NOT NULL
);

CREATE TABLE vehiculo (
    idvehiculo INT NOT NULL PRIMARY KEY,
    placa VARCHAR(20) NOT NULL,
    color VARCHAR(20) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    tipo VARCHAR(50) NOT NULL
);

CREATE TABLE parada (
    idparada INT NOT NULL PRIMARY KEY,
    puntoparada VARCHAR(100) NOT NULL,
    descripcion VARCHAR(255) NOT NULL
);

CREATE TABLE recorrido (
    idrecorrido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idchofer INT NOT NULL,
    idvehiculo INT NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    idparada INT NOT NULL,
    FOREIGN KEY (idchofer) REFERENCES chofer(idchofer) ON DELETE CASCADE,
    FOREIGN KEY (idvehiculo) REFERENCES vehiculo(idvehiculo) ON DELETE CASCADE,
    FOREIGN KEY (idparada) REFERENCES parada(idparada) ON DELETE CASCADE
);




ALTER TABLE chofer MODIFY idchofer INT NOT NULL AUTO_INCREMENT;
ALTER TABLE parada MODIFY idparada INT NOT NULL AUTO_INCREMENT;
ALTER TABLE vehiculo MODIFY idvehiculo INT NOT NULL AUTO_INCREMENT;
ALTER TABLE recorrido MODIFY idrecorrido INT NOT NULL AUTO_INCREMENT;
