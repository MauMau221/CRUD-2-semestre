

CREATE TABLE `ADMINISTRADOR` (
  `ADM_ID` int(11) NOT NULL,
  `ADM_NOME` varchar(24) NOT NULL,
  `ADM_EMAIL` varchar(255) NOT NULL DEFAULT '',
  `ADM_SENHA` varchar(255) NOT NULL,
  `ADM_ATIVO` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `CATEGORIA` (
  `CATEGORIA_ID` int(11) NOT NULL,
  `CATEGORIA_NOME` varchar(255) NOT NULL,
  `CATEGORIA_DESC` varchar(255) NOT NULL,
  `CATEGORIA_ATIVO` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `PRODUTO` (
  `PRODUTO_ID` int(11) NOT NULL,
  `PRODUTO_NOME` varchar(255) NOT NULL,
  `PRODUTO_DESC` varchar(500) NOT NULL,
  `PRODUTO_PRECO` decimal(10,2) NOT NULL,
  `PRODUTO_DESCONTO` decimal(10,2) NOT NULL,
  `PRODUTO_ATIVO` bit(1) NOT NULL,
  `CATEGORIA_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `PRODUTO_ESTOQUE` (
  `PRODUTO_ID` int(11) NOT NULL,
  `PRODUTO_QTD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

  CREATE TABLE `PRODUTO_IMAGEM` (
    `IMAGEM_ID` int(11) NOT NULL,
    `IMAGEM_URL` varchar(8000) NOT NULL,
    `IMAGEM_ORDEM` int(11) NOT NULL,
    `PRODUTO_ID` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `ADMINISTRADOR`
  ADD PRIMARY KEY (`ADM_ID`);

ALTER TABLE `CATEGORIA`
  ADD PRIMARY KEY (`CATEGORIA_ID`);

ALTER TABLE `PRODUTO`
  ADD PRIMARY KEY (`PRODUTO_ID`);

ALTER TABLE `PRODUTO_IMAGEM`
  ADD PRIMARY KEY (`IMAGEM_ID`);

/* ---------------- */

ALTER TABLE `ADMINISTRADOR`
  MODIFY `ADM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `CATEGORIA`
  MODIFY `CATEGORIA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `PRODUTO`
  MODIFY `PRODUTO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `PRODUTO_IMAGEM`
  MODIFY `IMAGEM_ID` int(11) NOT NULL AUTO_INCREMENT=4;


INSERT INTO `ADMINISTRADOR` (`ADM_ID`, `ADM_NOME`, `ADM_EMAIL`, `ADM_SENHA`, `ADM_ATIVO`) VALUES
(1, 'Ana Silva', 'ana.silva@email.com', 'senha123', '1');

INSERT INTO `CATEGORIA` (`CATEGORIA_ID`, `CATEGORIA_NOME`, `CATEGORIA_DESC`, `CATEGORIA_ATIVO`) VALUES
(1, 'Shows', 'Shows e apresentações ao vivo', b'1'),
(2, 'Teatro', 'Peças de teatro e musicais', b'1'),
(3, 'Festivais', 'Festivais de música e cultura', b'1'),
(4, 'Esportes', 'Eventos esportivos e competições', b'1'),
(5, 'Workshops', 'Cursos e workshops presenciais', b'1'),
(6, 'Cinema', 'Sessões especiais e pré-estreias', b'1'),
(7, 'Infantil', 'Eventos para crianças e família', b'1'),
(8, 'Gastronomia', 'Festas e eventos gastronômicos', b'1');

INSERT INTO `PRODUTO` (`PRODUTO_ID`, `PRODUTO_NOME`, `PRODUTO_DESC`, `PRODUTO_PRECO`, `PRODUTO_DESCONTO`, `PRODUTO_ATIVO`, `CATEGORIA_ID`) VALUES
(1, 'Show Rock Nacional', 'Noite de rock com bandas consagradas', 120.00, 0.00, b'1', '1'),
(2, 'Comédia Stand-up', 'Stand-up com humoristas famosos', 80.00, 10.00, b'1', '2'),
(3, 'Festival de Verão', '3 dias de música eletrônica e pop', 350.00, 50.00, b'1', '3'),
(4, 'Jogo de Futebol - Liga', 'Ingresso arquibancada setor premium', 150.00, 0.00, b'1', '4'),
(5, 'Workshop de Fotografia', 'Curso prático de fotografia digital', 280.00, 25.00, b'1', '5'),
(6, 'Pré-estreia Filme Blockbuster', 'Sessão exclusiva antes da estreia', 45.00, 5.00, b'1', '6'),
(7, 'Espetáculo Infantil - Teatro', 'Peça teatral para toda a família', 60.00, 0.00, b'1', '7'),
(8, 'Jantar Degustação', 'Menu degustação com chef renomado', 220.00, 30.00, b'1', '8'),
(9, 'Show Sertanejo', 'Festa sertaneja com duplas top', 180.00, 20.00, b'1', '1'),
(10, 'Peça Clássica - Hamlet', 'Montagem clássica de Shakespeare', 90.00, 0.00, b'1', '2');

INSERT INTO `PRODUTO_ESTOQUE` (`PRODUTO_ID`, `PRODUTO_QTD`) VALUES
(1, 500),
(2, 300),
(3, 2000),
(4, 800),
(5, 40),
(6, 250),
(7, 400),
(8, 60),
(9, 1200),
(10, 200);

INSERT INTO `PRODUTO_IMAGEM` (`IMAGEM_ID`, `IMAGEM_URL`, `IMAGEM_ORDEM`, `PRODUTO_ID`) VALUES
(1, 'https://exemplo.com/img/show-rock-1.jpg', 1, 1),
(2, 'https://exemplo.com/img/show-rock-2.jpg', 2, 1),
(3, 'https://exemplo.com/img/standup-1.jpg', 1, 2),
(4, 'https://exemplo.com/img/festival-1.jpg', 1, 3),
(5, 'https://exemplo.com/img/futebol-1.jpg', 1, 4),
(6, 'https://exemplo.com/img/workshop-1.jpg', 1, 5),
(7, 'https://exemplo.com/img/cinema-1.jpg', 1, 6),
(8, 'https://exemplo.com/img/infantil-1.jpg', 1, 7),
(9, 'https://exemplo.com/img/gastronomia-1.jpg', 1, 8),
(10, 'https://exemplo.com/img/sertanejo-1.jpg', 1, 9);

ALTER TABLE `ADMINISTRADOR` AUTO_INCREMENT = 9;
ALTER TABLE `CATEGORIA` AUTO_INCREMENT = 9;
ALTER TABLE `PRODUTO` AUTO_INCREMENT = 11;
ALTER TABLE `PRODUTO_IMAGEM` AUTO_INCREMENT = 11;

COMMIT;
