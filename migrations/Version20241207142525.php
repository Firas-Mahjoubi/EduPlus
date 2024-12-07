<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241207142525 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_APPLICATION_CANDIDAT');
        $this->addSql('DROP INDEX fk_application_candidat ON application');
        $this->addSql('CREATE INDEX IDX_A45BDDC18D0EB82 ON application (candidat_id)');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_APPLICATION_CANDIDAT FOREIGN KEY (candidat_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE event ADD has_participant_limit TINYINT(1) NOT NULL, ADD max_participants INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_A45BDDC18D0EB82');
        $this->addSql('DROP INDEX idx_a45bddc18d0eb82 ON application');
        $this->addSql('CREATE INDEX FK_APPLICATION_CANDIDAT ON application (candidat_id)');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC18D0EB82 FOREIGN KEY (candidat_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE event DROP has_participant_limit, DROP max_participants');
    }
}
