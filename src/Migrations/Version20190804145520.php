<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190804145520 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tranche ADD inscription_id INT NOT NULL');
        $this->addSql('ALTER TABLE tranche ADD CONSTRAINT FK_666758405DAC5993 FOREIGN KEY (inscription_id) REFERENCES inscription (id)');
        $this->addSql('CREATE INDEX IDX_666758405DAC5993 ON tranche (inscription_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tranche DROP FOREIGN KEY FK_666758405DAC5993');
        $this->addSql('DROP INDEX IDX_666758405DAC5993 ON tranche');
        $this->addSql('ALTER TABLE tranche DROP inscription_id');
    }
}
