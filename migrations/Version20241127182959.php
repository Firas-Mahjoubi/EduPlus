<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241127182959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE demande_ressource (id INT AUTO_INCREMENT NOT NULL, ressource_id INT NOT NULL, evenement_id INT NOT NULL, event_id INT NOT NULL, quantite INT NOT NULL, date_demande DATE NOT NULL, statut_demande VARCHAR(255) NOT NULL, INDEX IDX_E6B3BF91FC6CD52A (ressource_id), INDEX IDX_E6B3BF91FD02F13 (evenement_id), INDEX IDX_E6B3BF9171F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, nom_ressource VARCHAR(255) NOT NULL, montant INT DEFAULT NULL, quantite INT DEFAULT NULL, description_ressource VARCHAR(255) NOT NULL, date_creation_ressource DATE NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE demande_ressource ADD CONSTRAINT FK_E6B3BF91FC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id)');
        $this->addSql('ALTER TABLE demande_ressource ADD CONSTRAINT FK_E6B3BF91FD02F13 FOREIGN KEY (evenement_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE demande_ressource ADD CONSTRAINT FK_E6B3BF9171F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE ressources DROP FOREIGN KEY FK_6A2CD5C761190A32');
        $this->addSql('DROP TABLE ressources');
        $this->addSql('ALTER TABLE application ADD club_id INT NOT NULL, ADD status VARCHAR(50) NOT NULL, DROP statut');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC161190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('CREATE INDEX IDX_A45BDDC161190A32 ON application (club_id)');
        $this->addSql('ALTER TABLE member ADD role VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ressources (id INT AUTO_INCREMENT NOT NULL, club_id INT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, est_reserve TINYINT(1) NOT NULL, INDEX IDX_6A2CD5C761190A32 (club_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE ressources ADD CONSTRAINT FK_6A2CD5C761190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('ALTER TABLE demande_ressource DROP FOREIGN KEY FK_E6B3BF91FC6CD52A');
        $this->addSql('ALTER TABLE demande_ressource DROP FOREIGN KEY FK_E6B3BF91FD02F13');
        $this->addSql('ALTER TABLE demande_ressource DROP FOREIGN KEY FK_E6B3BF9171F7E88B');
        $this->addSql('DROP TABLE demande_ressource');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_A45BDDC161190A32');
        $this->addSql('DROP INDEX IDX_A45BDDC161190A32 ON application');
        $this->addSql('ALTER TABLE application ADD statut VARCHAR(255) NOT NULL, DROP club_id, DROP status');
        $this->addSql('ALTER TABLE member DROP role');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
    }
}
