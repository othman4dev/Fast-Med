CREATE DATABASE IF NOT EXISTS `pharmacie`;
use `pharmacie`;

-- Création de la table User
DROP TABLE IF EXISTS `User`;
CREATE TABLE `User` (
    `user_id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NULL,
    `email` VARCHAR(255) NULL,
    `role` ENUM('admin', 'patient_en_lign', 'patient_en_magasin') NOT NULL
) ENGINE=InnoDB ;


-- Création de la table Medicament

DROP TABLE IF EXISTS `Medicament`;
CREATE TABLE `Medicament` (
    `med_id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255),
    `quantity` INT NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL
) ENGINE=InnoDB ;

-- Création de la table Vente

DROP TABLE IF EXISTS `Vente`;
CREATE TABLE `Vente` (
    `vent_id` INT AUTO_INCREMENT PRIMARY KEY,
    `med_id` INT NOT NULL,
    `date` DATE NOT NULL,
    `user_id` INT NOT NULL,
    `type` ENUM('en_lign', 'en_magazin') NOT NULL,
    FOREIGN KEY (med_id) REFERENCES Medicament(med_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (user_id) REFERENCES User(user_id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB ;

-- Création de la table Rapport

DROP TABLE IF EXISTS `Rapport`;
CREATE TABLE `Rapport` (
    `rapport_id` INT AUTO_INCREMENT PRIMARY KEY,
    `date` DATE NOT NULL,
    `contenu` TEXT NOT NULL,
    `type` ENUM('rapport_vente', 'rapport_stock') NOT NULL
) ENGINE=InnoDB ;

DROP TABLE IF EXISTS `Bons_Vente`;
CREATE TABLE `Bons_Vente` (
    `bons_id` INT AUTO_INCREMENT PRIMARY KEY,
    `vent_id` INT,
    FOREIGN KEY (vent_id) REFERENCES Vente(vent_id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB ;