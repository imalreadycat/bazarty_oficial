DROP DATABASE mvcd;
CREATE DATABASE mvcd;

USE mvcd;

CREATE TABLE IF NOT EXISTS `mvcd`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `papel` VARCHAR(100) NOT NULL DEFAULT 'usuario'
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8

INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('admin', '123', 'admin@admin', 'admin');
INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('usuario', '123', 'usuario@usuario', 'usuario');


 CREATE DATABASE bazarty;

 USE bazarty;

 create table cliente(
        id_cliente int(11) unsigned not null auto_increment,
        nome varchar(60) not null,
        cpf varchar(11) not null,
        sexo varchar (60) not null,
        aniversario varchar(40) not null,
        email varchar(50) not null,
        senha varchar(60) not null,
        tipo varchar (5) not null,
        primary key(id_cliente)
   );
create table categoria(
     cod_categoria int(10) unsigned not null auto_increment,
     Nome varchar(30) not null,
     primary key(cod_categoria)
     );
 
 create table produto(
     id_produto int(11) unsigned not null auto_increment,
     cod_categoria int(10) unsigned not null,
     nome varchar(60) not null,
     descr varchar(600),
     imagem varchar (60),
     preco double(10,2) unsigned not null,
     estoque_minimo int (11) not null,
     estoque_maximo int (11) not null,
     quant_estoque int (11) not null,
     primary key(id_produto),
     foreign key (cod_categoria) references categoria (cod_categoria) on delete cascade on update cascade
     );

 CREATE TABLE pedido(
        id_pedido INT(11)  unsigned auto_increment NOT NULL,
        id_cliente INT(11) unsigned NOT NULL,
        idendereco INT(11) unsigned NOT NULL,
        datacompra DATE NOT NULL,
        PRIMARY KEY(id_pedido),
        FOREIGN KEY (id_cliente) REFERENCES cliente (id_cliente)
        ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (idendereco) REFERENCES endereco (idendereco)
        ON DELETE CASCADE ON UPDATE CASCADE
        );


create table pedido_produto(
    id_produto int(11)  unsigned not null,
    id_pedido int(11)  not null,
    quantidade  int(11) not null,
    primary key (id_produto, id_pedido),
foreign key (id_produto) references produto (id_produto) on delete cascade on update cascade,
foreign key (id_pedido) references pedido (id_pedido) on delete cascade on update cascade
     );
CREATE TABLE cupom(
	idcupom int (11) unsigned not null auto_increment,
	nomecupom varchar (60) not null,
	desconto int (11) not null,
	primary key (idcupom)
);
create table log_produto(
	id_log int(11) unsigned not null auto_increment,
	tabela varchar(45) not null,
	usuario varchar(45) not null,
	DATA_HORA DATETIME,
	ACAO varchar (45) not null,
	DADOS varchar (1000),
	primary key(id_log)
);
create table estoque(
	idestoque int(11) unsigned not null auto_increment,
	id_produto int (11) unsigned not null,
	qtde int (11) not null,
	primary key(idestoque),
	foreign key (id_produto) references produto (id_produto) on delete cascade on update cascade
	);
create table endereco (
	idendereco int(11) unsigned not null auto_increment,
	id_cliente int(11) unsigned not null,
	rua varchar (60) not null,
	numero varchar (7) not null,
	complemento varchar (60) not null,
	bairro varchar (60) not null,
	cidade varchar (60) not null,
	cep varchar (60) not null,
	primary key(idendereco),
	foreign key (id_cliente) references cliente (id_cliente) on delete cascade on update cascade );

    create table forma_de_pagamento(
        idformadepagamento int unsigned not null auto_increment,
        descricao varchar (45) not null,
        primary key(idformadepagamento)
    );
        
       



