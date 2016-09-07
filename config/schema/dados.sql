-- Inicio dos daddos da tabela `classificacoes` --
LOCK TABLES `classificacoes` WRITE;
/*!40000 ALTER TABLE `classificacoes` DISABLE KEYS */;
INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (1, 'Neuropática', 1, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (2, 'Isquêmica', 1, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (3, 'Venosa', 2, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (4, 'Arterial', 2, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (5, 'Mista', 2, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (6, 'Lesão por Pressão', 3, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (7, 'Lesão por Queimadura', 4, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (8, 'Curativo Cirúrgico', 5, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (9, 'Deiscência', 5, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (10, 'Infecção Local', 5, '2016-09-07 14:10:28', NULL);
/*!40000 ALTER TABLE `classificacoes` ENABLE KEYS */;
UNLOCK TABLES;
-- Fim dos daddos da tabela `classificacoes` --


-- Inicio dos daddos da tabela `estagios` --
LOCK TABLES `estagios` WRITE;
/*!40000 ALTER TABLE `estagios` DISABLE KEYS */;
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (1, '0', 'Pé de alto risco, sem úlcera, pele integra', 0, 1, 1, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (2, '1', 'Úlcera superficaial, chegando até subcutâneo', 1, 1, 1, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (3, '2', 'Úlcera profunda, sem envolvimento ósseo', 2, 1, 1, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (4, '3', 'Úlcera profunda, com formção de abscesso ou envolvimento ósseo', 3, 1, 1, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (5, '4', 'Gangrena parcial, ou localizada', 4, 1, 1, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (6, '5', 'Gangrena externa, ou de todo pé', 5, 1, 1, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (7, '0', 'Pé de alto risco, sem úlcera, pele integra', 0, 1, 2, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (8, '1', 'Úlcera superficaial, chegando até subcutâneo', 1, 1, 2, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (9, '2', 'Úlcera profunda, sem envolvimento ósseo', 2, 1, 2, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (10, '3', 'Úlcera profunda, com formção de abscesso ou envolvimento ósseo', 3, 1, 2, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (11, '4', 'Gangrena parcial, ou localizada', 4, 1, 2, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (12, '5', 'Gangrena externa, ou de todo pé', 5, 1, 2, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (13, '1', 'Aguardar', 1, 2, 3, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (14, '1', 'Aguardar', 1, 2, 4, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (15, '1', 'Aguardar', 1, 2, 5, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (16, 'I', 'Comprometimnento da epiderme', 1, 3, 6, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (17, 'II', 'Comprometimento até a derme', 2, 3, 6, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (18, 'III', 'Comprometimento até o subcutâneo', 3, 3, 6, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (19, 'IV', 'Comprometimento do músculo e tecido adjacente', 4, 3, 6, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (20, '1', 'Superficial (1º grau)', 1, 4, 7, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (21, '2', 'Parcial (2º grau)', 2, 4, 7, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (22, '3', 'Totasl (3º grau)', 3, 4, 7, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (23, '1', 'Sem comprometimento', 0, 5, 8, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (24, 'I', 'Comprometimento da epiderme', 1, 5, 9, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (25, 'II', 'Comprometimento até a derme', 2, 5, 9, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (26, 'III', 'Comprometimento até o subcutâneo', 3, 5, 9, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (27, 'IV', 'Comprometimento do músculo e tecido adjacente', 4, 5, 9, '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (28, '1', 'Infecção local', 1, 5, 10, '2016-09-07 14:10:28', NULL);
/*!40000 ALTER TABLE `estagios` ENABLE KEYS */;
UNLOCK TABLES;
-- Fim dos daddos da tabela `estagios` --


-- Inicio dos daddos da tabela `lesoes` --
LOCK TABLES `lesoes` WRITE;
/*!40000 ALTER TABLE `lesoes` DISABLE KEYS */;
INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Pé Diabético', '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (2, 'Lesão de Perna', '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (3, 'Lesão por Pressão', '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (4, 'Lesão por Queimadura', '2016-09-07 14:10:28', NULL);
INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (5, 'Lesão Cirúrgica', '2016-09-07 14:10:28', NULL);
/*!40000 ALTER TABLE `lesoes` ENABLE KEYS */;
UNLOCK TABLES;
-- Fim dos daddos da tabela `lesoes` --

