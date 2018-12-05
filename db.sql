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

CREATE TABLE portada(
    id_por INT NOT NULL AUTO_INCREMENT,
    img VARCHAR (400) NOT NULL,
    PRIMARY KEY (id_por)
)
    ENGINE = INNODB
    DEFAULT CHARSET = utf8;
    
INSERT INTO portada VALUES (NULL, 'assets/img/portada.jpg');
    
CREATE TABLE categorias (
    id_cat INT NOT NULL AUTO_INCREMENT,
    cat VARCHAR (200) NOT NULL,
    PRIMARY KEY (id_cat)
)
    ENGINE = INNODB
    DEFAULT CHARSET = utf8;
    
CREATE TABLE proyectos(
    id_proy INT NOT NULL AUTO_INCREMENT,
    n_proy VARCHAR (600) NOT NULL,
    folder VARCHAR (200) NOT NULL,
    img VARCHAR (500) not null,
    categoria int not null,
    primary key(id_proy),
    constraint fk_cate foreign key (categoria) references categorias(id_cat)
    ON DELETE CASCADE ON UPDATE CASCADE
)
    ENGINE = INNODB
    DEFAULT CHARSET = utf8;

create table img_proy (
    id_img int not null auto_increment,
    img varchar (500),
    proyecto int not null,
    primary key (id_img),
    constraint fk_proy foreign key (proyecto) REFERENCES proyectos (id_proy) 
    on delete cascade on update cascade
)
    ENGINE = INNODB
    DEFAULT CHARSET = utf8;