<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241207202203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ressources (id INT AUTO_INCREMENT NOT NULL, club_id INT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, est_reserve TINYINT(1) NOT NULL, INDEX IDX_6A2CD5C761190A32 (club_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ressources ADD CONSTRAINT FK_6A2CD5C761190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('ALTER TABLE application ADD candidat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC18D0EB82 FOREIGN KEY (candidat_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A45BDDC18D0EB82 ON application (candidat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ressources DROP FOREIGN KEY FK_6A2CD5C761190A32');
        $this->addSql('DROP TABLE ressources');
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_A45BDDC18D0EB82');
        $this->addSql('DROP INDEX IDX_A45BDDC18D0EB82 ON application');
        $this->addSql('ALTER TABLE application DROP candidat_id');
    }
}
