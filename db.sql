CREATE DATABASE gochezmancia;
USE gochezmancia;

CREATE TABLE usuarios(
    username VARCHAR(20) NOT NULL,
    pass VARCHAR (50) NOT NULL,
    nombre VARCHAR (200),
    PRIMARY KEY(username)
)
    ENGINE = INNODB
    DEFAULT CHARSET = utf8;
    
INSERT INTO usuarios VALUES ('a', '0cc175b9c0f1b6a831c399e269772661', 'Usuario de prueba');
    
CREATE TABLE img_sli(
    id_ima INT NOT NULL AUTO_INCREMENT,
    img VARCHAR(300) NOT NULL,
    PRIMARY KEY(id_ima)
)
  ENGINE = INNODB
  DEFAULT CHARSET = utf8;
    
INSERT INTO img_sli VALUES (NULL, 'assets/img/slide.jpg');
    
CREATE TABLE categorias (
    id_cat INT NOT NULL AUTO_INCREMENT,
    categoria VARCHAR (200) NOT NULL,
    PRIMARY KEY (id_cat)
)
    ENGINE = INNODB 
    DEFAULT CHARSET = utf8;
    
    INSERT INTO categorias VALUES (NULL, 'categoria 1');
    
CREATE TABLE proyectos(
    id_proyecto INT NOT NULL AUTO_INCREMENT,
    p_rank INT NOT NULL,
    n_proy VARCHAR (600) NOT NULL,
    folder VARCHAR (200) NOT NULL,
    img_proy VARCHAR (500) NOT NULL,
    categoria INT NOT NULL,
    PRIMARY KEY(id_proyecto),
    CONSTRAINT fk_cate FOREIGN KEY (categoria) REFERENCES categorias(id_cat)
    ON DELETE CASCADE ON UPDATE CASCADE
)
    ENGINE = INNODB
    DEFAULT CHARSET = utf8;
    
    INSERT INTO proyectos 
    VALUES (NULL, '1', 'Buffalo Wings', 'assets/img/106310720/', 'assets/img/106310720/portada.jpg', 1),
    (NULL, '2', 'La casa del repuesto', 'assets/img/121308712/', 'assets/img/121308712/portada.jpg', 1),
    (NULL, '3', 'Hotel Remfort', 'assets/img/126991399/', 'assets/img/126991399/portada.jpg', 1),
    (NULL, '4', 'Casa', 'assets/img/256270601/', 'assets/img/256270601/portada.jpg', 1),
    (NULL, '5', 'Casa', 'assets/img/260151892/', 'assets/img/260151892/portada.jpg', 1);

CREATE TABLE img_proy (
    id_imgproy INT NOT NULL AUTO_INCREMENT,
    img VARCHAR (500),
    proyectos INT NOT NULL,
    PRIMARY KEY (id_imgproy),
    CONSTRAINT fk_proy FOREIGN KEY (proyectos) REFERENCES proyectos (id_proyecto) 
    ON DELETE CASCADE ON UPDATE CASCADE
)
    ENGINE = INNODB
    DEFAULT CHARSET = utf8;
    
    INSERT INTO img_proy VALUES (NULL, 'assets/img/106310720/img/image0.jpg', 1),
    (NULL, 'assets/img/106310720/img/image1.jpg', 1),
    (NULL, 'assets/img/106310720/img/image2.jpg', 1);
    
    INSERT INTO img_proy VALUES (NULL, 'assets/img/121308712/img/image0.jpg', 2),
    (NULL, 'assets/img/121308712/img/image1.jpg', 2),
    (NULL, 'assets/img/121308712/img/image2.jpg', 2);
    
    INSERT INTO img_proy VALUES (NULL, 'assets/img/126991399/img/image0.jpg', 3),
    (NULL, 'assets/img/126991399/img/image1.jpg', 3),
    (NULL, 'assets/img/126991399/img/image2.jpg', 3);
    
    INSERT INTO img_proy VALUES (NULL, 'assets/img/256270601/img/image0.jpg', 4),
    (NULL, 'assets/img/256270601/img/image1.jpg', 4),
    (NULL, 'assets/img/256270601/img/image2.jpg', 4);
    
    INSERT INTO img_proy VALUES (NULL, 'assets/img/260151892/img/image0.jpg', 5),
    (NULL, 'assets/img/260151892/img/image1.jpg', 5),
    (NULL, 'assets/img/260151892/img/image2.jpg', 5);