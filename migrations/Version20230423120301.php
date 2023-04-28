<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230423120301 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE raiting (id INT AUTO_INCREMENT NOT NULL, id_evenement_id INT DEFAULT NULL, raiting INT NOT NULL, INDEX IDX_3AE2A2092C115A61 (id_evenement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE raiting ADD CONSTRAINT FK_3AE2A2092C115A61 FOREIGN KEY (id_evenement_id) REFERENCES evenement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE raiting DROP FOREIGN KEY FK_3AE2A2092C115A61');
        $this->addSql('DROP TABLE raiting');
    }
}
