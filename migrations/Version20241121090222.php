<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241121090222 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_A45BDDC161190A32');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC161190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('ALTER TABLE `member` DROP FOREIGN KEY FK_70E4FA7861190A32');
        $this->addSql('ALTER TABLE `member` ADD CONSTRAINT FK_70E4FA7861190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('ALTER TABLE user DROP application_status, DROP applied');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_A45BDDC161190A32');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC161190A32 FOREIGN KEY (club_id) REFERENCES club (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `user` ADD application_status VARCHAR(255) DEFAULT NULL, ADD applied VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE `member` DROP FOREIGN KEY FK_70E4FA7861190A32');
        $this->addSql('ALTER TABLE `member` ADD CONSTRAINT FK_70E4FA7861190A32 FOREIGN KEY (club_id) REFERENCES club (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
