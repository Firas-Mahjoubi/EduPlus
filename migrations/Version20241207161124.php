<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241207161124 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notification CHANGE status status INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CAABA54750 FOREIGN KEY (demande_ressource_id) REFERENCES demande_ressource (id)');
        $this->addSql('CREATE INDEX IDX_BF5476CAABA54750 ON notification (demande_ressource_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAABA54750');
        $this->addSql('DROP INDEX IDX_BF5476CAABA54750 ON notification');
        $this->addSql('ALTER TABLE notification CHANGE status status TINYINT(1) NOT NULL');
    }
}
