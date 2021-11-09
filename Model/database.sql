DROP TABLE IF EXISTS utilisateur CASCADE;
DROP TABLE IF EXISTS produit CASCADE;
DROP TABLE IF EXISTS Panier CASCADE;

CREATE TABLE utilisateur(
    idUser int auto_increment PRIMARY KEY,
    UserName char(50) NOT NULL,
    MotDePasse text NOT NULL,
    Mail varchar(70) NOT NULL
);

CREATE TABLE produit(
  idProduit int auto_increment PRIMARY KEY,
  ProdName char(50) NOT NULL,
  Price double NOT NULL,
  Description char NOT NULL
);

CREATE TABLE Panier(
    idPanier int auto_increment PRIMARY KEY,
    Quantite int NOT NULL,
    PrixTotal double NOT NULL,
    idUser int NOT NULL,
    FOREIGN KEY (idUser) REFERENCES utilisateur (idUser)
)
