<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190812130708 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, fonction VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_1D1C63B392FC23A8 (username_canonical), UNIQUE INDEX UNIQ_1D1C63B3A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_1D1C63B3C05FB297 (confirmation_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annee CHANGE date_debut date_debut DATE NOT NULL, CHANGE date_fin date_fin DATE NOT NULL');
        $this->addSql('ALTER TABLE inscription ADD code VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id)');
        $this->addSql('CREATE INDEX IDX_5E90F6D6543EC5F0 ON inscription (annee_id)');
        $this->addSql('ALTER TABLE pansion DROP FOREIGN KEY FK_E24DDE6CB76F6B31');
        $this->addSql('ALTER TABLE pansion DROP FOREIGN KEY FK_E24DDE6CA6CC7B2');
        $this->addSql('DROP INDEX IDX_E24DDE6CB76F6B31 ON pansion');
        $this->addSql('ALTER TABLE pansion DROP tranche_id');
        $this->addSql('ALTER TABLE pansion ADD CONSTRAINT FK_E24DDE6CA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES tranche (id)');
        $this->addSql('ALTER TABLE tranche ADD pansion_id INT NOT NULL');
        $this->addSql('ALTER TABLE tranche ADD CONSTRAINT FK_66675840305A222A FOREIGN KEY (pansion_id) REFERENCES pansion (id)');
        $this->addSql('CREATE INDEX IDX_66675840305A222A ON tranche (pansion_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('ALTER TABLE annee CHANGE date_debut date_debut DATETIME NOT NULL, CHANGE date_fin date_fin DATETIME NOT NULL');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D6543EC5F0');
        $this->addSql('DROP INDEX IDX_5E90F6D6543EC5F0 ON inscription');
        $this->addSql('ALTER TABLE inscription DROP code');
        $this->addSql('ALTER TABLE pansion DROP FOREIGN KEY FK_E24DDE6CA6CC7B2');
        $this->addSql('ALTER TABLE pansion ADD tranche_id INT NOT NULL');
        $this->addSql('ALTER TABLE pansion ADD CONSTRAINT FK_E24DDE6CB76F6B31 FOREIGN KEY (tranche_id) REFERENCES tranche (id)');
        $this->addSql('ALTER TABLE pansion ADD CONSTRAINT FK_E24DDE6CA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('CREATE INDEX IDX_E24DDE6CB76F6B31 ON pansion (tranche_id)');
        $this->addSql('ALTER TABLE tranche DROP FOREIGN KEY FK_66675840305A222A');
        $this->addSql('DROP INDEX IDX_66675840305A222A ON tranche');
        $this->addSql('ALTER TABLE tranche DROP pansion_id');
    }
}
