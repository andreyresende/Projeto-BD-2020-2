create database COPA_DO_MUNDO;
use COPA_DO_MUNDO;

create Table Uniforme(
id int primary key AUTO_INCREMENT,
cor varchar(20));

create table Selecao(
id int primary key AUTO_INCREMENT,
nome varchar(20) not null,
grupo varchar(1) not null,
pontos_grupo int not null,
cor_uniforme_1 int not null,
cor_uniforme_2 int not null,
bandeira longblob not null,
FOREIGN KEY (cor_uniforme_1) REFERENCES Uniforme(id),
FOREIGN KEY (cor_uniforme_2) REFERENCES Uniforme(id));

create table Funcao(
id int primary key AUTO_INCREMENT,
nome varchar(20) not null); 

create table Comissao(
id int primary key AUTO_INCREMENT,
nome varchar(45) not null,
funcao int not null,
selecao int not null,
FOREIGN KEY (selecao) REFERENCES Selecao(id),
FOREIGN KEY (funcao) REFERENCES Funcao(id));

create table Jogador(
id int primary key AUTO_INCREMENT,
nome varchar(45) not null,
selecao int not null,
idade int not null,
gols int not null,
FOREIGN KEY (selecao) REFERENCES Selecao(id));

create table Juiz(
id int primary key AUTO_INCREMENT,
nome varchar(20));

create table Estadio(
id int primary key AUTO_INCREMENT,
nome varchar(45) not null,
cidade varchar(20) not null,
capacidade int not null);

create table Fase(
id int primary key AUTO_INCREMENT,
nome varchar(30));

create table Partida(
id int primary key AUTO_INCREMENT,
selecao_1 int not null,
selecao_2 int not null,
cor_uniforme_1 int,
cor_uniforme_2 int,
penalti_1 int,
penalti_2 int,
juiz int not null,
estadio int not null,
fase int not null,
FOREIGN KEY (selecao_1) REFERENCES Selecao(id),
FOREIGN KEY (selecao_2) REFERENCES Selecao(id),
FOREIGN KEY (cor_uniforme_1) REFERENCES Uniforme(id),
FOREIGN KEY (cor_uniforme_2) REFERENCES Uniforme(id),
FOREIGN KEY (juiz) REFERENCES Juiz(id),
FOREIGN KEY (estadio) REFERENCES Estadio(id),
FOREIGN KEY (fase) REFERENCES Fase(id));

create table Gol(
id int primary key AUTO_INCREMENT,
partida int not null,
minuto int not null,
jogador int not null,
FOREIGN KEY (partida) REFERENCES Partida(id),
FOREIGN KEY (jogador) REFERENCES Jogador(id));

create table Falta(
id int primary key AUTO_INCREMENT,
partida int not null,
minuto int not null,
agente int not null,
cartao_amarelo bool,
cartao_vermelho bool,
FOREIGN KEY (partida) REFERENCES Partida(id),
FOREIGN KEY (agente) REFERENCES Jogador(id));

INSERT INTO uniforme VALUES (1, 'Branco');
INSERT INTO uniforme VALUES (2, 'Prata');
INSERT INTO uniforme VALUES (3, 'Cinza');
INSERT INTO uniforme VALUES (4, 'Preto');
INSERT INTO uniforme VALUES (5, 'Aqua');
INSERT INTO uniforme VALUES (6, 'Verde-azulado');
INSERT INTO uniforme VALUES (7, 'Roxo');
INSERT INTO uniforme VALUES (8, 'Azul claro');
INSERT INTO uniforme VALUES (9, 'Azul escuro');
INSERT INTO uniforme VALUES (10, 'Verde');
INSERT INTO uniforme VALUES (11, 'Amarelo');
INSERT INTO uniforme VALUES (12, 'Vermelho');

INSERT INTO selecao VALUES (1, 'Brasil', 'A', 0, 11, 10, 'bandeiras/brasil.png');
INSERT INTO selecao VALUES (2, 'Colômbia', 'A', 0, 11, 9, 'bandeiras/colombia.png');
INSERT INTO selecao VALUES (3, 'Países Baixos', 'A', 0, 12, 1, 'bandeiras/paisesbaixos.png');
INSERT INTO selecao VALUES (4, 'Costa Rica', 'A', 0, 12, 1, 'bandeiras/costarica.png');
INSERT INTO selecao VALUES (5, 'França', 'B', 0, 9, 12, 'bandeiras/franca.png');
INSERT INTO selecao VALUES (6, 'Alemanha', 'B', 0, 12, 4, 'bandeiras/alemanha.png');
INSERT INTO selecao VALUES (7, 'Argentina', 'B', 0, 8, 11, 'bandeiras/argentina.png');
INSERT INTO selecao VALUES (8, 'Bélgica', 'B', 0, 4, 11, 'bandeiras/belgica.png');

INSERT INTO jogador VALUES (1, 'Júlio', 1, 25, 0); # Brasil
INSERT INTO jogador VALUES (2, 'Marcelo', 1, 26, 0);

INSERT INTO jogador VALUES (3, 'Neymar', 1, 27, 0);

INSERT INTO jogador VALUES (4, 'David', 2, 28, 0); # Colômbia
INSERT INTO jogador VALUES (5, 'Fredy', 2, 29, 0);
INSERT INTO jogador VALUES (6, 'James', 2, 26, 0);

INSERT INTO jogador VALUES (7, 'Jasper', 3, 32, 0); # Países Baixos
INSERT INTO jogador VALUES (8, 'Stefan', 3, 29, 0);
INSERT INTO jogador VALUES (9, 'Robin', 3, 31, 0);

INSERT INTO jogador VALUES (10, 'Keylor', 4, 29, 0); # Costa Rica
INSERT INTO jogador VALUES (11, 'Johnny', 4, 29, 0);
INSERT INTO jogador VALUES (12, 'Joel', 4, 30, 0);

INSERT INTO jogador VALUES (13, 'Hugo', 5, 25, 0); # França
INSERT INTO jogador VALUES (14, 'Mathieu', 5, 24, 0);
INSERT INTO jogador VALUES (15, 'Karim', 5, 27, 0);

INSERT INTO jogador VALUES (16, 'Manuel', 6, 27, 0); # Alemanha
INSERT INTO jogador VALUES (17, 'Jérôme', 6, 28, 0);
INSERT INTO jogador VALUES (18, 'Mesut', 6, 27, 0);

INSERT INTO jogador VALUES (19, 'Sergio', 7, 25, 0); # Argentina
INSERT INTO jogador VALUES (20, 'Martin', 7, 25, 0);
INSERT INTO jogador VALUES (21, 'Messi', 7, 26, 0);

INSERT INTO jogador VALUES (22, 'Thibaut', 8, 29, 0); # Bélgica
INSERT INTO jogador VALUES (23, 'Daniel', 8, 27, 0);
INSERT INTO jogador VALUES (24, 'Kevin', 8, 22, 0);

INSERT INTO juiz VALUES (1, 'Noumandiez');
INSERT INTO juiz VALUES (2, 'Sandro');
INSERT INTO juiz VALUES (3, 'Yuichi');
INSERT INTO juiz VALUES (4, 'Pedro');

INSERT INTO estadio VALUES (1, 'Estádio do Maracanã', 'Rio de Janeiro', 80000);
INSERT INTO estadio VALUES (2, 'Estádio Mineirão', 'Belo Horizonte', 60000);
INSERT INTO estadio VALUES (3, 'Arena Fonte Nova', 'Salvador', 52000);
INSERT INTO estadio VALUES (4, 'Estádio Nacional', 'Brasília', 70000);

INSERT INTO fase VALUES (1, 'Fase de Grupos');
INSERT INTO fase VALUES (2, 'Semifinal');
INSERT INTO fase VALUES (3, 'Decisão do terceiro lugar');
INSERT INTO fase VALUES (4, 'Final');

INSERT INTO Funcao VALUES (1, 'Técnico');
INSERT INTO Funcao VALUES (2, 'Organizador');

INSERT INTO comissao VALUES (1, 'Tite', 1, 1);
INSERT INTO comissao VALUES (2, 'Reinaldo', 1, 2);
INSERT INTO comissao VALUES (3, 'Bert', 1, 3);
INSERT INTO comissao VALUES (4, 'Rónald', 1, 4);
INSERT INTO comissao VALUES (5, 'Didier', 1, 5);
INSERT INTO comissao VALUES (6, 'Joachim', 1, 6);
INSERT INTO comissao VALUES (7, 'Scaloni', 1, 7);
INSERT INTO comissao VALUES (8, 'Marc', 1, 8);
INSERT INTO comissao VALUES (9, 'Ricardo', 2, 1);
INSERT INTO comissao VALUES (10, 'José', 2, 1);
INSERT INTO comissao VALUES (11, 'Rodolphe', 2, 8);

INSERT INTO partida VALUES (1, 1, 2, 1, 2, 1, 0, 1, 1, 1);
INSERT INTO partida VALUES (2, 1, 2, 1, 2, 0, 0, 1, 1, 1);
INSERT INTO partida VALUES (3, 3, 2, 1, 2, 0, 0, 1, 1, 1);

INSERT INTO falta VALUES (1, 1, 30, 2, 0, 1);
INSERT INTO falta VALUES (2, 1, 31, 2, 0, 1);
INSERT INTO falta VALUES (3, 1, 32, 3, 1, 0);
INSERT INTO falta VALUES (4, 1, 33, 3, 1, 0);
INSERT INTO falta VALUES (5, 1, 34, 3, 1, 0);
INSERT INTO falta VALUES (6, 1, 35, 4, 0, 1);
INSERT INTO falta VALUES (7, 1, 36, 4, 0, 1);
INSERT INTO falta VALUES (8, 1, 37, 4, 1, 0);
INSERT INTO falta VALUES (9, 1, 38, 4, 1, 0);


CREATE VIEW Recebeu_Cartao AS
	SELECT jogador.nome as Nome, selecao.nome AS Seleção, floor(sum(cartao_amarelo)/count(DISTINCT partida.id)) as Cartões_Amarelos, 
    floor(sum(cartao_vermelho)/count(DISTINCT partida.id)) as Cartões_Vermelhos, count(DISTINCT partida.id) as Partidas_Jogadas 
    FROM jogador, selecao, falta, partida 
    WHERE jogador.id = falta.agente and jogador.selecao = selecao.id and (partida.selecao_1 = jogador.selecao or partida.selecao_2 = jogador.selecao)
    GROUP BY (falta.agente) ORDER BY sum(cartao_vermelho) DESC, sum(cartao_amarelo) DESC;
    
SELECT * FROM Recebeu_Cartao;

delimiter //
CREATE PROCEDURE Ver_Grupo (grupo VARCHAR(1))
	BEGIN
		SELECT nome, pontos_grupo FROM selecao WHERE selecao.grupo = grupo;
    END//
delimiter ;

delimiter //
CREATE PROCEDURE Atualizar_pontos (partida_id int) # verificar quem ganhou uma partida e adicionar 1 ponto para o vencedor
	BEGIN
		DECLARE gols_1, gols_2, selecao_1, selecao_2 int DEFAULT 0;
        SELECT selecao.id INTO selecao_1 FROM selecao, partida WHERE partida.id = partida_id and selecao.id = partida.selecao_1; # obtem selecao_1
        SELECT selecao.id INTO selecao_2 FROM selecao, partida WHERE partida.id = partida_id and selecao.id = partida.selecao_2; # obtem selecao_2
        
        SELECT count(*) INTO gols_1 FROM gol WHERE gol.partida = partida_id and gol.jogador IN
		(SELECT jogador.id FROM jogador WHERE jogador.selecao = selecao_1); # obtem gols feitos pelo time 1
        
        SELECT count(*) INTO gols_2 FROM gol WHERE gol.partida = partida_id and gol.jogador IN
		(SELECT jogador.id FROM jogador WHERE jogador.selecao = selecao_2); # obtem gols feitos pelo time 2
        
        IF gols_1 > gols_2 THEN
			UPDATE selecao SET pontos_grupo = pontos_grupo + 1 WHERE selecao.id = selecao_1;
		ELSEIF gols_1 < gols_2 THEN
			UPDATE selecao SET pontos_grupo = pontos_grupo + 1 WHERE selecao.id = selecao_2;
		ELSE
			SELECT penalti_1 INTO gols_1 FROM partida WHERE partida.id = partida_id;
            SELECT penalti_2 INTO gols_2 FROM partida WHERE partida.id = partida_id;
            IF gols_1 > gols_2 THEN
				UPDATE selecao SET pontos_grupo = pontos_grupo + 1 WHERE selecao.id = selecao_1;
			ELSE
				UPDATE selecao SET pontos_grupo = pontos_grupo + 1 WHERE selecao.id = selecao_2;
			END IF;
		END IF;
        
    END//
delimiter ;

CALL Ver_Grupo('A');

CALL Atualizar_pontos (1);

CALL Ver_Grupo('A');