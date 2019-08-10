<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190804152552 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pansion ADD tranche_id INT NOT NULL, ADD eleve_id INT NOT NULL, ADD salle_id INT NOT NULL, ADD date_paiement DATETIME NOT NULL');
        $this->addSql('ALTER TABLE pansion ADD CONSTRAINT FK_E24DDE6CB76F6B31 FOREIGN KEY (tranche_id) REFERENCES tranche (id)');
        $this->addSql('ALTER TABLE pansion ADD CONSTRAINT FK_E24DDE6CA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE pansion ADD CONSTRAINT FK_E24DDE6CDC304035 FOREIGN KEY (salle_id) REFERENCES salle (id)');
        $this->addSql('CREATE INDEX IDX_E24DDE6CB76F6B31 ON pansion (tranche_id)');
        $this->addSql('CREATE INDEX IDX_E24DDE6CA6CC7B2 ON pansion (eleve_id)');
        $this->addSql('CREATE INDEX IDX_E24DDE6CDC304035 ON pansion (salle_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pansion DROP FOREIGN KEY FK_E24DDE6CB76F6B31');
        $this->addSql('ALTER TABLE pansion DROP FOREIGN KEY FK_E24DDE6CA6CC7B2');
        $this->addSql('ALTER TABLE pansion DROP FOREIGN KEY FK_E24DDE6CDC304035');
        $this->addSql('DROP INDEX IDX_E24DDE6CB76F6B31 ON pansion');
        $this->addSql('DROP INDEX IDX_E24DDE6CA6CC7B2 ON pansion');
        $this->addSql('DROP INDEX IDX_E24DDE6CDC304035 ON pansion');
        $this->addSql('ALTER TABLE pansion DROP tranche_id, DROP eleve_id, DROP salle_id, DROP date_paiement');
    }
}
