<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220421040009 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hotels ADD Service INT NOT NULL');
        $this->addSql('ALTER TABLE hotels ADD CONSTRAINT FK_E402F6252E20A34E FOREIGN KEY (Service) REFERENCES services (idS)');
        $this->addSql('CREATE INDEX IDX_E402F6252E20A34E ON hotels (Service)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hotels DROP FOREIGN KEY FK_E402F6252E20A34E');
        $this->addSql('DROP INDEX IDX_E402F6252E20A34E ON hotels');
        $this->addSql('ALTER TABLE hotels DROP Service');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
