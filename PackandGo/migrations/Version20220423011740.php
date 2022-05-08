<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220423011740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE packs ADD offre INT NOT NULL');
        $this->addSql('ALTER TABLE packs ADD CONSTRAINT FK_B9FE6027AF86866F FOREIGN KEY (offre) REFERENCES offre (id_of)');
        $this->addSql('CREATE INDEX IDX_B9FE6027AF86866F ON packs (offre)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE packs DROP FOREIGN KEY FK_B9FE6027AF86866F');
        $this->addSql('DROP INDEX IDX_B9FE6027AF86866F ON packs');
        $this->addSql('ALTER TABLE packs DROP offre');
    }
}
