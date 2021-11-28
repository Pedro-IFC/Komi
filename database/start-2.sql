/*
Arquivos para criação do banco de dados da Komi-chan
*/

CREATE DATABASE KOMI;

USE KOMI;

CREATE TABLE falas (	
	id INT AUTO_INCREMENT,
    categoria ENUM('saudacao','despedida','animacao','fofo', 'aviso'),
	fala varchar(200),
    PRIMARY KEY (id)
);

INSERT INTO FALAS VALUES
(NULL, 'saudacao', 'Ohayo user'),
(NULL, 'saudacao', 'Bom dia user'),
(NULL, 'despedida', 'Até depois'),
(NULL, 'saudacao', 'Olá, seja bem vindo'),
(NULL, 'despedida', 'Tchau user, sentirei saudades');

INSERT INTO FALAS VALUES
(NULL, 'animacao', 'Você pode morrer a qualquer momento, mas viver requer coragem.'),
(NULL, 'animacao', 'Lembre-se da lição e não da decepção.'),
(NULL, 'animacao', 'Se a sua vida pode mudar uma vez, ela pode mudar novamente.'),
(NULL, 'animacao', 'Feridas em seu coração são diferentes de feridas em seu corpo e existe apenas uma coisa que pode curá-las: o amor.'),
(NULL, 'animacao', 'Mesmo que nós esqueçamos os rostos dos nossos amigos, jamais esqueceremos os laços que foram cravados nas nossas almas.'),
(NULL, 'animacao', 'Eu sempre quis te ver de novo. Te pedir desculpas. Dizer que te amava.'),
(NULL, 'animacao', 'Como uma pessoa normal… só queria me tornar alguém que pudesse ser amada pelos outros. Queria ser feliz.'),
(NULL, 'animacao', 'Mesmo ferido se consegue dormir… Mas se causar o ferimento não tem paz, se é exilado, não se consegue dormir.'),
(NULL, 'animacao', 'Mesmo que você corra até o fim do mundo, ou espere por muitos séculos, não encontrará ninguém que te ama mais do que eu te amo.');

/*Selects para falas

SELECT fala FROM falas WHERE categoria = 'saudacao' ORDER BY RAND() LIMIT 1;

SELECT fala FROM falas WHERE categoria = 'animacao' ORDER BY RAND() LIMIT 1;
*/
drop table contatos;
CREATE TABLE CONTATOS(
	id INT AUTO_INCREMENT,
    idUsuario int, 
    numero VARCHAR(10),
    nome VARCHAR(50),
    PRIMARY KEY(id),
    foreign key(idUsuario) references usuarios(id)
);
INSERT INTO CONTATOS VALUES (NULL, 1,"99106-0276", "Bruna L.");

CREATE TABLE funcionalidades(
	id INT AUTO_INCREMENT,
    titulo VARCHAR(255),
    dataI DATE, 
	estado ENUM('desenvolvimento', 'proposta', 'finalizada'),
    PRIMARY KEY(id)
);
INSERT INTO FUNCIONALIDADES VALUES
(NULL, 'Apresentar Tarefas', '2021-05-15', 'finalizada'),
(NULL, 'Falar com interações limitadas a boas vindas e despedidas', '2021-05-15', 'finalizada'),
(NULL, 'Tocar playlists de musicas', '2021-05-15', 'finalizada'),
(NULL, 'Galeria Pessoal', '2021-05-15', 'proposta'),
(NULL, 'Lista de animes', '2021-05-15', 'proposta'),
(NULL, 'Chat simples', '2021-05-15', 'proposta'),
(NULL, 'Msgs para whats', '2021-05-15', 'finalizada'),
(NULL, 'De alguma forma louca fazer com que ela te motive as vezes', '2021-05-15', 'finalizada'),
(NULL, 'Programa de treino', '2021-05-15', 'desenvolvimento'),
(NULL, 'Sistema integrado a fala com python', '2021-05-15', 'proposta'),
(NULL, 'Acesso a links facilmente', '2021-05-15', 'finalizada'),
(NULL, 'Acesso a jogos facilmente', '2021-05-15', 'finalizada'),
(NULL, 'Codigos especiais que executam ações específica', '2021-05-15', 'proposta'),
(NULL, 'Gerenciador de funcionalidades no próprio sistema', '2021-05-24', 'desenvolvimento');
drop table usuarios;
CREATE TABLE USUARIOS(
	id int auto_increment,
    nome varchar(50),
    email varchar(100),
    senha varchar(100),
    primary key(id)
);
INSERT INTO USUARIOS VALUES(null, "Admin", "admin@gmail.com", "21232f297a57a5a743894a0e4a801fc3");
select * from usuarios