<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230423160346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE raiting DROP FOREIGN KEY FK_3AE2A2092C115A61');
        $this->addSql('DROP INDEX IDX_3AE2A2092C115A61 ON raiting');
        $this->addSql('ALTER TABLE raiting ADD raiting INT NOT NULL, CHANGE id_evenement id_evenement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE raiting ADD CONSTRAINT FK_3AE2A2092C115A61 FOREIGN KEY (id_evenement_id) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_3AE2A2092C115A61 ON raiting (id_evenement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE raiting DROP FOREIGN KEY FK_3AE2A2092C115A61');
        $this->addSql('DROP INDEX IDX_3AE2A2092C115A61 ON raiting');
        $this->addSql('ALTER TABLE raiting DROP raiting, CHANGE id_evenement_id id_evenement INT DEFAULT NULL');
        $this->addSql('ALTER TABLE raiting ADD CONSTRAINT FK_3AE2A2092C115A61 FOREIGN KEY (id_evenement) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_3AE2A2092C115A61 ON raiting (id_evenement)');
    }
}
