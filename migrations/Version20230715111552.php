<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230715111552 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE army DROP FOREIGN KEY FK_C212F36A76ED395');
        $this->addSql('DROP INDEX IDX_C212F36A76ED395 ON army');
        $this->addSql('ALTER TABLE army DROP user_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE army ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE army ADD CONSTRAINT FK_C212F36A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_C212F36A76ED395 ON army (user_id)');
    }
}
