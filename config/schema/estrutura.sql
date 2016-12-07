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
`nome` VARCHAR(255),
`lesao_id` INTEGER(11),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `classificacoes` --


-- Inicio das estrutura da tabela `comissoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `comissoes`;
CREATE TABLE IF NOT EXISTS `comissoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`valor_maximo` FLOAT(10,2),
`comissao` FLOAT(5,2),
`status` INTEGER(11) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`crated` DATETIME,
`modified` DATETIME,
`comissoes_tipo_id` INTEGER(11),
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `comissoes` --


-- Inicio das estrutura da tabela `comissoes_correcoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `comissoes_correcoes`;
CREATE TABLE IF NOT EXISTS `comissoes_correcoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`comissao_id` INTEGER(11),
`ano` INTEGER(4),
`mes` INTEGER(2),
`percentual` FLOAT(5,2),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `comissoes_correcoes` --


-- Inicio das estrutura da tabela `comissoes_tipos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `comissoes_tipos`;
CREATE TABLE IF NOT EXISTS `comissoes_tipos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(45),
`status` INTEGER(1),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `comissoes_tipos` --


-- Inicio das estrutura da tabela `conselhos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `conselhos`;
CREATE TABLE IF NOT EXISTS `conselhos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `conselhos` --


-- Inicio das estrutura da tabela `contatos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`contatos_tipo_id` INTEGER(11),
`valor` VARCHAR(255),
`referencia_id` INTEGER(11),
`tabela` INTEGER(11),
`created` DATETIME,
`modified` DATETIME,
`status` INTEGER(1) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `contatos` --


-- Inicio das estrutura da tabela `contatos_tipos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `contatos_tipos`;
CREATE TABLE IF NOT EXISTS `contatos_tipos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
`mascara` VARCHAR(45),
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `contatos_tipos` --


-- Inicio das estrutura da tabela `convenios` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `convenios`;
CREATE TABLE IF NOT EXISTS `convenios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`status` INTEGER(11) COMMENT '0 - Inativo | 1 - Ativo | 3 - Excluidos',
`razao_social` VARCHAR(255),
`cep` VARCHAR(10),
`endereco` VARCHAR(255),
`numero` VARCHAR(45),
`complemento` VARCHAR(45),
`bairro` VARCHAR(45),
`cidade` VARCHAR(45),
`estado` VARCHAR(2),
`cnpj` VARCHAR(45),
`inscricao` VARCHAR(45),
`centro_custo` VARCHAR(45),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `convenios` --


-- Inicio das estrutura da tabela `cores` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `cores`;
CREATE TABLE IF NOT EXISTS `cores` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `cores` --


-- Inicio das estrutura da tabela `corporais` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `corporais`;
CREATE TABLE IF NOT EXISTS `corporais` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `corporais` --


-- Inicio das estrutura da tabela `corporais_lesoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `corporais_lesoes`;
CREATE TABLE IF NOT EXISTS `corporais_lesoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`lesao_id` INTEGER(11),
`corporal_id` INTEGER(11),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `corporais_lesoes` --


-- Inicio das estrutura da tabela `escolaridades` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `escolaridades`;
CREATE TABLE IF NOT EXISTS `escolaridades` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `escolaridades` --


-- Inicio das estrutura da tabela `especialidades` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE IF NOT EXISTS `especialidades` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `especialidades` --


-- Inicio das estrutura da tabela `estados_civis` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `estados_civis`;
CREATE TABLE IF NOT EXISTS `estados_civis` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `estados_civis` --


-- Inicio das estrutura da tabela `estagios` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `estagios`;
CREATE TABLE IF NOT EXISTS `estagios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`codigo` VARCHAR(45),
`nome` VARCHAR(255),
`peso` INTEGER(11),
`lesao_id` INTEGER(11),
`classificacao_id` INTEGER(11),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `estagios` --


-- Inicio das estrutura da tabela `funcionarios` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`status` INTEGER(11) COMMENT '0 - Inativo | 1 - Ativo | 0 - Excluido',
`cep` VARCHAR(10),
`endereco` VARCHAR(255),
`numero` VARCHAR(45),
`complemento` VARCHAR(45),
`bairro` VARCHAR(45),
`cidade` VARCHAR(45),
`estado` VARCHAR(2),
`cpf` VARCHAR(45),
`rg` VARCHAR(45),
`data_nascimento` DATE,
`conselho_id` INTEGER(11),
`numero_conselho` VARCHAR(45),
`estado_conselho` VARCHAR(2),
`data_admissao` DATE,
`cargo_id` INTEGER(11),
`recebe_comissao` INTEGER(11) COMMENT '1 - Sim | 2 - Não',
`cargos_salario_id` INTEGER(11),
`comissao_id` INTEGER(11),
`banco` VARCHAR(45),
`agencia` VARCHAR(45),
`conta` VARCHAR(45),
`centro_custo` VARCHAR(45),
`created` DATE,
`modified` DATE,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `funcionarios` --


-- Inicio das estrutura da tabela `lesoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `lesoes`;
CREATE TABLE IF NOT EXISTS `lesoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `lesoes` --


-- Inicio das estrutura da tabela `menus` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`titulo` VARCHAR(255),
`path` VARCHAR(255),
`controller` VARCHAR(255),
`action` VARCHAR(255),
`status` INTEGER(1),
`item_menu` INTEGER(1),
`icon` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `menus` --


-- Inicio das estrutura da tabela `midias` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `midias`;
CREATE TABLE IF NOT EXISTS `midias` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`contatos_tipo_id` INTEGER(11),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `midias` --


-- Inicio das estrutura da tabela `nacionalidades` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `nacionalidades`;
CREATE TABLE IF NOT EXISTS `nacionalidades` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`pais` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `nacionalidades` --


-- Inicio das estrutura da tabela `pacientes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE IF NOT EXISTS `pacientes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`status` INTEGER(11) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluidos',
`cep` VARCHAR(10),
`endereco` VARCHAR(255),
`numero` VARCHAR(45),
`complemento` VARCHAR(45),
`bairro` VARCHAR(45),
`cidade` VARCHAR(45),
`estado` VARCHAR(2),
`cpf` VARCHAR(45),
`rg` VARCHAR(45),
`data_nascimento` DATE,
`sexo_id` INTEGER(11),
`foto` VARCHAR(255),
`cartao_sus` VARCHAR(45),
`estados_civil_id` INTEGER(11),
`escolaridade_id` INTEGER(11),
`profissao_id` INTEGER(11),
`naturalidade` VARCHAR(45),
`nacionalidade_id` INTEGER(11),
`religiao_id` INTEGER(11),
`cor_id` INTEGER(11),
`centro_custo` VARCHAR(45),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes` --


-- Inicio das estrutura da tabela `pacientes_acompanhamentos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_acompanhamentos`;
CREATE TABLE IF NOT EXISTS `pacientes_acompanhamentos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11),
`especialidade_id` INTEGER(11),
`medico` VARCHAR(255),
`telefone` VARCHAR(45),
`created` DATETIME,
`modified` DATETIME,
`status` INTEGER(1) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_acompanhamentos` --


-- Inicio das estrutura da tabela `pacientes_convenios` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_convenios`;
CREATE TABLE IF NOT EXISTS `pacientes_convenios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11),
`convenio_id` INTEGER(11),
`plano` VARCHAR(255),
`matricula` VARCHAR(45),
`titular` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
`status` INTEGER(1) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_convenios` --


-- Inicio das estrutura da tabela `pacientes_emergencias` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_emergencias`;
CREATE TABLE IF NOT EXISTS `pacientes_emergencias` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11),
`nome` VARCHAR(255),
`parentesco_id` INTEGER(11),
`telefone` VARCHAR(45),
`created` DATETIME,
`modified` DATETIME,
`status` INTEGER(1) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_emergencias` --


-- Inicio das estrutura da tabela `pacientes_midias` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_midias`;
CREATE TABLE IF NOT EXISTS `pacientes_midias` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11),
`midia_id` INTEGER(11),
`created` DATETIME,
`modified` DATETIME,
`status` INTEGER(1) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_midias` --


-- Inicio das estrutura da tabela `pacientes_programacoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_programacoes`;
CREATE TABLE IF NOT EXISTS `pacientes_programacoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11),
`usuario_id` INTEGER(11),
`motivo` TEXT,
`data` DATE,
`hora` TIME,
`created` DATETIME,
`modified` DATETIME,
`status` INTEGER(1) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_programacoes` --


-- Inicio das estrutura da tabela `pacientes_servicos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_servicos`;
CREATE TABLE IF NOT EXISTS `pacientes_servicos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11),
`servicos_clinica_id` INTEGER(11),
`created` DATETIME,
`modified` DATETIME,
`status` INTEGER(1) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_servicos` --


-- Inicio das estrutura da tabela `pacientes_soube` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `pacientes_soube`;
CREATE TABLE IF NOT EXISTS `pacientes_soube` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`paciente_id` INTEGER(11),
`como` VARCHAR(45),
`nome` VARCHAR(255),
`telefone` VARCHAR(45),
`especialidade_id` INTEGER(11),
`created` DATETIME,
`modified` DATETIME,
`status` INTEGER(1) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pacientes_soube` --


-- Inicio das estrutura da tabela `parametros_paginacoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `parametros_paginacoes`;
CREATE TABLE IF NOT EXISTS `parametros_paginacoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`usuario_id` INTEGER(11),
`tabela` VARCHAR(500),
`limite` INTEGER(11),
`coluna` VARCHAR(500),
`direcao` VARCHAR(500),
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `parametros_paginacoes` --


-- Inicio das estrutura da tabela `parametros_tabelas` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `parametros_tabelas`;
CREATE TABLE IF NOT EXISTS `parametros_tabelas` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`usuario_id` INTEGER(11) DEFAULT 1,
`label` VARCHAR(500),
`coluna` VARCHAR(500),
`chave` VARCHAR(500),
`ative` INTEGER(1),
`css` VARCHAR(500),
`tabela` VARCHAR(500),
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `parametros_tabelas` --


-- Inicio das estrutura da tabela `parentescos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `parentescos`;
CREATE TABLE IF NOT EXISTS `parentescos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `parentescos` --


-- Inicio das estrutura da tabela `prestadores` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `prestadores`;
CREATE TABLE IF NOT EXISTS `prestadores` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`razao_social` VARCHAR(255),
`status` INTEGER(11) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`especialidade_id` INTEGER(11),
`cep` VARCHAR(10),
`endereco` VARCHAR(255),
`numero` VARCHAR(45),
`complememnto` VARCHAR(45),
`bairro` VARCHAR(45),
`cidade` VARCHAR(45),
`estado` VARCHAR(2),
`cnpj` VARCHAR(45),
`inscricao` VARCHAR(45),
`cpf` VARCHAR(45),
`rg` VARCHAR(45),
`data_nascimento` DATE,
`banco` VARCHAR(45),
`agencia` VARCHAR(45),
`conta` VARCHAR(45),
`tabelas_preco_id` INTEGER(11),
`conselho_id` INTEGER(11),
`numero_conselho` VARCHAR(45),
`estado_conselho` VARCHAR(2),
`centro_custo` VARCHAR(45),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `prestadores` --


-- Inicio das estrutura da tabela `profissoes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `profissoes`;
CREATE TABLE IF NOT EXISTS `profissoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `profissoes` --


-- Inicio das estrutura da tabela `religioes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `religioes`;
CREATE TABLE IF NOT EXISTS `religioes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `religioes` --


-- Inicio das estrutura da tabela `servicos_clinicas` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `servicos_clinicas`;
CREATE TABLE IF NOT EXISTS `servicos_clinicas` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `servicos_clinicas` --


-- Inicio das estrutura da tabela `sexos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `sexos`;
CREATE TABLE IF NOT EXISTS `sexos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `sexos` --


-- Inicio das estrutura da tabela `tabelas_precos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `tabelas_precos`;
CREATE TABLE IF NOT EXISTS `tabelas_precos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `tabelas_precos` --


-- Inicio das estrutura da tabela `tabelas_reajustes` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `tabelas_reajustes`;
CREATE TABLE IF NOT EXISTS `tabelas_reajustes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`tabelas_valor_id` INTEGER(11),
`status` INTEGER(11) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`anto` INTEGER(11),
`mes` VARCHAR(2),
`tipo_calculo` INTEGER(11) COMMENT '1 - Porecetagem | 2 - Real',
`valor` FLOAT(10,2),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `tabelas_reajustes` --


-- Inicio das estrutura da tabela `tabelas_valores` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `tabelas_valores`;
CREATE TABLE IF NOT EXISTS `tabelas_valores` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`tabelas_preco_id` INTEGER(11),
`status` INTEGER(11) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`valor_origem` FLOAT(11,2),
`valor_repasse` FLOAT(11,2),
`data_inicio` DATE,
`data_fim` DATE,
`tabelas_reajuste_id` INTEGER(11),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `tabelas_valores` --


-- Inicio das estrutura da tabela `tabelas_valores_historicos` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `tabelas_valores_historicos`;
CREATE TABLE IF NOT EXISTS `tabelas_valores_historicos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`tabelas_preco_id` INTEGER(11),
`status` INTEGER(11) COMMENT '0 - Inativo | 1 - Ativo',
`valor_origem` FLOAT(10,2),
`valor_repasse` FLOAT(10,2),
`data_inicio` DATE,
`data_fim` DATE,
`tabelas_reajuste_id` INTEGER(11),
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `tabelas_valores_historicos` --


-- Inicio das estrutura da tabela `usuarios` --
/* !40101 SET character_set_client = utf8 */;
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255),
`login` VARCHAR(100),
`senha` VARCHAR(100),
`status` INTEGER(1) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluir',
`created` DATETIME,
`modified` DATETIME,
`root` INTEGER(1) COMMENT '0 - Não | 1 - Sim',
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

