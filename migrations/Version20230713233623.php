<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230713233623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cavalry (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, tier INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_648F305818D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE flying (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, tier INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_4A347AC318D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infantry (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, tier INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_B72173AB18D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mage (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, tier INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_B679396218D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marksmen (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, tier INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_2000437818D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cavalry ADD CONSTRAINT FK_648F305818D2742D FOREIGN KEY (army_id) REFERENCES army (id)');
        $this->addSql('ALTER TABLE flying ADD CONSTRAINT FK_4A347AC318D2742D FOREIGN KEY (army_id) REFERENCES army (id)');
        $this->addSql('ALTER TABLE infantry ADD CONSTRAINT FK_B72173AB18D2742D FOREIGN KEY (army_id) REFERENCES army (id)');
        $this->addSql('ALTER TABLE mage ADD CONSTRAINT FK_B679396218D2742D FOREIGN KEY (army_id) REFERENCES army (id)');
        $this->addSql('ALTER TABLE marksmen ADD CONSTRAINT FK_2000437818D2742D FOREIGN KEY (army_id) REFERENCES army (id)');
        $this->addSql('ALTER TABLE army DROP tier, DROP infantry, DROP cavalry, DROP marksmen, DROP mage, DROP flying');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cavalry DROP FOREIGN KEY FK_648F305818D2742D');
        $this->addSql('ALTER TABLE flying DROP FOREIGN KEY FK_4A347AC318D2742D');
        $this->addSql('ALTER TABLE infantry DROP FOREIGN KEY FK_B72173AB18D2742D');
        $this->addSql('ALTER TABLE mage DROP FOREIGN KEY FK_B679396218D2742D');
        $this->addSql('ALTER TABLE marksmen DROP FOREIGN KEY FK_2000437818D2742D');
        $this->addSql('DROP TABLE cavalry');
        $this->addSql('DROP TABLE flying');
        $this->addSql('DROP TABLE infantry');
        $this->addSql('DROP TABLE mage');
        $this->addSql('DROP TABLE marksmen');
        $this->addSql('ALTER TABLE army ADD tier INT NOT NULL, ADD infantry INT NOT NULL, ADD cavalry INT NOT NULL, ADD marksmen INT NOT NULL, ADD mage INT NOT NULL, ADD flying INT NOT NULL');
    }
}
