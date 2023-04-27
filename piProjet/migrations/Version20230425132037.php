<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230425132037 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sous_metier DROP FOREIGN KEY FK_81BFFF7B241C74B1');
        $this->addSql('DROP INDEX IDX_81BFFF7B241C74B1 ON sous_metier');
        $this->addSql('ALTER TABLE sous_metier CHANGE metier_id_id_id metier_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sous_metier ADD CONSTRAINT FK_81BFFF7B448B3F5B FOREIGN KEY (metier_id_id) REFERENCES metier (id)');
        $this->addSql('CREATE INDEX IDX_81BFFF7B448B3F5B ON sous_metier (metier_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sous_metier DROP FOREIGN KEY FK_81BFFF7B448B3F5B');
        $this->addSql('DROP INDEX IDX_81BFFF7B448B3F5B ON sous_metier');
        $this->addSql('ALTER TABLE sous_metier CHANGE metier_id_id metier_id_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sous_metier ADD CONSTRAINT FK_81BFFF7B241C74B1 FOREIGN KEY (metier_id_id_id) REFERENCES metier (id)');
        $this->addSql('CREATE INDEX IDX_81BFFF7B241C74B1 ON sous_metier (metier_id_id_id)');
    }
}
