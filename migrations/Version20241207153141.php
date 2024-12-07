<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241207153141 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_A45BDDC18D0EB82');
        $this->addSql('DROP INDEX IDX_A45BDDC18D0EB82 ON application');
        $this->addSql('ALTER TABLE application ADD cv VARCHAR(255) DEFAULT NULL, ADD motivation_letter LONGTEXT DEFAULT NULL, CHANGE candidat_id recruitment_id INT NOT NULL');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC1115985E8 FOREIGN KEY (recruitment_id) REFERENCES recruitment (id)');
        $this->addSql('CREATE INDEX IDX_A45BDDC1115985E8 ON application (recruitment_id)');
        $this->addSql('ALTER TABLE commentary ADD user_id INT NOT NULL, ADD date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE commentary ADD CONSTRAINT FK_1CAC12CAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1CAC12CAA76ED395 ON commentary (user_id)');
        $this->addSql('ALTER TABLE event ADD has_participant_limit TINYINT(1) NOT NULL, ADD max_participants INT DEFAULT NULL');
        $this->addSql('ALTER TABLE recruitment DROP FOREIGN KEY FK_C7238C6E3E030ACD');
        $this->addSql('DROP INDEX UNIQ_C7238C6E3E030ACD ON recruitment');
        $this->addSql('ALTER TABLE recruitment ADD title VARCHAR(255) NOT NULL, ADD status VARCHAR(50) NOT NULL, ADD deadline DATETIME NOT NULL, ADD requirements LONGTEXT DEFAULT NULL, ADD location VARCHAR(100) DEFAULT NULL, ADD date_created DATETIME NOT NULL, ADD date_updated DATETIME DEFAULT NULL, DROP application_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentary DROP FOREIGN KEY FK_1CAC12CAA76ED395');
        $this->addSql('DROP INDEX IDX_1CAC12CAA76ED395 ON commentary');
        $this->addSql('ALTER TABLE commentary DROP user_id, DROP date');
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_A45BDDC1115985E8');
        $this->addSql('DROP INDEX IDX_A45BDDC1115985E8 ON application');
        $this->addSql('ALTER TABLE application DROP cv, DROP motivation_letter, CHANGE recruitment_id candidat_id INT NOT NULL');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC18D0EB82 FOREIGN KEY (candidat_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_A45BDDC18D0EB82 ON application (candidat_id)');
        $this->addSql('ALTER TABLE recruitment ADD application_id INT DEFAULT NULL, DROP title, DROP status, DROP deadline, DROP requirements, DROP location, DROP date_created, DROP date_updated');
        $this->addSql('ALTER TABLE recruitment ADD CONSTRAINT FK_C7238C6E3E030ACD FOREIGN KEY (application_id) REFERENCES application (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7238C6E3E030ACD ON recruitment (application_id)');
        $this->addSql('ALTER TABLE event DROP has_participant_limit, DROP max_participants');
    }
}
