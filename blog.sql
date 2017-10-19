-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Out-2017 às 21:24
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(4) NOT NULL,
  `nome` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `usuario` varchar(100) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'Ulisses', 'uperalta18@gmail.com', 'UPeralta', '202cb962ac59075b964b07152d234b70'),
(24, 'Joao Muito Errado', 'joao@gmail.com', 'ErradoJoao', '202cb962ac59075b964b07152d234b70'),
(22, 'Jose', 'ulisses_peralta@live.jp', 'UPeralta18', '202cb962ac59075b964b07152d234b70'),
(25, 'Lara', 'larinha@gmail.com', 'LaraLinda', '202cb962ac59075b964b07152d234b70'),
(26, 'Lara', 'larinha2@gmail.com', 'LaraLinda2', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descricao` text CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `titulo`, `descricao`) VALUES
(1, 'VÃ­deo Game', 'Vamos falar de vidjo gueimis'),
(2, 'Filmes', 'Categoria sobre filmes'),
(3, 'Series', 'Categoria sobre series'),
(4, 'Tecnologia', 'Categoria sobre tecnologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(4) NOT NULL,
  `data` date NOT NULL,
  `resumo` text CHARACTER SET latin1 NOT NULL,
  `titulo` text CHARACTER SET latin1 NOT NULL,
  `conteudo` text CHARACTER SET latin1 NOT NULL,
  `id_categoria` int(4) NOT NULL,
  `id_autor` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `data`, `resumo`, `titulo`, `conteudo`, `id_categoria`, `id_autor`) VALUES
(5, '2017-10-10', 'testando', 'Teste', 'testado', 4, 1),
(10, '2017-10-16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Loren', '<p><br></p><hr><p>\r\n\r\n\r\n<br></p><div id="lipsum">\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida \r\nvarius lacus vel faucibus. Aenean pharetra urna lacus, in suscipit eros \r\ncommodo a. Mauris eleifend lectus a venenatis porta. Nam semper ipsum id\r\n lorem accumsan, id elementum augue volutpat. Phasellus porttitor \r\nconsequat pretium. Nam non suscipit felis. Nam cursus magna at justo \r\ninterdum, vitae pharetra ipsum aliquet. Aenean dignissim, dolor ut \r\nplacerat suscipit, neque velit facilisis quam, in sagittis elit lacus \r\nvehicula arcu. Sed id lectus nibh. Vivamus in nunc in leo congue luctus.\r\n Etiam malesuada sed dui hendrerit posuere. Nulla iaculis libero neque, \r\nsit amet congue metus tempor at. Interdum et malesuada fames ac ante \r\nipsum primis in faucibus.\r\n</p>\r\n<p>\r\nCras vulputate felis neque, non pharetra quam aliquet blandit. Quisque \r\nvel nunc interdum lorem pretium semper. Fusce pharetra finibus metus, \r\nquis posuere diam auctor et. Nunc tempor accumsan ipsum sed \r\npellentesque. Donec justo eros, hendrerit ac vestibulum quis, luctus et \r\nante. Praesent sed sapien sit amet libero placerat sagittis a a purus. \r\nAenean volutpat tortor sed est accumsan scelerisque. In vel viverra leo.\r\n Etiam ex nibh, euismod et luctus eleifend, ornare nec est. Morbi \r\nporttitor nibh vel augue pellentesque, eu sodales erat malesuada. Donec \r\ntincidunt augue sed diam congue, ac imperdiet velit vulputate. Lorem \r\nipsum dolor sit amet, consectetur adipiscing elit.\r\n</p>\r\n<p>\r\nAliquam ac nisi turpis. Fusce eget sagittis urna. Maecenas ultrices \r\naliquam urna, et ultricies arcu viverra a. Nunc odio elit, lacinia id \r\nfaucibus et, porttitor vel urna. Ut facilisis mauris vitae convallis \r\nmollis. Vivamus id enim at nibh molestie feugiat nec id tortor. Aenean \r\nvitae velit neque. Curabitur eget odio et neque aliquam semper. Morbi \r\nporttitor iaculis sem. Duis accumsan, risus eget rutrum euismod, ex nisi\r\n pretium augue, quis molestie mauris lectus in elit. Aenean cursus massa\r\n non odio faucibus sodales. Curabitur scelerisque accumsan leo et \r\naliquam.\r\n</p></div><p><br></p>', 4, 1),
(9, '2017-10-10', 'VAMOS VER', 'JavaScript', '<p>FUNCIONA DISGRAÇA<br></p>', 2, 1),
(11, '2017-10-16', 'Mauris iaculis viverra venenatis', 'Loren 2', '<p><br></p><div id="lipsum">\r\n<p>\r\nMauris iaculis viverra venenatis. Sed et massa ornare, vulputate nulla \r\nnec, auctor ex. Maecenas sit amet auctor lorem. Interdum et malesuada \r\nfames ac ante ipsum primis in faucibus. Donec elementum pretium lorem. \r\nCras molestie dignissim ante, vel volutpat ex mattis eget. Aliquam \r\npellentesque purus et justo ultricies, non placerat lacus finibus. \r\nAenean eget libero sodales, vehicula leo eu, finibus turpis. Suspendisse\r\n fringilla aliquam aliquet. Donec molestie euismod magna, a dignissim \r\narcu. Mauris at nisl ac arcu faucibus consequat. Vivamus nunc eros, \r\nsuscipit a dictum ut, ullamcorper at nunc. Morbi sem ante, pharetra nec \r\naliquam eget, ultrices quis eros. Sed dignissim ligula sed rutrum \r\nlacinia.\r\n</p>\r\n<p>\r\nSuspendisse quis euismod ipsum, a ullamcorper magna. In pharetra \r\nvulputate neque porttitor posuere. Aenean dignissim velit eu ornare \r\nlobortis. Donec posuere condimentum velit sed suscipit. Duis lacinia, \r\nvelit eu fringilla bibendum, mauris enim egestas magna, eu aliquet nisi \r\njusto vel dolor. In eleifend pulvinar urna id ullamcorper. Nulla gravida\r\n neque quis nisl consectetur semper. Vestibulum suscipit ex quis elit \r\nconsequat ornare ac sit amet dui. Integer tincidunt consectetur posuere.\r\n Nulla malesuada rhoncus libero ut lacinia.\r\n</p>\r\n<p>\r\nCurabitur ac lacus at massa ornare porttitor. Cras pharetra diam \r\nsagittis, mattis nunc id, ornare nulla. Maecenas tristique faucibus \r\nfringilla. Morbi sed lorem ac lacus dapibus eleifend eget quis augue. \r\nNullam laoreet lacus quis placerat venenatis. Ut vel libero aliquet, \r\npellentesque libero sit amet, fermentum quam. Ut ultrices est nibh, \r\ntristique vestibulum risus venenatis et. Nunc at elit tempus, ornare \r\nurna ut, tincidunt magna. Nullam quis pharetra velit, at rutrum justo. \r\nNulla sit amet risus sed augue sollicitudin imperdiet. Vivamus sit amet \r\nsem porta, congue turpis nec, auctor augue. Proin eu ex eget ex porta \r\nluctus non sodales sem. In blandit massa mauris. Vivamus vestibulum \r\nlacus ipsum, ac ornare nulla consectetur non.\r\n</p></div><p><br></p>', 3, 1),
(12, '2017-10-16', 'Ut commodo viverra sodales', 'Loren 3', '<p><br></p><div id="lipsum">\r\n<p>\r\nUt commodo viverra sodales. Maecenas nunc dolor, cursus sed justo sit \r\namet, ultrices suscipit ipsum. Sed sodales consequat metus, id faucibus \r\nligula fringilla ultricies. Donec molestie ultrices purus, non iaculis \r\nmagna tempus lobortis. Suspendisse tortor massa, suscipit sit amet \r\nligula accumsan, euismod dictum libero. Donec scelerisque nunc sit amet \r\nenim mattis interdum. Duis volutpat ligula non iaculis sagittis. Fusce \r\nfinibus arcu venenatis vulputate dapibus. Proin lorem sapien, porttitor \r\nmolestie felis in, tincidunt fringilla augue. Vestibulum sodales cursus \r\ntortor eget iaculis.\r\n</p>\r\n<p>\r\nIn luctus maximus nibh, eget iaculis odio. Nam lectus nunc, faucibus eu \r\nante nec, condimentum faucibus nibh. Maecenas ut metus eu metus \r\nvulputate dapibus. Suspendisse nec est vel nulla lacinia suscipit. In \r\nvitae tincidunt velit. Proin nec placerat ipsum. Maecenas ac elit eget \r\nfelis varius faucibus. Proin pharetra varius dapibus. Aenean sagittis, \r\nante nec molestie porttitor, urna turpis tempus lectus, ut rhoncus metus\r\n lorem vehicula mi. Maecenas efficitur mauris id ipsum rhoncus eleifend.\r\n Donec scelerisque luctus pretium. Donec nec ante ut mauris dictum \r\ndignissim eu a ante. Aenean sapien nibh, luctus sed tincidunt quis, \r\ncursus non velit. Integer eget vehicula mauris, quis hendrerit est.\r\n</p>\r\n<p>\r\nDuis scelerisque porttitor dui, eget pulvinar lacus dapibus quis. \r\nPellentesque metus tellus, porttitor ut dictum id, dapibus a leo. \r\nMaecenas laoreet nulla eget tincidunt tristique. In tincidunt tellus \r\neget nunc pellentesque lobortis. Aenean vel magna ac dolor dictum \r\naliquet. Quisque eget dolor rhoncus, molestie ex tempor, laoreet magna. \r\nFusce sed nisl elit. Phasellus dapibus ornare sodales. Nam rutrum velit \r\nrisus, ac scelerisque mi porta id. Sed sit amet porttitor quam. In \r\neuismod augue rutrum, finibus orci et, vehicula tellus. Curabitur dictum\r\n dui a nibh feugiat, id porta magna scelerisque. Duis placerat luctus \r\ndiam vel viverra. Nullam pretium, risus sit amet aliquet luctus, nisl mi\r\n eleifend mauris, et vehicula mi dui non sem. Duis est metus, luctus sed\r\n nisi eget, interdum convallis risus.\r\n</p></div><p><br></p>', 2, 1),
(13, '2017-10-16', 'Curabitur ornare sem nulla, id lobortis ante viverra in', 'Loren 4', '<p><br></p><div id="lipsum">\r\n<p>\r\nCurabitur ornare sem nulla, id lobortis ante viverra in. Duis sed \r\ndapibus dui, sed volutpat tortor. Pellentesque id gravida erat, et \r\nmollis velit. Pellentesque sit amet turpis ligula. Vestibulum ac arcu \r\nmauris. Integer tincidunt purus eu est lacinia pellentesque. Vivamus non\r\n enim rutrum, blandit lacus id, mattis est. Duis lacinia purus turpis, \r\nsit amet vestibulum erat ornare vel. Nulla porta finibus eros eu \r\ninterdum. Nullam vitae placerat nunc. Sed ut tincidunt ante. Morbi massa\r\n sapien, porttitor nec tellus a, ultrices vehicula diam.\r\n</p>\r\n<p>\r\nDuis efficitur quis felis ac varius. Phasellus vel mollis ligula. Nulla \r\norci turpis, feugiat id metus eu, auctor rhoncus massa. Vestibulum ac \r\nrhoncus sem, sit amet mattis mauris. Aenean laoreet id urna et \r\ntincidunt. In vehicula tincidunt purus, et dignissim libero cursus quis.\r\n Suspendisse vitae nisi vel ipsum hendrerit tincidunt. Nunc fermentum, \r\nnisi at consectetur facilisis, est odio dictum felis, nec finibus metus \r\naugue at arcu.\r\n</p>\r\n<p>\r\nNulla et blandit ipsum. In sodales nec nisl non commodo. Fusce pharetra \r\nmetus sit amet ligula ullamcorper, in tempor lorem vestibulum. Nam vitae\r\n sapien vel lectus commodo faucibus. Etiam commodo ultrices nibh et \r\nmollis. Aenean posuere ut lectus sed venenatis. Donec maximus ipsum ut \r\nfelis fermentum, nec vulputate velit aliquet. Morbi iaculis tellus est, \r\nin bibendum sapien tristique eu. Sed vitae ante a felis hendrerit \r\nfacilisis. In convallis dui eu neque ultrices, id facilisis quam \r\nhendrerit. Etiam facilisis dolor eu enim placerat, ultricies hendrerit \r\nmagna commodo. Aenean ullamcorper neque a hendrerit pharetra.\r\n</p></div><p><br></p>', 1, 1),
(14, '2017-10-16', 'In eu elit quis risus euismod vestibulum ut nec erat', 'Loren 5', '<p><br></p><div id="lipsum">\r\n<p>\r\nIn eu elit quis risus euismod vestibulum ut nec erat. Duis sit amet mi \r\nquis diam dictum ornare. Morbi pharetra tincidunt eros. Pellentesque ut \r\ndictum ex. Vivamus accumsan erat quis turpis bibendum, et feugiat elit \r\naliquam. Vestibulum quam mauris, sollicitudin vitae dictum non, \r\nhendrerit sed magna. Aliquam venenatis non justo et tincidunt. Nunc \r\ndictum tincidunt velit, ut maximus lorem venenatis in. Vestibulum et \r\nrutrum diam. Aliquam ultricies, nulla et maximus condimentum, magna \r\naugue rutrum quam, at mollis turpis erat non augue. Curabitur vel dolor \r\nconvallis, gravida enim eu, sollicitudin sapien. Nam id felis tempor, \r\nvulputate enim in, rhoncus diam. Sed finibus vestibulum tellus. Sed ut \r\ndiam sed mi placerat ultrices. Pellentesque maximus dolor ut ex \r\nvestibulum, pretium ornare diam congue. Vestibulum sed auctor massa.\r\n</p>\r\n<p>\r\nPhasellus sed condimentum mauris. Nullam a neque neque. Ut luctus odio \r\neget metus vulputate pretium. In interdum justo sed sapien finibus, quis\r\n gravida lacus suscipit. Class aptent taciti sociosqu ad litora torquent\r\n per conubia nostra, per inceptos himenaeos. Donec in auctor velit, sit \r\namet laoreet nisl. Donec aliquet urna et lacus tincidunt, et euismod \r\nnisl ultricies. Quisque in justo sed risus feugiat fringilla eget et \r\nlorem. Mauris non lorem at quam maximus lobortis. Vestibulum ante ipsum \r\nprimis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam\r\n blandit pulvinar molestie. Suspendisse diam arcu, semper vel aliquet \r\net, laoreet ac nisi. Curabitur in neque viverra, semper erat sodales, \r\nvolutpat ex. Quisque semper nunc ac blandit scelerisque. Nunc vulputate \r\nsapien justo, vitae tempus metus sollicitudin vitae.\r\n</p>\r\n<p>\r\nMorbi hendrerit eros at est condimentum, id molestie arcu interdum. \r\nPraesent eros neque, fermentum vitae luctus at, molestie sed velit. \r\nSuspendisse dictum neque sit amet volutpat efficitur. Integer et sapien \r\nest. Curabitur ante augue, elementum sed arcu eget, scelerisque eleifend\r\n nunc. Aliquam tempus magna ante, sit amet venenatis nisl vestibulum \r\neget. Morbi fringilla diam non eros semper, vitae efficitur risus \r\naccumsan. Morbi facilisis elementum sapien in consectetur. Nulla \r\nfacilisi. Quisque condimentum enim ex, eu posuere metus hendrerit eget. \r\nProin vestibulum sodales lorem sed sodales. Donec gravida tincidunt \r\nlacus, ut euismod elit semper at. Mauris luctus massa quis malesuada \r\neuismod. Quisque vulputate, nibh mattis placerat tincidunt, libero \r\nturpis egestas nulla, nec fringilla mauris leo eget eros.\r\n</p></div><p><br></p>', 4, 1),
(16, '2017-10-16', 'Resumando', 'Testando', 'Escrevendo<p><br></p>', 2, 1),
(17, '2017-10-16', 'Por favor', 'Funciona plox', 'Nunca te pedi nada :c<br><p><br></p>', 1, 1),
(18, '2017-10-16', 'Vaaaaai', 'Vamooooo', 'Agora siiiiiiiiiiiiiim <b>YEAH</b>!<br><p><br></p>', 2, 1),
(19, '2017-10-16', 'Pior canal', 'Globo', '<p>Eu nÃ£o gosto da globo<br></p>', 4, 1),
(23, '2017-10-17', 'Vamos de novo', 'Vamos lá', 'Quero ter certeza<br><p><br></p>', 2, 22),
(22, '2017-10-17', 'Dubaduba', 'Abadaba', 'Vamos testar essas bagaça<br><p><br></p>', 1, 23),
(24, '2017-10-17', 'YEEEEEEEEEES', 'UHUUUUUUL', 'Vaaaaaaaaaaaaaaaaaai :c<br>', 1, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `id_categoria_fk` (`id_categoria`),
  ADD KEY `id_autor_fk` (`id_autor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
