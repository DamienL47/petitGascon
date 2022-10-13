<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221012140816 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin ADD reservations_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admin ADD CONSTRAINT FK_880E0D76D9A7F869 FOREIGN KEY (reservations_id) REFERENCES reservations (id)');
        $this->addSql('CREATE INDEX IDX_880E0D76D9A7F869 ON admin (reservations_id)');
        $this->addSql('ALTER TABLE reservations DROP FOREIGN KEY FK_4DA2396F5277FD');
        $this->addSql('DROP INDEX UNIQ_4DA2396F5277FD ON reservations');
        $this->addSql('ALTER TABLE reservations DROP modifier_par_id_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin DROP FOREIGN KEY FK_880E0D76D9A7F869');
        $this->addSql('DROP INDEX IDX_880E0D76D9A7F869 ON admin');
        $this->addSql('ALTER TABLE admin DROP reservations_id');
        $this->addSql('ALTER TABLE reservations ADD modifier_par_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA2396F5277FD FOREIGN KEY (modifier_par_id_id) REFERENCES admin (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4DA2396F5277FD ON reservations (modifier_par_id_id)');
    }
}
