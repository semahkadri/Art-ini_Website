-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 22:08
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artini`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Ines', 'ines.kouki@esprit.tn', 'e10adc3949ba59abbe56e057f20f883e', 'avatar-3.jpg'),
(2, 'Semah', 'sam@esprit.tn', 'e10adc3949ba59abbe56e057f20f883e', 'avatar-2.jpg'),
(3, 'Mehdi', 'mehdi@esprit.tn', 'e10adc3949ba59abbe56e057f20f883e', 'avatar-5.jpg'),
(4, 'Ilyes', 'ilyes.nakhli@esprit.tn', 'e10adc3949ba59abbe56e057f20f883e', 'avatar-4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE `carte` (
  `Identifiant` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `Date_activation` date NOT NULL,
  `Date_expiration` date NOT NULL,
  `nbptn` int(11) NOT NULL,
  `idclient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `historique_categorie` varchar(700) NOT NULL,
  `nom_categorie` varchar(30) NOT NULL,
  `photo_categorie` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `historique_categorie`, `nom_categorie`, `photo_categorie`) VALUES
(1, 'Les plus vieux instruments à vent connus sont des flûtes fabriquées dans des os de vautour et datées de 35 000 ans pour celle d\'Isturitz au Pays Basque, et de 40 000 ans pour celle de Hohle Fels, en Allemagne ', 'les instruments à vent', 'vent.jpg'),
(2, 'Les noms des instruments de percussion apparaissent à l\'époque du moyen anglais (1150-1500) en même temps que les instruments tels les divers tambours en fût arrivent en Angleterre, comme en témoignent les représentations iconographiques de l\'époque', 'les instruments de percussion', 'percu.jpg'),
(3, 'Les premiers instruments à corde remontent à la préhistoire. Alors fabriqués à partir d\'os, ils se limitaient à deux formes fondamentales : les flûtes fabriquées avec les os longs et les sifflets fabriqués avec les os courts. La plus vieille flûte découverte à ce jour daterait de quelques 20 000 ans avant J. -C.', 'les instruments à corde', 'gtr.jpg'),
(4, 'créée par le groupe Wintergatan, combinant guitare basse, vibraphone, cymbale ainsi que des percussions émulées à l\'aide de microphones de contact, actionnée par des billes ou directement à la main. L\'énergie est fournie par le musicien via une manivelle, et stockée dans un volant d\'inertie. ', 'les instruments de combinaison', 'djembé.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `createdOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `userID`, `comment`, `createdOn`) VALUES
(6, 125, 'Merci !', '2021-05-18 20:29:53');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `desc_eve` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `directeur` varchar(30) NOT NULL,
  `prix_event` int(3) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `desc_eve`, `nom`, `directeur`, `prix_event`, `photo`) VALUES
(451, 'Saint-Louis organise chaque année le plus grand festival international de jazz du continent africain. Ce rendez-vous musical incontournable accueille chaque année des milliers de festivaliers venus des quatre coins du monde. Initié par l’association Saint-Louis Jazz, le festival international est un cadre d’expression et d’échange inédit entre les artistes et offre notamment à de jeunes musiciens sénégalais et étrangers un beau plateau pour la promotion de leurs créations.', 'Saint louis jazz festival', 'mehdi', 150, 'louis.jpg'),
(452, 'Tomorrowland est un festival de musique électronique organisé au mois de juillet sur le site du domaine provincial De Schorre à Boom, dans la province d\'Anvers, en Flandre.', 'Tomorrowland', 'semah', 200, 'tomorrow.jpg'),
(453, 'The Full Moon Party is an all-night beach party that originated in Hat Rin on the island of Ko Pha-ngan, Thailand in 1985. The party takes place on the night of, before, or after every full moon.', 'Full moon party', 'ines', 120, 'moon.jpg'),
(454, 'Le festival de Glastonbury, appelé officiellement Glastonbury Festival of Contemporary Performing Arts, est un des plus grands festivals de musique et d\'art du spectacle du monde. Le festival, se tenant en Angleterre, est largement connu pour sa musique pop', 'Glastonbury', 'salim', 170, 'mehdi.jpg'),
(455, 'Festival Republic is a UK music promoter. It was founded as Mean Fiddler Group in 1982 by Irish-born chairman John Vincent Power, as a venue-management and music-promotion group. After the group was taken over by Hamsard Ltd in 2005, the focus became more concentrated on festivals, and in 2007 the venues along with the Mean Fiddler name were sold on, with the remaining company being renamed Festival Republic. Melvin Benn is the current managing director.', 'RFLX', 'ilyes', 130, 'rfx.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `influenceur`
--

CREATE TABLE `influenceur` (
  `id` int(11) NOT NULL,
  `historique_influenceur` text NOT NULL,
  `nom_influenceur` varchar(30) NOT NULL,
  `prenom_influenceur` varchar(30) NOT NULL,
  `photo_influenceur` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `influenceur`
--

INSERT INTO `influenceur` (`id`, `historique_influenceur`, `nom_influenceur`, `prenom_influenceur`, `photo_influenceur`) VALUES
(9, 'En 2012, alors au lycée, il lance Radio Londres, qui était initialement un hashtag utilisé pour annoncer les résultats de l’élection présidentielle, puis un site internet d’actualité3.  Hugo obtient un baccalauréat économique et social avec option internationale (dite « OIB »), lui permettant notamment de passer l’épreuve d’histoire en anglais et de disposer d’un examen d’anglais d’un niveau supérieur.  Il entre à l’Institut d’études politiques de Paris en 2015, sortant diplômé en 20204,5.', 'DECRYPTE', 'HUGO', 'hugo.jpg'),
(10, 'Psychologue, Psychanalyste, Florent Gabarron-Garcia est Maître de conférences à Paris 8 au département de sciences  de l’éducation (EXPERICE) où il enseigne la psychanalyse. Florent Gabarron-Garcia est également membre de la revue  Chimères, fondée par Deleuze et Guattari.  Formé à la clinique de La Borde avec Marie Depussé et Jean Oury, Florent Gabarron-Garcia est spécialisé dans la cliniqu e de la psychose. Son travail de clinicien l’a amené à développer une perspective théorique originale en renouant sa p ratique analytique avec la théorie critique. C’est, d’une part, l’occasion d’élaborer et de problématiser les rapports  de l’inconscient au politique, ', 'Garcia', 'Florent', 'garcia.jpg'),
(12, 'Selon le site genéanet, Julien Doré n\'est pas l\'arrière-arrière-petit-neveu de l’illustrateur Gustave Doré1,2, contrairement à ce qu’il a affirmé3. Il est en revanche l\'arrière-arrière-petit-fils d\'Émile Waldteufel4.  Fils unique d\'un père vendeur sur eBay tandis que sa mère fait les colis5, il grandit à Lunel6 et à Nîmes, où il poursuit ses études secondaires au lycée Louis Feuillade et pratique le football au Gallia Club Lunel. Après un bac littéraire, il fréquente l\'École supérieure des beaux-arts de Nîmes pendant cinq ans.  En 2002, affublé du nom de Julian Goldy (pour Doré), il fonde le groupe Dig Elvis Up (Déterrez Elvis) avec Guillaume de Molina à la guitare, Céline Linsay au chant et au tambourin et son meilleur ami, Julien Francioli, à la basse. Baptiste Tiste les rejoint à la batterie un peu plus tard. Le groupe joue', 'Doré', 'Julien', 'diré.jpg'),
(13, 'Maxime Gasteuil voit le jour à Saint-Émilion. Passionné par la comédie, il s’amuse dès son enfance à faire rire toute la famille ce qui plaît beaucoup à ses grands-parents, son premier public.  Après un BTS commercial, Maxime enchaîne les petits boulots dans les vignes, travaille comme pompier et vendeur. Mais rien ne le passionne vraiment hormis la comédie. Il décide de tout quitter, son travail et sa ville natale, pour s’installer à Paris où il intègre le Cours Simon. Après quelques mois de formation, il se lance sur scène. Un soir, il est remarqué par Jamel Debbouze et son équipe qui lui proposent de rejoindre le Jamel Comedy Club.', ' GASTEUIL', 'MAXIME ', 'gaust.jpg'),
(14, 'Harry Styles, né le 1er février 1994 à Redditch (Angleterre), est un chanteur, musicien et acteur britannique.  En 2010, il auditionne en solo au concours de chant télévisé The X Factor, mais se fait éliminer. Il revient par la suite avec quatre autres participants (Niall Horan, Zayn Malik, Liam Payne et Louis Tomlinson) pour former le boys band One Direction, qui connaît un succès international.  En 2017, il lance sa carrière solo et sort son premier album : Harry Styles. La même année, il fait aussi ses débuts en tant qu\'acteur dans Dunkerque de Christopher Nolan. En décembre 2019, il sort son deuxième album, Fine Line, qui se place dans le classement des albums les plus vendus de 2020.', 'Styles', 'Harry', 'harry.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cr_date` datetime NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `cr_date`, `status`) VALUES
(5, 'Sem', 'ines.kouki@esprit.tn', '2021-05-18 12:20:22', 0);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `msg` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1555201362, 1605594170, 'bubgihy'),
(2, 1605594170, 1555201362, 'çuçyçy'),
(3, 1555201362, 1098249023, 'Salut');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_prod` int(11) NOT NULL,
  `nom_prod` varchar(50) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `prix_prod` int(11) NOT NULL,
  `img_prod` varchar(200) NOT NULL,
  `quantite` int(11) NOT NULL,
  `code_prod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `nom_prod`, `id_categorie`, `prix_prod`, `img_prod`, `quantite`, `code_prod`) VALUES
(1, 'Corde', 3, 200, 'aa.jpg', 0, ''),
(6, 'bombarde', 1, 60, 'bombarde.jpg', 0, ''),
(7, 'basson', 1, 90, 'basson.jpg', 0, ''),
(8, 'saxophone', 1, 350, 'saxophone.jpg', 0, ''),
(9, 'hautbois', 1, 39, 'hot.jpg', 0, ''),
(10, 'Caisse', 2, 170, 'caisse.jpg', 0, ''),
(11, 'bass drum', 2, 392, 'bass drum.jpg', 0, ''),
(12, 'gong', 2, 65, 'gon.jpg', 0, ''),
(13, 'timbale', 2, 30, 'timable.jpg', 0, ''),
(14, 'Baroque', 3, 652, 'baroque.jpg', 0, ''),
(15, 'banjo', 3, 820, 'bb.jpg', 0, ''),
(16, 'harpe', 3, 720, 'harpee.jpg', 0, ''),
(17, 'violon', 3, 900, 'v.jpg', 0, ''),
(18, 'claviorganum', 4, 650, 'cc.jpg', 0, ''),
(19, 'Célesta', 4, 560, 'celest.jpg', 0, ''),
(20, 'xylophone', 4, 900, 'x.jpg', 0, ''),
(21, 'piano', 4, 970, 'p.jpg', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `desc_pro` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `valeur` int(11) NOT NULL,
  `PA_Promo` int(3) NOT NULL,
  `idevent` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `desc_pro`, `nom`, `valeur`, `PA_Promo`, `idevent`) VALUES
(42, 'saint louis jazz festival promotion', 'jazz festival', 23, 115, 451),
(43, 'tomorrwland promotion', 'dj festival', 30, 160, 452),
(44, 'full moon party promotion', 'full moon festival', 30, 84, 453),
(45, 'glastonburg promotion', 'Glastonburg festival', 75, 43, 454),
(46, 'RFLX promotion', 'RFLX festival', 15, 110, 455);

-- --------------------------------------------------------

--
-- Structure de la table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `commentID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `createdOn` datetime NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `historique_sponsor` text NOT NULL,
  `nom_sponsor` varchar(30) NOT NULL,
  `photo_sponsor` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sponsor`
--

INSERT INTO `sponsor` (`id`, `historique_sponsor`, `nom_sponsor`, `photo_sponsor`) VALUES
(5, 'Jumia a été fondé en 2012 par le groupe panafricain Africa Internet Group6. Ce groupe est détenu à plus de 20% par Rocket Internet, incubateur allemand ayant lancé des start-up telles que Zalando. En novembre 2014, la startup déclare avoir levé 120 millions d’euros7, puis en mars 2016, Goldman Sachs, AXA et Orange investissent 326 millions de dollars pour continuer le développement de Jumia.  Le site permet le paiement en espèces lors de la livraison, permettant un basculement progressif vers le paiement à distance8. Au Maroc, ce type de payement atteint ainsi 15 % à la troisième commande sur le site en 20169. Au Cameroun, Jumia signe une convention de partenariat avec la Campost, l\'opérateur postal public du Cameroun qui possède un réseau de 234 bureaux de poste disséminés sur le territoire camerounais et une flotte de livraison10.', 'Jumia', 'jumia.jpg'),
(6, 'La loi portant création de l\'Office national des télécommunications, dont le nom commercial est Tunisie Télécom, est promulguée le 17 avril 1995 et entre en vigueur le 1er janvier 19963.  Tunisie Télécom met en place, exploite et commercialise le premier réseau GSM en Mauritanie (Mattel) à partir de mai 20003. Elle conclut également une convention de coopération technique avec Djibouti Télécom pour le développement de ses réseaux de télécommunications.  Devenu société anonyme de droit public fin 2002, il change de statut juridique, par un décret du 5 avril 2004, pour devenir une société anonyme dénommée « Tunisie Télécom »1. Elle connaît une privatisation partielle en juillet 2006 avec l\'entrée dans son capital, à hauteur de 35 %1, du consortium émirati EIT (Emirates International Telecommunications)4.', 'Tunisie Telecom', 'tt.jpg'),
(7, 'Le groupe Délice est un groupe tunisien de l\'industrie agroalimentaire qui opère essentiellement dans l\'industrie laitière.  C\'est en 1978 que Hamdi Meddeb fonde sa première entreprise, la Société tunisienne des industries alimentaires (STIAL), avec l\'aide du Fonds de promotion et de décentralisation industrielle1. Spécialisée dans le yaourt et les dérivés laitiers, elle devient peu à peu un leader de l\'industrie laitière en Tunisie, avec 30 % des parts de marché en 19931.  Avec la fondation de la Centrale laitière du Cap-Bon, spécialisée dans la fabrication, le conditionnement et la commercialisation du lait et de ses dérivés, et de la Société de commerce et de gestion (Socoges), chargée de la distribution, le noyau du groupe Délice est constitué1, suscitant l\'intérêt de la part', 'Délice', 'delice.jpg'),
(8, 'La société a été créée le 7 mai 1946 sous le nom de Tōkyō Tsūshin Kōgyō (東京通信工業?, TTK)4 par Masaru Ibuka, ingénieur, et Akio Morita, physicien, embauchant une vingtaine de personnes dans une société qui réparait des équipements électroniques et qui tentait de créer ses propres produits.  Le nom Sony apparaît sur les produits dès 1955, mais la compagnie change de nom seulement en janvier 1958. Il provient du latin sonus qui signifie son, et de l\'expression anglaise alors en vogue au Japon Sunny boy, qui désigne une jeune personne à l\'esprit libre et novateur.  En 1954, la société commence à se développer vraiment : à cette date, elle obtient une licence pour la fabrication de transistors, composant électronique de base par excellence. Ainsi, les premiers transistors japonais sortent des usines de Sony cette année-là, 6 ans après leur invention aux', 'Sony ', 'sony.jpg'),
(9, 'Au départ, ils fabriquent des produits chimiques bruts pour l’industrie pharmaceutique et l’industrie alimentaire. A l’époque, en cas d’infection par des vers, on utilisait couramment la santonine, un produit efficace. Mais ce vermifuge avait un goût infect.  Karl Erhart, ancien pâtissier, a alors une idée: il donne à la santonine que personne n’aime un bon goût d’amande, la forme d’un bonbon exquis, et la nouvelle « santonine » fait fureur ! Il n’en fallait pas plus pour consolider la situation financière de l’entreprise.', 'Pfizer', 'pfizer.jpg'),
(10, 'L’histoire de Pepsi-Cola se distingue par un succès phénoménal attribuable à deux facteurs essentiels : le goût unique du produit ainsi que l’innovation constante de la compagnie en matière de marketing et de publicité.  Les origines du Pepsi-Cola remontent à 1896, année où le pharmacien Caleb D. Bradham, de New Bern en Caroline du Nord, crée un mélange spécial de soda nature à base de sirop. Le nom laisse entendre qu’il soulage la dyspepsie et les ulcères d’estomac; quant au mot \" Cola \", il représente un ingrédient essentiel de la formule, soit une noix africaine appelée kola.', 'Pepsi', 'pepsi.jpg'),
(11, 'La banque joue un rôle essentiel dans l\'invasion et l\'occupation d\'Haïti par les États-Unis en 1915. Depuis 1906, le pays est dans le champ d\'application de la « diplomatie du dollar » et le département d’État fait pression en 1910-1911 sur Port-au-Prince pour assurer l\'entrée de la National City Bank dans le capital de la Banque nationale. Depuis, la National City Bank s’emploie à conquérir de l\'intérieur l\'institution tout en essayant d\'acculer les gouvernements haïtiens, endettés, à accepter le contrôle des douanes. En décembre 1914, des troupes américaines s’emparent de fonds publics', ' citybank', 'citi.jpg'),
(12, 'Notre aventure a commencé en 1958, année du lancement, par Bank of America, du premier programme de carte de crédit destiné aux particuliers des classes moyennes et aux petits et moyens commerçants des Etats-Unis. L’entreprise s’est rapidement développée, en s’implantant au niveau international en 1974 et en lançant la carte de débit en 1975. En 2007, des entreprises locales du monde entier ont fusionné pour former Visa Inc et, en 2008, l’entreprise a connu l’une des plus grosses introductions en bourse de l’histoire. En 2016, Visa a finalisé l’acquisition de Visa Europe. ', 'Visa', 'visa.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `etat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `image`, `name`, `password`, `email`, `birthday`, `adress`, `phone`, `code`, `etat`) VALUES
(125, 'ines', '141259698_3682681275119132_384325127000388152_n.jpg', 'Ines Kouki', 'e10adc3949ba59abbe56e057f20f883e', 'ines.kouki@esprit.tn', '2000-08-14', 'Ariana', 45256535, NULL, 'verifie'),
(126, 'Yassmin', 'avatar-0.jpg', 'Yassmine Kouki', 'e10adc3949ba59abbe56e057f20f883e', 'ines.kouki@esprit.tn', '2000-02-01', '', 0, NULL, ''),
(127, 'Amira', 'avatar-0.jpg', 'Amira benSalah', 'e10adc3949ba59abbe56e057f20f883e', 'ines.kouki@esprit.tn', '1999-03-01', '', 0, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `visitor`
--

CREATE TABLE `visitor` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `visitor`
--

INSERT INTO `visitor` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1605594170, 'ines', 'kouki', 'ines.kouki@esprit.tn', 'e10adc3949ba59abbe56e057f20f883e', '1621209858141259698_3682681275119132_384325127000388152_n.jpg', 'En ligne'),
(2, 1555201362, 'sem', 'sem', 'sem@esprit.tn', 'e10adc3949ba59abbe56e057f20f883e', '1621209886150895136_759214891658313_1544516413722671588_n.jpg', 'En ligne'),
(3, 1098249023, 'Ines', 'Kouki', 'ines.kouki@gmail.tn', 'e10adc3949ba59abbe56e057f20f883e', '1621366132avatar-3.jpg', 'En ligne');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`Identifiant`),
  ADD KEY `fk_carte_client` (`idclient`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_com` (`userID`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `influenceur`
--
ALTER TABLE `influenceur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `fk_prod_cat` (`id_categorie`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`idevent`);

--
-- Index pour la table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_com_rep` (`commentID`),
  ADD KEY `fk_rep_user` (`userID`);

--
-- Index pour la table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=460;

--
-- AUTO_INCREMENT pour la table `influenceur`
--
ALTER TABLE `influenceur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT pour la table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `carte`
--
ALTER TABLE `carte`
  ADD CONSTRAINT `fk_carte_client` FOREIGN KEY (`idclient`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_user_com` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_prod_cat` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `test` FOREIGN KEY (`idevent`) REFERENCES `evenement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `fk_com_rep` FOREIGN KEY (`commentID`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rep_user` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
