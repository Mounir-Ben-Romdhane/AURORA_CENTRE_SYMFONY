<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215211125 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE participationns (id INT AUTO_INCREMENT NOT NULL, evenement_id INT NOT NULL, description_pn VARCHAR(255) DEFAULT NULL, INDEX IDX_4A4E0F9BFD02F13 (evenement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE participationns ADD CONSTRAINT FK_4A4E0F9BFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE participations DROP FOREIGN KEY FK_FDC6C6E8FD02F13');
        $this->addSql('DROP INDEX IDX_FDC6C6E8FD02F13 ON participations');
        $this->addSql('ALTER TABLE participations DROP evenement_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participationns DROP FOREIGN KEY FK_4A4E0F9BFD02F13');
        $this->addSql('DROP TABLE participationns');
        $this->addSql('ALTER TABLE participations ADD evenement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participations ADD CONSTRAINT FK_FDC6C6E8FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_FDC6C6E8FD02F13 ON participations (evenement_id)');
    }
}
