<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190812130018 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE inscription ADD code VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE tranche ADD pansion_id INT NOT NULL');
        $this->addSql('ALTER TABLE tranche ADD CONSTRAINT FK_66675840305A222A FOREIGN KEY (pansion_id) REFERENCES pansion (id)');
        $this->addSql('CREATE INDEX IDX_66675840305A222A ON tranche (pansion_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE inscription DROP code');
        $this->addSql('ALTER TABLE tranche DROP FOREIGN KEY FK_66675840305A222A');
        $this->addSql('DROP INDEX IDX_66675840305A222A ON tranche');
        $this->addSql('ALTER TABLE tranche DROP pansion_id');
    }
}
