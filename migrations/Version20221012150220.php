<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221012150220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin DROP FOREIGN KEY FK_880E0D76D9A7F869');
        $this->addSql('DROP INDEX IDX_880E0D76D9A7F869 ON admin');
        $this->addSql('ALTER TABLE admin CHANGE reservations_id reservations INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservations ADD modifier_par_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin CHANGE reservations reservations_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admin ADD CONSTRAINT FK_880E0D76D9A7F869 FOREIGN KEY (reservations_id) REFERENCES reservations (id)');
        $this->addSql('CREATE INDEX IDX_880E0D76D9A7F869 ON admin (reservations_id)');
        $this->addSql('ALTER TABLE reservations DROP modifier_par_id');
    }
}
