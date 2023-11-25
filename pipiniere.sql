CREATE DATABASE
IF NOT EXISTS pipiniere;

CREATE TABLE commande
(
    idCommande int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE panier
(
    idPanier int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idCommande int(11),
    FOREIGN KEY(idCommande) REFERENCES commande(idCommande)
);

CREATE TABLE utilisateur
(
    idUtilisateur int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom varchar(255) NOT NULL,
    prenom varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    mdp varchar(255) NOT NULL,
    idRole ENUM('admin', 'client') NOT NULL
);

CREATE TABLE category
(
    idCategory int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomCategory varchar (255) NOT NULL
);

CREATE TABLE plantes
(
    idPlantes int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom varchar(255) NOT NULL,
    prix varchar(255) NOT NULL,
    images varchar(255) NOT NULL,
    idCategory int (11),
    FOREIGN KEY (idCategory) REFERENCES category(idCategory)
);

INSERT INTO `plantes` (`idPlantes` , `nom` , `prix` , `images` , `idCategory`,`description`)VALUES (1,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima libero consequatur necessitatibus");
INSERT INTO `plantes` (`idPlantes` , `nom` , `prix` , `images` , `idCategory`,`description`)VALUES (2,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima libero consequatur necessitatibus");
INSERT INTO `plantes` (`idPlantes` , `nom` , `prix` , `images` , `idCategory`,`description`)VALUES (3,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima libero consequatur necessitatibus");
INSERT INTO `plantes` (`idPlantes` , `nom` , `prix` , `images` , `idCategory`,`description`)VALUES (4,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima libero consequatur necessitatibus");
INSERT INTO `plantes` (`idPlantes` , `nom` , `prix` , `images` , `idCategory`,`description`)VALUES (5,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima libero consequatur necessitatibus");
INSERT INTO `plantes` (`idPlantes` , `nom` , `prix` , `images` , `idCategory`,`description`)VALUES (6,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima libero consequatur necessitatibus");
INSERT INTO `plantes` (`idPlantes` , `nom` , `prix` , `images` , `idCategory`,`description`)VALUES (7,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima libero consequatur necessitatibus");
INSERT INTO `plantes` (`idPlantes` , `nom` , `prix` , `images` , `idCategory`,`description`)VALUES (8,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima libero consequatur necessitatibus");
INSERT INTO `plantes` (`idPlantes` , `nom` , `prix` , `images` , `idCategory`,`description`)VALUES (9,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima libero consequatur necessitatibus");

INSERT INTO category VALUES (1,'Plante à fleurs');
INSERT INTO category VALUES (2,'Plantes Potagères');
INSERT INTO category VALUES (3,'Plantes Succulentes');
