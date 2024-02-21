-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2024 at 11:49 AM
-- Server version: 5.7.27-0ubuntu0.16.04.1-log
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spellbee`
--

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `sid` varchar(10) NOT NULL,
  `qid` int(11) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `marks` int(11) NOT NULL DEFAULT '0',
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`sid`, `qid`, `answer`, `marks`, `timestamp`) VALUES
('9866600002', 12, 'ALTER', 0, '2023-09-01 13:09:28.977247'),
('9866600002', 106, 'CRUCIAL', 100, '2023-09-01 13:10:12.766807'),
('9866600002', 87, 'SPANISH', 100, '2023-09-01 13:10:37.950977'),
('9866600002', 28, 'TELEVISION', 100, '2023-09-01 13:10:53.215564'),
('9866600002', 98, 'GRID', 100, '2023-09-01 13:11:08.334681'),
('9866600002', 23, 'LIBRARY', 100, '2023-09-01 13:11:21.120398'),
('9866600002', 34, 'BALLOON', 200, '2023-09-01 13:11:31.912744'),
('9866600002', 61, 'LUMINOUS', 200, '2023-09-01 13:11:44.740070'),
('9866600002', 51, 'WEATHER', 0, '2023-09-01 13:11:53.896172'),
('9866600002', 15, 'PERSISTENCE', 200, '2023-09-01 13:12:18.683535'),
('9866600002', 55, 'QUARRELLING', 200, '2023-09-01 13:12:41.754828'),
('9866600002', 91, 'MOZAART', 0, '2023-09-01 13:13:01.788875'),
('9866600002', 69, 'TURQUOISE', 300, '2023-09-01 13:13:16.405953'),
('9866600002', 64, 'ACQUAINTENCE', 0, '2023-09-01 13:13:31.683892'),
('9866600002', 70, 'TYRANNOSAURUS', 300, '2023-09-01 13:14:05.745562'),
('9866600002', 74, 'MISISIPPI', 0, '2023-09-01 13:14:21.541374'),
('7997515809', 21, 'CHOCOLATE', 100, '2024-02-07 14:18:49.090360'),
('9052727402', 29, 'SUNSHINE', 100, '2024-02-10 05:00:42.736627'),
('9052727402', 35, 'TELESCOPE', 100, '2024-02-10 05:00:58.599513'),
('9052727402', 128, 'GUARD', 100, '2024-02-14 06:09:00.958962');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `pid` varchar(10) NOT NULL,
  `pin` varchar(4) DEFAULT NULL,
  `player_name` varchar(100) DEFAULT NULL,
  `place` varchar(200) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `points` int(5) DEFAULT NULL,
  `lastseen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`pid`, `pin`, `player_name`, `place`, `status`, `points`, `lastseen`) VALUES
('7997515809', '0000', 'varsha', '2/4CSD', 1, 0, '2024-02-07 14:18:42'),
('9052727402', '0000', 'Sai Praveen', 'Bardhan Bank, Bhimavaram', 1, 100, '2024-02-14 06:08:54'),
('9855677345', '1234', 'L.V.Nikitha', '2/4CSD', 1, 0, '2023-09-01 04:35:36'),
('9866600002', '8080', 'Dr Suresh Mudunuri', 'Bhimavaram', 1, 0, '2024-02-14 06:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `qid` int(11) NOT NULL,
  `word` varchar(1000) NOT NULL,
  `meaning` text,
  `level` int(11) NOT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`qid`, `word`, `meaning`, `level`, `option1`, `option2`, `option3`) VALUES
(1, 'Principle', 'rule', 6, 'principal', 'principel', 'princeple'),
(2, 'effect', 'a result or outcome', 6, 'affect', 'effact', 'affact'),
(3, 'compliment', 'a polite expression of praise', 7, 'complement', 'complliment', 'complimant'),
(4, 'desert', 'a dry or sandy area', 4, 'dessert', 'dessart', 'desart'),
(5, 'discreet', 'showing good judgement and careful consideration', 6, 'discrete', 'discreett', 'descreet'),
(6, 'meddle', 'interfere officiously and unwantedly', 5, 'metal', 'mettle', 'medal'),
(7, 'stationery', 'writing materials', 6, 'stationary', 'stationory', 'statioenery'),
(8, 'lie', 'false statement', 2, 'lay', 'lye', 'lei'),
(9, 'capital', 'a city that serves as the seat of government', 2, 'capitol', 'capetal', 'capitel'),
(10, 'peace', 'a state of quiet', 3, 'piace', 'piece', 'peice'),
(11, 'cereal', 'breakfast made from grains', 4, 'serials', 'cerreal', 'cireal'),
(12, 'altar', 'a raised platform used for religious ceremonies', 8, 'alter', 'altre', 'alltar'),
(13, 'canvas', 'a heavy,woven fabric used for painting', 2, 'cannvas', 'canvass', 'caanvas'),
(14, 'conscience', 'a persons moral sense of right and wrong', 8, 'conscense', 'conscious', 'consciance'),
(15, 'persistence', 'the act of continuing firmly despite opposition', 6, 'persistance', 'persisstence', 'persestence'),
(16, 'separate', 'to set apart', 6, 'seperate', 'seperete', 'saperate'),
(17, 'occurred', 'happened', 5, 'occured', 'ocurred', 'ocured'),
(18, 'existence', 'the state of being', 4, 'existance', 'exsistence', 'exsistance'),
(19, 'perceive', 'to become aware of through the senses', 7, 'percieve', 'parceive', 'perceve'),
(20, 'bicycle', 'a human powered vehicle with two wheels and pedals', 3, 'bycycle', 'bicicle', 'bicykle'),
(21, 'chocolate', 'a sweet brown treat made from cacao beans', 2, 'choclate', 'chocolat', 'chokolate'),
(22, 'butterfly', 'an insect with colourful wings that undergoes metamorphosis', 1, 'butterflie', 'buterfly', 'buttarfly'),
(23, 'library', 'a place where books and other materials are stored for reading and borrowing', 3, 'librarie', 'librery', 'librare'),
(24, 'dinosaur', 'a prehistoric reptile', 5, 'dinasor', 'dinosor', 'dianosur'),
(25, 'telephone', 'a device used to communicate', 2, 'telefone', 'telephne', 'teliphone'),
(26, 'restaurant', 'a place where meals are prepared and served to customers', 6, 'restaurent', 'restarent', 'restarant'),
(27, 'calendar', 'a chart or system used to organise days,weeks,months', 5, 'calander', 'calender', 'calandar'),
(28, 'television', 'an electronic device that displays moving images and sounds', 2, 'televison', 'telivision', 'telivison'),
(29, 'sunshine', 'the light and heat that comes from the sun', 1, 'sunshyne', 'sunsine', 'sonshine'),
(30, 'rainbow', 'a colorful arc in the sky that appears after the rain', 1, 'reinbow', 'rienbow', 'rainbou'),
(31, 'picnic', 'a meal eaten outdoors,often in a park or countryside', 2, 'picknick', 'picnick', 'picknic'),
(32, 'adventure', 'an exciting and often risky experience', 2, 'adventur', 'aventure', 'advanture'),
(33, 'birthday', 'the day on which a person was born,celebrated annually', 1, 'borthday', 'birtday', 'berthday'),
(34, 'Balloon', 'a flexible bag fillled with gas', 4, 'baloon', 'ballun', 'baloon'),
(35, 'telescope', 'an optical instrument used to view distant objects', 2, 'telescop', 'teleskope', 'teliscope'),
(36, 'sandbox', 'a container filled with sand for children to playin', 1, 'sandboks', 'sanndbox', 'sendbox'),
(37, 'pitch', 'the level or tune of sound', 1, 'patch', 'pittch', 'pitchh'),
(38, 'stayed', 'to have been somewhere for a short time', 1, 'stayeed', 'steyed', 'stayid'),
(39, 'doctor', 'a person that treats sick people', 1, 'docter', 'dokter', 'doctar'),
(40, 'gloves', 'handcovers to protect hands', 2, 'glovas', 'glavas', 'glowes'),
(41, 'ocean', 'a large area of water covering earth', 1, 'ocaen', 'occean', 'osean'),
(42, 'cheese', 'a food made from milk curd', 1, 'chesse', 'chease', 'chesee'),
(43, 'coarse', 'having a harsh or rough quality', 7, 'course', 'coaurse', 'cours'),
(44, 'passage', 'a alley or pathway', 2, 'passege', 'pessage', 'pasage'),
(45, 'compartment', 'a section of something large', 2, 'comparment', 'compertment', 'comppartment'),
(46, 'prospector', 'a person who searches for valuable substances such as gold or oil', 5, 'propector', 'perspector', 'prespector'),
(47, 'support', 'to give comfort', 1, 'saport', 'suport', 'sepport'),
(48, 'advance', 'to move forward in a purposeful way', 1, 'edvance', 'advace', 'andvance'),
(49, 'balance', 'an even distribution of weight', 1, 'balance', 'belence', 'balance'),
(50, 'cancel', 'for a planned event to not take place', 1, 'cancal', 'cencal', 'cancell'),
(51, 'whether', 'showing a choice between alternatives', 4, 'weather', 'whetter', 'whether'),
(52, 'rhythm', 'a strong regular and repeated movement', 7, 'rythm', 'rhytm', 'rithm'),
(53, 'possibilty', 'a chance that something may or maynot happen', 3, 'posibility', 'possibiliity', 'possibiliti'),
(54, 'category', 'a group of people or things that are similar in someway', 4, 'catigory', 'cateegory', 'cattegory'),
(55, 'quarrelling', 'arguing angrily', 6, 'querrelling', 'querreling', 'quareling'),
(56, 'orchestra', 'a group of musicians who play many instruments together', 5, 'archestra', 'orchastra', 'orrchastra'),
(57, 'recruit', 'to find people to take part in an event or team', 3, 'reccruit', 'recriut', 'reecruit'),
(58, 'persuade', 'to cause someone to do something or believing something', 5, 'persuate', 'parsuade', 'peruade'),
(59, 'perimeter', 'the outside edge of an area', 1, 'perimetre', 'permeter', 'permetre'),
(60, 'cadet', 'a person training in the armed forces or police', 3, 'cadett', 'cedet', 'kadet'),
(61, 'luminous', 'bright or shining', 4, 'luminuos', 'luminos', 'lumenous'),
(62, 'ABUNDANT', 'HAVING PLENTY OF', 5, 'ABUNDENT', 'ABUNDUNT', 'ABUNNDANT'),
(63, 'ACCOMMODATE', 'FIT IN WITH THE WISHES OR NEEDS OF', 6, 'ACOMMMODATE', 'ACCOMADATE', 'ACCOMMODATTE'),
(64, 'ACQUAINTANCE', 'KNOWLEDGE OR EXPERIENCE OF SOMETHING', 8, 'ACQUAINTTANCE', 'ACQUAINTANCEE', 'ACQUAINTENCE'),
(65, 'BELIEVE', 'HOLD AS AN OPTION', 6, 'BELIVE', 'BELIEVE', 'BELIEVEE'),
(66, 'CAMOUFLAGE', 'THE DISGUISING OF MILITARY PERSONNEL', 7, 'CAMMOUFLAGE', 'CAMOFLAUGE', 'CAMOFLAGE'),
(67, 'ELEPHANT', 'LARGEST LIVING LAND ANIMAL', 1, 'ELEPANT', 'ELEFANT', 'ELEPHANTH'),
(68, 'NEPTUNE', 'PLANENT IN A SOLAR SYSTEM', 2, 'NEPTOON', 'NEPTUN', 'NUPTENE'),
(69, 'TURQUOISE', 'A GREENISH-BLUE COLOUR STONE', 10, 'TUTQUIOSE', 'TUREQUOISE', 'TURQUISE'),
(70, 'TYRANNOSAURUS', 'BIPEDAL CARNIVOROUS DINOSAUR', 11, 'TYRANOSARURUS', 'TYRRANOSARURAS', 'TYRANNOSOROUS'),
(71, 'ASTRONOMER', 'AN EXPERT IN OR STUDENT OF ASTRONOMY', 5, 'ASTRONOMAR', 'ASTRANOMER', 'ASTRONAMER'),
(72, 'SHAKESPEARE', 'A WRITER OF POEMS', 11, 'SHAKESPEAR', 'SHAKESPERE', 'SAKESPEARE'),
(73, 'CENTAUR', 'A CREATURE IN GREEK MYTHOLOGY', 11, 'SENTAUR', 'SENTUAR', 'CENTUAR'),
(74, 'MISSISSIPPI', 'STATE OF SOUTH-EASTERN UNITED-STATE', 9, 'MISISIPPI', 'MISSISIPI', 'MISSISSIIPPI'),
(75, 'PENICILLIN', 'A MEDICATION USED TO MANAGE AND TREAT A WIDE RANGE OF INFECTIONS', 8, 'PENICILIN', 'PENECILLIN', 'PENYCILLIN'),
(76, 'COLUMBUS', 'A NAVIGATOR WHO EXPLORED THE AMERICA', 3, 'COLOMUS', 'COLIMBUS', 'COLUMBUSS'),
(77, 'AFRICA', 'SECOND LARGEST CONTINENT IN WORLD', 1, 'AFREECA', 'AFFRICA', 'AFRIICA'),
(78, 'MAYA', 'ONE OF THE ANCIENT CIVILIZATION IN THE WORLD', 11, 'MAIA', 'MYA', 'MAYYA'),
(79, 'SHAKESPEAREAN', 'RELATING TO OR CHARACTERISTIC OF WILLIAM SHAKESPEARE', 11, 'SHAKESPEREAN', 'SHAKESPEARIAN', 'SHAKEESPEARAN'),
(80, 'KILIMANJARO', 'AFRICA\'S TALLEST MOUNTAIN', 11, 'KILIMANJAROO', 'KILIMUNJARO', 'KILIMANJERO'),
(81, 'ASTRONAUT', 'PERSON WHO TRAINED TO TRAVEL IN A SPACECRAFT', 6, 'ASTRONOUT', 'ASTRONAUGHT', 'ASTROONAUT'),
(82, 'MINOTAUR', 'A CREATURE WITH HALF MAN AND HALF BULL', 11, 'MINOOTAUR', 'MINOTAAR', 'MYNOTAUR'),
(83, 'NILE', 'WORLD\'S LONGEST RIVER', 4, 'NYLE', 'NIEL', 'NYEL'),
(84, 'CHROMIUM', 'THE CHEMICAL ELEMENT OF ATOMIC NO:24', 3, 'CHROMIM', 'CHRROMIUM', 'CRHROMIUM'),
(85, 'VAN GOGH', 'ONE OF THE MOST POPULAR OF THE POST IMPRESSIONIST PAINTER', 11, 'VANN GOGH', 'VANN GOFF', 'VAN GOH'),
(86, 'WASHINGTON', 'CAPTIAL CITY OF UNITED STATES', 3, 'WASHINGTOON', 'WASHINGNTAN', 'WASHINTON'),
(87, 'SPANISH', 'SECOND MOST WIDELY SPOKEN FIRST LANGUAGE IN WORLD', 2, 'SPPANISH', 'SPANNISH', 'SPENNISH'),
(88, 'NEBULA', 'IT IS AN GAINT CLOUD OF DUST AND GASNIN SPACE', 4, 'NEEBULA', 'NEBULLA', 'NUBULA'),
(89, 'COLOSSEUM', 'IT IS AN ELLIPTICAL AMPHITHEATRE IN THE CENTRE OF THE CITY ROME', 11, 'COLLOSEUM', 'COLOSEEUM', 'COLOSIUM'),
(90, 'SAHARA', 'A VERY LARGE DESERT IN NORTH AFRICA', 1, 'SAHARA', 'SAHRA', 'SAHARRA'),
(91, 'MOZART', 'ONE OF THE MOST INFLUENTIAL POPULAR AND PROLIFIC COMPOSERS OF THE CLASSICAL PERIOD', 8, 'MOZZART', 'MOZAART', 'MOZARD'),
(92, 'BELL', 'DEVICE THAT MAKES A RINING SOUND WHEN STRUCK', 1, 'BELIVE', 'BBELL', 'BELB'),
(93, 'ATHENA', 'IT IS THE GREEK GODDNESS OF WISDOM', 11, 'ATENA', 'ATHINA', 'ATHENNA'),
(94, 'ATLANTIC', 'THE SECOND LARGEST OCEAN IN THE WORLD', 3, 'ATLENTIC', 'ATLANTIK', 'ATLANTYC'),
(95, 'PARIS', 'THE CAPITAL AND LARGEST CITY OF FRANCE', 1, 'PARESS', 'PARYS', 'PARISS'),
(96, 'OBTUSE', 'GREATER THAN 90 DEGREE', 6, 'OBTUSEE', 'OBTUISE', 'OBHTUSE'),
(97, 'AXES', 'THE PLURAL FORM OF AXIS', 2, 'AXIS', 'AXISS', 'AXESS'),
(98, 'GRID', 'A NETWORK OF LINES THAT CROSS EACH OTHER TO FORM A SERIES OF SQUARES', 1, 'GRIDH', 'RID', 'RIDH'),
(99, 'ESTIMATE', 'AN APPROXIMATE CALCULATION', 3, 'ESTIMETE', 'ESTIMITE', 'ASTIMATE'),
(100, 'INTERSECTION', 'A POINT WHERE TWO LINES OR STREET CROSS', 2, 'INTERSECTIONN', 'INTERSECITION', 'INTERSECTIION'),
(101, 'HYPOCHONDRIA', 'ABNORMAL CHRONIC ANXIETY ABOUT ONE\'S HEALTH', 11, 'HPYOCOHNDRIA', 'HIGHPOCHONDRIA', 'HIPOCHONDRIA'),
(102, 'ASTROLOGER', 'TELL OTHERS ABOUT THEIR CHARACTER OR TO PERDICT THEIR FUTURE', 2, 'ASTRALOGER', 'ASTROOLOGAR', 'ASTROLAGER'),
(103, 'MISFORTUNE', 'BAD LUCK', 2, 'MISFOURTUNE', 'MISSORTUNE', 'MISSFORTUNEE'),
(104, 'AUTHENTIC', 'OF UNDISPUTED ORIGIN AND NOT A COPY', 3, 'AUTUNHENTIC', 'AUTENTIC', 'AUTHEENTIC'),
(105, 'CHARACTERISTIC', 'TYPICAL OF PARTICULAR PERSON,PLACE,OR THING', 4, 'CHARTERISTIC', 'CHARTERISTIC', 'CHARATERISTIC'),
(106, 'CRUCIAL', 'DECISIVE OR CRITICAL,ESPECIALLY IN THE SUCCESS OR FAILURE OF SOMENTING', 3, 'CRUSIAL', 'CRUCIEL', 'CRUCIEL'),
(107, 'MISCHIEVOUS', 'NOTORIOUS', 6, 'MISCHIEVIOUS', 'MISCHIEVOUS', 'MISCHIEVUES'),
(108, 'LEISURE', 'FREE TIME', 5, 'LESIRE', 'LEESURE', 'LEISIRE'),
(109, 'APPRECIATE', 'RECOGNIZE THE FULL WORTH OF', 4, 'APPERICITE', 'APPERECIATE', 'APPERCIATE'),
(110, 'CRITICISE', 'TO JUDGE(SOMETHING) WITH DISAPPROVAL', 3, 'CRTICISE', 'CRITISISE', 'CRITISIZE'),
(111, 'Engineering', 'The application of science to practical uses such as design of structures and machines', 1, 'engeneering', 'enjineering', 'enginering'),
(112, 'Afraid', 'scared', 1, 'afrayed', 'afreid', 'affraid'),
(113, 'Bought', 'obtain in exchange of payment', 1, 'boght', 'bougt', 'boughht'),
(114, 'personal', 'belonging to person rather anyone else', 2, 'personel', 'parsonal', 'persanal'),
(115, 'Department', 'a specialised division of a large concern,such as business university', 3, 'departement', 'departmant', 'dipartment'),
(116, 'reciprocal', 'felt equally both sides', 4, 'receprocal', 'recieprocal', 'reciprocel'),
(117, 'dictionary', 'reference book', 4, 'dictionery', 'dectionary', 'dictonary'),
(118, 'spell bee', 'a competition in which people try to spell words', 1, 'spell bea', 'speel bee', 'spell bie'),
(119, 'vegetables', 'a part of plant used as food', 2, 'vegitables', 'vagetables', 'vegetebles'),
(120, 'fiction', 'imaginary', 1, 'ficton', 'phiction', 'fection'),
(121, 'bakery', 'selling baked goods', 1, 'backery', 'bakary', 'bekary'),
(122, 'sauce', 'relish for food', 2, 'souce', 'sause', 'souse'),
(123, 'teach', 'to cause to acquire knowledge or skill', 1, 'teech', 'tiech', 'taech'),
(124, 'river', 'natural flowing water course', 1, 'rever', 'rivar', 'revar'),
(125, 'story', 'narrative', 1, 'storie', 'stary', 'store'),
(126, 'mammal', 'an animal feeds her young from her own body', 1, 'mamal', 'mammel', 'mamel'),
(127, 'fact', 'truth', 1, 'fat', 'factt', 'faact'),
(128, 'guard', 'watch over inorder to protect', 1, 'gard', 'gord', 'guaard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`sid`,`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
