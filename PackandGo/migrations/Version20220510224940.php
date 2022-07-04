<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510224940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE guide (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, type VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE transport ADD Guide INT NOT NULL');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT FK_66AB212EB5FE831 FOREIGN KEY (Guide) REFERENCES guide (id)');
        $this->addSql('CREATE INDEX IDX_66AB212EB5FE831 ON transport (Guide)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transport DROP FOREIGN KEY FK_66AB212EB5FE831');
        $this->addSql('DROP TABLE guide');
        $this->addSql('DROP INDEX IDX_66AB212EB5FE831 ON transport');
        $this->addSql('ALTER TABLE transport DROP Guide');
    }
}
