-- phpMyAdmin SQL Dump
-- version 4.0.10.19
-- https://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 12-Jun-2017 às 14:55
-- Versão do servidor: 5.1.73
-- versão do PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `asp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doc_oficio`
--

CREATE TABLE IF NOT EXISTS `doc_oficio` (
  `ofi_numero` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ALTER TABLE tabela ;',
  `ofi_ano` int(11) NOT NULL DEFAULT '2016',
  `ofi_assunto` varchar(128) DEFAULT 'Preencher Assunto',
  `ofi_data` date NOT NULL,
  `ofi_destino` varchar(128) DEFAULT 'Preencher Destino',
  `ofi_autor` varchar(128) NOT NULL,
  `ofi_matricula` varchar(8) NOT NULL,
  `ofi_email` varchar(128) NOT NULL,
  PRIMARY KEY (`ofi_numero`,`ofi_ano`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=93 ;

--
-- Extraindo dados da tabela `doc_oficio`
--

INSERT INTO `doc_oficio` (`ofi_numero`, `ofi_ano`, `ofi_assunto`, `ofi_data`, `ofi_destino`, `ofi_autor`, `ofi_matricula`, `ofi_email`) VALUES
(1, 2017, 'Envia convênio 842905/2016 - Farmácia Popular', '2017-01-10', 'DICON FNS/MS', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(2, 2017, 'Envia projeto REESTRUTURAÇÃO E AMPLIAÇÃO DOS SERVIÇOS PPRESTADOS AOS USUÁRIOS DO SISTEMA ÚNICO DE SAÚDE PELA CLÍNICA DE RADIOLOG', '2017-01-13', 'SESA', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(3, 2017, 'Encaminha 02 vias do Convênio 841530/2016 para assinatura.', '2017-01-16', 'MEC/FNDE', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(4, 2017, 'Encaminha 2 vias convênios:839958/16, 838144/16, 838128/16, 838122/16 e 838120/16', '2017-01-18', 'MEC/FNDE', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(5, 2017, 'Envia T.aditio 701435/2011 e  TC 80/16 TC 02/17 TC 16/17 Termo transferência 35/16', '2017-01-19', 'MEC/FNDE e SETI/UGF', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(6, 2017, 'Solicitação de alteração PT  Convênio 042/2015', '2017-01-20', 'SESA', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(7, 2017, 'Encaminha 03 vias do Termo Aditivo para concessão de estágio', '2017-01-23', 'MPT-PR', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(8, 2017, 'Encaminhar 03 vias do Termo de Convênio para concessão de estágio.', '2017-01-25', 'UNIOESTE', 'Carlos Alexandre Volpato', '262', 'cavolpato@uem.br'),
(9, 2017, 'Encaminha 1 via do  Termo de doação 1741/2015', '2017-01-25', 'FUNCAMP', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(10, 2017, 'Encaminhar 03 vias do Termo de Denúncia e Encerramento para assinatura.', '2017-01-27', 'ARPSOL', 'Carlos Alexandre Volpato', '262', 'cavolpato@uem.br'),
(11, 2017, 'Encaminha 02 vias do Convênio 838144/2016 para assinatura.', '2017-01-27', 'MEC/FNDE', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(12, 2017, 'Encaminha 03 vias do Termo de Convênio para assinatura.', '2017-01-30', 'Associação Beneficente Hospitalar Santa Casa de Misericórdia de Campo Mourão', 'Carlos Alexandre Volpato', '262', 'cavolpato@uem.br'),
(13, 2017, 'Encaminha 02 vias do Termo de Transferência nº 001/2017 referente ao TC 13/14.', '2017-01-30', 'SETI/UGF', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(14, 2017, ' 	Encaminha 03 vias do Termo de Convênio para assinatura. ', '2017-01-31', 'Santa Casa de Misericórdia de Maringá', 'Carlos Alexandre Volpato', '262', 'cavolpato@uem.br'),
(15, 2017, ' 	Encaminha 03 vias do Termo de Convênio para assinatura. ', '2017-01-31', 'UFSM', 'Carlos Alexandre Volpato', '262', 'cavolpato@uem.br'),
(16, 2017, 'Encaminha 02 vias do 2º TATC 41/14 para assinatura.', '2017-02-02', 'SETI/UGF', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(17, 2017, 'Encaminha 02 vias do TC nº 002/2017 para assinatura.', '2017-02-03', 'ARAUCARIA', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(18, 2017, 'Encaminha projeto "Melhoria da Infraestrutura do Prédio PDE - Integrar -UEM', '2017-02-07', 'SETI/UGF', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(19, 2017, ' Encaminha 03 vias do Termo de Convênio para assinatura.', '2017-02-08', 'UFG', 'Carlos Alexandre Volpato', '262', 'cavolpato@uem.br'),
(20, 2017, 'Encaminhar 03 vias assinadas do convênio da douturanda Adriele Rodruigues dos santos', '2017-02-09', 'UTFPR', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(21, 2017, 'Encaminha 04 vias do Termo de Convênio para assinatura. ', '2017-02-09', 'CIM/Associação Engenheiros Sem Fronteiras-Brasil', 'Carlos Alexandre Volpato', '262', 'cavolpato@uem.br'),
(22, 2017, ' 	Encaminha 02 vias do Termo de Transferência nº 002/2017 referente ao TC 36/14.', '2017-02-10', 'SETI/UGF', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(23, 2017, 'Solicita prorrogação do convênio nº 825683/2015 - Farmácia Popular', '2017-02-14', 'FNS/MS', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(24, 2017, 'encaminhamos 02 vias do termo de convenio assinada', '2017-02-14', 'EMBRAPA', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(25, 2017, 'Solicita prorrogação do convênio nº 808522/2014 - Saberes Indígenas para 31/12/2018', '2017-02-14', 'MEC/FNDE', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(26, 2017, 'Encaminhar 03 vias assinadas do convênio do docente da UTFPR Edivaldo Vitor Couto', '2017-02-16', 'UTFPR', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(27, 2017, 'Encaminhamos 02 vias do termo de demanda social 2017', '2017-02-16', 'CAPES', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(28, 2017, 'Encaminha 2 vias do TC nº 011/2017, 012/2017 e 013/2017 para assinatura.', '2017-02-17', 'ARAUCARIA', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(29, 2017, 'Encaminhamos 03 vias do termo de convenio assinado CAU/PR', '2017-02-17', 'CAU/PR', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(30, 2017, 'Encaminha 02 vias do TA-I 014/2015, TA-III 132/2014 e TA-IV 248/2012 para assinatura.', '2017-02-22', 'ARAUCARIA', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(31, 2017, 'Reencaminhamos as 02 vias do TC nº 002/2017 para assinatura.', '2017-03-03', 'ARAUCARIA', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(32, 2017, 'Encaminhar 02 vias assinadas do convênio do docente da UTFPR Thays Raphaela Gonçalves', '2017-03-06', 'UTFPR', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(33, 2017, 'Encaminhar 02 vias assinadas do convênio do docente da UTFPR franciele Leila Giopato Viell', '2017-03-06', 'UTFPR', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(34, 2017, 'Encaminhamos 03 vias do termo de convenio assinado 041/16', '2017-03-09', 'GLOBAL CENTER ', 'Aryane Cristina Gumieiro de Lima', '170515', 'acglima2@uem.br'),
(35, 2017, 'Encaminhamos 03 vias do termo de convenio assinado 062/16', '2017-03-09', 'INSTITUTO DE MEDICINA INTEGRADA -IMI', 'Aryane Cristina Gumieiro de Lima', '170515', 'acglima2@uem.br'),
(36, 2017, 'Encaminhamos 03 vias do termo 063/2017 para assinatura.', '2017-03-13', 'Hospital regional cristo rei', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(37, 2017, 'Encaminha 02 vias dos Termos de Doação do TC 164/14-TERMO DE TRANSFERÊNCIA Nº 009/2017; TC 168/14-TERMO DE TRANSFERÊNCIA Nº 010/', '2017-03-16', 'SETI/UGF', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(38, 2017, 'Encaminhamos 03 vias do termo de cooperação ampla assinado', '2017-03-16', 'EMS/ATEMIS', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(39, 2017, 'Encaminhamos 02 vias do TAI 052/2013, 053/2013, 054/2015, 055/2015, 058/2015, 130/2015, 131/2015; TAII 986/2013, 987/2013, 988/2', '2017-03-17', 'ARAUCARIA', 'Aryane Cristina Gumieiro de Lima', '170515', 'acglima2@uem.br'),
(40, 2017, 'Encaminha 02 vias do 4º Termo Aditivo ao Convênio nº 012/2013 SICONV nº 782430/2013 e 5º Termo Aditivo ao Convênio nº 20/2012 SI', '2017-03-21', 'MEC/SESu', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(41, 2017, 'Encaminhamos 02 vias do Termo Aditivo ao convênio nº 817627/2015-PROAP', '2017-03-21', 'CAPES', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(42, 2017, 'Encaminha 02 vias do TA-III 961/2013 para assinatura.', '2017-03-21', 'ARAUCARIA', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(43, 2017, 'Suplementação Orçamentária HUM ', '2017-03-23', 'SETI', 'Silvestre Alczuk', '750646', 'salczuk@uem.br'),
(44, 2017, 'Encaminha 02 vias dos TC nº 24/17, 25/17, 26/17, 27/17, 28/17, 29/17, 30/17, 31/17, 32/17, 33/17, 34/17, 35/17, 36/17, 37/17 e 3', '2017-03-28', 'SETI/USF/UGF', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(45, 2017, 'Encaminhamos 03 vias do termo 060/2016 para assinatur', '2017-03-29', 'IEL/SC', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(46, 2017, 'Termo de Cooperação', '2017-03-30', 'SETI/SESA', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(47, 2017, 'Encaminhamos 03 vias do termo 052/2016 para assinatura', '2017-03-30', 'CISCENOP', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(48, 2017, 'Encaminhamos 03 vias do termo 008/2017 para assinatura', '2017-03-30', 'IEL/SP', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(49, 2017, 'Encaminhamos 03 vias do termo Aditivo para assinatura', '2017-04-04', 'TV 3º Milenium', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(50, 2017, 'Encaminha 03 vias do Termo de Cooperação Técnica nº 02/2016 para assinatura.', '2017-04-05', 'UTFPR-DOIS VIZINHOS', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(51, 2017, 'Encaminha 02 vias TAI 041/2013, 045/2013, 048/2013, 815/2014 E TAIII 912/2013 para assinatura', '2017-04-06', 'ARAUCARIA', 'Aryane Cristina Gumieiro de Lima', '170515', 'acglima2@uem.br'),
(52, 2017, 'Reencaminha 03 vias do Termo de Convênio 063/2016 para assinatura.', '2017-04-06', 'Hospital Regional Cristo Rei de Astorga', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(53, 2017, 'Encaminha 02 vias do Termo de Encerramento ao Termo de Convênio.', '2017-04-11', 'RECCO LINGERIE', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(54, 2017, 'Encaminha 01 via do Termo de Convênio assinada.', '2017-04-12', 'IEL-CE', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(55, 2017, 'Encaminha o projeto "ESTIMULO À PRODUÇÃO DE PEIXES COMO FONTE DE TRANSFORMAÇÃO SOCIAL NA REGIÃO NOROESTE DO PARANÁ"', '2017-04-12', 'SETI/UGF', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(56, 2017, 'Solicita Crédito Orçamentário - Superávit Fonte 250', '2017-04-19', 'SETI/GOS', 'Silvestre Alczuk', '750646', 'salczuk@uem.br'),
(57, 2017, 'Solicita recursos para obras no Campos de Goioerê - Asfalto, Galerias pluviais', '2017-04-19', 'SETI', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(58, 2017, 'Solicita recursos para obras no Campos de Goioerê - Asfalto, Galerias pluviais', '2017-04-19', 'DEPUTADO PAULO LITRO', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(59, 2017, 'Solicita recursos para obras no Campos de Goioerê - Asfalto, Galerias pluviais', '2017-04-19', 'CASA CIVIL - DEPUTADO VALDIR ROSSONI', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(60, 2017, 'Encaminha 02 vias do Termo de Doação de Bens Móveis nº 021/2017-TC 166/14', '2017-04-24', 'SETI/UGF', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(61, 2017, 'Encaminha 02 vias do TC Nº 102/2017-“Programa de Internacionalização das Universidades Estaduais. Projeto: Estruturação da Asses', '2017-04-24', 'SETI/UGF', 'Lorena Bianca Bavato', '152339', 'lbbavato2@uem.br'),
(62, 2017, 'encaminha projeto "Paraná Fala Inglês"', '2017-04-24', 'SETI/UGF', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(63, 2017, 'Encaminha 02 vias do TC nº 024/2017 para assinatura. ', '2017-04-24', 'ARAUCARIA', 'Aryane Cristina Gumieiro de Lima', '170515', 'acglima2@uem.br'),
(64, 2017, 'Encaminhamos 02 vias do TC 002/2017 assinadas', '2017-04-24', 'UTFPR', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(65, 2017, 'Encaminhamos 03 vias do termo 017/2017 para assinatura', '2017-04-26', 'ICEBIO', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(66, 2017, 'Encaminhamos 02 vias do TC 002/2017 assinada', '2017-04-27', 'UTFPR', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(67, 2017, 'Encaminhamos 02 vias do TA I TC 015/2016 assinado', '2017-04-27', 'UTFPR', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(68, 2017, 'Encaminhamos 02 vias do  TC  nº 827948/2016', '2017-05-04', 'CAPES', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(69, 2017, 'Encaminhamos 03 vias do termo 019/2017 para assinatura', '2017-05-04', 'DUPONT', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(70, 2017, 'Solicita Crédito Orçamentário - Superávit Fonte 281', '2017-05-04', 'SETI/GOS', 'Silvestre Alczuk', '750646', 'salczuk@uem.br'),
(71, 2017, 'Encaminhamos 03 vias do termo  para assinatura', '2017-05-09', 'SANDOZ', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(72, 2017, 'Encaminha 03 vias do termo nº 009/2017 assinados', '2017-05-10', 'CIEE/PR', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(73, 2017, 'Encaminha 03 vias do termo nº 014/2017 assinados', '2017-05-10', 'Sociedade Cristo Rei Mandaguari', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(74, 2017, 'Encaminha 02 vias do TA-I 241/2015 para assinatura.', '2017-05-12', 'ARAUCARIA', 'Aryane Cristina Gumieiro de Lima', '170515', 'acglima2@uem.br'),
(75, 2017, 'Solicita prorrogação do convênio 787487/2013, por mais 12 meses', '2017-05-16', 'MEC/FNDE', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(76, 2017, 'Manifesta interesse em firmar convênio', '2017-05-18', 'UFGD', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(77, 2017, 'Solicita prorrogação do convênio 808522/2014', '2017-05-19', 'MEC/FNDE', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(78, 2017, 'Encaminha projeto "Melhoria da Infraestrutura da UEM-Campus Vale do Ivaí - Ivaiporã', '2017-05-22', 'SETI/UGF', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(79, 2017, 'Encaminhamos 03 vias do termo  para assinatura 024/2017', '2017-05-29', 'Banco Barigui', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(80, 2017, 'Encaminha 03 vias do termo assinados 025/2017', '2017-05-29', 'PARANÁ BANCO', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(81, 2017, 'Encaminha TC a CAPES PNPD', '2017-05-29', 'CAPES', 'Carlos Alexandre Volpato', '262', 'cavolpato@uem.br'),
(82, 2017, 'Encaminhar 3 vias do Termo de Cooperação 026/2017', '2017-05-29', 'BANCO SICREDI', 'Rafael Ferreira Graboski', '170440', 'rfgraboski2@uem.br'),
(83, 2017, 'Encaminha 02 vias do TA-II 995/2013 para assinatura', '2017-05-29', 'ARAUCARIA', 'Aryane Cristina Gumieiro de Lima', '170515', 'acglima2@uem.br'),
(84, 2017, ' Encaminha 2 vias do TC nº 026/2017, 027/2017, 028/2017, 029/2017, 030/2017, 031/2017 e 032/2017 para assinatura. ', '2017-06-01', 'ARAUCARIA', 'Aryane Cristina Gumieiro de Lima', '170515', 'acglima2@uem.br'),
(85, 2017, 'Encaminha projeto"REESTRUTURAÇÃO DO LABORATÓRIO DE INFORMÁTICA DO DEPARTAMENTO DE ENGENHARIA QUÍMICA/UEM"', '2017-06-01', 'SETI/UGF', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(86, 2017, 'Encaminha projeto “Obtenção de adoçantes funcionais da Stevia rebaudiana com propriedades antidiabéticas”.', '2017-06-02', 'SETI/UGF', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(87, 2017, 'Manifesta concordância na participação da instituição no Termo de cooperação do Programa de Mobilidade Docente - período 2017 - ', '2017-06-02', 'SETI', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(88, 2017, 'Encaminha projeto "Projeto de Estruturação dos Laboratórios de Ensino do Curso de Engenharia Elétrica da UEM"', '2017-06-02', 'SETI/UGF', 'Maria Ioshie Yamada', '852238', 'miyamada@uem.br'),
(89, 2017, 'Encaminhamos 03 vias do termo nº 047/2016 assinado', '2017-06-05', 'Ingá ltda', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(90, 2017, 'Solicita Crédito Orçamentário - Superávit Fonte 284', '2017-06-06', 'SETI/GOS', 'Silvestre Alczuk', '750646', 'salczuk@uem.br'),
(91, 2017, 'Encaminha 03 vias do termo assinados', '2017-06-07', 'UNIVERSIDADE FEDERAL DE RONDÔNIA', 'Leocir Cassaro', '970329', 'lcassaro@uem.br'),
(92, 2017, 'Encaminha 03 vias do termo 027/2017 assinados', '2017-06-07', 'UNIOESTE', 'Leocir Cassaro', '970329', 'lcassaro@uem.br');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
