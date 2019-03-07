CREATE TABLE IF NOT EXISTS login(
    id              INT(11) AUTO_INCREMENT NOT NULL,
    apellido        VARCHAR(100) NOT NULL,
    usuario         VARCHAR(100) NOT NULL,
    password        VARCHAR(100) NOT NULL,
    ma              VARCHAR(100) NOT NULL,
    CONSTRAINT pk_login PRIMARY KEY(id)
)ENGINE=InnoDb;