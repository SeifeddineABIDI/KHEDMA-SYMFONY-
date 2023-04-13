<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230405213143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce ADD classification_id INT NOT NULL');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E52A86559F FOREIGN KEY (classification_id) REFERENCES classification (id)');
        $this->addSql('CREATE INDEX IDX_F65593E52A86559F ON annonce (classification_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E52A86559F');
        $this->addSql('DROP INDEX IDX_F65593E52A86559F ON annonce');
        $this->addSql('ALTER TABLE annonce DROP classification_id');
    }
}
