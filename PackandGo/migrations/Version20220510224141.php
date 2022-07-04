<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510224141 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hotels (idH INT AUTO_INCREMENT NOT NULL, id_contactH INT DEFAULT NULL, nomH VARCHAR(255) NOT NULL, categorie VARCHAR(24) NOT NULL, adresse VARCHAR(34) NOT NULL, email VARCHAR(255) NOT NULL, telH INT NOT NULL, equipement VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, Service INT NOT NULL, INDEX IDX_E402F6252E20A34E (Service), PRIMARY KEY(idH)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment (id_p INT AUTO_INCREMENT NOT NULL, id_reserv INT DEFAULT NULL, type VARCHAR(255) NOT NULL, somme DOUBLE PRECISION NOT NULL, INDEX IDX_6D28840D1334897D (id_reserv), PRIMARY KEY(id_p)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rating (id INT AUTO_INCREMENT NOT NULL, hotel INT DEFAULT NULL, rate INT NOT NULL, INDEX IDX_D88926223535ED9 (hotel), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id_reclamation INT AUTO_INCREMENT NOT NULL, id_user INT DEFAULT NULL, sujet VARCHAR(255) NOT NULL, contenue VARCHAR(255) NOT NULL, dateenv DATE NOT NULL, etat VARCHAR(255) NOT NULL, INDEX id_user (id_user), PRIMARY KEY(id_reclamation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id_res INT AUTO_INCREMENT NOT NULL, id_trasp INT DEFAULT NULL, id_u INT DEFAULT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, etat_guide INT DEFAULT NULL, etat VARCHAR(255) NOT NULL, INDEX id_u (id_u), INDEX id_trasp (id_trasp), PRIMARY KEY(id_res)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservationh (idreh INT AUTO_INCREMENT NOT NULL, idhotel INT DEFAULT NULL, idu INT DEFAULT NULL, dated DATE NOT NULL, datef DATE NOT NULL, etat_service INT NOT NULL, etat VARCHAR(255) NOT NULL, INDEX idu (idu), INDEX idhotel (idhotel), PRIMARY KEY(idreh)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, id_user INT DEFAULT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748A6B3CA4B (id_user), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE services (idS INT AUTO_INCREMENT NOT NULL, formule VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, sejours VARCHAR(50) DEFAULT NULL, activite VARCHAR(50) NOT NULL, etat VARCHAR(50) NOT NULL, PRIMARY KEY(idS)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transport (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, nomagence VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, duree VARCHAR(255) NOT NULL, destination VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id_c INT AUTO_INCREMENT NOT NULL, tel_c INT NOT NULL, age_c INT NOT NULL, nom_c VARCHAR(30) NOT NULL, prenom_c VARCHAR(30) NOT NULL, mdp_c VARCHAR(255) NOT NULL, mail_c VARCHAR(30) NOT NULL, num_pass INT NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', is_active TINYINT(1) NOT NULL, PRIMARY KEY(id_c)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hotels ADD CONSTRAINT FK_E402F6252E20A34E FOREIGN KEY (Service) REFERENCES services (idS)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840D1334897D FOREIGN KEY (id_reserv) REFERENCES reservationh (idreh)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D88926223535ED9 FOREIGN KEY (hotel) REFERENCES hotels (idH)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064046B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_c)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955F8C1622B FOREIGN KEY (id_trasp) REFERENCES transport (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495535F8C041 FOREIGN KEY (id_u) REFERENCES user (id_c)');
        $this->addSql('ALTER TABLE reservationh ADD CONSTRAINT FK_8A286BD5D55632C0 FOREIGN KEY (idhotel) REFERENCES hotels (idH)');
        $this->addSql('ALTER TABLE reservationh ADD CONSTRAINT FK_8A286BD599B902AD FOREIGN KEY (idu) REFERENCES user (id_c)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748A6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_c)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D88926223535ED9');
        $this->addSql('ALTER TABLE reservationh DROP FOREIGN KEY FK_8A286BD5D55632C0');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840D1334897D');
        $this->addSql('ALTER TABLE hotels DROP FOREIGN KEY FK_E402F6252E20A34E');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955F8C1622B');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064046B3CA4B');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495535F8C041');
        $this->addSql('ALTER TABLE reservationh DROP FOREIGN KEY FK_8A286BD599B902AD');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748A6B3CA4B');
        $this->addSql('DROP TABLE hotels');
        $this->addSql('DROP TABLE payment');
        $this->addSql('DROP TABLE rating');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE reservationh');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE transport');
        $this->addSql('DROP TABLE user');
    }
}
