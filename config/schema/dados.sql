/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


 --
 -- Dumping data for table `classificacoes`
 --
 

 LOCK TABLES `classificacoes` WRITE;
 /*!40000 ALTER TABLE `classificacoes` DISABLE KEYS */;
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (1, 'Neuropática', 1, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (2, 'Isquêmica', 1, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (3, 'Venosa', 2, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (4, 'Arterial', 2, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (5, 'Mista', 2, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (6, 'Lesão por Pressão', 3, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (7, 'Lesão por Queimadura', 4, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (8, 'Curativo Cirúrgico', 5, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (9, 'Deiscência', 5, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (10, 'Infecção Local', 5, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (11, 'teste', 6, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `classificacoes` (`id`, `nome`, `lesao_id`, `created`, `modified`) VALUES  (12, 'aa', 7, '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `classificacoes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `comissoes`
 --
 

 LOCK TABLES `comissoes` WRITE;
 /*!40000 ALTER TABLE `comissoes` DISABLE KEYS */;
 INSERT IGNORE INTO `comissoes` (`id`, `nome`, `valor_maximo`, `comissao`, `status`, `crated`, `modified`, `comissoes_tipo_id`) VALUES  (1, 'Tabela Comissão Vendedor Externo', 10000, 4, 1, NULL, NULL, 1);
 INSERT IGNORE INTO `comissoes` (`id`, `nome`, `valor_maximo`, `comissao`, `status`, `crated`, `modified`, `comissoes_tipo_id`) VALUES  (2, 'Tabela Comissão Vendedor Externo', 5000, 0.7, 1, NULL, NULL, 2);
 /*!40000 ALTER TABLE `comissoes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `comissoes_correcoes`
 --
 

 LOCK TABLES `comissoes_correcoes` WRITE;
 /*!40000 ALTER TABLE `comissoes_correcoes` DISABLE KEYS */;
 /*!40000 ALTER TABLE `comissoes_correcoes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `comissoes_tipos`
 --
 

 LOCK TABLES `comissoes_tipos` WRITE;
 /*!40000 ALTER TABLE `comissoes_tipos` DISABLE KEYS */;
 INSERT IGNORE INTO `comissoes_tipos` (`id`, `nome`, `status`, `created`, `modified`) VALUES  (1, 'Balcão', 1, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `comissoes_tipos` (`id`, `nome`, `status`, `created`, `modified`) VALUES  (2, 'Vendedor externo', 1, '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `comissoes_tipos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `conselhos`
 --
 

 LOCK TABLES `conselhos` WRITE;
 /*!40000 ALTER TABLE `conselhos` DISABLE KEYS */;
 INSERT IGNORE INTO `conselhos` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Medicina Regional', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `conselhos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `contatos`
 --
 

 LOCK TABLES `contatos` WRITE;
 /*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
 INSERT IGNORE INTO `contatos` (`id`, `contatos_tipo_id`, `valor`, `referencia_id`, `tabela`, `created`, `modified`, `status`) VALUES  (1, NULL, NULL, 1, 0, '2016-12-07 00:14:49', NULL, NULL);
 INSERT IGNORE INTO `contatos` (`id`, `contatos_tipo_id`, `valor`, `referencia_id`, `tabela`, `created`, `modified`, `status`) VALUES  (2, 1, '(42) 34234-2342', 3, 0, '2016-12-07 00:14:49', NULL, 1);
 INSERT IGNORE INTO `contatos` (`id`, `contatos_tipo_id`, `valor`, `referencia_id`, `tabela`, `created`, `modified`, `status`) VALUES  (3, 5, '45345345345345@fsfasfasdf.vom', 3, 0, '2016-12-07 00:14:49', NULL, 1);
 /*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `contatos_tipos`
 --
 

 LOCK TABLES `contatos_tipos` WRITE;
 /*!40000 ALTER TABLE `contatos_tipos` DISABLE KEYS */;
 INSERT IGNORE INTO `contatos_tipos` (`id`, `nome`, `created`, `modified`, `mascara`) VALUES  (1, 'Telefone', '2016-12-07 00:14:49', NULL, 'tel');
 INSERT IGNORE INTO `contatos_tipos` (`id`, `nome`, `created`, `modified`, `mascara`) VALUES  (2, 'Celular', '2016-12-07 00:14:49', NULL, 'tel');
 INSERT IGNORE INTO `contatos_tipos` (`id`, `nome`, `created`, `modified`, `mascara`) VALUES  (3, 'E-mail', '2016-12-07 00:14:49', NULL, 'email');
 INSERT IGNORE INTO `contatos_tipos` (`id`, `nome`, `created`, `modified`, `mascara`) VALUES  (4, 'Whatsapp', '2016-12-07 00:14:49', NULL, 'tel');
 INSERT IGNORE INTO `contatos_tipos` (`id`, `nome`, `created`, `modified`, `mascara`) VALUES  (5, 'Skype', '2016-12-07 00:14:49', NULL, 'text');
 /*!40000 ALTER TABLE `contatos_tipos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `convenios`
 --
 

 LOCK TABLES `convenios` WRITE;
 /*!40000 ALTER TABLE `convenios` DISABLE KEYS */;
 INSERT IGNORE INTO `convenios` (`id`, `nome`, `status`, `razao_social`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cnpj`, `inscricao`, `centro_custo`, `created`, `modified`) VALUES  (1, 'Unimed Ribeirão Preto', 1, 'Unimed Ribeirão Preto', '21620150', 'Rua Calatéia', '109', NULL, 'Anchieta', 'Rio de Janeiro', 'RJ', '12345678901234', '11111111', '1', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `convenios` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `cores`
 --
 

 LOCK TABLES `cores` WRITE;
 /*!40000 ALTER TABLE `cores` DISABLE KEYS */;
 INSERT IGNORE INTO `cores` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Branca', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `cores` (`id`, `nome`, `created`, `modified`) VALUES  (2, 'Preta', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `cores` (`id`, `nome`, `created`, `modified`) VALUES  (3, 'Amarela', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `cores` (`id`, `nome`, `created`, `modified`) VALUES  (4, 'Parda', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `cores` (`id`, `nome`, `created`, `modified`) VALUES  (5, 'Indígena', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `cores` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `corporais`
 --
 

 LOCK TABLES `corporais` WRITE;
 /*!40000 ALTER TABLE `corporais` DISABLE KEYS */;
 /*!40000 ALTER TABLE `corporais` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `corporais_lesoes`
 --
 

 LOCK TABLES `corporais_lesoes` WRITE;
 /*!40000 ALTER TABLE `corporais_lesoes` DISABLE KEYS */;
 /*!40000 ALTER TABLE `corporais_lesoes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `escolaridades`
 --
 

 LOCK TABLES `escolaridades` WRITE;
 /*!40000 ALTER TABLE `escolaridades` DISABLE KEYS */;
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Fundamental - Incompleto', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (2, 'Fundamental - Completo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (3, 'Médio - Incompleto', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (4, 'Médio - Completo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (5, 'Superior - Incompleto', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (6, 'Superior - Completo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (7, 'Pós-graduação(lato senso) - Incompleto', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (8, 'Pós-graduação(lato senso) - Completo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (9, 'Pós-graduação(Stricto sensu, nível mestrado) - Incompleto', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (10, 'Pós-graduação(Stricto sensu, nível mestrado) - Completo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (11, 'Pós-graduação(Stricto sensu, nível doutor) - Incompleto', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `escolaridades` (`id`, `nome`, `created`, `modified`) VALUES  (12, 'Pós-graduação(Stricto sensu, nível doutor) - Completo', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `escolaridades` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `especialidades`
 --
 

 LOCK TABLES `especialidades` WRITE;
 /*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Dentista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (2, 'Enfermeiro', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (3, 'Farmacêutico', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (4, 'Fisioterapeuta', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (5, 'Fonoaudiólogo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (6, 'Gerentólogo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (7, 'Médico', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (8, 'Nutricionista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (9, 'Nutrólogo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (10, 'Odontólogo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (11, 'Psicólogo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (12, 'Radiologista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (13, 'Técnico Enfermagem', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `especialidades` (`id`, `nome`, `created`, `modified`) VALUES  (14, 'Terapeuta Ocupacional', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `estados_civis`
 --
 

 LOCK TABLES `estados_civis` WRITE;
 /*!40000 ALTER TABLE `estados_civis` DISABLE KEYS */;
 INSERT IGNORE INTO `estados_civis` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Solteira(o)', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estados_civis` (`id`, `nome`, `created`, `modified`) VALUES  (2, 'Casada(o)', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estados_civis` (`id`, `nome`, `created`, `modified`) VALUES  (3, 'Separada(o)', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estados_civis` (`id`, `nome`, `created`, `modified`) VALUES  (4, 'Divorciada(o)', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estados_civis` (`id`, `nome`, `created`, `modified`) VALUES  (5, 'Viúva(o)', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `estados_civis` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `estagios`
 --
 

 LOCK TABLES `estagios` WRITE;
 /*!40000 ALTER TABLE `estagios` DISABLE KEYS */;
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (1, '0', 'Pé de alto risco, sem úlcera, pele integra', 0, 1, 15, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (2, '1', 'Úlcera superficaial, chegando até subcutâneo', 1, 1, 1, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (3, '2', 'Úlcera profunda, sem envolvimento ósseo', 2, 1, 1, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (4, '3', 'Úlcera profunda, com formção de abscesso ou envolvimento ósseo', 3, 1, 1, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (5, '4', 'Gangrena parcial, ou localizada', 8, 1, 1, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (6, '5', 'Gangrena externa, ou de todo pé', 5, 1, 1, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (7, '0', 'Pé de alto risco, sem úlcera, pele integra', 0, 1, 2, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (8, '1', 'Úlcera superficaial, chegando até subcutâneo', 1, 1, 2, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (9, '2', 'Úlcera profunda, sem envolvimento ósseo', 2, 1, 2, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (10, '3', 'Úlcera profunda, com formção de abscesso ou envolvimento ósseo', 3, 1, 2, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (11, '4', 'Gangrena parcial, ou localizada', 4, 1, 2, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (12, '5', 'Gangrena externa, ou de todo pé', 5, 1, 2, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (13, '1', 'Aguardar', 1, 2, 3, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (14, '1', 'Aguardar', 1, 2, 4, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (15, '1', 'Aguardar', 1, 2, 5, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (16, 'I', 'Comprometimnento da epiderme', 1, 3, 6, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (17, 'II', 'Comprometimento até a derme', 2, 3, 6, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (18, 'III', 'Comprometimento até o subcutâneo', 3, 3, 6, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (19, 'IV', 'Comprometimento do músculo e tecido adjacente', 4, 3, 6, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (20, '1', 'Superficial (1º grau)', 1, 4, 7, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (21, '2', 'Parcial (2º grau)', 2, 4, 7, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (22, '3', 'Totasl (3º grau)', 6, 4, 7, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (23, '1', 'Sem comprometimento', 9, 5, 8, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (24, 'I', 'Comprometimento da epiderme', 1, 5, 9, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (25, 'II', 'Comprometimento até a derme', 2, 5, 9, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (26, 'III', 'Comprometimento até o subcutâneo', 3, 5, 9, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (27, 'IV', 'Comprometimento do músculo e tecido adjacente', 5, 5, 9, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (28, '1', 'Infecção local', 1, 5, 10, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (29, '0', 'teste desc 6', 6, 6, 11, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `estagios` (`id`, `codigo`, `nome`, `peso`, `lesao_id`, `classificacao_id`, `created`, `modified`) VALUES  (30, '4', 'dde', 8, 7, 12, '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `estagios` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `funcionarios`
 --
 

 LOCK TABLES `funcionarios` WRITE;
 /*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
 /*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `lesoes`
 --
 

 LOCK TABLES `lesoes` WRITE;
 /*!40000 ALTER TABLE `lesoes` DISABLE KEYS */;
 INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Pé Diabético', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (2, 'Lesão de Perna', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (3, 'Lesão por Pressão', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (4, 'Lesão por Queimadura', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (5, 'Lesão Cirúrgica', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (6, 'teste', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `lesoes` (`id`, `nome`, `created`, `modified`) VALUES  (7, 'aa', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `lesoes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `menus`
 --
 

 LOCK TABLES `menus` WRITE;
 /*!40000 ALTER TABLE `menus` DISABLE KEYS */;
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (1, 'Lesões', NULL, 'Lesoes', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (2, 'edit', NULL, 'Lesoes', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (3, 'add', NULL, 'Lesoes', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (4, 'delete', NULL, 'Lesoes', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (5, 'Estado Civil', NULL, 'EstadosCivis', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (6, 'edit', NULL, 'EstadosCivis', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (7, 'add', NULL, 'EstadosCivis', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (8, 'delete', NULL, 'EstadosCivis', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (9, 'Nacionalidades', NULL, 'Nacionalidades', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (10, 'edit', NULL, 'Nacionalidades', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (11, 'add', NULL, 'Nacionalidades', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (12, 'delete', NULL, 'Nacionalidades', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (13, 'Escolaridades', NULL, 'Escolaridades', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (14, 'edit', NULL, 'Escolaridades', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (15, 'add', NULL, 'Escolaridades', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (16, 'delete', NULL, 'Escolaridades', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (17, 'Convênios', NULL, 'Convenios', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (18, 'edit', NULL, 'Convenios', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (19, 'add', NULL, 'Convenios', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (20, 'delete', NULL, 'Convenios', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (21, 'Corporais Lesões', NULL, 'CorporaisLesoes', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (22, 'edit', NULL, 'CorporaisLesoes', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (23, 'add', NULL, 'CorporaisLesoes', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (24, 'delete', NULL, 'CorporaisLesoes', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (25, 'Tabelas Valor Históricos', NULL, 'TabelasValoresHistoricos', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (26, 'edit', NULL, 'TabelasValoresHistoricos', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (27, 'add', NULL, 'TabelasValoresHistoricos', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (28, 'delete', NULL, 'TabelasValoresHistoricos', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (29, 'Contatos Tipos', NULL, 'ContatosTipos', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (30, 'edit', NULL, 'ContatosTipos', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (31, 'add', NULL, 'ContatosTipos', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (32, 'delete', NULL, 'ContatosTipos', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (33, 'Religião', NULL, 'Religioes', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (34, 'edit', NULL, 'Religioes', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (35, 'add', NULL, 'Religioes', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (36, 'delete', NULL, 'Religioes', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (37, 'Pacientes Soube', NULL, 'PacientesSoube', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (38, 'edit', NULL, 'PacientesSoube', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (39, 'add', NULL, 'PacientesSoube', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (40, 'delete', NULL, 'PacientesSoube', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (41, 'Corporais', NULL, 'Corporais', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (42, 'edit', NULL, 'Corporais', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (43, 'add', NULL, 'Corporais', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (44, 'delete', NULL, 'Corporais', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (45, 'Funcionários', NULL, 'Funcionarios', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (46, 'edit', NULL, 'Funcionarios', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (47, 'add', NULL, 'Funcionarios', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (48, 'delete', NULL, 'Funcionarios', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (49, 'Parentescos', NULL, 'Parentescos', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (50, 'edit', NULL, 'Parentescos', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (51, 'add', NULL, 'Parentescos', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (52, 'delete', NULL, 'Parentescos', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (53, 'Cores', NULL, 'Cores', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (54, 'edit', NULL, 'Cores', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (55, 'add', NULL, 'Cores', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (56, 'delete', NULL, 'Cores', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (57, 'Estagios', NULL, 'Estagios', 'index', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (58, 'edit', NULL, 'Estagios', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (59, 'add', NULL, 'Estagios', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (60, 'delete', NULL, 'Estagios', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (61, 'Comissões', NULL, 'Comissoes', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (62, 'edit', NULL, 'Comissoes', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (63, 'add', NULL, 'Comissoes', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (64, 'delete', NULL, 'Comissoes', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (65, 'Usuários', NULL, 'Usuarios', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (66, 'edit', NULL, 'Usuarios', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (67, 'add', NULL, 'Usuarios', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (68, 'delete', NULL, 'Usuarios', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (69, 'Pacientes Acompanhamentos', NULL, 'PacientesAcompanhamentos', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (70, 'edit', NULL, 'PacientesAcompanhamentos', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (71, 'add', NULL, 'PacientesAcompanhamentos', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (72, 'delete', NULL, 'PacientesAcompanhamentos', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (73, 'Sexos', NULL, 'Sexos', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (74, 'edit', NULL, 'Sexos', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (75, 'add', NULL, 'Sexos', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (76, 'delete', NULL, 'Sexos', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (77, 'Comissoes Correcoes', NULL, 'ComissoesCorrecoes', 'index', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (78, 'edit', NULL, 'ComissoesCorrecoes', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (79, 'add', NULL, 'ComissoesCorrecoes', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (80, 'delete', NULL, 'ComissoesCorrecoes', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (81, 'Pacientes Emergências', NULL, 'PacientesEmergencias', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (82, 'edit', NULL, 'PacientesEmergencias', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (83, 'add', NULL, 'PacientesEmergencias', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (84, 'delete', NULL, 'PacientesEmergencias', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (85, 'Especialidades', NULL, 'Especialidades', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (86, 'edit', NULL, 'Especialidades', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (87, 'add', NULL, 'Especialidades', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (88, 'delete', NULL, 'Especialidades', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (89, 'Conselhos', NULL, 'Conselhos', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (90, 'edit', NULL, 'Conselhos', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (91, 'add', NULL, 'Conselhos', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (92, 'delete', NULL, 'Conselhos', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (93, 'Tabelas Valores', NULL, 'TabelasValores', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (94, 'edit', NULL, 'TabelasValores', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (95, 'add', NULL, 'TabelasValores', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (96, 'delete', NULL, 'TabelasValores', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (97, 'Tabelas Preços', NULL, 'TabelasPrecos', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (98, 'edit', NULL, 'TabelasPrecos', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (99, 'add', NULL, 'TabelasPrecos', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (100, 'delete', NULL, 'TabelasPrecos', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (101, 'Serviços Clinicas', NULL, 'ServicosClinicas', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (102, 'edit', NULL, 'ServicosClinicas', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (103, 'add', NULL, 'ServicosClinicas', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (104, 'delete', NULL, 'ServicosClinicas', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (105, 'Contatos', NULL, 'Contatos', 'index', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (106, 'edit', NULL, 'Contatos', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (107, 'add', NULL, 'Contatos', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (108, 'delete', NULL, 'Contatos', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (109, 'Pacientes Convênios', NULL, 'PacientesConvenios', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (110, 'edit', NULL, 'PacientesConvenios', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (111, 'add', NULL, 'PacientesConvenios', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (112, 'delete', NULL, 'PacientesConvenios', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (113, 'Profissões', NULL, 'Profissoes', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (114, 'edit', NULL, 'Profissoes', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (115, 'add', NULL, 'Profissoes', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (116, 'delete', NULL, 'Profissoes', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (117, 'Tabelas Reajustes', NULL, 'TabelasReajustes', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (118, 'edit', NULL, 'TabelasReajustes', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (119, 'add', NULL, 'TabelasReajustes', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (120, 'delete', NULL, 'TabelasReajustes', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (121, 'Menus', NULL, 'Menus', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (122, 'edit', NULL, 'Menus', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (123, 'add', NULL, 'Menus', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (124, 'delete', NULL, 'Menus', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (125, 'Classificações', NULL, 'Classificacoes', 'index', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (126, 'edit', NULL, 'Classificacoes', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (127, 'add', NULL, 'Classificacoes', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (128, 'delete', NULL, 'Classificacoes', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (129, 'Prestadores', NULL, 'Prestadores', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (130, 'edit', NULL, 'Prestadores', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (131, 'add', NULL, 'Prestadores', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (132, 'delete', NULL, 'Prestadores', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (133, 'Pacientes Midias', NULL, 'PacientesMidias', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (134, 'edit', NULL, 'PacientesMidias', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (135, 'add', NULL, 'PacientesMidias', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (136, 'delete', NULL, 'PacientesMidias', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (137, 'Pacientes Serviços', NULL, 'PacientesServicos', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (138, 'edit', NULL, 'PacientesServicos', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (139, 'add', NULL, 'PacientesServicos', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (140, 'delete', NULL, 'PacientesServicos', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (141, 'Midias', NULL, 'Midias', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (142, 'edit', NULL, 'Midias', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (143, 'add', NULL, 'Midias', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (144, 'delete', NULL, 'Midias', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (145, 'Pacientes', NULL, 'Pacientes', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (146, 'edit', NULL, 'Pacientes', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (147, 'add', NULL, 'Pacientes', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (148, 'delete', NULL, 'Pacientes', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (149, 'Comissões Tipos', NULL, 'ComissoesTipos', 'index', 1, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (150, 'edit', NULL, 'ComissoesTipos', 'edit', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (151, 'add', NULL, 'ComissoesTipos', 'add', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `menus` (`id`, `titulo`, `path`, `controller`, `action`, `status`, `item_menu`, `icon`, `created`, `modified`) VALUES  (152, 'delete', NULL, 'ComissoesTipos', 'delete', 1, 0, NULL, '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `menus` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `midias`
 --
 

 LOCK TABLES `midias` WRITE;
 /*!40000 ALTER TABLE `midias` DISABLE KEYS */;
 INSERT IGNORE INTO `midias` (`id`, `nome`, `contatos_tipo_id`, `created`, `modified`) VALUES  (1, 'WhatsApp', 1, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `midias` (`id`, `nome`, `contatos_tipo_id`, `created`, `modified`) VALUES  (2, 'SMS', 1, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `midias` (`id`, `nome`, `contatos_tipo_id`, `created`, `modified`) VALUES  (3, 'Email', 3, '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `midias` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `nacionalidades`
 --
 

 LOCK TABLES `nacionalidades` WRITE;
 /*!40000 ALTER TABLE `nacionalidades` DISABLE KEYS */;
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (1, 'Brasileiro(a)', 'Brasil', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (2, 'Alemão(ã)', 'Alemanha', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (3, 'Argentino(a)', 'Argentina', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (4, 'Australianao(a)', 'Austrália', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (5, 'Belga', 'Bélgica', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (6, 'Boliviano(a)', 'Bolívia', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (7, 'Canadense', 'Canadá', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (8, 'Chileno(a)', 'Chile', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (9, 'Chines(a)', 'China', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (10, 'Colombiano(a)', 'Colômbia', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (11, 'Cubano(a)', 'Cuba', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (12, 'Equatoriano(a)', 'Equador', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (13, 'Espanhol(a)', 'Espanha', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (14, 'Norte Americano(a)', 'Estados Unidos', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (15, 'Francês/Francesa', 'França', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (16, 'Holandês/Holandesa', 'Holanda', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (17, 'Húngaro/Hungara', 'Hungria', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (18, 'Inglês/Inglesa', 'Inglaterra', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (19, 'Iraquiano(a)', 'Iraque', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (20, 'Italiano(a)', 'Itália', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (21, 'Jamaicano(a)', 'Jamaica', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (22, 'Japonês/Japonesa', 'Japão', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (24, 'Mexicano(a)', 'México', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (25, 'Paraguaio(a)', 'Paraguai', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (26, 'Russo(a)', 'Rússia', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (27, 'Sueco(a)', 'Suécia', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (28, 'Suíço(a)', 'Suíça', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (29, 'Turco(a)', 'Turquia', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `nacionalidades` (`id`, `nome`, `pais`, `created`, `modified`) VALUES  (30, 'Uruguai(a)', 'Uruguai', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `nacionalidades` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `pacientes`
 --
 

 LOCK TABLES `pacientes` WRITE;
 /*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (1, 'Lucas Nunes Pinto Pinheiro', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '31283875837', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (2, 'LUCAS NUNES PINTO PINHEIRO', 1, '14031-300', 'RUA ALFREDO CONDEIXA - ATÉ 1128/1129', '109', NULL, 'JARDIM MARCHESI', 'RIBEIRÃO PRETO', 'SP', '31723287830', '289097800', '1984-03-07T00:00:00+00:00', 1, NULL, NULL, 2, 5, 4, 'RIBEIRÃO PRETO', 1, 5, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (3, 'LUCAS PINHEIRO', 1, '14031-010', 'RUA JOAQUIM FRANCISCO GALIANO', '109', NULL, 'VILA GUIOMAR', 'RIBEIRÃO PRETO', 'SP', '43461706760', '28909780-0/SSP-SP', '1984-03-07T00:00:00+00:00', 1, '44922df2cc6a08dd6795568b84627ff8.png', NULL, 2, 5, 4, 'RIBEIRÃO PRETO', 1, 5, 1, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (4, 'Lucas Nunes Pinto Pinheiro', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (5, 'Lucas Pinto Pinheiro', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (6, 'Lucas Nunes Pinheiro', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (7, 'Lucas Nunes Pinto', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1984-07-03T00:00:00+00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (8, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (9, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (10, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (11, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (12, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (13, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (14, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (15, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (16, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (17, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (18, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `pacientes` (`id`, `nome`, `status`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cpf`, `rg`, `data_nascimento`, `sexo_id`, `foto`, `cartao_sus`, `estados_civil_id`, `escolaridade_id`, `profissao_id`, `naturalidade`, `nacionalidade_id`, `religiao_id`, `cor_id`, `centro_custo`, `created`, `modified`) VALUES  (19, '19', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `pacientes_acompanhamentos`
 --
 

 LOCK TABLES `pacientes_acompanhamentos` WRITE;
 /*!40000 ALTER TABLE `pacientes_acompanhamentos` DISABLE KEYS */;
 INSERT IGNORE INTO `pacientes_acompanhamentos` (`id`, `paciente_id`, `especialidade_id`, `medico`, `telefone`, `created`, `modified`, `status`) VALUES  (1, 3, 1, 'aa', '16992660128', '2016-12-07 00:14:49', NULL, 1);
 INSERT IGNORE INTO `pacientes_acompanhamentos` (`id`, `paciente_id`, `especialidade_id`, `medico`, `telefone`, `created`, `modified`, `status`) VALUES  (2, 3, 2, 'qq', '16991735210', '2016-12-07 00:14:49', NULL, 1);
 INSERT IGNORE INTO `pacientes_acompanhamentos` (`id`, `paciente_id`, `especialidade_id`, `medico`, `telefone`, `created`, `modified`, `status`) VALUES  (3, 3, 14, 'aaaaaa', '(11) 11111-1111', '2016-12-07 00:14:49', NULL, 9);
 INSERT IGNORE INTO `pacientes_acompanhamentos` (`id`, `paciente_id`, `especialidade_id`, `medico`, `telefone`, `created`, `modified`, `status`) VALUES  (4, 3, 14, 'aaaaaa', '(11) 11111-1111', '2016-12-07 00:14:49', NULL, 1);
 /*!40000 ALTER TABLE `pacientes_acompanhamentos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `pacientes_convenios`
 --
 

 LOCK TABLES `pacientes_convenios` WRITE;
 /*!40000 ALTER TABLE `pacientes_convenios` DISABLE KEYS */;
 INSERT IGNORE INTO `pacientes_convenios` (`id`, `paciente_id`, `convenio_id`, `plano`, `matricula`, `titular`, `created`, `modified`, `status`) VALUES  (2, 3, 1, 'lite', '123234', 'Lucas', '2016-12-07 00:14:49', NULL, 1);
 /*!40000 ALTER TABLE `pacientes_convenios` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `pacientes_emergencias`
 --
 

 LOCK TABLES `pacientes_emergencias` WRITE;
 /*!40000 ALTER TABLE `pacientes_emergencias` DISABLE KEYS */;
 INSERT IGNORE INTO `pacientes_emergencias` (`id`, `paciente_id`, `nome`, `parentesco_id`, `telefone`, `created`, `modified`, `status`) VALUES  (1, 3, 'aaa', 1, '16992660128', '2016-12-07 00:14:49', NULL, 1);
 /*!40000 ALTER TABLE `pacientes_emergencias` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `pacientes_midias`
 --
 

 LOCK TABLES `pacientes_midias` WRITE;
 /*!40000 ALTER TABLE `pacientes_midias` DISABLE KEYS */;
 INSERT IGNORE INTO `pacientes_midias` (`id`, `paciente_id`, `midia_id`, `created`, `modified`, `status`) VALUES  (16, 3, 2, '2016-12-07 00:14:49', NULL, 1);
 /*!40000 ALTER TABLE `pacientes_midias` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `pacientes_programacoes`
 --
 

 LOCK TABLES `pacientes_programacoes` WRITE;
 /*!40000 ALTER TABLE `pacientes_programacoes` DISABLE KEYS */;
 INSERT IGNORE INTO `pacientes_programacoes` (`id`, `paciente_id`, `usuario_id`, `motivo`, `data`, `hora`, `created`, `modified`, `status`) VALUES  (1, 3, 1, 'ssaa', '2016-09-15T00:00:00+00:00', '2016-12-07T00:20:16-02:00', '2016-12-07 00:14:49', NULL, 1);
 /*!40000 ALTER TABLE `pacientes_programacoes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `pacientes_servicos`
 --
 

 LOCK TABLES `pacientes_servicos` WRITE;
 /*!40000 ALTER TABLE `pacientes_servicos` DISABLE KEYS */;
 INSERT IGNORE INTO `pacientes_servicos` (`id`, `paciente_id`, `servicos_clinica_id`, `created`, `modified`, `status`) VALUES  (1, 3, 1, '2016-12-07 00:14:49', NULL, 1);
 /*!40000 ALTER TABLE `pacientes_servicos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `pacientes_soube`
 --
 

 LOCK TABLES `pacientes_soube` WRITE;
 /*!40000 ALTER TABLE `pacientes_soube` DISABLE KEYS */;
 INSERT IGNORE INTO `pacientes_soube` (`id`, `paciente_id`, `como`, `nome`, `telefone`, `especialidade_id`, `created`, `modified`, `status`) VALUES  (1, 1, NULL, NULL, NULL, NULL, '2016-12-07 00:14:49', NULL, 1);
 INSERT IGNORE INTO `pacientes_soube` (`id`, `paciente_id`, `como`, `nome`, `telefone`, `especialidade_id`, `created`, `modified`, `status`) VALUES  (2, 3, 'wefsdf', 'sdgsdfgsdfg', '(11) 11111-1111', 1, '2016-12-07 00:14:49', NULL, 1);
 /*!40000 ALTER TABLE `pacientes_soube` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `parametros_paginacoes`
 --
 

 LOCK TABLES `parametros_paginacoes` WRITE;
 /*!40000 ALTER TABLE `parametros_paginacoes` DISABLE KEYS */;
 INSERT IGNORE INTO `parametros_paginacoes` (`id`, `usuario_id`, `tabela`, `limite`, `coluna`, `direcao`) VALUES  (1, 1, 'pacientes', 5, 'nome', 'asc');
 /*!40000 ALTER TABLE `parametros_paginacoes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `parametros_tabelas`
 --
 

 LOCK TABLES `parametros_tabelas` WRITE;
 /*!40000 ALTER TABLE `parametros_tabelas` DISABLE KEYS */;
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (1, 1, 'ID', 'id', 'id', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (2, 1, 'Nome', 'nome', 'nome', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (3, 1, 'Situação', 'status', 'status_mask', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (4, 1, 'CEP', 'cep', 'cep', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (5, 1, 'Endereço', 'endereco', 'endereco', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (6, 1, 'Número', 'numero', 'numero', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (7, 1, 'Complemento', 'complemento', 'complemento', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (8, 1, 'Bairro', 'bairro', 'bairro', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (9, 1, 'Cidade', 'cidade', 'cidade', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (10, 1, 'Estado', 'estado', 'estado', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (11, 1, 'CPF', 'cpf', 'cpf_mask', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (12, 1, 'RG', 'rg', 'rg', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (13, 1, 'Data de Nascimento', 'data_nascimento', 'data_nascimento', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (14, 1, 'Sexo', 'sexo_id', 'sexo_mask', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (15, 1, 'Cartão SUS', 'cartao_sus', 'cartao_sus', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (16, 1, 'Estado Civil', 'estados_civil_id', 'estados_civil_mask', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (17, 1, 'Escolaridade', 'escolaridade_id', 'escolaridade_mask', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (18, 1, 'Profissão', 'profissao_id', 'profissao_mask', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (19, 1, 'Naturalidade', 'naturalidade', 'naturalidade', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (20, 1, 'Nascionalidade', 'nacionalidade_id', 'nacionalidade_mask', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (21, 1, 'Religião', 'religiao_id', 'religiao_mask', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (22, 1, 'Cor', 'cor_id', 'cor_mask', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (23, 1, 'Centro de custo', 'centro_custo', 'centro_custo', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (24, 1, 'Data Cadastro', 'created', 'created', 1, 'active', 'pacientes');
 INSERT IGNORE INTO `parametros_tabelas` (`id`, `usuario_id`, `label`, `coluna`, `chave`, `ative`, `css`, `tabela`) VALUES  (25, 1, 'Data Alteração', 'modified', 'modified', 1, 'active', 'pacientes');
 /*!40000 ALTER TABLE `parametros_tabelas` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `parentescos`
 --
 

 LOCK TABLES `parentescos` WRITE;
 /*!40000 ALTER TABLE `parentescos` DISABLE KEYS */;
 INSERT IGNORE INTO `parentescos` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Esposa(o)', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `parentescos` (`id`, `nome`, `created`, `modified`) VALUES  (2, 'Pai', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `parentescos` (`id`, `nome`, `created`, `modified`) VALUES  (3, 'Mãe', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `parentescos` (`id`, `nome`, `created`, `modified`) VALUES  (4, 'Filha(o)', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `parentescos` (`id`, `nome`, `created`, `modified`) VALUES  (5, 'Sogra(o)', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `parentescos` (`id`, `nome`, `created`, `modified`) VALUES  (6, 'Irmã(o)', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `parentescos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `prestadores`
 --
 

 LOCK TABLES `prestadores` WRITE;
 /*!40000 ALTER TABLE `prestadores` DISABLE KEYS */;
 /*!40000 ALTER TABLE `prestadores` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `profissoes`
 --
 

 LOCK TABLES `profissoes` WRITE;
 /*!40000 ALTER TABLE `profissoes` DISABLE KEYS */;
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Açougueiro', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (2, 'Agente Imobiliário', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (3, 'Agricultor', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (4, 'Analista de Sistemas de Computação', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (5, 'Assistente Social', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (6, 'Astrônomo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (7, 'Ator', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (8, 'Bombeiro', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (9, 'Caixa', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (10, 'Carpinteiro', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (11, 'Carteiro', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (12, 'Comissário de Vôo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (13, 'Contador', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (14, 'Controlador de Tráfico Aéreo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (15, 'Costureira/Alfaiate', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (16, 'Dentista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (17, 'Dermatologista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (18, 'Doméstica', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (19, 'Engenheiro Ambiental', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (20, 'Engenheiro Biomédico', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (21, 'Engenheiro Civil', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (22, 'Estoquista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (23, 'Farmacêutico', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (24, 'Faxineiro', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (25, 'Fisioterapeuta', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (26, 'Fonoaudiólogo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (27, 'Fotógrafo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (28, 'Garcom/Garçonete', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (29, 'Marinheiro', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (30, 'Médico', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (31, 'Médico Veterinário', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (32, 'Militar', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (33, 'Motorista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (34, 'Nutricionista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (35, 'Pintor', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (36, 'Podólogo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (37, 'Pediatra', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (38, 'Policial', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (39, 'Professor', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (40, 'Programador de Computador', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (41, 'Psiquiatra', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (42, 'Radialista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (43, 'Repórter', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `profissoes` (`id`, `nome`, `created`, `modified`) VALUES  (44, 'Terapeuta Ocupacional', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `profissoes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `religioes`
 --
 

 LOCK TABLES `religioes` WRITE;
 /*!40000 ALTER TABLE `religioes` DISABLE KEYS */;
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Batista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (2, 'Budista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (3, 'Católica Apostólica Romana', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (4, 'Católica Ortodoxa', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (5, 'Espirita', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (6, 'Evangelica', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (7, 'Igreja Adventista do Sétimo Dia', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (8, 'Islamismo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (9, 'Judaismo', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (10, 'Luterana', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (11, 'Metodista', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (12, 'Morman', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (13, 'Presbiteriana', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `religioes` (`id`, `nome`, `created`, `modified`) VALUES  (14, 'Umbanda', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `religioes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `servicos_clinicas`
 --
 

 LOCK TABLES `servicos_clinicas` WRITE;
 /*!40000 ALTER TABLE `servicos_clinicas` DISABLE KEYS */;
 INSERT IGNORE INTO `servicos_clinicas` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Coleta de Sangue', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `servicos_clinicas` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `sexos`
 --
 

 LOCK TABLES `sexos` WRITE;
 /*!40000 ALTER TABLE `sexos` DISABLE KEYS */;
 INSERT IGNORE INTO `sexos` (`id`, `nome`, `created`, `modified`) VALUES  (1, 'Masculino', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `sexos` (`id`, `nome`, `created`, `modified`) VALUES  (2, 'Feminino', '2016-12-07 00:14:49', NULL);
 INSERT IGNORE INTO `sexos` (`id`, `nome`, `created`, `modified`) VALUES  (3, 'Outros', '2016-12-07 00:14:49', NULL);
 /*!40000 ALTER TABLE `sexos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `tabelas_precos`
 --
 

 LOCK TABLES `tabelas_precos` WRITE;
 /*!40000 ALTER TABLE `tabelas_precos` DISABLE KEYS */;
 /*!40000 ALTER TABLE `tabelas_precos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `tabelas_reajustes`
 --
 

 LOCK TABLES `tabelas_reajustes` WRITE;
 /*!40000 ALTER TABLE `tabelas_reajustes` DISABLE KEYS */;
 /*!40000 ALTER TABLE `tabelas_reajustes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `tabelas_valores`
 --
 

 LOCK TABLES `tabelas_valores` WRITE;
 /*!40000 ALTER TABLE `tabelas_valores` DISABLE KEYS */;
 /*!40000 ALTER TABLE `tabelas_valores` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `tabelas_valores_historicos`
 --
 

 LOCK TABLES `tabelas_valores_historicos` WRITE;
 /*!40000 ALTER TABLE `tabelas_valores_historicos` DISABLE KEYS */;
 /*!40000 ALTER TABLE `tabelas_valores_historicos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `usuarios`
 --
 

 LOCK TABLES `usuarios` WRITE;
 /*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
 INSERT IGNORE INTO `usuarios` (`id`, `nome`, `login`, `senha`, `status`, `created`, `modified`, `root`) VALUES  (1, 'Super Administrador do Sistema', 'super', '$2y$10$2XV67/X//PEj/EBVUQal0uxKCTZpOahecHy16AipaiYLeFHhlGiQm', 1, '2016-12-07 00:14:49', NULL, 1);
 INSERT IGNORE INTO `usuarios` (`id`, `nome`, `login`, `senha`, `status`, `created`, `modified`, `root`) VALUES  (2, 'Administrador do Sistema', 'admin', '$2y$10$eq7HkhiD9pQQEToCX5nRtuJAN7sl172ftVO0E04tS/xTwSbOhOOHa', 1, '2016-12-07 00:14:49', NULL, NULL);
 /*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
 UNLOCK TABLES;
 

/* !40103 SET TIME_ZONE=@OLD_TIME_ZONE */;


/* !40101 SET SQL_MODE=@OLD_SQL_MODE */;
/* !40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/* !40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/* !40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


-- Dump completed on 2016-12-07 00:14:49