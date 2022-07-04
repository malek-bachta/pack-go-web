<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510225807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE offre (id_of INT AUTO_INCREMENT NOT NULL, nom_offre VARCHAR(30) NOT NULL, budget INT NOT NULL, PRIMARY KEY(id_of)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE packs (id_pack INT AUTO_INCREMENT NOT NULL, offre INT NOT NULL, nom_pack VARCHAR(100) NOT NULL, texte VARCHAR(500) NOT NULL, service VARCHAR(100) NOT NULL, guide VARCHAR(100) NOT NULL, destination VARCHAR(100) NOT NULL, budget_pack INT NOT NULL, INDEX IDX_B9FE6027AF86866F (offre), PRIMARY KEY(id_pack)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE packs ADD CONSTRAINT FK_B9FE6027AF86866F FOREIGN KEY (offre) REFERENCES offre (id_of)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE packs DROP FOREIGN KEY FK_B9FE6027AF86866F');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE packs');
    }
}
