<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190626012542 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE survey_answer_question_survey (survey_answer_id INT NOT NULL, question_survey_id INT NOT NULL, INDEX IDX_6006076AF650A2A (survey_answer_id), INDEX IDX_6006076ABA2B1406 (question_survey_id), PRIMARY KEY(survey_answer_id, question_survey_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_survey_translations (id INT AUTO_INCREMENT NOT NULL, locale VARCHAR(8) NOT NULL, object_class VARCHAR(255) NOT NULL, field VARCHAR(32) NOT NULL, foreign_key VARCHAR(64) NOT NULL, content LONGTEXT DEFAULT NULL, INDEX questionsurveytranslations_IDX (locale, object_class, field, foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_survey (id INT AUTO_INCREMENT NOT NULL, survey_id INT DEFAULT NULL, question VARCHAR(255) NOT NULL, long_question LONGTEXT DEFAULT NULL, weight INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_AA02B4F4B3FE509D (survey_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE survey_answer_question_survey ADD CONSTRAINT FK_6006076AF650A2A FOREIGN KEY (survey_answer_id) REFERENCES survey_answer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE survey_answer_question_survey ADD CONSTRAINT FK_6006076ABA2B1406 FOREIGN KEY (question_survey_id) REFERENCES question_survey (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question_survey ADD CONSTRAINT FK_AA02B4F4B3FE509D FOREIGN KEY (survey_id) REFERENCES survey (id)');
        $this->addSql('DROP TABLE survey_answer_question');
        $this->addSql('ALTER TABLE survey_answer DROP score, DROP total');
        $this->addSql('ALTER TABLE survey DROP sending_email, DROP sending_email_language');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE survey_answer_question_survey DROP FOREIGN KEY FK_6006076ABA2B1406');
        $this->addSql('CREATE TABLE survey_answer_question (survey_answer_id INT NOT NULL, question_id INT NOT NULL, INDEX IDX_39699A1FF650A2A (survey_answer_id), INDEX IDX_39699A1F1E27F6BF (question_id), PRIMARY KEY(survey_answer_id, question_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE survey_answer_question ADD CONSTRAINT FK_39699A1F1E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE survey_answer_question ADD CONSTRAINT FK_39699A1FF650A2A FOREIGN KEY (survey_answer_id) REFERENCES survey_answer (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE survey_answer_question_survey');
        $this->addSql('DROP TABLE question_survey_translations');
        $this->addSql('DROP TABLE question_survey');
        $this->addSql('ALTER TABLE survey ADD sending_email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD sending_email_language VARCHAR(6) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE survey_answer ADD score NUMERIC(10, 1) NOT NULL, ADD total NUMERIC(10, 1) NOT NULL');
    }
}
