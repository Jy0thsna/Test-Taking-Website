-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 07:45 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prepskill`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Q_ID` int(11) NOT NULL,
  `TEST_NAME` varchar(100) NOT NULL,
  `Q` varchar(500) DEFAULT NULL,
  `A` varchar(200) DEFAULT NULL,
  `B` varchar(200) DEFAULT NULL,
  `C` varchar(200) DEFAULT NULL,
  `D` varchar(200) DEFAULT NULL,
  `ANSWER` varchar(10) DEFAULT NULL,
  `COMPANY` varchar(50) NOT NULL,
  `STARTTIME` datetime NOT NULL,
  `ENDTIME` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Q_ID`, `TEST_NAME`, `Q`, `A`, `B`, `C`, `D`, `ANSWER`, `COMPANY`, `STARTTIME`, `ENDTIME`) VALUES
(1, 'APTITUDE TEST', '\"If you don\'t keep quiet I shall shoot you\", he said to her in a calm voice.', 'He warned her to shoot if she didn\'t keep quiet calmly.', 'He said calmly that I shall shoot you if you don\'t be quiet.', 'He warned her calmly that he would shoot her if she didn\'t keep quiet.', 'Calmly he warned her that be quiet or else he will have to shoot her.', 'C', 'ABC', '2019-11-13 10:58:00', '2019-11-14 10:58:00'),
(2, 'APTITUDE TEST', 'AUGUST', 'Common', 'Ridiculous', 'Dignified', 'Petty', 'C', 'ABC', '2019-11-13 10:58:00', '2019-11-14 10:58:00'),
(3, 'APTITUDE TEST', 'DISTANT', 'Far', 'Removed', 'Reserved', 'Separate', 'A', 'ABC', '2019-11-13 10:58:00', '2019-11-14 10:58:00'),
(4, 'APTITUDE TEST', '	\r\nSince the beginning of history\r\nP :	have managed to catch\r\nQ :	the Eskimos and Red Indians\r\nR :	by a very difficulty method\r\nS :	a few specimens of this aquatic animal\r\nThe Proper sequence should be:', 'QRPS', 'SQPR', 'SQRP', 'QPSR', 'D', 'ABC', '2019-11-13 10:58:00', '2019-11-14 10:58:00'),
(5, 'APTITUDE TEST', '	\r\nIf you need help\r\nP :	promptly and politely\r\nQ :	ask for attendants\r\nR :	to help our customers\r\nS :	who have instructions\r\nThe Proper sequence should be:', 'SQPR', 'QPSR', 'QSRP', 'SQRP', 'C', 'ABC', '2019-11-13 10:58:00', '2019-11-14 10:58:00'),
(6, 'APTITUDE TEST', '	\r\nIt was to be\r\nP :	before their school examination\r\nQ :	which was due to start\r\nR :	the last expedition\r\nS :	in a month\'s\r\nThe Proper sequence should be:', 'SRQP', 'RQSP', 'RPQS', 'SPRQ', 'C', 'ABC', '2019-11-13 10:58:00', '2019-11-14 10:58:00'),
(7, 'TECHNICAL TEST', 'What is the value of \"d\" after this line of code has been executed?\r\n\r\ndouble d = Math.round ( 2.5 + Math.random() );', '2', '3', '4', '2.5', 'B', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(8, 'TECHNICAL TEST', 'Which of the following would compile without error?', 'int a = Math.abs(-5);', 'int b = Math.abs(5.0);', 'int c = Math.abs(5.5F);', 'int d = Math.abs(5L);', 'A', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(9, 'TECHNICAL TEST', '	\r\nWhich of the following are valid calls to Math.max?\r\nMath.max(1,4)\r\nMath.max(2.3, 5)\r\nMath.max(1, 3, 5, 7)\r\nMath.max(-1.5, -2.8f)', '1,2,4', '2,3,4', '1,2,3', '3,4', 'A', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(10, 'TECHNICAL TEST', 'public class Myfile \r\n{ \r\n    public static void main (String[] args) \r\n    {\r\n        String biz = args[1]; \r\n        String baz = args[2]; \r\n        String rip = args[3]; \r\n        System.out.println(\"Arg is \" + rip); \r\n    } \r\n}\r\nSelect how you would start the program to cause it to print: Arg is 2', 'java Myfile 222', 'java Myfile 1 2 2 3 4', 'java Myfile 1 3 2 2', 'java Myfile 0 1 2 3', 'C', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(11, 'TECHNICAL TEST', '	\r\nWhat will be the output of the program?\r\n\r\nString x = new String(\"xyz\");\r\nString y = \"abc\";\r\nx = x + y;\r\nHow many String objects have been created?', '2', '3', '4', '5', 'C', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(12, 'TECHNICAL TEST', '	\r\nWhat will be the output of the program?\r\n\r\nString x = \"xyz\";\r\nx.toUpperCase(); /* Line 2 */\r\nString y = x.replace(\'Y\', \'y\');\r\ny = y + \"abc\";\r\nSystem.out.println(y);', 'abcXyZ', 'abcxyz', 'xyzabc', 'XyZabc', 'C', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(13, 'TECHNICAL TEST', 'What will be the output of the program?\r\n\r\nint i = (int) Math.random();', 'i = 0', 'i = 1', 'value of i is undetermined', 'Statement causes a compile error', 'A', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(14, 'TECHNICAL TEST', 'What will be the output of the program?\r\n\r\nString s = \"ABC\"; \r\ns.toLowerCase(); \r\ns += \"def\"; \r\nSystem.out.println(s);', 'ABC', 'abc', 'ABCdef', 'Compile error', 'C', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(15, 'TECHNICAL TEST', '	\r\nWhat will be the output of the program?\r\n\r\nSystem.out.println(Math.sqrt(-4D));', '-2', 'NaN', 'Compile Error', 'Runtime Exception', 'B', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(16, 'TECHNICAL TEST', 'What will be the output of the program?\r\n\r\nString a = \"newspaper\";\r\na = a.substring(5,7);\r\nchar b = a.charAt(1);\r\na = a + b;\r\nSystem.out.println(a);', 'apa', 'app', 'apea', 'apep', 'B', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(17, 'TECHNICAL TEST', 'Which statement is true?', 'catch(X x) can catch subclasses of X where X is a subclass of Exception.', 'The Error class is a RuntimeException.', 'Any statement that can throw an Error must be enclosed in a try block.', 'Any statement that can throw an Exception must be enclosed in a try block.', 'A', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(18, 'TECHNICAL TEST', 'Which four can be thrown using the throw statement?\r\n\r\n1.Error\r\n2.Event\r\n3.Object\r\n4.Throwable\r\n5.Exception\r\n6.RuntimeException', '1,2,3,4', '2,3,4,5', '1,4,5,6', '2,4,5,6', 'C', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(19, 'TECHNICAL TEST', 'Which statement is true?', 'A try statement must have at least one corresponding catch block.', 'Multiple catch statements can catch the same class of exception more than once.', 'An Error that might be thrown in a method must be declared as thrown by that method, or be handled within that method.', 'Except in case of VM shutdown, if a try block starts to execute, a corresponding finally block will always start to execute.', 'D', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(20, 'TECHNICAL TEST', 'Which of the following are legal lines of code?\r\n\r\n1.int w = (int)888.8;\r\n2.byte x = (byte)1000L;\r\n3.long y = (byte)100;\r\n4.byte z = (byte)100L;', '1 AND 2', '2 AND 3', '3 AND 4', 'ALL STATEMENTS ARE CORRECT', 'D', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(21, 'TECHNICAL TEST', 'Which two statements are equivalent?\r\n\r\n16*4\r\n16>>2\r\n16/2^2\r\n16>>>2', '1 AND 2', '2 AND 4', '3 AND 4', '1 AND 3', 'B', 'ABC', '2019-11-19 07:00:00', '2019-11-20 07:00:00'),
(22, 'ROUND 2 TEST', '\"If you don\'t keep quiet I shall shoot you\", he said to her in a calm voice.', 'He warned her to shoot if she didn\'t keep quiet calmly.', 'He said calmly that I shall shoot you if you don\'t be quiet.', 'He warned her calmly that he would shoot her if she didn\'t keep quiet.', 'Calmly he warned her that be quiet or else he will have to shoot her.', 'C', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(23, 'ROUND 2 TEST', 'AUGUST', 'Common', 'Ridiculous', 'Dignified', 'Petty', 'C', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(24, 'ROUND 2 TEST', 'DISTANT', 'Far', 'Removed', 'Reserved', 'Separate', 'A', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(25, 'ROUND 2 TEST', '\nSince the beginning of history\r\nP :	have managed to catch\r\nQ :	the Eskimos and Red Indians\r\nR :	by a very difficulty method\r\nS :	a few specimens of this aquatic animal\r\nThe Proper sequence should be:', 'QRPS', 'SQPR', 'SQRP', 'QPSR', 'D', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(26, 'ROUND 2 TEST', '	\r\nIf you need help\r\nP :	promptly and politely\r\nQ :	ask for attendants\r\nR :	to help our customers\r\nS :	who have instructions\r\nThe Proper sequence should be:', 'SQPR', 'QPSR', 'QSRP', 'SQRP', 'C', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(27, 'ROUND 2 TEST', 'What is the value of \"d\" after this line of code has been executed?\r\n\r\ndouble d = Math.round ( 2.5 + Math.random() );', '2', '3', '4', '2.5', 'B', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(28, 'ROUND 2 TEST', 'Which of the following would compile without error?', 'int a = Math.abs(-5);', 'int b = Math.abs(5.0);', 'int c = Math.abs(5.5F);', 'int d = Math.abs(5L);', 'A', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(29, 'ROUND 2 TEST', '	\r\nWhich of the following are valid calls to Math.max?\r\nMath.max(1,4)\r\nMath.max(2.3, 5)\r\nMath.max(1, 3, 5, 7)\r\nMath.max(-1.5, -2.8f)', '1,2,4', '2,3,4', '1,2,3', '3,4', 'A', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(30, 'ROUND 2 TEST', 'public class Myfile \r\n{ \r\n    public static void main (String[] args) \r\n    {\r\n        String biz = args[1]; \r\n        String baz = args[2]; \r\n        String rip = args[3]; \r\n        System.out.println(\"Arg is \" + rip); \r\n    } \r\n}\r\nSelect how you would start the program to cause it to print: Arg is 2', 'java Myfile 222', 'java Myfile 1 2 2 3 4', 'java Myfile 1 3 2 2', 'java Myfile 0 1 2 3', 'C', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(31, 'ROUND 2 TEST', 'What will be the output of the program?\r\n\r\nString x = new String(\"xyz\");\r\nString y = \"abc\";\r\nx = x + y;\r\nHow many String objects have been created?', '2', '3', '4', '5', 'C', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(32, 'ROUND 2 TEST', 'What will be the output of the program?\r\n\r\nString x = \"xyz\";\r\nx.toUpperCase(); /* Line 2 */\r\nString y = x.replace(\'Y\', \'y\');\r\ny = y + \"abc\";\r\nSystem.out.println(y);', 'abcXyZ', 'abcxyz', 'xyzabc', 'XyZabc', 'C', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(33, 'ROUND 2 TEST', 'What will be the output of the program?\r\n\r\nint i = (int) Math.random();', 'i = 0', 'i = 1', 'value of i is undetermined', 'Statement causes a compile error', 'A', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(34, 'ROUND 2 TEST', 'What will be the output of the program?\r\n\r\nString s = \"ABC\"; \r\ns.toLowerCase(); \r\ns += \"def\"; \r\nSystem.out.println(s);', 'ABC', 'abc', 'ABCdef', 'Compile error', 'C', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00'),
(35, 'ROUND 2 TEST', 'What will be the output of the program?\r\n\r\nSystem.out.println(Math.sqrt(-4D));', '-2', 'NaN', 'Compile Error', 'Runtime Exception', 'B', 'ABC', '2019-11-21 10:00:00', '2019-11-22 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Q_ID` int(11) NOT NULL,
  `TEST_NAME` varchar(30) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL,
  `Q` varchar(500) DEFAULT NULL,
  `A` varchar(225) DEFAULT NULL,
  `B` varchar(225) DEFAULT NULL,
  `C` varchar(225) DEFAULT NULL,
  `D` varchar(225) DEFAULT NULL,
  `ANSWER` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Q_ID`, `TEST_NAME`, `CATEGORY`, `Q`, `A`, `B`, `C`, `D`, `ANSWER`) VALUES
(1, 'ChangeOfSpeech', 'Aptitude', '	\r\n\"If you don\'t keep quiet I shall shoot you\", he said to her in a calm voice.', 'He warned her to shoot if she didn\'t keep quiet calmly.', 'He said calmly that I shall shoot you if you don\'t be quiet.', 'He warned her calmly that he would shoot her if she didn\'t keep quiet.', 'Calmly he warned her that be quiet or else he will have to shoot her.', 'C'),
(2, 'ChangeOfSpeech', 'Aptitude', '\"I told him that he was not working hard.\"', 'I said to him, \"You are not working hard.\"', 'I told to him, \"You are not working hard.\"', 'I said, \"You are not working hard.\"', 'I said to him, \"He is not working hard.\"', 'A'),
(3, 'ChangeOfSpeech', 'Aptitude', 'Dhruv said that he was sick and tired of working for that company.', 'Dhruv said, \"I am sick and tired of working for this company.\"', 'Dhruv said, \"He was tired of that company.\"', 'Dhruv said to me, \"I am sick and tired of working for this company.\"', 'Dhruv said, \"I will be tired of working for that company.\"', 'A'),
(4, 'ChangeOfSpeech', 'Aptitude', 'His father ordered him to go to his room and study.', 'His father said, \"Go to your room and study.\"', 'His father said to him, \"Go and study in your room.\"', 'His father shouted, \"Go right now to your study room\"', 'His father said firmly, \"Go and study in your room.\"', 'A'),
(5, 'ChangeOfSpeech', 'Aptitude', 'He said to his father, \"Please increase my pocket-money.\"', 'He told his father, \"Please increase the pocket-money\"', 'He pleaded his father to please increase my pocket money.', 'He requested his father to increase his pocket-money.', 'He asked his father to increase his pocket-money.', 'C'),
(6, 'ChangeOfSpeech', 'Aptitude', '	\r\nShe said that her brother was getting married.', 'She said, \"Her brother is getting married.\"', 'She said, \"My brother is getting married.\"', 'She told, \"Her brother is getting married.\"', 'She said, \"My brother was getting married.\"', 'B'),
(7, 'ChangeOfSpeech', 'Aptitude', 'The boy said, \"Who dare call you a thief?\"', 'The boy inquired who dared call him a thief.', 'The boy asked who called him a thief.', 'The boy told that who dared call him a thief.', 'The boy wondered who dared call a thief.', 'A'),
(8, 'ChangeOfSpeech', 'Aptitude', '	\r\nShe exclaimed with sorrow that was a very miserable plight', 'She said with sorrow, \"What a pity it is.\"', 'She said, \"What a mystery it is.\"', 'She said, \"What a miserable sight it is.\"', 'She said, \"What a miserable plight it is.\"', 'D'),
(9, 'ChangeOfSpeech', 'Aptitude', '\"Are you alone, my son?\" asked a soft voice close behind me.', 'A soft voice asked that what I was doing there alone', 'A soft voice said to me are you alone son.', 'A soft voice from my back asked If I was alone', 'A soft voice behind me asked If I was alone.', 'D'),
(10, 'ChangeOfSpeech', 'Aptitude', 'She said to him, \"Why don\'t you go today?\"', 'She asked him why he did not go that day.', 'She said to him why he don\'t go that day.', 'She asked him not to go that day.', 'She asked him why he did not go today.', 'A'),
(11, 'ChangeOfSpeech', 'Aptitude', '	\r\nHe exclaimed with joy that India had won the Sahara Cup.', 'He said, \"India has won the Sahara Cup\"', 'He said, \"India won the Sahara Cup\"', 'He said, \"How! India will win the Sahara Cup\"', 'He said, \"Hurrah! India has won the Sahara Cup\"', 'D'),
(12, 'ChangeOfSpeech', 'Aptitude', 'The little girl said to her mother, \"Did the sun rise in the East?\"', 'The little girl said to her mother that the sun rose in the East.', 'The little girl asked her mother if the sun rose in the East.', 'The little girl said to her mother if the sun rises in the East.', 'The little girl asked her mother if the sun is in the East.', 'B'),
(13, 'ChangeOfSpeech', 'Aptitude', 'The man said, \"No, I refused to confers guilt.\"', 'The man emphatically refused to confers guilt.', 'The man refused to confers his guilt.', 'The man told that he did not confers guilt.', 'The man was stubborn enough to confers guilt.', 'A'),
(14, 'ChangeOfSpeech', 'Aptitude', 'Nita ordered her servant to bring her cup of tea.', 'Nita told her servant, \"Bring a cup of tea.\"', 'Nita said, \"Bring me a cup of tea.\"', 'Nita said to her servant, \"Bring me a cup of tea.\"', 'Nita told her servant, \"Bring her that cup of tea.\"', 'C'),
(15, 'ChangeOfSpeech', 'Aptitude', 'My cousin said, \"My room-mate had snored throughout the night.\"', 'My cousin said that her room-mate snored throughout the night.', 'My cousin told me that her room-mate snored throughout the night.', 'My cousin complained to me that her room-mate is snoring throughout the night.', 'My cousin felt that her room-mate may be snoring throughout the night.', 'A'),
(16, 'Synonyms', 'Aptitude', 'AUGUST', 'Common', 'Ridiculous', 'Dignified', 'Petty', 'C'),
(17, 'Synonyms', 'Aptitude', 'CORPULENT', 'Lean', 'Gaunt', 'Emaciated', 'Obese', 'D'),
(18, 'Synonyms', 'Aptitude', 'BRIEF', 'Limited', 'Small', 'Little', 'Short', 'D'),
(19, 'Synonyms', 'Aptitude', 'EMBEZZLE', 'Misappropriate', 'Balance', 'Remunerate', 'Clear', 'A'),
(20, 'Synonyms', 'Aptitude', 'VENT', 'Opening', 'Stodge', 'End', 'Past tense of Go', 'A'),
(21, 'Synonyms', 'Aptitude', 'CANNY', 'Obstinate', 'Handsome', 'Clever', 'Stout', 'C'),
(22, 'Synonyms', 'Aptitude', 'ALERT', 'Energetic', 'Observant', 'Intelligent', 'Watchful', 'D'),
(23, 'Synonyms', 'Aptitude', 'WARRIOR', 'Soldier', 'Sailor', 'Pirate', 'Spy', 'A'),
(24, 'Synonyms', 'Aptitude', 'DISTANT', 'Far', 'Removed', 'Reserved', 'Separate', 'A'),
(25, 'Synonyms', 'Aptitude', 'ADVERSITY', 'Failure', 'Helplessness', 'Misfortune', 'Crisis', 'C'),
(26, 'Synonyms', 'Aptitude', 'FAKE', 'Original', 'Imitation', 'Trustworthy', 'Loyal', 'B'),
(27, 'Synonyms', 'Aptitude', 'INDICT', 'Condemn', 'Reprimand', 'Accuse', 'Allege', 'C'),
(28, 'Synonyms', 'Aptitude', 'STRINGENT', 'Dry', 'Strained', 'Rigorous', 'Shrill', 'C'),
(29, 'Synonyms', 'Aptitude', 'LAMENT', 'Complain', 'Comment', 'Condone', 'Console', 'A'),
(30, 'Synonyms', 'Aptitude', 'HESITATED', 'Stopped', 'Paused', 'Slowed', 'Postponed', 'B'),
(31, 'Ordering', 'Aptitude', 'When he\r\nP :	did not know\r\nQ :	he was nervous and\r\nR :	heard the hue and cry at midnight\r\nS :	what to do\r\nThe Proper sequence should be:', 'RQPS', 'QSPR', 'SQPR', 'PQRS\r\n', 'A'),
(32, 'Ordering', 'Aptitude', '	\r\nIt has been established that\r\nP :	Einstein was\r\nQ :	although a great scientist\r\nR :	weak in arithmetic\r\nS :	right from his school days\r\nThe Proper sequence should be:', 'SRPQ', 'QPRS', 'QPSR', 'RQPS', 'B'),
(33, 'Ordering', 'Aptitude', '	\r\nThen\r\nP :	it struck me\r\nQ :	of course\r\nR :	suitable it was\r\nS :	how eminently\r\nThe Proper sequence should be:', 'SPQR', 'QSRP', 'PSRQ', 'QPSR', 'C'),
(34, 'Ordering', 'Aptitude', '	\r\nI read an advertisement that said\r\nP :	posh, air-conditioned\r\nQ :	gentleman of taste\r\nR :	are available for\r\nS :	fully furnished rooms\r\nThe Proper sequence should be:', 'PQRS', 'PSRQ', 'PSQR', 'SRPQ', 'B'),
(35, 'Ordering', 'Aptitude', '	\r\nSince the beginning of history\r\nP :	have managed to catch\r\nQ :	the Eskimos and Red Indians\r\nR :	by a very difficulty method\r\nS :	a few specimens of this aquatic animal\r\nThe Proper sequence should be:', 'QRPS', 'SQPR', 'SQRP', 'QPSR', 'D'),
(36, 'Ordering', 'Aptitude', 'A French woman\r\nP :	committed suicide\r\nQ :	where she had put up\r\nR :	who had come to Calcutta\r\nS :	by jumping from the first floor balcony of the hotel\r\nThe Proper sequence should be:', 'PRQS', 'QSRP', 'RPSQ', 'SRQP', 'C'),
(37, 'Ordering', 'Aptitude', 'They felt safer\r\nP :	to watch the mountain\r\nQ :	of more than five miles\r\nR :	as they settled down\r\nS :	from a distance\r\nThe Proper sequence should be:', 'RPSQ', 'RSQP', 'PQSR', 'PRSQ', 'A'),
(38, 'Ordering', 'Aptitude', '	\r\nThe national unity of a free people\r\nP :	to make it impracticable\r\nQ :	for there to be an arbitrary administration\r\nR :	depends upon a sufficiently even balance of political power\r\nS :	against a revolutionary opposition th', 'QRPS', 'QRSP', 'RPQS', 'RSPQ', 'D'),
(39, 'Ordering', 'Aptitude', 'The grocer\r\nP :	did not listen to the protests of customer\r\nQ :	who was in the habit of weighing less\r\nR :	whom he had cheated\r\nS :	with great audacity\r\nThe Proper sequence should be:', 'PRSQ', 'QSPR', 'QPRS', 'PQSR', 'C'),
(40, 'Ordering', 'Aptitude', '	\r\nPeople\r\nP :	at his dispensary\r\nQ :	went to him\r\nR :	of all professions\r\nS :	for medicine and treatment\r\nThe Proper sequence should be:', 'QPRS', 'RPQS', 'RQSP', 'QRPS', 'C'),
(41, 'Ordering', 'Aptitude', '	\r\nIf you need help\r\nP :	promptly and politely\r\nQ :	ask for attendants\r\nR :	to help our customers\r\nS :	who have instructions\r\nThe Proper sequence should be:', 'SQPR', 'QPSR', 'QSRP', 'SQRP', 'C'),
(42, 'Ordering', 'Aptitude', '	\r\nIt is easier\r\nP :	to venture into space\r\nQ :	for men\r\nR :	beneath their feet\r\nS :	than to explore\r\nThe Proper sequence should be:', 'QRPS', 'QPSR', 'PSRQ', 'PQSR', 'B'),
(43, 'Ordering', 'Aptitude', '	\r\nIt was to be\r\nP :	before their school examination\r\nQ :	which was due to start\r\nR :	the last expedition\r\nS :	in a month\'s\r\nThe Proper sequence should be:', 'SRQP', 'RQSP', 'RPQS', 'SPRQ', 'C'),
(44, 'Ordering', 'Aptitude', 'This time\r\nP :	exactly what he had been told\r\nQ :	the young man did\r\nR :	beyond his dreams\r\nS :	and the plan succeeded\r\nThe Proper sequence should be:', 'QPRS', 'QPSR', 'PQSR', 'QSRP', 'B'),
(45, 'Ordering', 'Aptitude', '	\r\nIn the darkness\r\nP :	the long, narrow beard\r\nQ :	was clearly visible with\r\nR :	the tall stooping figure of the doctor\r\nS :	and the aquiline nose\r\nThe Proper sequence should be:', 'RQPS', 'PSQR', 'RSQP', 'QPRS', 'A'),
(48, 'CommandLine', 'Technical', 'The maximum combined length of the command-line arguments including the spaces between adjacent arguments is', '128 characters\r\n', '256 characters', '67 characters', 'It may vary from one operating system to another', 'D'),
(49, 'CommandLine', 'Technical', 'According to ANSI specifications which is the correct way of declaring main when it receives command-line arguments?', 'int main(int argc, char *argv[])', 'int main(argc, argv)\r\nint argc; char *argv;', 'int main()\r\n{\r\n    int argc; char *argv;\r\n}', 'None of above', 'A'),
(50, 'CommandLine', 'Technical', 'What do the \'c\' and \'v\' in argv stands for?', '\'c\' means argument control \'v\' means argument vector', '\'c\' means argument count \'v\' means argument vertex', '\'c\' means argument count \'v\' means argument vector', '\'c\' means argument configuration \'v\' means argument visibility', 'C'),
(51, 'CommandLine', 'Technical', 'What will be the output of the program (myprog.c) given below if it is executed from the command line?\r\ncmd> myprog one two three\r\n\r\n/* myprog.c */\r\n#include<stdio.h>\r\n\r\nint main(int argc, char **argv)\r\n{\r\n    printf(\"%c\\n\", ', 'myprog one two three', 'myprog one', 'o', 'two', 'C'),
(52, 'CommandLine', 'Technical', 'What will be the output of the program (sample.c) given below if it is executed from the command line (turbo c under DOS)?\r\ncmd> sample Good Morning\r\n\r\n/* sample.c */\r\n#include<stdio.h>\r\n\r\nint main(int argc, char *argv[])\r\n{\r', '3 Good', '2 Good', 'Good Morning', '3 Morning', 'A'),
(53, 'CommandLine', 'Technical', 'What will be the output of the program\r\n\r\n#include<stdio.h>\r\nvoid fun(int);\r\n\r\nint main(int argc)\r\n{\r\n    printf(\"%d \", argc);\r\n    fun(argc);\r\n    return 0;\r\n}\r\nvoid fun(int i)\r\n{\r\n    if(i!=4)\r\n        main(++i);\r\n}', '1 2 3', '1 2 3 4', '2 3 4', '1', 'B'),
(54, 'CommandLine', 'Technical', 'Which of the following is TRUE about argv?', 'It is an array of character pointers', 'It is a pointer to an array of character pointers', 'It is an array of strings', 'None of above', 'A'),
(55, 'CommandLine', 'Technical', 'Which of the following statements are FALSE about the below code?\r\n\r\nint main(int ac, char *av[])\r\n{\r\n}', 'ac contains count of arguments supplied at command-line', 'av[] contains addresses of arguments supplied at a command line', 'In place of ac and av, argc and argv should be used', 'The variables ac and av are always local to main()', 'C'),
(56, 'CommandLine', 'Technical', '	\r\nWhat will be the output of the program if it is executed like below?\r\ncmd> sample\r\n\r\n/* sample.c */\r\n#include<stdio.h>\r\n\r\nint main(int argc, char **argv)\r\n{\r\n    printf(\"%s\\n\", argv[argc-1]);\r\n    return 0;\r\n}', '0', 'sample', 'samp', 'No output', 'B'),
(57, 'CommandLine', 'Technical', 'What will be the output of the program (sample.c) given below if it is executed from the command line?\r\ncmd> sample friday tuesday sunday\r\n\r\n/* sample.c */\r\n#include<stdio.h>\r\n\r\nint main(int argc, char *argv[])\r\n{\r\n    printf', 's', 'f', 'sample', 'friday', 'B'),
(58, 'CommandLine', 'Technical', 'What will be the output of the program (myprog.c) given below if it is executed from the command line?\r\ncmd> myprog friday tuesday sunday\r\n\r\n/* myprog.c */\r\n#include<stdio.h>\r\n\r\nint main(int argc, char *argv[])\r\n{\r\n    printf', 'r', 'f', 'm', 'y', ' A'),
(59, 'CommandLine', 'Technical', '	\r\nWhat will be the output of the program (sample.c) given below if it is executed from the command line?\r\ncmd> sample one two three\r\n\r\n/* sample.c */\r\n#include<stdio.h>\r\n\r\nint main(int argc, char *argv[])\r\n{\r\n    int i=0;\r\n ', 'three two one', 'owt', 'eno\r\n', 'eerht', 'C'),
(61, 'CommandLine', 'Technical', '	\r\nWhat will be the output of the program (sample.c) given below if it is executed from the command line?\r\ncmd> sample Jan Feb Mar\r\n\r\n/* sample.c */\r\n#include<stdio.h>\r\n#include<dos.h>\r\n\r\nint main(int arc, char *arv[])\r\n{\r\n    int i;\r\n    for(i=1; i<_argc; i++)\r\n        printf(\"%s \", _argv[i]);\r\n    return 0;\r\n}', 'No output', 'sample Jan Feb Mar', 'Jan Feb Mar', 'Error', 'C'),
(62, 'CommandLine', 'Technical', '	 What will be the output of the program (sample.c) given below if it is executed from the command line? cmd> sample monday tuesday wednesday thursday  /* sample.c */ #include<stdio.h>  int main(int argc, char *argv[]) {     while(--argc>0)         printf(\"%s\", *++argv);     return 0; }', 'sample monday tuesday wednesday thursday', 'monday tuesday wednesday thursday', 'monday tuesday thursday', 'tuesday', 'B'),
(63, 'Constructors', 'Technical', 'A constructor that accepts __________ parameters is called the default constructor.', 'one', 'two', 'no', 'three', 'C'),
(64, 'Constructors', 'Technical', '	\r\nWhat happens when a class with parameterized constructors and having no default constructor is used in a program and we create an object that needs a zero-argument constructor?', 'Compile-time error', 'Preprocessing error.', 'Runtime error.', 'Runtime exception.', 'A'),
(65, 'Constructors', 'Technical', 'Can a class have virtual destructor?', 'Yes', 'No', 'Not sure', 'Cant say', 'A'),
(66, 'Constructors', 'Technical', 'Destructor has the same name as the constructor and it is preceded by ______ .', '!', '?', '~', '$', 'C'),
(67, 'Constructors', 'Technical', '	\r\nFor automatic objects, constructors and destructors are called each time the objects', 'enter and leave scope', 'inherit parent class', 'are constructed', 'are destroyed', 'A'),
(68, 'Constructors', 'Technical', 'Which constructor function is designed to copy objects of the same class type?', 'Create constructor', 'Object constructor', 'Dynamic constructor\r\n', 'Copy constructor', 'D'),
(69, 'Constructors', 'Technical', 'Which of the following statement is correct?', 'Constructor has the same name as that of the class.', 'Destructor has the same name as that of the class with a tilde symbol at the beginning.', 'Both A and B', 'Destructor has the same name as the first member function of the class.', 'C'),
(70, 'Constructors', 'Technical', 'Which of the following statement is incorrect?', 'Constructor is a member function of the class.', 'The compiler always provides a zero argument constructor.', 'It is necessary that a constructor in a class should always be public.', 'Both B and C', 'D'),
(71, 'Constructors', 'Technical', 'When are the Global objects destroyed?', 'When the control comes out of the block in which they are being used.', 'When the program terminates.', 'When the control comes out of the function in which they are being used.', 'As soon as local objects die.', 'B'),
(72, 'Constructors', 'Technical', '	\r\nCopy constructor must receive its arguments by __________ .', 'either pass-by-value or pass-by-reference', 'only pass-by-value', 'only pass-by-reference', 'only pass by address', 'C'),
(73, 'Constructors', 'Technical', 'A function with the same name as the class, but preceded with a tilde character (~) is called __________ of that class.', 'constructor', 'destructor', 'function', 'object', 'B'),
(74, 'Constructors', 'Technical', 'A union that has no constructor can be initialized with another union of __________ type.', 'different', 'same', 'virtual', 'class', 'B'),
(75, 'Constructors', 'Technical', 'Which of the following gets called when an object goes out of scope?', 'constructor', 'destructor', 'main', 'virtual function', 'B'),
(76, 'Constructors', 'Technical', 'Which of the following statement is correct?', 'Destructor destroys only integer data members of the object.', 'Destructor destroys only float data members of the object.', 'Destructor destroys only pointer data members of the object', 'Destructor destroys the complete object.', 'D'),
(77, 'Constructors', 'Technical', '__________ used to make a copy of one class object from another class object of the same class type.', 'constructor', 'copy constructor', 'destructor', 'default constructor', 'B'),
(78, 'Objects', 'Technical', 'What happens when we try to compile the class definition in following code snippet?\r\n\r\nclass Birds {};\r\nclass Peacock : protected Birds {};', 'It will not compile because class body of Birds is not defined.', 'It will not compile because class body of Peacock is not defined.', 'It will not compile because a class cannot be protectedly inherited from other class.', 'It will compile successfully.', 'D'),
(79, 'Objects', 'Technical', 'Which of the following statements is incorrect?', 'Friend keyword can be used in the class to allow access to another class', 'Friend keyword can be used for a function in the public section of a class.', 'Friend keyword can be used for a function in the private section of a class.', 'Friend keyword can be used on main().', 'D'),
(80, 'Objects', 'Technical', '	\r\nWhich of the following statement is correct regarding destructor of base class?', 'Destructor of base class should always be static.', 'Destructor of base class should always be virtual.', 'Destructor of base class should not be virtual.', 'Destructor of base class should always be private.', 'B'),
(81, 'Objects', 'Technical', 'Which of the following two entities (reading from Left to Right) can be connected by the dot operator?', 'A class member and a class object.', 'A class object and a class.', 'A class and a member of that class.', 'A class object and a member of that class.', 'D'),
(82, 'Objects', 'Technical', 'How can we make a class abstract?', 'By making all member functions constant.', 'By making at least one member function as pure virtual function', 'By declaring it abstract using the static keyword.', 'By declaring it abstract using the virtual keyword.', 'B'),
(83, 'Objects', 'Technical', '	\r\nWhich of the following statements is correct when a class is inherited publicly?', 'Public members of the base class become protected members of derived class.', 'Public members of the base class become private members of derived class.', 'Private members of the base class become protected members of derived class.', 'Public members of the base class become public members of derived class.', 'D'),
(84, 'Objects', 'Technical', '	\r\nWhich of the following statements is correct about the constructors and destructors?', 'Destructors can take arguments but constructors cannot', 'Constructors can take arguments but destructors cannot.', 'Destructors can be overloaded but constructors cannot be overloaded.', 'Constructors and destructors can both return a value.', 'B'),
(85, 'Objects', 'Technical', '	\r\nWhich of the following access specifies is used in a class definition by default?', 'Protected', 'Public', 'Private', 'Friend', 'C'),
(86, 'Objects', 'Technical', 'Which of the following statement is correct with respect to the use of friend keyword inside a class?', 'A private data member can be declared as a friend.', 'A class may be declared as a friend.', 'An object may be declared as a friend.', 'We can use friend keyword as a class name.', 'B'),
(87, 'Objects', 'Technical', '	\r\nWhich of the following keywords is used to control access to a class member?', 'Default', 'Break', 'Protected', 'Asm', 'C'),
(88, 'Objects', 'Technical', 'Which of the following can access private data members or member functions of a class?', 'Any function in the program.', 'All global functions in the program.\r\n', 'Any member function of that class.', 'Only public member functions of that class', 'C'),
(89, 'Objects', 'Technical', 'Which of the following type of data member can be shared by all instances of its class?', 'Public', 'Inherited', 'Static', 'Friend', 'C'),
(90, 'Objects', 'Technical', 'Which of the following also known as an instance of a class?', 'Friend functions', 'Object', 'Member functions', 'Member Variables ', 'B'),
(91, 'Objects', 'Technical', 'Constructor is executed when _____.', 'an object is created', 'an object is used', 'a class is declared', 'an object goes out of scope.', 'A'),
(92, 'Objects', 'Technical', '	\r\nWhich of the following statements about virtual base classes is correct?', 'It is used to provide multiple inheritance.', 'It is used to avoid multiple copies of base class in derived class.', 'It is used to allow multiple copies of base class in a derived class', 'It allows private members of the base class to be inherited in the derived class.', 'B'),
(94, 'Garbage', 'Technical', 'void start() {  \r\n    A a = new A(); \r\n    B b = new B(); \r\n    a.s(b);  \r\n    b = null; /* Line 5 */\r\n    a = null;  /* Line 6 */\r\n    System.out.println(\"start completed\"); /* Line 7 */\r\n} \r\nWhen is the B object, created in line 3, eligible for garbage collection?', 'after line 5', 'after line 6', 'after line 7', 'There is no way to be absolutely certain', 'D'),
(95, 'Garbage', 'Technical', 'class HappyGarbage01 \r\n{ \r\n    public static void main(String args[]) \r\n    {\r\n        HappyGarbage01 h = new HappyGarbage01(); \r\n        h.methodA(); /* Line 6 */\r\n    } \r\n    Object methodA() \r\n    {\r\n        Object obj1 = new Object(); \r\n        Object [] obj2 = new Object[1]; \r\n        obj2[0] = obj1; \r\n        obj1 = null; \r\n        return obj2[0]; \r\n    } \r\n}\r\nWhere will be the most chance of the garbage collector being invoked?\r\n', 'after line 9', 'after line 10', 'after line 11', 'garbage collector never invoked in methodA()', 'D'),
(96, 'Garbage', 'Technical', 'class Bar { } \r\nclass Test \r\n{  \r\n    Bar doBar() \r\n    {\r\n        Bar b = new Bar(); /* Line 6 */\r\n        return b; /* Line 7 */\r\n    } \r\n    public static void main (String args[]) \r\n    { \r\n        Test t = new Test();  /* Line 11 */\r\n        Bar newBar = t.doBar();  /* Line 12 */\r\n        System.out.println(\"newBar\"); \r\n        newBar = new Bar(); /* Line 14 */\r\n        System.out.println(\"finishing\"); /* Line 15 */\r\n    } \r\n}\r\nAt what point is the Bar object, created on line 6, eligible fo', 'after line 12', 'after line 14', 'after line 7, when doBar() completes', 'after line 15, when main() completes', 'B'),
(97, 'Garbage', 'Technical', 'class Test \r\n{  \r\n    private Demo d; \r\n    void start() \r\n    {  \r\n        d = new Demo(); \r\n        this.takeDemo(d); /* Line 7 */\r\n    } /* Line 8 */\r\n    void takeDemo(Demo demo) \r\n    { \r\n        demo = null;  \r\n        demo = new Demo(); \r\n    } \r\n}\r\nWhen is the Demo object eligible for garbage collection?', 'After line 7', 'After line 8', 'After the start() method completes', 'When the instance running this code is made eligible for garbage collection.', 'D'),
(98, 'Garbage', 'Technical', 'public class X \r\n{\r\n    public static void main(String [] args) \r\n    {\r\n        X x = new X();\r\n        X x2 = m1(x); /* Line 6 */\r\n        X x4 = new X();\r\n        x2 = x4; /* Line 8 */\r\n        doComplexStuff();\r\n    }\r\n    static X m1(X mx) \r\n    {\r\n        mx = new X();\r\n        return mx;\r\n    }\r\n}\r\nAfter line 8 runs. how many objects are eligible for garbage collection?', '0', '1', '2', '3', 'B'),
(99, 'Garbage', 'Technical', 'public Object m() \r\n{  \r\n    Object o = new Float(3.14F); \r\n    Object [] oa = new Object[l];\r\n    oa[0] = o; /* Line 5 */\r\n    o = null;  /* Line 6 */\r\n    oa[0] = null; /* Line 7 */\r\n    return o; /* Line 8 */\r\n}\r\nWhen is the Float object, created in line 3, eligible for garbage collection?', 'just after line 5', 'just after line 6', 'just after line 7', 'just after line 8', 'C'),
(100, 'Garbage', 'Technical', 'class X2 \r\n{\r\n    public X2 x;\r\n    public static void main(String [] args) \r\n    {\r\n        X2 x2 = new X2();  /* Line 6 */\r\n        X2 x3 = new X2();  /* Line 7 */\r\n        x2.x = x3;\r\n        x3.x = x2;\r\n        x2 = new X2();\r\n        x3 = x2; /* Line 11 */\r\n        doComplexStuff();\r\n    }\r\n}\r\nafter line 11 runs, how many objects are eligible for garbage collection?', '0', '1', '2', '3', 'C'),
(101, 'Garbage', 'Technical', 'hat allows the programmer to destroy an object x?', 'x.delete()', 'x.finalize()', 'Runtime.getRuntime().gc()\r\n', 'Only the garbage collection system can destroy an object.', 'D'),
(102, 'Garbage', 'Technical', 'Which statement is true?', 'Programs will not run out of memory.', 'Objects that will never again be used are eligible for garbage collection.', 'Objects that are referred to by other objects will never be garbage collected.', 'Objects that can be reached from a live thread will never be garbage collected.', 'D'),
(103, 'Garbage', 'Technical', 'Which statement is true?', 'All objects that are eligible for garbage collection will be garbage collected by the garbage collector.', 'Objects with at least one reference will never be garbage collected', 'Objects from a class with the finalize() method overridden will never be garbage collected.', 'Objects instantiated within anonymous inner classes are placed in the garbage collectible heap.', 'D'),
(104, 'Garbage', 'Technical', 'Which statement is true?', 'Memory is reclaimed by calling Runtime.gc().', 'An OutOfMemory error is only thrown if a single block of memory cannot be found that is large enough for a particular requirement.', 'Objects that have finalize() methods always have their finalize() methods called before the program ends.', 'Objects are not collected if they are accessible from live threads.', 'D'),
(105, 'Garbage', 'Technical', 'Which statement is true?', 'Calling Runtime.gc() will cause eligible objects to be garbage collected.', 'The garbage collector uses a mark and sweep algorithm', 'If an object can be accessed from a live thread, it can\'t be garbage collected.', 'If object 1 refers to object 2, then object 2 can\'t be garbage collected.', 'C'),
(106, 'Garbage', 'Technical', '	\r\nWhich is true about an anonymous inner class?', 'It can extend exactly one class and implement exactly one interface', 'It can extend exactly one class and can implement multiple interfaces.', 'It can extend exactly one class or implement exactly one interface.', 'It can implement multiple interfaces regardless of whether it also extends a class.', 'C'),
(107, 'Garbage', 'Technical', 'class Boo \r\n{\r\n    Boo(String s) { }\r\n    Boo() { }\r\n}\r\nclass Bar extends Boo \r\n{\r\n    Bar() { }\r\n    Bar(String s) {super(s);}\r\n    void zoo() \r\n    {\r\n    // insert code here\r\n    }\r\n}\r\nwhich one create an anonymous inner class from within class Bar?', 'Boo f = new Boo(24) { };', 'Boo f = new Bar() { };', 'Bar f = new Boo(String s) { };', 'Boo f = new Boo.Bar(String s) { };', 'B'),
(108, 'Garbage', 'Technical', '	\r\nWhich is true about a method-local inner class?', 'It must be marked final.', 'It can be marked abstract.', 'It can be marked public.', 'It can be marked static.', 'B'),
(109, 'Threads', 'Technical', '	\r\nWhat is the name of the method used to start a thread execution?', 'init();', 'start();', 'run();', 'resume();', 'B'),
(110, 'Threads', 'Technical', 'Which two are valid constructors for Thread?\r\n\r\n1. Thread(Runnable r, String name)\r\n2. Thread()\r\n3. Thread(int priority)\r\n4. Thread(Runnable r, ThreadGroup g)\r\n5. Thread(Runnable r, int priority)', '1 and 3', '2 and 4', '1 and 2 ', '2 and 5', 'C'),
(111, 'Threads', 'Technical', '	\r\nWhich three are methods of the Object class?\r\n\r\n1. notify();\r\n2. notifyAll();\r\n3. isInterrupted();\r\n4. synchronized();\r\n5. interrupt();\r\n6. wait(long msecs);\r\n7. sleep(long msecs);\r\n8. yield();', '1,2,4', '2,4,5', '1,2,6', '2,3,4', 'C'),
(112, 'Threads', 'Technical', 'class X implements Runnable \r\n{ \r\n    public static void main(String args[]) \r\n    {\r\n        /* Missing code? */\r\n    } \r\n    public void run() {} \r\n}\r\nWhich of the following line of code is suitable to start a thread ?', 'Thread t = new Thread(X);', 'Thread t = new Thread(X); t.start();', 'X run = new X(); Thread t = new Thread(run); t.start();', 'Thread t = new Thread(); x.run();', 'C'),
(113, 'Threads', 'Technical', 'Which cannot directly cause a thread to stop executing?', 'Calling the SetPriority() method on a Thread object', 'Calling the wait() method on an object.', 'Calling notify() method on an object.', 'Calling read() method on an InputStream object.', 'C'),
(114, 'Threads', 'Technical', 'Which two of the following methods are defined in class Thread?\r\n1.start()\r\n2.wait()\r\n3.notify()\r\n4.run()\r\n5.terminate()', '1 and 4', '2 and 3', '3 and 4', '2 and 4', 'A'),
(115, 'Threads', 'Technical', 'Which three guarantee that a thread will leave the running state?\r\n1.yield()\r\n2.wait()\r\n3.notify()\r\n4.notifyAll()\r\n5.sleep(1000)\r\n6.aLiveThread.join()\r\n7.Thread.killThread()', '1,2 and 4', '2,5,6', '3,4,7', '4,5,7', 'B'),
(116, 'Threads', 'Technical', '	\r\nWhich of the following will directly stop the execution of a Thread?', 'wait()', 'notify()', 'notifyall()', 'exits synchronized code', 'A'),
(117, 'Threads', 'Technical', '	\r\nWhich method must be defined by a class implementing the java.lang.Runnable interface?', 'void run()', 'public void run()', 'public void start()', 'void run(int priority)', 'B'),
(118, 'Threads', 'Technical', 'Which will contain the body of the thread?', 'run();', 'start();', 'stop();', 'main();', 'A'),
(119, 'Threads', 'Technical', 'Which method registers a thread in a thread scheduler?', 'run();', 'construct();', 'start();', 'register();', 'C'),
(120, 'Threads', 'Technical', ' 	\r\nAssume the following method is properly synchronized and called from a thread A on an object B:\r\n\r\nwait(2000);\r\n\r\nAfter calling this method, when will the thread A become a candidate to get another turn at the CPU?', 'After thread A is notified, or after two seconds.', 'After the lock on B is released, or after two seconds.', 'Two seconds after thread A is notified.', 'Two seconds after lock B is released.', 'A'),
(121, 'Threads', 'Technical', '	\r\nWhich of the following will not directly cause a thread to stop?', 'notify()', 'wait()', 'InputStream access', 'sleep()', 'A'),
(122, 'Threads', 'Technical', '	\r\nWhich class or interface defines the wait(), notify(),and notifyAll() methods?', 'Object', 'Thread', 'Runnable', 'Class', 'A'),
(123, 'Threads', 'Technical', 'public class MyRunnable implements Runnable \r\n{\r\n    public void run() \r\n    {\r\n        // some code here\r\n    }\r\n}\r\nwhich of these will create and start this thread?', 'new Runnable(MyRunnable).start();', 'new Thread(MyRunnable).run();', 'new Thread(new MyRunnable()).start();', 'new MyRunnable().start();', 'C'),
(124, 'Analogies', 'Aptitude', 'Odometer is to mileage as compass is to', 'speed', 'hiking', 'needle', 'direction', 'D'),
(125, 'Analogies', 'Aptitude', 'Marathon is to race as hibernation is to', 'winter', 'bear', 'dream', 'sleep', 'D'),
(126, 'Analogies', 'Aptitude', 'Window is to pane as book is to', 'novel', 'glass', 'cover', 'page', 'D'),
(127, 'Analogies', 'Aptitude', 'Cup is to coffee as bowl is to', 'dish', 'soup', 'spoon', 'food', 'B'),
(128, 'Analogies', 'Aptitude', 'Yard is to inch as quart is to', 'gallon', 'ounce', 'milk', 'liquid', 'B'),
(129, 'Analogies', 'Aptitude', 'Elated is to despondent as enlightened is to', 'aware', 'ignorant', 'miserable', 'tolerant', 'B'),
(130, 'Analogies', 'Aptitude', 'Optimist is to cheerful as pessimist is to', 'gloomy', 'mean', 'petty', 'helpful', 'A'),
(131, 'Analogies', 'Aptitude', 'Reptile is to lizard as flower is to', 'petal', 'stem', 'daisy', 'alligator', 'C'),
(132, 'Analogies', 'Aptitude', 'Play is to actor as concert is to', 'symphony', 'musician', 'piano', 'percussion', 'B'),
(133, 'Analogies', 'Aptitude', 'Sponge is to porous as rubber is to', 'massive', 'solid', 'elastic', 'inflexible', 'C'),
(134, 'Analogies', 'Aptitude', 'Careful is to cautious as boastful is to', 'arrogant', 'humble', 'joyful', 'suspicious', 'A'),
(135, 'Analogies', 'Aptitude', 'Pen is to poet as needle is to', 'thread', 'button', 'sewing', 'tailor', 'D'),
(136, 'Analogies', 'Aptitude', 'Secretly is to openly as silently is to', 'scarcely', 'impolitely', 'noisily', 'quietly', 'C'),
(137, 'Analogies', 'Aptitude', 'Embarrassed is to humiliated as frightened is to', 'terrified', 'agitated', 'courageous', 'reckless', 'A'),
(138, 'Analogies', 'Aptitude', 'Pride is to lion as shoal is to', 'teacher', 'student', 'self-respect', 'fish', 'D'),
(139, 'TimeAndWork', 'Aptitude', 'A can do a work in 15 days and B in 20 days. If they work on it together for 4 days, then the fraction of the work that is left is :', '1/4', '1/10', '7/15', '8/15', 'D'),
(140, 'TimeAndWork', 'Aptitude', 'A can lay railway track between two given stations in 16 days and B can do the same job in 12 days. With help of C, they did the job in 4 days only. Then, C alone can do the job in:', '9 1/5 days', '9 2/5 days', '9 3/5 days', '10', 'C'),
(141, 'TimeAndWork', 'Aptitude', 'A, B and C can do a piece of work in 20, 30 and 60 days respectively. In how many days can A do the work if he is assisted by B and C on every third day?', '12 days', '15 days', '16 days', '18 days', 'B'),
(142, 'TimeAndWork', 'Aptitude', 'A is thrice as good as workman as B and therefore is able to finish a job in 60 days less than B. Working together, they can do it in:', '20 days', '22 1/2 days', '25 days', '30 days', 'B'),
(143, 'TimeAndWork', 'Aptitude', 'A alone can do a piece of work in 6 days and B alone in 8 days. A and B undertook to do it for Rs. 3200. With the help of C, they completed the work in 3 days. How much is to be paid to C?', 'Rs. 375', 'Rs. 400', 'Rs. 600', 'Rs. 800', 'B'),
(144, 'TimeAndWork', 'Aptitude', 'If 6 men and 8 boys can do a piece of work in 10 days while 26 men and 48 boys can do the same in 2 days, the time taken by 15 men and 20 boys in doing the same type of work will be:', '4 days', '5 days', '6 days', '7 days', 'A'),
(145, 'TimeAndWork', 'Aptitude', 'A can do a piece of work in 4 hours; B and C together can do it in 3 hours, while A and C together can do it in 2 hours. How long will B alone take to do it?', '8 hours', '10 hours', '12 hours', '24 hours', 'C'),
(146, 'TimeAndWork', 'Aptitude', 'A can do a certain work in the same time in which B and C together can do it. If A and B together could do it in 10 days and C alone in 50 days, then B alone could do it in:', '15 days', '20 days', '25 days', '30 days', 'C'),
(147, 'TimeAndWork', 'Aptitude', 'A does 80% of a work in 20 days. He then calls in B and they together finish the remaining work in 3 days. How long B alone would take to do the whole work?', '23 days', '37 days', '37 1/2 days', '40 days', 'C'),
(148, 'TimeAndWork', 'Aptitude', 'A machine P can print one lakh books in 8 hours, machine Q can print the same number of books in 10 hours while machine R can print them in 12 hours. All the machines are started at 9 A.M. while machine P is closed at 11 A.M. and the remaining two machines complete work. Approximately at what time will the work (to print one lakh books) be finished ?', '11:30 AM', '12 noon', '12:30 PM', '1:00 PM', 'D'),
(149, 'TimeAndWork', 'Aptitude', 'A can finish a work in 18 days and B can do the same work in 15 days. B worked for 10 days and left the job. In how many days, A alone can finish the remaining work?', '5', '5 1/2', '6', '8', 'C'),
(150, 'TimeAndWork', 'Aptitude', '4 men and 6 women can complete a work in 8 days, while 3 men and 7 women can complete it in 10 days. In how many days will 10 women complete it?', '35', '40', '45', '50', 'B'),
(151, 'TimeAndWork', 'Aptitude', 'A and B can together finish a work 30 days. They worked together for 20 days and then B left. After another 20 days, A finished the remaining work. In how many days A alone can finish the work?', '40', '50', '54', '60', 'D'),
(152, 'TimeAndWork', 'Aptitude', 'P can complete a work in 12 days working 8 hours a day. Q can complete the same work in 8 days working 10 hours a day. If both P and Q work together, working 8 hours a day, in how many days can they complete the work?', '5 5/11', '5 6/11', '6 5/11', '6 6/11', 'A'),
(153, 'TimeAndWork', 'Aptitude', '10 women can complete a work in 7 days and 10 children take 14 days to complete the work. How many days will 5 women and 10 children take to complete the work?', '3', '5', '7', 'None of these', 'C'),
(154, 'Average', 'Aptitude', 'In the first 10 overs of a cricket game, the run rate was only 3.2. What should be the run rate in the remaining 40 overs to reach the target of 282 runs?', '6.25', '6.5', '6.75', '7', 'A'),
(155, 'Average', 'Aptitude', '	\r\nA family consists of two grandparents, two parents and three grandchildren. The average age of the grandparents is 67 years, that of the parents is 35 years and that of the grandchildren is 6 years. What is the average age of the family?', '28 4/7 years', '31 5/7 years', '32 1/7 years', 'None of these', 'B'),
(156, 'Average', 'Aptitude', 'A grocer has a sale of Rs. 6435, Rs. 6927, Rs. 6855, Rs. 7230 and Rs. 6562 for 5 consecutive months. How much sale must he have in the sixth month so that he gets an average sale of Rs. 6500?', 'Rs. 4991', 'Rs. 5991', 'Rs. 6001', 'Rs. 6991', 'A'),
(157, 'Average', 'Aptitude', 'The average of 20 numbers is zero. Of them, at the most, how many may be greater than zero?', '0', '1', '10', '19', 'D'),
(158, 'Average', 'Aptitude', 'The average weight of 8 person\'s increases by 2.5 kg when a new person comes in place of one of them weighing 65 kg. What might be the weight of the new person?', '76 kg', '76.5 kg', '85 kg', 'None of these', 'C'),
(159, 'Average', 'Aptitude', 'The captain of a cricket team of 11 members is 26 years old and the wicket keeper is 3 years older. If the ages of these two are excluded, the average age of the remaining players is one year less than the average age of the whole team. What is the average age of the team?', '23 years', '24 years', '25 years', 'None of these', 'A'),
(160, 'Average', 'Aptitude', 'The average monthly income of P and Q is Rs. 5050. The average monthly income of Q and R is Rs. 6250 and the average monthly income of P and R is Rs. 5200. The monthly income of P is:', '3500', '4000', '4050', '5000', 'B'),
(161, 'Average', 'Aptitude', 'The average age of husband, wife and their child 3 years ago was 27 years and that of wife and the child 5 years ago was 20 years. The present age of the husband is:', '35 Years', '40 years', '50 years', 'None of these', 'B'),
(162, 'Average', 'Aptitude', 'A car owner buys petrol at Rs.7.50, Rs. 8 and Rs. 8.50 per litre for three successive years. What approximately is the average cost per litre of petrol if he spends Rs. 4000 each year?', 'Rs. 7.98', 'Rs. 8', 'Rs. 8.5', 'Rs. 9', 'A'),
(163, 'Average', 'Aptitude', 'In Arun\'s opinion, his weight is greater than 65 kg but less than 72 kg. His brother doest not agree with Arun and he thinks that Arun\'s weight is greater than 60 kg but less than 70 kg. His mother\'s view is that his weight cannot be greater than 68 kg. If all are them are correct in their estimation, what is the average of different probable weights of Arun?', '67 kg', '68 kg', '69 kg', 'None of these', 'A'),
(164, 'Average', 'Aptitude', 'The average weight of A, B and C is 45 kg. If the average weight of A and B be 40 kg and that of B and C be 43 kg, then the weight of B is:', '17 kg', '20 kg', '26 kg', '31 kg', 'D'),
(165, 'Average', 'Aptitude', 'The average weight of 16 boys in a class is 50.25 kg and that of the remaining 8 boys is 45.15 kg. Find the average weights of all the boys in the class.', '47.55 kg', '48 kg', '48.55 kg', '49.25 kg', 'C'),
(166, 'Average', 'Aptitude', 'A library has an average of 510 visitors on Sundays and 240 on other days. The average number of visitors per day in a month of 30 days beginning with a Sunday is:', '250', '276', '280', '285', 'D'),
(167, 'Average', 'Aptitude', 'If the average marks of three batches of 55, 60 and 45 students respectively is 50, 55, 60, then the average marks of all the students is:', '53.33', '54.68', '55', 'None of these', 'B'),
(168, 'Average', 'Aptitude', 'A pupil\'s marks were wrongly entered as 83 instead of 63. Due to that the average marks for the class got increased by half (1/2). The number of pupils in the class is:', '10', '20', '40', '73', 'C'),
(169, 'Ages', 'Aptitude', 'Father is aged three times more than his son Ronit. After 8 years, he would be two and a half times of Ronit\'s age. After further 8 years, how many times would he be of Ronit\'s age?', '2 times', '2 1/2 times', '2 3/4 times', '3 times', 'A'),
(170, 'Ages', 'Aptitude', '	\r\nThe sum of ages of 5 children born at the intervals of 3 years each is 50 years. What is the age of the youngest child?', '4 years', '8 years', '10 years', 'None of these', 'A'),
(171, 'Ages', 'Aptitude', 'A father said to his son, \"I was as old as you are at the present at the time of your birth\". If the father\'s age is 38 years now, the son\'s age five years back was:', '14 years', '19 years', '33 years', '38 years', 'A'),
(172, 'Ages', 'Aptitude', 'A is two years older than B who is twice as old as C. If the total of the ages of A, B and C be 27, then how old is B?', '7', '8', '9', '10', 'D'),
(173, 'Ages', 'Aptitude', 'Present ages of Sameer and Anand are in the ratio of 5 : 4 respectively. Three years hence, the ratio of their ages will become 11 : 9 respectively. What is Anand\'s present age in years?', '24', '27', '40', 'None of these', 'A'),
(174, 'Ages', 'Aptitude', 'A man is 24 years older than his son. In two years, his age will be twice the age of his son. The present age of his son is:', '14 years', '18 years', '20 years', '22 years', 'D'),
(175, 'Ages', 'Aptitude', 'Six years ago, the ratio of the ages of Kunal and Sagar was 6 : 5. Four years hence, the ratio of their ages will be 11 : 10. What is Sagar\'s age at present?', '16 years', '18 years', '20 years', 'None of these', 'A'),
(176, 'Ages', 'Aptitude', 'The sum of the present ages of a father and his son is 60 years. Six years ago, father\'s age was five times the age of the son. After 6 years, son\'s age will be:', '12 years', '14 years', '18 years', '20 years', 'D'),
(177, 'Ages', 'Aptitude', 'At present, the ratio between the ages of Arun and Deepak is 4 : 3. After 6 years, Arun\'s age will be 26 years. What is the age of Deepak at present ?', '12 years', '15 years', '19.5 years', '21 years', 'B'),
(178, 'Ages', 'Aptitude', 'Sachin is younger than Rahul by 7 years. If their ages are in the respective ratio of 7 : 9, how old is Sachin?', '16 years', '18 years', '28 years', '24.5 years', 'D'),
(179, 'Ages', 'Aptitude', 'The present ages of three persons in proportions 4 : 7 : 9. Eight years ago, the sum of their ages was 56. Find their present ages (in years).', '8, 20, 28', '16, 28, 36', '20, 35, 45', 'None of these', 'B'),
(180, 'Ages', 'Aptitude', 'Ayesha\'s father was 38 years of age when she was born while her mother was 36 years old when her brother four years younger to her was born. What is the difference between the ages of her parents?', '2 years', '4 years', '6 years', '8 years', 'C'),
(181, 'Ages', 'Aptitude', 'A person\'s present age is two-fifth of the age of his mother. After 8 years, he will be one-half of the age of his mother. How old is the mother at present?', '32 years', '36 years', '40 years', '48 years', 'C'),
(182, 'Ages', 'Aptitude', 'Q is as much younger than R as he is older than T. If the sum of the ages of R and T is 50 years, what is definitely the difference between R and Q\'s age?', '1 year', '2 years', '25 years', 'Data inadequate', 'D'),
(183, 'Ages', 'Aptitude', 'The age of father 10 years ago was thrice the age of his son. Ten years hence, father\'s age will be twice that of his son. The ratio of their present ages is:', '5:2', '7:3', '9:2', '13:4', 'B'),
(184, 'NumberSeries', 'Aptitude', 'Look at this series: 2, 1, (1/2), (1/4), ... What number should come next?', '(1/3)', '(1/8)', '(2/8)', '(1/16)', 'B'),
(185, 'NumberSeries', 'Aptitude', '	\r\nLook at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', '7', '10', '12', '13', 'B'),
(186, 'NumberSeries', 'Aptitude', 'Look at this series: 36, 34, 30, 28, 24, ... What number should come next?', '20', '22', '23', '26', 'B'),
(187, 'NumberSeries', 'Aptitude', 'Look at this series: 22, 21, 23, 22, 24, 23, ... What number should come next?', '22', '24', '25', '26', 'C'),
(188, 'NumberSeries', 'Aptitude', 'Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?', '12', '14', '27', '53', 'B'),
(189, 'NumberSeries', 'Aptitude', '	\r\nLook at this series: 21, 9, 21, 11, 21, 13, 21, ... What number should come next?', '14', '15', '21', '23', 'B'),
(190, 'NumberSeries', 'Aptitude', '	\r\nLook at this series: 58, 52, 46, 40, 34, ... What number should come next?', '26', '28', '30', '32', 'B'),
(191, 'NumberSeries', 'Aptitude', 'Look at this series: 3, 4, 7, 8, 11, 12, ... What number should come next?', '7', '10', '14', '15', 'D'),
(192, 'NumberSeries', 'Aptitude', 'Look at this series: 8, 22, 8, 28, 8, ... What number should come next?', '9', '29', '32', '34', 'D'),
(193, 'NumberSeries', 'Aptitude', 'Look at this series: 31, 29, 24, 22, 17, ... What number should come next?', '15', '14', '13', '12', 'A'),
(194, 'NumberSeries', 'Aptitude', 'Look at this series: 1.5, 2.3, 3.1, 3.9, ... What number should come next?', '4.2', '4.4', '4.7', '5.1', 'C'),
(195, 'NumberSeries', 'Aptitude', 'Look at this series: 14, 28, 20, 40, 32, 64, ... What number should come next?', '52', '56', '96', '128', 'B'),
(196, 'NumberSeries', 'Aptitude', 'Look at this series: 2, 4, 6, 8, 10, ... What number should come next?', '11', '12', '13', '14', 'B'),
(197, 'NumberSeries', 'Aptitude', 'Look at this series: 201, 202, 204, 207, ... What number should come next?', '205', '208', '210', '211', 'D'),
(198, 'NumberSeries', 'Aptitude', 'Look at this series: 544, 509, 474, 439, ... What number should come next?', '404', '414', '420', '445', 'A'),
(199, 'EssentialPart', 'Aptitude', 'harvest', 'autumn', 'stockpile', 'tractor', 'crop', 'D'),
(200, 'EssentialPart', 'Aptitude', 'desert', 'cactus', 'arid', 'oasis', 'flat', 'B'),
(201, 'EssentialPart', 'Aptitude', 'book', 'fiction', 'pages', 'pictures', 'learning', 'B'),
(202, 'EssentialPart', 'Aptitude', 'language', 'tonque', 'slang', 'writing', 'words', 'D'),
(203, 'EssentialPart', 'Aptitude', 'school', 'student', 'report card', 'test', 'learning', 'A'),
(204, 'EssentialPart', 'Aptitude', 'pain', 'cut', 'burn', 'nuiseance', 'hurt', 'D'),
(205, 'EssentialPart', 'Aptitude', 'gala', 'celebration', 'tuxedo', 'appetizer', 'orator', 'A'),
(206, 'EssentialPart', 'Aptitude', 'monopoly', 'corrupt', 'exclusive', 'rich', 'gigantic', 'B'),
(207, 'EssentialPart', 'Aptitude', 'guitar', 'band', 'teacher', 'songs', 'strings', 'D'),
(208, 'EssentialPart', 'Aptitude', 'election', 'president', 'voter', 'November', 'nation', 'B'),
(209, 'EssentialPart', 'Aptitude', 'ovation', 'outburst', 'bravo', 'applause', 'encore', 'C'),
(210, 'EssentialPart', 'Aptitude', 'bonus', 'reward', 'raise', 'cash', 'employer', 'A'),
(211, 'EssentialPart', 'Aptitude', 'antique', 'rarity', 'artifact', 'aged', 'prehistoric', 'C'),
(212, 'EssentialPart', 'Aptitude', 'culture', 'civility', 'education', 'agriculture', 'customs', 'D'),
(213, 'EssentialPart', 'Aptitude', 'knowledge', 'school', 'teacher', 'textbook', 'learning', 'D'),
(214, 'Bitwise', 'Technical', '	\r\nIn which numbering system can the binary number 1011011111000101 be easily converted to?', 'Decimal system', 'Hexadecimal system', 'Octal system', 'No need to convert', 'B'),
(215, 'Bitwise', 'Technical', 'Which bitwise operator is suitable for turning off a particular bit in a number?', '&& operator', '& operator', '|| operator', '! operator', 'B'),
(216, 'Bitwise', 'Technical', 'Which bitwise operator is suitable for turning on a particular bit in a number?', '&& operator', '& operator', '|| operator', '| operator', 'D'),
(217, 'Bitwise', 'Technical', 'Which bitwise operator is suitable for checking whether a particular bit is on or off?', '&& operator', '& operator', '|| operator', '! operator', 'B'),
(218, 'Bitwise', 'Technical', '	\r\nLeft shifting a number by 1 is always equivalent to multiplying it by 2.', 'True', 'False', 'Not sure', 'Neither', 'A');
INSERT INTO `question` (`Q_ID`, `TEST_NAME`, `CATEGORY`, `Q`, `A`, `B`, `C`, `D`, `ANSWER`) VALUES
(219, 'Bitwise', 'Technical', '	\r\nIn the statement expression1 >> expression2. if expression1 is a signed integer with its leftmost bit set to 1 then on right shifting it the result of the statement will vary from computer to computer', 'True', 'False', 'Not Sure', 'Neither', 'A'),
(220, 'Bitwise', 'Technical', 'Bitwise & and | are unary operators', 'True', 'False', 'Not sure', 'Neither', 'B'),
(221, 'Bitwise', 'Technical', 'Bitwise & can be used to check if more than one bit in a number is on.', 'True', 'False', 'Not sure', 'Neither', 'A'),
(222, 'Bitwise', 'Technical', 'Bitwise & can be used to check if a bit in number is set or not.', 'True', 'False', 'Not sure', 'Neither', 'A'),
(223, 'Bitwise', 'Technical', '	\r\nBitwise & can be used to divide a number by powers of 2', 'True', 'False', 'Not sure', 'Neither', 'B'),
(224, 'Bitwise', 'Technical', 'Left shifting an unsigned int or char by 1 is always equivalent to multiplying it by 2.', 'True', 'False', 'Not sure', 'Neither', 'A'),
(225, 'Bitwise', 'Technical', 'On left shifting, the bits from the left are rotated and brought to the right and accommodated where there is empty space on the right?', 'True', 'False', 'Not sure', 'Neither', 'B'),
(226, 'Bitwise', 'Technical', 'Bitwise & can be used in conjunction with ~ operator to turn off 1 or more bits in a number.', 'Yes', 'No', 'Neither', 'Both', 'A'),
(227, 'Bitwise', 'Technical', 'Bitwise can be used to reverse a sign of a number.', 'Yes', 'No', 'Neither', 'Both', 'B'),
(228, 'Bitwise', 'Technical', 'Bitwise can be used to generate a random number.', 'Yes', 'No', 'Neither', 'Both', 'B'),
(229, 'Pointers', 'Technical', 'What is (void*)0?', 'Representation of NULL pointer', 'Representation of void pointer', 'Error', 'None of above', 'A'),
(230, 'Pointers', 'Technical', 'In which header file is the NULL macro defined?', 'stdio.h', 'stddef.h', 'stdio.h and stddef.h', 'math.h', 'C'),
(231, 'Pointers', 'Technical', 'How many bytes are occupied by near, far and huge pointers (DOS)?', 'near=2 far=4 huge=4', 'near=4 far=8 huge=8', 'near=2 far=4 huge=8', 'near=4 far=4 huge=8', 'A'),
(232, 'Pointers', 'Technical', 'If a variable is a pointer to a structure, then which of the following operator is used to access data members of the structure through the pointer variable?', '.', '&', '*', '->', 'D'),
(233, 'Pointers', 'Technical', 'What would be the equivalent pointer expression for referring the array element a[i][j][k][l]', '((((a+i)+j)+k)+l)', '*(*(*(*(a+i)+j)+k)+l)', '(((a+i)+j)+k+l)', '((a+i)+j+k+l)', 'B'),
(234, 'Pointers', 'Technical', 'A pointer is', 'A keyword used to create variables', 'A variable that stores address of an instruction', 'A variable that stores address of other variable', 'All of the above', 'C'),
(235, 'Pointers', 'Technical', 'The operator used to get value at address stored in a pointer variable is', '*', '&', '&&', '||', 'A'),
(236, 'Pointers', 'Technical', 'What are the different types of real data type in C ?', 'float, double', 'short int, double, long int', 'float, double, long double', 'double, long int, float', 'C'),
(237, 'Pointers', 'Technical', 'What will you do to treat the constant 3.14 as a long double?', 'use 3.14LD', 'use 3.14L', 'use 3.14DL', 'use 3.14LF', 'B'),
(238, 'Pointers', 'Technical', 'Which of the following range is a valid long double (Turbo C in 16 bit DOS OS) ?', '3.4E-4932 to 1.1E+4932', '3.4E-4932 to 3.4E+4932', '1.1E-4932 to 1.1E+4932', '1.7E-4932 to 1.7E+4932', 'A'),
(239, 'Pointers', 'Technical', 'We want to round off x, a float, to an int value, The correct way to do is', 'y = (int)(x + 0.5)', 'y = int(x + 0.5)', 'y = (int)x + 0.5', 'y = (int)((int)x + 0.5)', 'A'),
(240, 'Pointers', 'Technical', 'The binary equivalent of 5.375 is', '101.101110111', '101.011', '101011', 'None of above', 'B'),
(241, 'Pointers', 'Technical', 'A float occupies 4 bytes. If the hexadecimal equivalent of these 4 bytes are A, B, C and D, then when this float is stored in memory in which of the following order do these bytes gets stored?', 'ABCD', 'DCBA', '0xABCD', 'Depends on big endian or little endian architecture', 'D'),
(242, 'Pointers', 'Technical', 'What will you do to treat the constant 3.14 as a float?', 'use float(3.14f)', 'use 3.14f', 'use f(3.14)', 'use (f)(3.14)', 'B'),
(243, 'Pointers', 'Technical', 'Which of the following statements correctly declare a function that receives a pointer to pointer to a pointer to a float and returns a pointer to a pointer to a pointer to a pointer to a float?\r\n', 'float **fun(float', 'float *fun(float**);\r\n', 'float fun(float***)', 'float ****fun(float***);', 'D'),
(244, 'OOPS', 'Technical', 'Which of the following type of class allows only one object of it to be created?', 'Virtual class', 'Abstract class', 'Singleton class', 'Friend class', 'C'),
(245, 'OOPS', 'Technical', 'Which of the following is not a type of constructor?', 'Copy constructor', 'Friend constructor', 'Default constructor', 'Parameterized constructor', 'B'),
(246, 'OOPS', 'Technical', '	\r\nWhich of the following statements is correct?', 'Base class pointer cannot point to derived class.', 'Derived class pointer cannot point to base class.', 'Pointer to derived class cannot be created', 'Pointer to base class cannot be created.\r\n', 'B'),
(247, 'OOPS', 'Technical', 'Which of the following is not the member of class?', 'Static function', 'Friend function', 'Const function', 'Virtual function', 'B'),
(248, 'OOPS', 'Technical', 'Which of the following concepts means determining at runtime what method to invoke?', 'Data hiding', 'Dynamic Typing', 'Dynamic binding', 'Dynamic loading', 'C'),
(249, 'OOPS', 'Technical', 'Which of the following term is used for a function defined inside a class?', 'Member Variable', 'Member function', 'Class function', 'Classic function', 'B'),
(250, 'OOPS', 'Technical', 'Which of the following concept of oops allows compiler to insert arguments in a function call if it is not specified?', 'Call by value', 'Call by reference', 'Default arguments', 'Call by pointer\r\n', 'C'),
(251, 'OOPS', 'Technical', '	\r\nHow many instances of an abstract class can be created?', '1', '5', '13', '0', 'D'),
(252, 'OOPS', 'Technical', 'Which of the following cannot be friend?', 'Function', 'Class', 'Object', 'Operator function', 'C'),
(253, 'OOPS', 'Technical', 'Which of the following concepts of OOPS means exposing only necessary information to client?', 'Encapsulation', 'Abstraction', 'Data hiding', 'Data binding', 'C'),
(254, 'OOPS', 'Technical', 'Why reference is not same as a pointer?', 'A reference can never be null.', 'A reference once established cannot be changed.', 'Reference doesn\'t need an explicit dereferencing mechanism.', 'All of the above.', 'D'),
(255, 'OOPS', 'Technical', 'cout is a/an __________ .', 'operator\r\n', 'function', 'object', 'macro', 'C'),
(256, 'OOPS', 'Technical', 'Which of the following concepts provides facility of using object of one class inside another class?', 'Encapsulation', 'Abstraction', 'Composition', 'Inheritance', 'C'),
(257, 'OOPS', 'Technical', 'How many types of polymorphisms are supported by C++?', '1', '2', '3', '4', 'B'),
(258, 'OOPS', 'Technical', 'Which of the following is an abstract data type?', 'int', 'double', 'string', 'Class', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `RUSER` varchar(100) NOT NULL,
  `RTEST_NAME` varchar(100) NOT NULL,
  `MARKS` int(11) NOT NULL,
  `CATEGORY` varchar(100) NOT NULL,
  `ATTEMPT` int(11) NOT NULL,
  `TAKEN` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`RUSER`, `RTEST_NAME`, `MARKS`, `CATEGORY`, `ATTEMPT`, `TAKEN`) VALUES
('jyothsnap97@gmail.com', 'CommandLine', 0, 'Technical', 1, '2019-11-13 06:56:22'),
('jyothsnap97@gmail.com', 'CommandLine', 2, 'Technical', 2, '2019-11-13 06:56:50'),
('jyothsnap97@gmail.com', 'CommandLine', 2, 'Technical', 3, '2019-11-13 06:57:35'),
('jyothsnap97@gmail.com', 'Ordering', 2, 'Aptitude', 1, '2019-11-13 06:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_ID` int(11) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PWD` varchar(225) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `GENDER` varchar(3) NOT NULL,
  `DEM` varchar(10) DEFAULT NULL,
  `MOBILE` varchar(50) DEFAULT NULL,
  `DOB` varchar(10) DEFAULT NULL,
  `ADDR` varchar(500) DEFAULT NULL,
  `ABOUT` varchar(140) DEFAULT NULL,
  `DP` varchar(500) DEFAULT 'assets/users/profile.png',
  `RESUME` varchar(500) DEFAULT 'assets/users/sample_file.docx',
  `VERIFY` varchar(15) DEFAULT NULL,
  `OTP` varchar(5) DEFAULT NULL,
  `COMPANY` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_ID`, `USERNAME`, `PWD`, `NAME`, `GENDER`, `DEM`, `MOBILE`, `DOB`, `ADDR`, `ABOUT`, `DP`, `RESUME`, `VERIFY`, `OTP`, `COMPANY`) VALUES
(1, 'abc', 'abc', 'abc', 'M', 'Student', NULL, NULL, NULL, NULL, NULL, '', 'verified', NULL, NULL),
(2, 'jyothsnap97@gmail.com', '$2y$10$sOi.273D2o5X2QPpXHGw4OsjjreZw2fIyEtO0KdNeKAct88TE00vu', 'Jyothsna P', 'f', 'student', '1234567890', '11/11/1997', 'Rajarajeshwari Nagar, Bangalore', 'Good with coding. Thank you.', 'assets/users/jyothsnap97@gmail.com/living_room.jpg', 'assets/users/jyothsnap97@gmail.com/Cauvery_A.pdf', 'yes', '19c40', NULL),
(3, 'cauveryroopa2013@gmail.com', '$2y$10$Eqs7xBAlWbTDqBQMxn2vfOvGQEAB9cUD7gBIm0okvyyor8PK/8.7C', 'Cauvery A', 'f', 'student', '6360848334', '09/12/1998', 'JP Nagar, Bangalore', 'A 4th year B.E. Computer Science and Engineering student at JSSATE, Bangalore with an interest to learn new technologies and skills. ', 'assets/users/profile.png', 'assets/users/sample_file.pdf', 'yes', '0b985', NULL),
(6, 'akshithayv@gmail.com', '$2y$10$R5Y.W1Hb1QrgBJjpGKT0A.TG/hdRbLTXgEN/NHpZmuIt3oz2zgLpq', 'Akshitha Y V', 'F', 'company', NULL, NULL, NULL, NULL, NULL, '', 'yes', '836f8', 'ABC'),
(11, 'arunbijapur@rediffmail.com', '$2y$10$f6loxhfcVwCaPij.iv2zpedfqOypTcoN0rZ7oNL8E65OgDCvXCG7W', 'Arun', 'M', 'student', NULL, NULL, NULL, NULL, 'assets/users/profile.png', 'assets/users/sample_file.docx', 'no', 'cd583', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Q_ID`,`TEST_NAME`,`COMPANY`,`STARTTIME`) USING BTREE;

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Q_ID`,`TEST_NAME`,`CATEGORY`) USING BTREE;

--
-- Indexes for table `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`RUSER`,`RTEST_NAME`,`ATTEMPT`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_ID`,`USERNAME`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD UNIQUE KEY `COMPANY` (`COMPANY`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Q_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Q_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
