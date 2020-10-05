-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2020 at 02:06 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train_your_dragon`
--

-- --------------------------------------------------------

--
-- Table structure for table `dragons`
--

DROP TABLE IF EXISTS `dragons`;
CREATE TABLE IF NOT EXISTS `dragons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dragons`
--

INSERT INTO `dragons` (`id`, `name`, `description`, `url`) VALUES
(3, 'Toothless', 'Once thought of as the \"unholy offspring of lightning and death itself\", Toothless (20 in dragon years) has proven to be much more of a giant, winged pussycat than the stuff of nightmares.\r\nPlayful, inquisitive, and intelligent, Toothless is more Hiccup\'s best friend than his pet. He is extremely protective of his Viking soul mate, and will stop at nothing to guard him from all harm. As the last known specimen of the Night Fury species, Toothless is indisputably special. He commands respect from dragons and humans alike.\r\nToothless also possesses an echolocation sense not unlike radar or sonar. When flying through dark or cramped environments, Toothless issues a plasma blast in all directions. When the plasma bounces off the nearby terrain and returns to Toothless, it gives him an incredibly accurate reading of his surroundings.', 'u3-MmqRWb2U'),
(4, 'Light Fury', 'Light Fury can turn each of her scales into tiny mirrors that reflect her surroundings, making her appear to be completely invisible. She can blend into the sky even during daylight hours, and hide seamlessly in clouds, sea fog, and distant horizons. The Light Fury relies heavily on stealth when confronted — but when push comes to shove, her firepower and strength rival Toothless\'.', 'ed9U6Eu1AWI'),
(5, 'Stormfly', 'Although she preens and grooms herself like the most fastidious of birds, Stormfly actually possesses a playful spirit.\r\nWhether it\'s winning Dragon Races with Astrid or fetching shiny objects, Stormfly is as game for a fun time as she is deadly in battle! Stormfly loves to have fun, but equally enjoys a deadly battle. She can suddenly raise the thousands of sharp spines that stud her hide and tail, and fling them with incredible accuracy. She is the perfect partner in combat.', 'o8CF4ONlaGk'),
(6, 'Meatlug', 'Meatlug is probably the sweetest, kindest, most affectionate Dragon you\'ll ever meet. She shares the curious, inquisitive nature of her Rider and best friend, Fishlegs Ingerman. Together they discover new Dragons, new plants, new potions...Meatlug even helped create her own type of reinforced metal, Gronckle Iron. Meatlug\'s gentle nature defies every belief held by Vikings before the end of the Dragon War. Just please don\'t mention the War around her — she lost family in the Arena before Berk and Dragons lived in harmony. These days, Meatlug lives among the Berkians and can often be found near the Hatchery. She gets along wonderfully with the newborn Dragons and is often as motherly with them as she is with Fishlegs. In spite of her cuddly and friendly reputation, Meatlug will challenge anyone that messes with her Berk family or innocent wild Dragons. What she and Fishlegs lack in raw power, they make up for in strategy and tactics: she\'s learned a variety of special moves such as the Gale Force Gronckle, Gas and Smash (it\'s as bad as it sounds), and the Stop, Drop, and Hover.', '4CsrGy5bS8o'),
(7, 'Hookfang', 'Hookfang and Snotlout have a... complicated relationship.\r\nWhereas most dragons obey their riders\' commands, Hookfang often enjoys doing the opposite of what Snotlout says. Snotlout and Hookfang are both warriors at heart and work very well together in combat or competition with the other dragon riders.This Monstrous Nightmare seems uniquely trained... to do the exact opposite of whatever Snotlout says! But they still make a great team.', 'J_TcHxKx6GM'),
(8, 'Skullcrusher', 'From the Rumblehorn species, Skullcrusher is part of a previously undiscovered class — Tracker Class, being that he is the bloodhound of the dragons.\r\nHe can find anything on scent, like when he found Hiccup in Valka\'s nest based only on Hiccup\'s lost helmet. Skullcrusher looks like a truffle pig mixed with a rhino, but much bigger. He has chitinous green-red iridescent coloring and surfacing of a scarab beetle and keeps his battle axe-shaped muzzle in the dirt, sniffing things out.', 'pEhcmHTMMZY'),
(9, 'Barf and Belch', 'Barf & Belch: the living example that two heads may not be better than one. Like their riders Ruffnut & Tuffnut Thorston, they are quarrelsome, silly, and far more intelligent than they let on. The twins first met Barf & Belch in a cloud of gas in the Berk Arena during training — before the Dragon War had ended. Unbeknownst to both duos, there would begin a long-lasting relationship of painful humor. Since that fateful meeting it has been nearly impossible to determine which pair is more destructive: the six-thousand pound, sixty-six foot long explosive dragon, or the five-foot-nine, blonde-haired maniacal set of twins.\r\nDespite their brutal humor, frequent pranking, and the never-ending trail of chaos, this foursome has proven essential in protecting Berk. Don\'t tell them we said so, but they are well respected and valued members of the Berk Dragon Academy. Barf & Belch have saved the day more times than the twins can count (but that\'s not saying much), and have made the Zippleback the most sought-after species among young trainers addicted to chaos and carnage.', '7N_oy_bR_Jw'),
(10, 'Cloudjumper', 'The owl-like Cloudjumper has been Valka\'s companion of choice for flying and rescuing other dragons over the last twenty years. Cloudjumper\'s pride, confidence, and large size lead him to think of himself as the top dragon in Valka\'s Mountain fortress, second only to the Bewilderbeast, who is the king of all dragons in the nest.\r\nDue to their two decades of experiences together, Cloudjumper and Valka share a wordless shorthand when flying. Whereas other dragon riders need to call out commands to turn or shoot, Cloudjumper instinctively knows when Valka wants him to move or attack, adding to their combined mystic and prowess in battle.\r\nLike all Stormcutters, Cloudjumper features a second set of hidden wings. When all four wings are deployed in an X-formation, there is no dragon in the sky more maneuverable and precise than Cloudjumper.\r\nWhile fearsome looking at first glance, Cloudjumper\'s fore-talons can actually be quite nimble and delicate when the occasion calls for skill over savagery. These sharp, hooked pincers at the tips of Cloudjumper\'s wings are dexterous enough to gingerly pick the lock of a dragon trap -- or strong enough to tear apart one of Drago\'s War machines!', 'nO5ITL9giaY'),
(11, 'Grump', 'Gobber the Belch discovered Grump while disguised as Snotlout\'s valet during an undercover mission to Viggo Grimborn\'s Dragon Hunter camp. The \'Lazy Beast\' bore the ridicule of everyone in the camp, who believed that Grump was not worthy of any task more complicated than eating garbage. Gobber looked hard at the beast and found love. Without a doubt, Grump is the single laziest Dragon to ever grace the Barbaric Archipelago. The only thing separating him from the decorative Dragon busts on Viking homes is the fact that he works with Gobber in the blacksmith forge. From time to time, he will wake from one of his many naps to clear away rocks from Gobber\'s workplace or bring the forge to temperature. Grump is so lazy that he, at times, has fallen asleep mid-flight.', 'FOY73UhHYYI'),
(13, 'Ivan Dragon', 'Dragon description', 'some random url');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `items_category_id` int(11) NOT NULL,
  `link` text,
  `dragon_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `url`, `items_category_id`, `link`, `dragon_id`) VALUES
(1, 'Gronckle dragon video', 'This Boulder Class Dragon is not built for speed, but it can fly like a hummingbird. A giant, stubborn hummingbird that shoots lava rocks!\r\n', 'v8gx_FjJaWM', 1, NULL, 1),
(10, 'Freeing The Night Fury Scene', 'How to Train Your Dragon - Freeing The Night Fury: After taking down a Night Fury, instead of killing it, Hiccup (Jay Baruchel) frees the dragon from his trap.', 'c95YKkIbTGg', 1, NULL, 3),
(11, 'How to Train Your Dragon (2010) - Dinner With A Dragon Scene', 'How to Train Your Dragon - Dinner With A Dragon: Hiccup (Jay Baruchel) and Toothless begin to bond over a shared meal of raw fish.', 'Vv9KJYUnVvA', 1, NULL, 3),
(12, 'Toothless & Night Lights Christmas Holiday Special', 'It\'s been ten years since the dragons moved to the Hidden World, and even though Toothless doesn\'t live in New Berk anymore, Hiccup continues the holiday traditions he once shared with his best friend. But the Vikings of New Berk were beginning to forget about their friendship with dragons. Hiccup, Astrid, and Gobber know just what to do to keep the dragons in the villagers\' hearts. And across the sea, the dragons have a plan of their own.', 'qIbz9VGGT70', 1, NULL, 3),
(13, 'The Hidden World Toothless Meets The Light Fury', 'Those sparkles you see on the Light Fury weren\'t glitters, they\'re small scales, the fact that she\'s got these white small scales reflects on light making it look like they\'re sparkling. These small, white scales are what enables her to cloak herself with \'invisibility\'. This is why she looks so smooth compared to other dragons. Her scales are so tiny. ', 'OmVk_x40UGc', 1, NULL, 4),
(14, 'The Hidden World - Light Fury Screen Time ', 'Httyd 3 The Hidden World - Light Fury Screen Time (Pt. 1)', 'RwIHCABpJkA', 1, NULL, 4),
(15, 'How to Train Your Dragon 3 - Protecting Toothless | Fandango Family', 'How to Train Your Dragon 3 - Protecting Toothless: Toothless and Hiccup (Jay Baruchel) battle Grimmel (F. Murray Abraham).', '7qkSn8bcwFI', 1, NULL, 4),
(16, 'Stormfly Tribute', 'So I decide to make a tribute on s\r\nStormfly the Deadly Nadder from how to train your dragon', 'o8CF4ONlaGk', 1, NULL, 5),
(17, 'Stormfly and Hookfang Take a Hint ', 'Dragons: Race To The Edge \r\nDragons: Eye Of The Beholder part (1) Season number: 1 Episode number: 1 ', 'b7kA6NMnAMU', 1, NULL, 5),
(18, 'Httyd | Stormfly and Red death tribute', 'All footage from DreamWorks: How to train your dragon (2)', '98JVQ5eeI08', 1, NULL, 5),
(19, 'Meatlug tribute Riders of Berk ', 'Song: Feel The Light', 'AFpivUJPw0Y', 1, NULL, 6),
(20, 'Meatlug sounds', 'Movies:  How to Train Your Dragon 2, How To Train Your Dragon\r\nShort Flims: Dragons: Gift of the Night Fury\r\nDreamWorks Dragons Episodes: \r\nRiders Of Berk\r\nIn Dragons We Trust Season 1 Episode 5\r\nAnimal House season 1 episode 3\r\nRace To The Edge\r\nImperfect Harmony Season 3 Episode 3 \r\nBig Man on Berk Season 3 Episode 5 \r\nHave Dragon Will Travel, Part 1 Season 3 Episode 10 \r\nQuake, Rattle and Roll season 3 episode 9\r\nThe Next Big Sting Season 3 Episode 12', '4CsrGy5bS8o', 1, '', 6),
(21, 'CBBC: Dragons Defenders of Berk - Magnet Dragon!', 'It looks like Meatlug has swallowed a magnet, but can this be used to their advantage? Check out this cool clip from Dragons - Defenders of Berk!', 'BzFhrj8E__Y', 1, NULL, 6),
(22, 'Snotlout/Hookfang', 'Birthday fanvid for my friend Sarah, hope you\'ll like it :)', 'jw5bd58jnzI', 1, NULL, 7),
(23, 'How to Train Your Dragon (2010) - Hiccup\'s Final Test Scene', 'How to Train Your Dragon - Hiccup\'s Final Test: After things go awry during Hiccup\'s (Jay Baruchel) final dragon killing test, Toothless tries to save him but gets captured by Stoick (Gerard Butler).', 'aFnS18LM8Ws', 1, NULL, 7),
(24, 'Hookfang tribute Race To The Edge Part (1) ', 'Song: I\'ll Make a Man Out Of You\r\nMovie: Dragons: Race to the Edge', 'N5LcLlpY5ak', 1, NULL, 7),
(25, 'DREAMWORKS How To Train Your Dragon 2 ENDING', 'DREAMWORKS How To Train Your Dragon 2 ENDING', 'f_UTH_EWGS4', 1, NULL, 8),
(26, 'How to Train Your Dragon 2 | Dragons and Riders | Official HD Featurette', 'The thrilling second chapter of the epic HOW TO TRAIN YOUR DRAGON trilogy brings us back to the fantastical world of Hiccup and Toothless five years after the two have successfully united dragons and vikings on the island of Berk.', 'A8EULOwr9CI', 1, NULL, 8),
(27, 'Skull Crusher tribute', 'Song: Stronger\r\nMovie: How to Train Your Dragon 2', 'aExYtCW7T9A', 1, NULL, 8),
(28, 'Barf and Belch tribute Race To The Edge ', 'Song: Set The Fire To The Rain\r\nMovie: Dragons: Race to the Edge', 'l-hKLhO65zU', 1, NULL, 9),
(29, 'DreamWorks Dragons: Defenders of Berk - Zippleback Down (Preview) ', 'While searching for traps, Tuffnut, Barf and Belch get trapped themselves.', 'LkGohM9Nz5I', 1, NULL, 9),
(30, 'Hideous Zippleback Tribute ', 'Song: Blow', 'ZZ96O5kur_w', 1, NULL, 9),
(31, 'The BADASS Dragon | Cloudjumper/Jumper', 'I really love Cloudjumper, I find him as intriguing as Toothless, because like night fury, he seems to be the only one of his kind. In short I love it so here is a video for this dragon BADASS!', 'nO5ITL9giaY', 1, NULL, 10),
(32, 'Cloudjumper POV How to train your dragon', 'Here is what might have gone on in the mind of the Cloudjumper dragon during the events of the How to Train Your dragon series. ', 'mg5-OKjJ2hw', 1, NULL, 10),
(33, 'How To Train Your Dragon 2 - Hiccup meets the dragon thief (Valka)', 'Scene from HTTYD2!', 'k1aIzVSs0no', 1, NULL, 10),
(34, 'DREAMWORKS ', 'How To Train Your Dragon 2 ENDING', 'f_UTH_EWGS4', 1, NULL, 11),
(35, 'Grump,Meatlug, and Screaming death', 'How to train your dragon ep 1 Grump,Meatlug, and Screaming death', 'A1ydAEDcTrg', 1, NULL, 11),
(36, 'Draw Grump ', 'How to draw Grump from How to Train Your Dragon 2', 'xf2Epz_tblI', 1, NULL, 11),
(37, 'How to train your Dragon\r\n', 'just a little drawing.\r\n\r\nDA full of toothless, so here\'s another cute dragon. I just could not miss this theme 8-)\r\n\r\nTools: Wacom Volito2, Photoshop CS3', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/b334bc16-b49c-4edb-8b92-7e4a69e02b42/d2vnkxb-8572ce6a-f9f6-4dc5-b7c7-cea7a5cb9a46.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvYjMzNGJjMTYtYjQ5Yy00ZWRiLThiOTItN2U0YTY5ZTAyYjQyXC9kMnZua3hiLTg1NzJjZTZhLWY5ZjYtNGRjNS1iN2M3LWNlYTdhNWNiOWE0Ni5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.PFC2utiFAGyF-jwo3NigCJPTeS5zPyuBPxVuly4D6wc', 3, 'https://www.deviantart.com/mar-ka/art/How-to-train-your-Dragon-174100655\r\n\r\n', NULL),
(38, 'Toothless\r\n', 'I saw the movie two weeks ago and I really loved how they made and animated the dragons. They where a lot more animal like then alot of people draw them, The really looked realistic in the movie.\r\n\r\nAnyway, I loved Toothless ofcourse! A super adorable draggy.\r\n\r\nThis took me about 10 hours.', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e03ace9c-7615-45de-8ffe-a4f775cd3561/d2pnszv-f379d53b-182d-4c33-8378-836f610ed3c5.jpg/v1/fill/w_900,h_635,q_75,strp/toothless_by_ruth_tay_d2pnszv-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD02MzUiLCJwYXRoIjoiXC9mXC9lMDNhY2U5Yy03NjE1LTQ1ZGUtOGZmZS1hNGY3NzVjZDM1NjFcL2QycG5zenYtZjM3OWQ1M2ItMTgyZC00YzMzLTgzNzgtODM2ZjYxMGVkM2M1LmpwZyIsIndpZHRoIjoiPD05MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.8W-iWOo_lsY3n2642ldTOkYpmgoDed79g8CgeGwF1HE', 3, 'https://www.deviantart.com/ruth-tay/art/Toothless-164033419\r\n\r\n', NULL),
(39, 'HTTYD: Daunting Chase\r\n\r\n', 'Urrgh, this took me the longest time--about 3 weeks of working on it on and off and then switching to a new computer so that I could continue coloring this in SAI. I\'ve been trying to improve on my coloring, so you\'ll probably notice a slight shift in coloring techniques from left to right. XD', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e1a14e7a-d59c-464c-aba1-8f8e110da11c/d2p3e3j-e07bcd42-3b63-4e71-88e5-3590e2f3fbbc.jpg/v1/fill/w_1095,h_730,q_70,strp/httyd__daunting_chase_by_tribute27_d2p3e3j-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD04MDAiLCJwYXRoIjoiXC9mXC9lMWExNGU3YS1kNTljLTQ2NGMtYWJhMS04ZjhlMTEwZGExMWNcL2QycDNlM2otZTA3YmNkNDItM2I2My00ZTcxLTg4ZTUtMzU5MGUyZjNmYmJjLmpwZyIsIndpZHRoIjoiPD0xMjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.5qzOMHaSTkrsyV7sJF5aznjhQHBsyl6JXlan8e1vOmk', 3, 'https://www.deviantart.com/tribute27/art/HTTYD-Daunting-Chase-163080991\r\n\r\n', NULL),
(40, 'Stitch and Toothless', 'Stitch and Toothless having a jammy jam :D\r\n\r\nMy favorite characters by the amazing alohalilo \r\n\r\nCreated with Adobe Photoshop.', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/d125df43-37f9-4450-a601-50d3aa7fa501/d7i57wg-4f678d07-8f17-4fcd-9489-7d65ae66b69c.png/v1/fill/w_1095,h_730,q_70,strp/stitch_and_toothless_by_tsaoshin_d7i57wg-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD04NTQiLCJwYXRoIjoiXC9mXC9kMTI1ZGY0My0zN2Y5LTQ0NTAtYTYwMS01MGQzYWE3ZmE1MDFcL2Q3aTU3d2ctNGY2NzhkMDctOGYxNy00ZmNkLTk0ODktN2Q2NWFlNjZiNjljLnBuZyIsIndpZHRoIjoiPD0xMjgwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.FOnrpJ3sHU_HtOvMZc2w_jkgTw2wrf01pl_8QUecw4I', 3, 'https://www.deviantart.com/tsaoshin/art/Stitch-and-Toothless-453739840\r\n\r\n', NULL),
(41, 'HTTYD - Fishing Lessons\r\n\r\n', 'I originally only meant to speed paint some clouds or something but then my clouds looked more like waves so I turned it into the ocean! And then I thought to myself, \"Self, wouldn\'t it be cool to add fish?\" And I agreed. It would be cool. And it was.\r\n\r\nPainted in Photoshop using textures from cgtextures.com\r\nHiccup and Toothless from How to Train Your Dragon belong to Dreamworks.', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/a47d8c6b-2d34-486e-ac44-7387a7818eab/d2nq3t2-7474ce57-b7eb-465c-b3ce-28e0fc888e45.jpg/v1/fill/w_900,h_960,q_75,strp/httyd___fishing_lessons_by_amandaturnage_d2nq3t2-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD05NjAiLCJwYXRoIjoiXC9mXC9hNDdkOGM2Yi0yZDM0LTQ4NmUtYWM0NC03Mzg3YTc4MThlYWJcL2QybnEzdDItNzQ3NGNlNTctYjdlYi00NjVjLWIzY2UtMjhlMGZjODg4ZTQ1LmpwZyIsIndpZHRoIjoiPD05MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.IdZegdi2i00n8SNyAq5EMVU1_v-1aiWllcE241C-C5I', 3, 'https://www.deviantart.com/amandaturnage/art/HTTYD-Fishing-Lessons-160781510\r\n\r\n', NULL),
(42, 'Hiccup and Toothless\r\n', 'Finally,I finish this picture,it\'s one of my favourite part in the movie!\r\nBest wishes to hiccup and toothless!:love:\r\nDrew in Corel Painter~', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f50d2ea8-abdb-43eb-80ba-0ccd9aedbd59/d42b4xr-4f7575df-815a-43c1-8ddc-e9bf452b125e.jpg/v1/fill/w_1340,h_596,q_70,strp/hiccup_and_toothless_by_hawkeyewong_d42b4xr-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD03MTIiLCJwYXRoIjoiXC9mXC9mNTBkMmVhOC1hYmRiLTQzZWItODBiYS0wY2NkOWFlZGJkNTlcL2Q0MmI0eHItNGY3NTc1ZGYtODE1YS00M2MxLThkZGMtZTliZjQ1MmIxMjVlLmpwZyIsIndpZHRoIjoiPD0xNjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.npHXRSNUtUyO_iaYmC-SKB4fWNJGIDhS4KaLbcTPDD0', 3, 'https://www.deviantart.com/hawkeyewong/art/Hiccup-and-Toothless-245743551\r\n', NULL),
(43, 'we have...dragons...\r\n', 'I\'m just in love this awesome movie \"how to train your dragon\" best dreamworks anim movie ever for me.\r\nHere is my tribute to it , you know i\'m a 3D animator and that would be so incredible if i get a chance to be a part of such an epic movie ;P\r\nHope you \'ll like it ^^\r\nSai paint tool and toshop', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/4f67cc5b-9167-4f6f-aeb8-58ce49a96146/d30x8hv-f0f789f3-b8bc-44ee-b0f7-fc2d9760f485.jpg/v1/fill/w_1074,h_744,q_70,strp/we_have___dragons____by_lehuss_d30x8hv-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD03NjIiLCJwYXRoIjoiXC9mXC80ZjY3Y2M1Yi05MTY3LTRmNmYtYWViOC01OGNlNDlhOTYxNDZcL2QzMHg4aHYtZjBmNzg5ZjMtYjhiYy00NGVlLWIwZjctZmMyZDk3NjBmNDg1LmpwZyIsIndpZHRoIjoiPD0xMTAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.gVZmoY_NtESECp5LbWMEFwb1-8S1XQv6R862SODXyds', 3, 'https://www.deviantart.com/lehuss/art/we-have-dragons-182949187\r\n', NULL),
(44, 'HTTYD: Dragon\'s Dinner Party\r\n', 'Hiccup hosts a dinner party for Toothless and friends!\r\n\r\nFinally managed to finish this drawing after some serious Skyrim addiction -_-\' Hope you enjoy!\r\n\r\nDownload for embiggened view/wallpaper!\r\n\r\nHow to Train Your Dragon, Hiccup, Toothless, etc are © Dreamworks.\r\n\r\nCreated with Adobe Photoshop CS4.', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/d125df43-37f9-4450-a601-50d3aa7fa501/d4oa3xk-d47941c5-4a1e-4035-9052-07c6b87d1666.jpg/v1/fill/w_1111,h_719,q_70,strp/httyd__dragon_s_dinner_party_by_tsaoshin_d4oa3xk-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD04MjkiLCJwYXRoIjoiXC9mXC9kMTI1ZGY0My0zN2Y5LTQ0NTAtYTYwMS01MGQzYWE3ZmE1MDFcL2Q0b2EzeGstZDQ3OTQxYzUtNGExZS00MDM1LTkwNTItMDdjNmI4N2QxNjY2LmpwZyIsIndpZHRoIjoiPD0xMjgwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.0h-wyb97dLzf3EfatfQHRBJEekpWbGEdmcnGLvbOhow\r\n\r\n', 3, 'https://www.deviantart.com/tsaoshin/art/HTTYD-Dragon-s-Dinner-Party-282647144', NULL),
(45, 'Toothless nap', 'Lol yes i loved that movie too, a lot. :heart:\r\n', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/099885d7-ace4-4f8b-91a2-d5378e6d308d/d2v0si8-090b3cb9-0ec5-4a6d-9ebf-aa41e3b9e1d8.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMDk5ODg1ZDctYWNlNC00ZjhiLTkxYTItZDUzNzhlNmQzMDhkXC9kMnYwc2k4LTA5MGIzY2I5LTBlYzUtNGE2ZC05ZWJmLWFhNDFlM2I5ZTFkOC5qcGcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.3zbeDv2hoNgV9V_-oJDUObAJLtcnsOayREF7ZOEIj8w\r\n\r\n', 3, 'https://www.deviantart.com/cosmicspectrumm/art/Toothless-nap-173037392', NULL),
(46, 'Big mammy\r\n', 'Fan art to \"How to train Your dragon\" :) Big dragon attack! :D', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/d12d925d-64d4-4e1e-85cc-03c55b1505a1/d2nkkda-8d4c1f7b-ea45-45fd-a9a0-4b57d13a8f01.jpg/v1/fill/w_900,h_545,q_75,strp/big_mammy_by_nalavara_d2nkkda-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD01NDUiLCJwYXRoIjoiXC9mXC9kMTJkOTI1ZC02NGQ0LTRlMWUtODVjYy0wM2M1NWIxNTA1YTFcL2QybmtrZGEtOGQ0YzFmN2ItZWE0NS00NWZkLWE5YTAtNGI1N2QxM2E4ZjAxLmpwZyIsIndpZHRoIjoiPD05MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.q_Cmi7x48qGq-2S24JDjKhqR8slJllVHW4pXQlPZ9ug', 3, 'https://www.deviantart.com/nalavara/art/Big-mammy-160523038\r\n\r\n', NULL),
(57, 'School of Dragons', 'Fly fast, train hard, and learn well to become the Ultimate Dragon Trainer! Join Chief Hiccup and Toothless and embark on the thrilling adventures of DreamWorks Animation’s ‘How to Train Your Dragon’.\r\nPlay with your friends and explore mysterious worlds in this action-packed learning experience! Rescue, hatch, and train Dreamworks Dragons, defend New Berk and the Hidden World, and battle Grimmel and Stormheart in the ultimate dragon adventure!\r\n\r\nReached No. 1 of ALL ROLE-PLAYING GAMES in 80 countries\r\n', 'https://steamcdn-a.akamaihd.net/steam/apps/256743582/movie480.webm?t=1550755741', 2, 'https://store.steampowered.com/app/332070/School_of_Dragons/', NULL),
(58, 'Dragons: Rise of Berk', 'Build your OWN Berk! Rescue, hatch, and train your favorite DreamWorks Dragons! Explore uncharted lands in a vast Viking world!\r\nJoin Hiccup, Toothless and the gang to protect your village from the mysterious strangers that threaten peace on Berk. Who are they? And, what do they want from your harmonious homeland? Train your DreamWorks Dragons successfully and they’ll reveal new powers that will help to ensure the future of your island.\r\nRemember . . . it takes a village . . . and DRAGONS!', 'vapxO8cvKi0', 2, 'https://howtotrainyourdragon.fandom.com/wiki/Dragons:_Rise_of_Berk', NULL),
(59, 'Dragons: Titan Uprising', 'Become a legendary puzzle champion as you swipe, match, battle and blast your way through lands, in a quest to save Berk from the nefarious Dragonroot Company. Join Hiccup and Toothless as you discover, breed and collect legendary dragons in the newest HTTYD puzzle RPG game on mobile!', '0yi5yc26P94', 2, 'https://howtotrainyourdragon.fandom.com/wiki/Dragons:_Titan_Uprising', NULL),
(60, 'Dreamworks Dragons: Dawn of New Riders', 'Epic dragon adventure awaits — with a new dragon duo!\r\nA new heroic dragon and rider are taking to the skies and only you can help them defeat the evil villains who destroyed a dragon sanctuary created by Hiccup, Toothless, and his Dragon Riders.\r\nWhen the island of Havenholme is found in ruins, mysterious survivors emerge as unlikely future heroes. Scribbler is a scholar who cannot remember his past while Patch is a unique breed of dragon, a \"Chimeragon\", with new, unexpected powers they discover along the way. Together they must explore new islands, battle fierce enemies and recover the memories that reveal Patch\'s true origin in this fun and fiery new action adventure.', '5ozg4b8hnoY', 2, 'https://howtotrainyourdragon.fandom.com/wiki/Dreamworks_Dragons:_Dawn_of_New_Riders', NULL),
(61, 'DreamWorks Dragons: Wild Skies', 'Think you\'ve got what it takes to be a rider of Berk? Put your skills to the test and blaze your own path as a dragon trainer. Explore the island, train wild dragons, and take flight in awesome aerial challenges! Ride the dragons you love from the movies: Gronckle, Deadly Nadder, Monstrous Nightmare, Hideous Zippleback, and Night Fury! Plus, watch for new dragon species from the series. Every time a new dragon appears in the show, you\'ll be able to train it in the game!\r\n\r\n', '-xB9wSpE3TY', 2, 'https://howtotrainyourdragon.fandom.com/wiki/DreamWorks_Dragons:_Wild_Skies', NULL),
(62, 'How to Train Your Dragon (game)', 'The game follows either Hiccup or Astrid and their choice of dragon. The game is mainly a fighting game, much like Street Fighter but also diverts into mini games on the side and offers the player the option to customize and build their dragon to what ever they desire. The player will compete in several tournaments of increasing difficulty, making the training aspects of the game vital to the players progression. When not fighting in tournaments, the player will find themselves in a more adventure style game, completing quests in order to obtain items to feed to their dragon. The game also offers a split screen multiplayer mode, unrelated to the single player campaign, although players can use custom dragons created in the story mode.', 'dMUyJjGYWDU', 2, 'https://howtotrainyourdragon.fandom.com/wiki/How_to_Train_Your_Dragon_(game)', NULL),
(63, 'Dragon Pets', 'Raise and train your favourite dragons from How to Train Your Dragon: The Hidden World.\r\n\r\n', 'NCQ2bcX3qHg', 2, 'https://howtotrainyourdragon.fandom.com/wiki/Dragon_Pets', NULL),
(64, 'How to Train Your Dragon 2 (game)', 'Take to the skies and return to the fantastical Viking Isle of Berk. Hiccup, Astrid, Snotlout, Fishlegs, Tuffnut & Ruffnut and their Dragons are now competing in fierce and competetive tournaments to determine the ultimate Dragon Rider. Choose your Dragon Racer, soar through clouds, and explore new unmapped territories. Discover hidden locations, unlock mysterious Dragon Riders, and join in epic races across the beautiful yet treacherous Island of Berk. Features: Choose your Rider and Dragon to train and compete in races and tournaments Challenge a friend to claim the title of Best Dragon Rider Explore the mysterious Island of Berk to discover hidden quests.', 'jx7hvr59XRM', 2, 'https://howtotrainyourdragon.fandom.com/wiki/How_to_Train_Your_Dragon_2_(game)', NULL),
(65, 'Dragon Training Academy', 'Dragon Training Academy was an online game based on Dragons: Riders of Berk.', '957LVdr6Hto', 2, 'https://howtotrainyourdragon.fandom.com/wiki/Dragon_Training_Academy', NULL),
(67, 'School of Dragons', 'Fly fast, train hard, and learn well to become the Ultimate Dragon Trainer! Join Chief Hiccup and Toothless and embark on the thrilling adventures of DreamWorks Animation’s ‘How to Train Your Dragon’.\r\nPlay with your friends and explore mysterious worlds in this action-packed learning experience! Rescue, hatch, and train Dreamworks Dragons, defend New Berk and the Hidden World, and battle Grimmel and Stormheart in the ultimate dragon adventure!\r\n\r\nReached No. 1 of ALL ROLE-PLAYING GAMES in 80 countries\r\n', 'https://steamcdn-a.akamaihd.net/steam/apps/256743582/movie480.webm?t=1550755741', 2, 'https://store.steampowered.com/app/332070/School_of_Dragons/', NULL),
(68, 'Dragons: Rise of Berk', 'Build your OWN Berk! Rescue, hatch, and train your favorite DreamWorks Dragons! Explore uncharted lands in a vast Viking world!\r\nJoin Hiccup, Toothless and the gang to protect your village from the mysterious strangers that threaten peace on Berk. Who are they? And, what do they want from your harmonious homeland? Train your DreamWorks Dragons successfully and they’ll reveal new powers that will help to ensure the future of your island.\r\nRemember . . . it takes a village . . . and DRAGONS!', 'vapxO8cvKi0', 2, 'https://howtotrainyourdragon.fandom.com/wiki/Dragons:_Rise_of_Berk', NULL),
(69, 'Dragons: Titan Uprising', 'Become a legendary puzzle champion as you swipe, match, battle and blast your way through lands, in a quest to save Berk from the nefarious Dragonroot Company. Join Hiccup and Toothless as you discover, breed and collect legendary dragons in the newest HTTYD puzzle RPG game on mobile!', '0yi5yc26P94', 2, 'https://howtotrainyourdragon.fandom.com/wiki/Dragons:_Titan_Uprising', NULL),
(70, 'Dreamworks Dragons: Dawn of New Riders', 'Epic dragon adventure awaits — with a new dragon duo!\r\nA new heroic dragon and rider are taking to the skies and only you can help them defeat the evil villains who destroyed a dragon sanctuary created by Hiccup, Toothless, and his Dragon Riders.\r\nWhen the island of Havenholme is found in ruins, mysterious survivors emerge as unlikely future heroes. Scribbler is a scholar who cannot remember his past while Patch is a unique breed of dragon, a \"Chimeragon\", with new, unexpected powers they discover along the way. Together they must explore new islands, battle fierce enemies and recover the memories that reveal Patch\'s true origin in this fun and fiery new action adventure.', '5ozg4b8hnoY', 2, 'https://howtotrainyourdragon.fandom.com/wiki/Dreamworks_Dragons:_Dawn_of_New_Riders', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items_category`
--

DROP TABLE IF EXISTS `items_category`;
CREATE TABLE IF NOT EXISTS `items_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_category`
--

INSERT INTO `items_category` (`id`, `name`) VALUES
(1, 'Video'),
(2, 'Game'),
(3, 'Drawing');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `date_inserted` datetime NOT NULL,
  `rating` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `description`, `date_inserted`, `rating`, `user_id`, `item_id`) VALUES
(1, 'My review', 'This is the best game ever', '2020-06-07 18:33:59', 1, 4, 62),
(2, 'One more review', 'Test review', '2020-06-07 18:34:41', 3, 4, 62),
(3, 'Thirt review', 'Third review hello', '2020-06-07 18:34:56', 4, 8, 62),
(4, 'review title 1', 'review description 1', '2020-06-09 10:51:51', 3, 8, 1),
(5, 'review title 2', 'review description 2', '2020-06-08 10:52:13', 3, 8, 10),
(6, 'review title 3', 'review description 3', '2020-06-10 10:52:49', 5, 8, 10),
(7, 'review title 4', 'review description 4', '2020-06-08 10:52:59', 4, 4, 10),
(8, 'review title 5', 'review description 5', '2020-06-08 10:53:10', 4, 4, 11),
(9, 'review title 6', 'review description 6', '2020-06-07 10:53:20', 5, 4, 11),
(10, 'review title 7', 'review description 7', '2020-06-07 10:53:30', 3, 9, 11),
(11, 'review title 8', 'review description 8', '2020-06-08 10:54:56', 5, 9, 12),
(12, 'review title 9', 'review description 9', '2020-06-08 10:55:00', 4, 9, 12),
(13, 'review title 10', 'review description 10', '2020-06-10 10:55:03', 3, 9, 12),
(14, 'review title 1', 'review description 1', '2020-06-09 10:55:07', 3, 8, 1),
(15, 'review title 2', 'review description 2', '2020-06-09 10:55:10', 3, 8, 13),
(16, 'review title 3', 'review description 3', '2020-06-09 10:55:13', 5, 8, 13),
(17, 'review title 4', 'review description 4', '2020-06-06 10:55:16', 4, 4, 13),
(18, 'review title 5', 'review description 5', '2020-06-11 10:55:19', 4, 4, 14),
(19, 'review title 6', 'review description 6', '2020-06-11 10:55:23', 5, 4, 14),
(20, 'review title 7', 'review description 7', '2020-06-09 10:55:26', 3, 9, 14),
(21, 'review title 8', 'review description 8', '2020-06-08 10:55:30', 5, 9, 15),
(22, 'review title 9', 'review description 9', '2020-06-10 10:55:34', 4, 9, 15),
(23, 'review title 10', 'review description 10', '2020-06-11 10:55:38', 3, 9, 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `registration_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `registration_time`) VALUES
(8, 'john@ivan.com', '202cb962ac59075b964b07152d234b70', '2020-06-07 17:52:06'),
(4, 'ivan@ivan.com', '202cb962ac59075b964b07152d234b70', '2020-06-07 17:43:54'),
(9, 'natasha@gmail.com', '112233', '2020-06-08 18:58:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
