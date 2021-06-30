<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210630073912 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE characteristic ADD machine2_id INT NOT NULL');
        $this->addSql('ALTER TABLE characteristic ADD CONSTRAINT FK_522FA9501622B0DB FOREIGN KEY (machine2_id) REFERENCES machine (id)');
        $this->addSql('CREATE INDEX IDX_522FA9501622B0DB ON characteristic (machine2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE characteristic DROP FOREIGN KEY FK_522FA9501622B0DB');
        $this->addSql('DROP INDEX IDX_522FA9501622B0DB ON characteristic');
        $this->addSql('ALTER TABLE characteristic DROP machine2_id');
    }
}
