<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241207204638 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_ressource DROP FOREIGN KEY FK_E6B3BF9161190A32');
        $this->addSql('DROP INDEX IDX_E6B3BF9161190A32 ON demande_ressource');
        $this->addSql('ALTER TABLE demande_ressource DROP club_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_ressource ADD club_id INT NOT NULL');
        $this->addSql('ALTER TABLE demande_ressource ADD CONSTRAINT FK_E6B3BF9161190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('CREATE INDEX IDX_E6B3BF9161190A32 ON demande_ressource (club_id)');
    }
}
