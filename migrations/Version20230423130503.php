<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230423130503 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE raiting (id INT AUTO_INCREMENT NOT NULL, raiting INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenement ADD id_evenement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E2C115A61 FOREIGN KEY (id_evenement_id) REFERENCES raiting (id)');
        $this->addSql('CREATE INDEX IDX_B26681E2C115A61 ON evenement (id_evenement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E2C115A61');
        $this->addSql('DROP TABLE raiting');
        $this->addSql('DROP INDEX IDX_B26681E2C115A61 ON evenement');
        $this->addSql('ALTER TABLE evenement DROP id_evenement_id');
    }
}
