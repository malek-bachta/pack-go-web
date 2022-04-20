<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220418023716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE services ADD id_hotel INT NOT NULL');
        $this->addSql('ALTER TABLE services ADD CONSTRAINT FK_7332E169EDD61FE9 FOREIGN KEY (id_hotel) REFERENCES hotels (idh)');
        $this->addSql('CREATE INDEX IDX_7332E169EDD61FE9 ON services (id_hotel)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE services DROP FOREIGN KEY FK_7332E169EDD61FE9');
        $this->addSql('DROP INDEX IDX_7332E169EDD61FE9 ON services');
        $this->addSql('ALTER TABLE services DROP id_hotel');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
