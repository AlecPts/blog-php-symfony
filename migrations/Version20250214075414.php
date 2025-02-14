<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250214075414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD slug VARCHAR(255) NOT NULL, ADD titre VARCHAR(255) NOT NULL, ADD contenu VARCHAR(255) NOT NULL, ADD date_creation DATE NOT NULL');
        $this->addSql('ALTER TABLE categorie ADD nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD contenu VARCHAR(255) NOT NULL, ADD date_creation DATE NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD name VARCHAR(255) NOT NULL, ADD pseudo VARCHAR(255) NOT NULL, ADD mot_de_passe VARCHAR(255) NOT NULL, ADD date_creation VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP slug, DROP titre, DROP contenu, DROP date_creation');
        $this->addSql('ALTER TABLE categorie DROP nom');
        $this->addSql('ALTER TABLE commentaire DROP contenu, DROP date_creation');
        $this->addSql('ALTER TABLE utilisateur DROP name, DROP pseudo, DROP mot_de_passe, DROP date_creation');
    }
}
