<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210616102128 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE characteristic ADD machine_id INT NOT NULL');
        $this->addSql('ALTER TABLE characteristic ADD CONSTRAINT FK_522FA950F6B75B26 FOREIGN KEY (machine_id) REFERENCES machine (id)');
        $this->addSql('CREATE INDEX IDX_522FA950F6B75B26 ON characteristic (machine_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE characteristic DROP FOREIGN KEY FK_522FA950F6B75B26');
        $this->addSql('DROP INDEX IDX_522FA950F6B75B26 ON characteristic');
        $this->addSql('ALTER TABLE characteristic DROP machine_id');
    }
}
