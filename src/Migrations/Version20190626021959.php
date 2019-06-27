<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190626021959 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE answer_survey_translations (id INT AUTO_INCREMENT NOT NULL, locale VARCHAR(8) NOT NULL, object_class VARCHAR(255) NOT NULL, field VARCHAR(32) NOT NULL, foreign_key VARCHAR(64) NOT NULL, content LONGTEXT DEFAULT NULL, INDEX answersurveytranslations_IDX (locale, object_class, field, foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE answer_survey (id INT AUTO_INCREMENT NOT NULL, question_survey_id INT NOT NULL, answer VARCHAR(255) NOT NULL, weight INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_5FA6A15BBA2B1406 (question_survey_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE survey_answer_answer_survey (survey_answer_id INT NOT NULL, answer_survey_id INT NOT NULL, INDEX IDX_25A24029F650A2A (survey_answer_id), INDEX IDX_25A240298E018F4B (answer_survey_id), PRIMARY KEY(survey_answer_id, answer_survey_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE answer_survey ADD CONSTRAINT FK_5FA6A15BBA2B1406 FOREIGN KEY (question_survey_id) REFERENCES question_survey (id)');
        $this->addSql('ALTER TABLE survey_answer_answer_survey ADD CONSTRAINT FK_25A24029F650A2A FOREIGN KEY (survey_answer_id) REFERENCES survey_answer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE survey_answer_answer_survey ADD CONSTRAINT FK_25A240298E018F4B FOREIGN KEY (answer_survey_id) REFERENCES answer_survey (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE survey_answer_answer');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE survey_answer_answer_survey DROP FOREIGN KEY FK_25A240298E018F4B');
        $this->addSql('CREATE TABLE survey_answer_answer (survey_answer_id INT NOT NULL, answer_id INT NOT NULL, INDEX IDX_433FF37AF650A2A (survey_answer_id), INDEX IDX_433FF37AAA334807 (answer_id), PRIMARY KEY(survey_answer_id, answer_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE survey_answer_answer ADD CONSTRAINT FK_433FF37AAA334807 FOREIGN KEY (answer_id) REFERENCES answer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE survey_answer_answer ADD CONSTRAINT FK_433FF37AF650A2A FOREIGN KEY (survey_answer_id) REFERENCES survey_answer (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE answer_survey_translations');
        $this->addSql('DROP TABLE answer_survey');
        $this->addSql('DROP TABLE survey_answer_answer_survey');
    }
}
