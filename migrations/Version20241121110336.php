<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241121110336 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_ressource ADD event_id INT NOT NULL');
        $this->addSql('ALTER TABLE demande_ressource ADD CONSTRAINT FK_E6B3BF9171F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('CREATE INDEX IDX_E6B3BF9171F7E88B ON demande_ressource (event_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_ressource DROP FOREIGN KEY FK_E6B3BF9171F7E88B');
        $this->addSql('DROP INDEX IDX_E6B3BF9171F7E88B ON demande_ressource');
        $this->addSql('ALTER TABLE demande_ressource DROP event_id');
    }
}
