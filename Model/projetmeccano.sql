DROP TABLE IF EXISTS utilisateur CASCADE;
DROP TABLE IF EXISTS produit CASCADE;
DROP TABLE IF EXISTS panier CASCADE;
DROP TABLE IF EXISTS Contenu CASCADE;

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `idPanier` int(11) NOT NULL AUTO_INCREMENT,
  `PrixTotal` double NOT NULL,
  `Valider` boolean NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idPanier`),
  KEY `idUser` (`idUser`)
);
CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `ProdName` char(50) NOT NULL,
  `Price` double NOT NULL,
  `imgProduit` text,
  `Description` char(255) NOT NULL,
  `Quantite` int NOT NULL,
  PRIMARY KEY (`idProduit`)
);
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` char(50) NOT NULL,
  `MotDePasse` text NOT NULL,
  `Mail` varchar(70) NOT NULL,
  `Image` text,
  PRIMARY KEY (`idUser`)
);
CREATE TABLE IF NOT EXISTS `Contenu`(
    `idPanier` int,
    `idProduit` int,
    `Quantite` int,
    `Prix` double,
    FOREIGN KEY (`idPanier`) REFERENCES panier(`idPanier`),
    FOREIGN KEY (`idProduit`) REFERENCES produit(`idProduit`)
);
