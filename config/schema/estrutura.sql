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


-- Inicio das estrutura da tabela `classificacoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `classificacoes`;
CREATE TABLE IF NOT EXISTS `classificacoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`lesao_id` INTEGER(11) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `classificacoes` --


-- Inicio das estrutura da tabela `comissoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `comissoes`;
CREATE TABLE IF NOT EXISTS `comissoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`valor_maximo` FLOAT(10,2) DEFAULT NULL,
`comissao` FLOAT(5,2) DEFAULT NULL,
`status` INTEGER(11) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`crated` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `comissoes` --


-- Inicio das estrutura da tabela `comissoes_correcoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `comissoes_correcoes`;
CREATE TABLE IF NOT EXISTS `comissoes_correcoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`comissao_id` INTEGER(11) DEFAULT NULL,
`ano` INTEGER(11) DEFAULT NULL,
`mes` VARCHAR(2) COLLATE latin1_swedish_ci DEFAULT NULL,
`percentual` FLOAT(5,2) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `comissoes_correcoes` --


-- Inicio das estrutura da tabela `conselhos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `conselhos`;
CREATE TABLE IF NOT EXISTS `conselhos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `conselhos` --


-- Inicio das estrutura da tabela `contatos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`contatos_tipo_id` INTEGER(11) DEFAULT NULL,
`valor` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`parentesco_id` INTEGER(11) DEFAULT NULL,
`tabela` INTEGER(11) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `contatos` --


-- Inicio das estrutura da tabela `contatos_tipos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `contatos_tipos`;
CREATE TABLE IF NOT EXISTS `contatos_tipos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `contatos_tipos` --


-- Inicio das estrutura da tabela `convenios` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `convenios`;
CREATE TABLE IF NOT EXISTS `convenios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`status` INTEGER(11) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo | 3 - Excluidos',
`razao_social` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`cep` VARCHAR(10) COLLATE latin1_swedish_ci DEFAULT NULL,
`endereco` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`numero` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`complemento` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`bairro` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`cidade` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`estado` VARCHAR(2) COLLATE latin1_swedish_ci DEFAULT NULL,
`cnpj` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`inscricao` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`centro_custo` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `convenios` --


-- Inicio das estrutura da tabela `cores` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `cores`;
CREATE TABLE IF NOT EXISTS `cores` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `cores` --


-- Inicio das estrutura da tabela `corporais` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `corporais`;
CREATE TABLE IF NOT EXISTS `corporais` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `corporais` --


-- Inicio das estrutura da tabela `corporais_lesoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `corporais_lesoes`;
CREATE TABLE IF NOT EXISTS `corporais_lesoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`lesao_id` INTEGER(11) DEFAULT NULL,
`corporal_id` INTEGER(11) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `corporais_lesoes` --


-- Inicio das estrutura da tabela `escolaridades` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `escolaridades`;
CREATE TABLE IF NOT EXISTS `escolaridades` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `escolaridades` --


-- Inicio das estrutura da tabela `especialidades` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE IF NOT EXISTS `especialidades` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `especialidades` --


-- Inicio das estrutura da tabela `estados_civis` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `estados_civis`;
CREATE TABLE IF NOT EXISTS `estados_civis` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `estados_civis` --


-- Inicio das estrutura da tabela `estagios` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `estagios`;
CREATE TABLE IF NOT EXISTS `estagios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`codigo` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`peso` INTEGER(11) DEFAULT NULL,
`lesao_id` INTEGER(11) DEFAULT NULL,
`classificacao_id` INTEGER(11) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `estagios` --


-- Inicio das estrutura da tabela `funcionarios` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`status` INTEGER(11) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo | 0 - Excluido',
`cep` VARCHAR(10) COLLATE latin1_swedish_ci DEFAULT NULL,
`endereco` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`numero` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`complemento` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`bairro` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`cidade` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`estado` VARCHAR(2) COLLATE latin1_swedish_ci DEFAULT NULL,
`cpf` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`rg` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`data_nascimento` DATE DEFAULT NULL,
`conselho_id` INTEGER(11) DEFAULT NULL,
`numero_conselho` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`estado_conselho` VARCHAR(2) COLLATE latin1_swedish_ci DEFAULT NULL,
`data_admissao` DATE DEFAULT NULL,
`cargo_id` INTEGER(11) DEFAULT NULL,
`recebe_comissao` INTEGER(11) DEFAULT NULL COMMENT '1 - Sim | 2 - Não',
`cargos_salario_id` INTEGER(11) DEFAULT NULL,
`comissao_id` INTEGER(11) DEFAULT NULL,
`banco` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`agencia` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`conta` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`centro_custo` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATE DEFAULT NULL,
`modified` DATE DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `funcionarios` --


-- Inicio das estrutura da tabela `lesoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `lesoes`;
CREATE TABLE IF NOT EXISTS `lesoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `lesoes` --


-- Inicio das estrutura da tabela `menus` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`titulo` VARCHAR(255) COLLATE utf8_general_ci DEFAULT NULL,
`path` VARCHAR(255) COLLATE utf8_general_ci DEFAULT NULL,
`controller` VARCHAR(255) COLLATE utf8_general_ci DEFAULT NULL,
`action` VARCHAR(255) COLLATE utf8_general_ci DEFAULT NULL,
`status` INTEGER(1) DEFAULT NULL,
`item_menu` INTEGER(1) DEFAULT NULL,
`icon` VARCHAR(255) COLLATE utf8_general_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `menus` --


-- Inicio das estrutura da tabela `midias` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `midias`;
CREATE TABLE IF NOT EXISTS `midias` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`contatotipo_id` INTEGER(11) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `midias` --


-- Inicio das estrutura da tabela `nacionalidades` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `nacionalidades`;
CREATE TABLE IF NOT EXISTS `nacionalidades` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`pais` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `nacionalidades` --


-- Inicio das estrutura da tabela `pacientes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE IF NOT EXISTS `pacientes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`status` INTEGER(11) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluidos',
`cep` VARCHAR(10) COLLATE latin1_swedish_ci DEFAULT NULL,
`endereco` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`numero` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`complemento` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`bairro` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`cidade` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`estado` VARCHAR(2) COLLATE latin1_swedish_ci DEFAULT NULL,
`cpf` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`rg` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`data_nascimento` DATE DEFAULT NULL,
`sexo_id` INTEGER(11) DEFAULT NULL,
`foto` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`casrtao_sus` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`estados_civil_id` INTEGER(11) DEFAULT NULL,
`escolaridade_id` INTEGER(11) DEFAULT NULL,
`profissao_id` INTEGER(11) DEFAULT NULL,
`naturalidade` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`nacionalidade_id` INTEGER(11) DEFAULT NULL,
`religiao_id` INTEGER(11) DEFAULT NULL,
`cor_id` INTEGER(11) DEFAULT NULL,
`centro_custo` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes` --


-- Inicio das estrutura da tabela `pacientes_acompanhamentos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_acompanhamentos`;
CREATE TABLE IF NOT EXISTS `pacientes_acompanhamentos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11) DEFAULT NULL,
`especialidade_id` INTEGER(11) DEFAULT NULL,
`medico` VARCHAR(255) COLLATE utf8_general_ci DEFAULT NULL,
`telefone` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_acompanhamentos` --


-- Inicio das estrutura da tabela `pacientes_convenios` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_convenios`;
CREATE TABLE IF NOT EXISTS `pacientes_convenios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11) DEFAULT NULL,
`convenio_id` INTEGER(11) DEFAULT NULL,
`plano` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`matricula` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`titular` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_convenios` --


-- Inicio das estrutura da tabela `pacientes_emergencias` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_emergencias`;
CREATE TABLE IF NOT EXISTS `pacientes_emergencias` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11) DEFAULT NULL,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`parentesco_id` INTEGER(11) DEFAULT NULL,
`telefone` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_emergencias` --


-- Inicio das estrutura da tabela `pacientes_midias` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_midias`;
CREATE TABLE IF NOT EXISTS `pacientes_midias` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11) DEFAULT NULL,
`midia_id` INTEGER(11) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_midias` --


-- Inicio das estrutura da tabela `pacientes_servicos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_servicos`;
CREATE TABLE IF NOT EXISTS `pacientes_servicos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11) DEFAULT NULL,
`servicos_clinica_id` INTEGER(11) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_servicos` --


-- Inicio das estrutura da tabela `pacientes_soube` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_soube`;
CREATE TABLE IF NOT EXISTS `pacientes_soube` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11) DEFAULT NULL,
`como` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`telefone` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`especialidade_id` INTEGER(11) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_soube` --


-- Inicio das estrutura da tabela `parentescos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `parentescos`;
CREATE TABLE IF NOT EXISTS `parentescos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `parentescos` --


-- Inicio das estrutura da tabela `prestadores` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `prestadores`;
CREATE TABLE IF NOT EXISTS `prestadores` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`razao_social` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`status` INTEGER(11) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`especialidade_id` INTEGER(11) DEFAULT NULL,
`cep` VARCHAR(10) COLLATE latin1_swedish_ci DEFAULT NULL,
`endereco` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`numero` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`complememnto` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`bairro` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`cidade` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`estado` VARCHAR(2) COLLATE latin1_swedish_ci DEFAULT NULL,
`cnpj` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`inscricao` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`cpf` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`rg` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`data_nascimento` DATE DEFAULT NULL,
`banco` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`agencia` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`conta` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`tabelas_preco_id` INTEGER(11) DEFAULT NULL,
`conselho_id` INTEGER(11) DEFAULT NULL,
`numero_conselho` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`estado_conselho` VARCHAR(2) COLLATE latin1_swedish_ci DEFAULT NULL,
`centro_custo` VARCHAR(45) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `prestadores` --


-- Inicio das estrutura da tabela `profissoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `profissoes`;
CREATE TABLE IF NOT EXISTS `profissoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `profissoes` --


-- Inicio das estrutura da tabela `religioes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `religioes`;
CREATE TABLE IF NOT EXISTS `religioes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `religioes` --


-- Inicio das estrutura da tabela `servicos_clinicas` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `servicos_clinicas`;
CREATE TABLE IF NOT EXISTS `servicos_clinicas` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `servicos_clinicas` --


-- Inicio das estrutura da tabela `sexos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `sexos`;
CREATE TABLE IF NOT EXISTS `sexos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `sexos` --


-- Inicio das estrutura da tabela `tabelas_precos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `tabelas_precos`;
CREATE TABLE IF NOT EXISTS `tabelas_precos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE latin1_swedish_ci DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `tabelas_precos` --


-- Inicio das estrutura da tabela `tabelas_reajustes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `tabelas_reajustes`;
CREATE TABLE IF NOT EXISTS `tabelas_reajustes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`tabelas_valor_id` INTEGER(11) DEFAULT NULL,
`status` INTEGER(11) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`anto` INTEGER(11) DEFAULT NULL,
`mes` VARCHAR(2) COLLATE latin1_swedish_ci DEFAULT NULL,
`tipo_calculo` INTEGER(11) DEFAULT NULL COMMENT '1 - Porecetagem | 2 - Real',
`valor` FLOAT(10,2) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `tabelas_reajustes` --


-- Inicio das estrutura da tabela `tabelas_valores` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `tabelas_valores`;
CREATE TABLE IF NOT EXISTS `tabelas_valores` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`tabelas_preco_id` INTEGER(11) DEFAULT NULL,
`status` INTEGER(11) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`valor_origem` FLOAT(11,2) DEFAULT NULL,
`valor_repasse` FLOAT(11,2) DEFAULT NULL,
`data_inicio` DATE DEFAULT NULL,
`data_fim` DATE DEFAULT NULL,
`tabelas_reajuste_id` INTEGER(11) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `tabelas_valores` --


-- Inicio das estrutura da tabela `tabelas_valores_historicos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `tabelas_valores_historicos`;
CREATE TABLE IF NOT EXISTS `tabelas_valores_historicos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`tabelas_preco_id` INTEGER(11) DEFAULT NULL,
`status` INTEGER(11) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo',
`valor_origem` FLOAT(10,2) DEFAULT NULL,
`valor_repasse` FLOAT(10,2) DEFAULT NULL,
`data_inicio` DATE DEFAULT NULL,
`data_fim` DATE DEFAULT NULL,
`tabelas_reajuste_id` INTEGER(11) DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `tabelas_valores_historicos` --


-- Inicio das estrutura da tabela `usuarios` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) COLLATE utf8_general_ci DEFAULT NULL,
`login` VARCHAR(100) COLLATE utf8_general_ci DEFAULT NULL,
`senha` VARCHAR(100) COLLATE utf8_general_ci DEFAULT NULL,
`status` INTEGER(1) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluir',
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `usuarios` --


/* !40101 SET SQL_MODE=@OLD_SQL_MODE */;
/* !40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/* !40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/* !40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

