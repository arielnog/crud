CREATE TABLE `novo_cliente` (
	`id_cliente` varchar(255) NOT NULL,
	`id_tipo` int(255) NOT NULL,
	`nome` varchar(512) NOT NULL,
	`nome_2` varchar(512) NOT NULL,
	`qtd_pares` varchar(255) NOT NULL,
	`logradouro` varchar(512) NOT NULL,
	`cep` int(8) NOT NULL,
	`num` int(4),
	`complemento` varchar(512),
	`cidade` varchar(255) NOT NULL,
	`id_bairro` int NOT NULL,
	`email` varchar(255) NOT NULL,
	`cel` INT(255) NOT NULL,
	`hora_cadas` TIMESTAMP NOT NULL,
	`status` varchar(255) NOT NULL,
	PRIMARY KEY (`id_cliente`)
);

CREATE TABLE `cliente` (
	`id_cliente` varchar(255) NOT NULL,
	`id_tipo` int(255) NOT NULL,
	`nome` varchar(512) NOT NULL,
	`nome_2` varchar(512) NOT NULL,
	`cpf_cnpj` varchar(512) NOT NULL,
	`qtd_pares` varchar(255) NOT NULL,
	`logradouro` varchar(512) NOT NULL,
	`cep` int(8) NOT NULL,
	`num` int(4),
	`complemento` varchar(512),
	`cidade` varchar(255) NOT NULL,
	`id_bairro` int NOT NULL,
	`email_cliente` varchar(255) NOT NULL,
	`cel_cliente` INT(255) NOT NULL,
	`status` varchar(255) NOT NULL,

	PRIMARY KEY (`id_cliente`)
);

CREATE TABLE `bairro` (
	`id_bairro` int NOT NULL AUTO_INCREMENT,
	`cidade` varchar(255) NOT NULL,
	`bairro` varchar(255),
	`id_representante` int,
	PRIMARY KEY (`id_bairro`)
);

CREATE TABLE `representante` (
	`id_representante` int NOT NULL AUTO_INCREMENT,
	`representante` varchar(255) NOT NULL,
	`login` varchar(255) NOT NULL UNIQUE,
	`senha` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`telefone` varchar(255) NOT NULL,
	PRIMARY KEY (`id_representante`)
);

