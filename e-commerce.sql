-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 déc. 2023 à 16:59
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `email`, `mp`) VALUES
(1, 'admin', 'admin@ecommerce.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `createur` int(11) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `description`, `createur`, `date_creation`, `date_modification`) VALUES
(25, 'Women', 'Shop for the latest fashion styles and trends for women at ASOS. Discover our range of women\'s clothes, accessories, beauty, activewear and more!!', NULL, NULL, NULL),
(26, 'Men', 'Discover our range of adidas men\'s clothing✓. Choose your favorite styles ✓ from our men\'s clothing collection today!!	', NULL, NULL, NULL),
(27, 'Children', 'The Okaïdi-Obaïbi collection of children\'s✓, baby and birth clothing, childcare and children\'s shoes. ✓Delivery everywhere in Morocco!!', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `total` float NOT NULL,
  `panier` int(11) NOT NULL,
  `produit` int(11) NOT NULL,
  `date_creation` date NOT NULL,
  `date_modification` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `quantite`, `total`, `panier`, `produit`, `date_creation`, `date_modification`) VALUES
(1, 9, 351, 0, 0, '2023-12-06', '2023-12-06'),
(2, 1, 39, 0, 0, '2023-12-06', '2023-12-06'),
(3, 3, 117, 0, 0, '2023-12-06', '2023-12-06'),
(4, 3, 117, 0, 0, '2023-12-06', '2023-12-06'),
(5, 2, 78, 3, 0, '2023-12-06', '2023-12-06'),
(6, 2, 78, 4, 0, '2023-12-06', '2023-12-06'),
(7, 2, 24, 5, 0, '2023-12-06', '2023-12-06');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `visiteur` int(11) NOT NULL,
  `total` float NOT NULL,
  `etat` varchar(50) NOT NULL,
  `date_creation` date NOT NULL,
  `date_modification` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `visiteur`, `total`, `etat`, `date_creation`, `date_modification`) VALUES
(1, 9, 117, '', '2023-12-06', '0000-00-00'),
(2, 9, 117, '', '2023-12-06', '0000-00-00'),
(3, 9, 78, '', '2023-12-06', '0000-00-00'),
(4, 9, 78, '', '2023-12-06', '0000-00-00'),
(5, 9, 24, '', '2023-12-06', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `categorie` int(11) DEFAULT NULL,
  `createur` int(11) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `description`, `prix`, `image`, `categorie`, `createur`, `date_creation`, `date_modification`) VALUES
(2, 'Sac', 'Partez à la conquête du monde avec les incontournables sacs femme, trouvez votre modèle de rêve sur les Galeries Lafayette ! Livraison gratuite en magasin.', 39, 'p2.jpg', NULL, NULL, NULL, NULL),
(3, 'western-shirt', 'Grand choix de t-shirts et polos pour homme sur Zalando ✓ Livraisons et retours gratuits sur la plupart des commandes* ✓ Essayez d\'abord, payez après !', 12, 'p3.png', NULL, NULL, NULL, NULL),
(4, 'undershirt', 'Part of the Essential collection, this women\'s undershirt is characterized by a V-neck cut. Cool and comfortable, the shirt is made of soft stretch cotton personalized with a contrast logo tab in back.', 76, 'c_undershirt.png', NULL, NULL, NULL, NULL),
(5, 'shirt-girl', 'Update her everyday essentials with our edit of T-shirts and tops for girls. We offer basic tank tops and cool T-shirts in various colors and prints to see her through the week. Plus, our trendy blouses are perfect for the weekend. Browse a range of styles to suit her unique personality and pair with our girls’ pants and jeans.', 90, 'c_shirt-girl.png', NULL, NULL, NULL, NULL),
(6, 'polo-shirt', 'Shop women\'s polo shirts and find everything from performance polos to classic polo shirts. Free Shipping With an RL Account & Free Returns.', 65, 'c_polo-shirt.png', NULL, NULL, NULL, NULL),
(7, 'pant_girl', 'Shop Target for Pants you will love at great low prices. Free shipping on orders of $35+ or same-day pick-up in store.', 76, 'c_pant_girl.png', NULL, NULL, NULL, NULL),
(14, 'Montre', 'Découvrez notre collection de Montres Homme , la référence horlogère au Meilleur Prix - Livraison gratuite en magasin - Retrait en 2h offert.', 28, 'top_rated_2.jpg', NULL, NULL, NULL, NULL),
(15, 'Shirt', 'Retrouvez une large collection de vestes homme sur la boutique Zalando ✓ Livraison gratuite* ✓ Satisfait ou remboursé ✓ Achat facile et rapide.', 90, 'c_t-shirt_men.png', NULL, NULL, NULL, NULL),
(16, 'Chemise', 'La chemise homme est un must-have du dressing masculin. À manches courtes ou à manches longues, elle vous satisfera, quelle que soit la saison.', 89, 'c_tunic-shirt_girl.png', NULL, NULL, NULL, NULL),
(17, 'Veste', 'Homme Vestes · Jaquette Coupe Slim Col En Fausse Fourrure · Blazer Coupe Slim Doublé · Veste Coupe Décontractée · Veste D\'Agriculture Durable Coupe Décontractée.', 56, 'best_selling_1.jpg', NULL, NULL, NULL, NULL),
(18, 'Tee-shirt', 'Le tee-shirt homme est un accessoire indispensable de la garde-robe masculine. Qu\'il soit uni, coloré ou imprimé, il est là pour affirmer votre style.', 45, 'best_selling_3.jpg', NULL, NULL, NULL, NULL),
(19, 'Robe', 'Découvrez nos robes femme pas cher qui se déclinent selon différents modèles, le jour où le soir, elles s\'adaptent à toutes les occasions !', 44, 'p1.png', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `createur` int(11) NOT NULL,
  `date_creation` date DEFAULT NULL,
  `date_modification` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id`, `produit`, `quantite`, `createur`, `date_creation`, `date_modification`) VALUES
(1, 12, 7, 0, '2023-12-05', '2023-12-06'),
(2, 13, 4, 1, '2023-12-07', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

CREATE TABLE `visiteurs` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `tele` varchar(255) DEFAULT NULL,
  `mp` varchar(255) DEFAULT NULL,
  `etat` int(11) DEFAULT 0,
  `date_creation` date DEFAULT NULL,
  `date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `visiteurs`
--

INSERT INTO `visiteurs` (`id`, `email`, `nom`, `tele`, `mp`, `etat`, `date_creation`, `date_modification`) VALUES
(24, 'maryem.sriti@usmba.ac.ma', 'mery', '0665474673', '1234', 0, NULL, NULL),
(25, 'sara.sriti@usmba.ac.ma', 'sara', '0665474673', '1234', 0, NULL, NULL),
(26, 'hiba.alaouii@usmba.ac.ma', 'hiba', '0665474673', '1256', 0, NULL, NULL),
(27, 'mery@usmba.ac.ma', 'mery', '0665474673', '1234', 1, NULL, NULL),
(28, 'alii@usmba.ac.ma', 'ali', '0665474673', '126', 0, NULL, NULL),
(29, 'hamza@usmba.ac.ma', 'hamza', '0665474673', '6363', 0, NULL, NULL),
(30, 'maryem.ti@usmba.ac.ma', 'meryam', '0665474699', '123', 0, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visiteurs`
--
ALTER TABLE `visiteurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `visiteurs`
--
ALTER TABLE `visiteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
