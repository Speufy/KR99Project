<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230715201046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE absence (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, INDEX IDX_765AE0C9A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annonce (id INT AUTO_INCREMENT NOT NULL, message VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE army (id INT AUTO_INCREMENT NOT NULL, t1_infantry INT DEFAULT NULL, t2_infantry INT DEFAULT NULL, t3_infantry INT DEFAULT NULL, t4_infantry INT DEFAULT NULL, t5_infantry INT DEFAULT NULL, t1_cavalry INT DEFAULT NULL, t2_cavalry INT DEFAULT NULL, t3_cavalry INT DEFAULT NULL, t4_cavalry INT DEFAULT NULL, t5_cavalry INT DEFAULT NULL, t1_mage INT DEFAULT NULL, t2_mage INT DEFAULT NULL, t3_mage INT DEFAULT NULL, t4_mage INT DEFAULT NULL, t5_mage INT DEFAULT NULL, t1_fly INT DEFAULT NULL, t2_fly INT DEFAULT NULL, t3_fly INT DEFAULT NULL, t4_fly INT DEFAULT NULL, t5_fly INT DEFAULT NULL, t1_marksmen INT DEFAULT NULL, t2_marksmen INT DEFAULT NULL, t3_marksmen INT DEFAULT NULL, t4_marksmen INT DEFAULT NULL, t5_marksmen INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE artefact (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, level INT NOT NULL, star INT NOT NULL, skill_lvl INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_8D158D2DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, type VARCHAR(50) NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE heroe (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, level INT NOT NULL, star INT NOT NULL, premier_skill INT NOT NULL, second_skill INT NOT NULL, troisieme_skill INT NOT NULL, quatrieme_skill INT NOT NULL, awake TINYINT(1) NOT NULL, INDEX IDX_EB509221A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, sujet VARCHAR(255) DEFAULT NULL, message VARCHAR(255) NOT NULL, date DATE NOT NULL, INDEX IDX_97A0ADA3A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, ingame_id INT DEFAULT NULL, power INT DEFAULT NULL, grade VARCHAR(255) DEFAULT NULL, ally VARCHAR(255) DEFAULT NULL, merit INT DEFAULT NULL, timezone INT DEFAULT NULL, prime_time VARCHAR(255) DEFAULT NULL COMMENT \'(DC2Type:dateinterval)\', country VARCHAR(255) DEFAULT NULL, username VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D64918D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE artefact ADD CONSTRAINT FK_8D158D2DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE heroe ADD CONSTRAINT FK_EB509221A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64918D2742D FOREIGN KEY (army_id) REFERENCES army (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY FK_765AE0C9A76ED395');
        $this->addSql('ALTER TABLE artefact DROP FOREIGN KEY FK_8D158D2DA76ED395');
        $this->addSql('ALTER TABLE heroe DROP FOREIGN KEY FK_EB509221A76ED395');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3A76ED395');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64918D2742D');
        $this->addSql('DROP TABLE absence');
        $this->addSql('DROP TABLE annonce');
        $this->addSql('DROP TABLE army');
        $this->addSql('DROP TABLE artefact');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE heroe');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
