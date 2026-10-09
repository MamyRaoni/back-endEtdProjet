<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261009141704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contraintes CHANGE jour jour VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE matieres CHANGE libelle libelle VARCHAR(255) NOT NULL, CHANGE volume_horaire volume_horaire VARCHAR(255) NOT NULL, CHANGE volume_horaire_restant volume_horaire_restant VARCHAR(255) NOT NULL, CHANGE semestre semestre VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE professeurs DROP prenom, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE grade grade VARCHAR(255) NOT NULL, CHANGE sexe sexe VARCHAR(10) NOT NULL, CHANGE contact contact VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE matieres CHANGE libelle libelle VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE volume_horaire volume_horaire VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE volume_horaire_restant volume_horaire_restant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE semestre semestre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE professeurs ADD prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE grade grade VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE sexe sexe VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE contact contact VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE contraintes CHANGE jour jour DATE NOT NULL');
    }
}
