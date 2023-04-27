<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230426193241 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE freelancer (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, sous_metier VARCHAR(255) NOT NULL, metier VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE metier ADD freelancer_id INT DEFAULT NULL, CHANGE image image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE metier ADD CONSTRAINT FK_51A00D8C8545BDF5 FOREIGN KEY (freelancer_id) REFERENCES freelancer (id)');
        $this->addSql('CREATE INDEX IDX_51A00D8C8545BDF5 ON metier (freelancer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE metier DROP FOREIGN KEY FK_51A00D8C8545BDF5');
        $this->addSql('DROP TABLE freelancer');
        $this->addSql('DROP INDEX IDX_51A00D8C8545BDF5 ON metier');
        $this->addSql('ALTER TABLE metier DROP freelancer_id, CHANGE image image VARCHAR(255) DEFAULT NULL');
    }
}
