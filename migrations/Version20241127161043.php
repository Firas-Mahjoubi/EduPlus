<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241127161043 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE application ADD club_id INT NOT NULL, ADD status VARCHAR(50) NOT NULL, DROP statut');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC161190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('CREATE INDEX IDX_A45BDDC161190A32 ON application (club_id)');
        $this->addSql('ALTER TABLE event ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE member ADD role VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_A45BDDC161190A32');
        $this->addSql('DROP INDEX IDX_A45BDDC161190A32 ON application');
        $this->addSql('ALTER TABLE application ADD statut VARCHAR(255) NOT NULL, DROP club_id, DROP status');
        $this->addSql('ALTER TABLE event DROP image');
        $this->addSql('ALTER TABLE member DROP role');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
    }
}
