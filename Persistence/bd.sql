-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 20/04/2021 às 23:33
-- Versão do servidor: 5.7.30
-- Versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de dados: `todo-list`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtarefa`
--

CREATE TABLE `tbtarefa` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prazo` date NOT NULL,
  `dt_cadastro` date NOT NULL,
  `inRealizado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tbtarefa`
--

INSERT INTO `tbtarefa` (`id`, `nome`, `descricao`, `prazo`, `dt_cadastro`, `inRealizado`) VALUES
(22, 'Assistir Jogo', 'Leão do Vale X Cascavel', '2021-04-22', '2021-04-20', '0'),
(23, 'Curso JS', 'ecmascript 6 - POO', '2021-04-21', '2021-04-20', '0'),
(24, 'Fazer compras ', 'Lista no Whatsapp', '2021-04-24', '2021-04-20', '0'),
(25, 'Dar banho no gato', 'Secar bem para não ficar com gripe ksks', '2021-04-18', '2021-04-20', '1'),
(26, 'Pescar ', 'Pescar no rio com Rodrigão', '2021-04-24', '2021-04-20', '0'),
(27, 'Call com Setor de Suporte', 'Repassar planejamento estratégico do próximo semestre', '2021-04-20', '2021-04-20', '1');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tbtarefa`
--
ALTER TABLE `tbtarefa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tbtarefa`
--
ALTER TABLE `tbtarefa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
