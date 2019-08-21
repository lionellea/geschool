<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190821054441 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pansion ADD annee_id INT NOT NULL');
        $this->addSql('ALTER TABLE pansion ADD CONSTRAINT FK_E24DDE6C543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id)');
        $this->addSql('CREATE INDEX IDX_E24DDE6C543EC5F0 ON pansion (annee_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pansion DROP FOREIGN KEY FK_E24DDE6C543EC5F0');
        $this->addSql('DROP INDEX IDX_E24DDE6C543EC5F0 ON pansion');
        $this->addSql('ALTER TABLE pansion DROP annee_id');
    }
}
