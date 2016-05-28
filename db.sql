CREATE TABLE usuarios (
    ID INT(2) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50) NOT NULL,
    endereco varchar(50),
    telefone varchar(50),
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    rg float(50),
    cpf float(50),
    nascimento varchar(50),
    genero varchar(50)
);
http://blackrockdigital.github.io/startbootstrap-sb-admin/