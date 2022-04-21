<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220419001608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transport ADD guideid_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT FK_66AB212E3B87D520 FOREIGN KEY (guideid_id) REFERENCES guide (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_66AB212E3B87D520 ON transport (guideid_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transport DROP FOREIGN KEY FK_66AB212E3B87D520');
        $this->addSql('DROP INDEX UNIQ_66AB212E3B87D520 ON transport');
        $this->addSql('ALTER TABLE transport DROP guideid_id');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
