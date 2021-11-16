DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `idPanier` int(11) NOT NULL AUTO_INCREMENT,
  `Quantite` int(11) NOT NULL,
  `PrixTotal` double NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idPanier`),
  KEY `idUser` (`idUser`)
);
DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `ProdName` char(50) NOT NULL,
  `Price` double NOT NULL,
  `Description` char(255) NOT NULL,
  PRIMARY KEY (`idProduit`)
);
DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` char(50) NOT NULL,
  `MotDePasse` text NOT NULL,
  `Mail` varchar(70) NOT NULL,
  PRIMARY KEY (`idUser`)
);
