<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190624032800 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE quiz_translations (id INT AUTO_INCREMENT NOT NULL, locale VARCHAR(8) NOT NULL, object_class VARCHAR(255) NOT NULL, field VARCHAR(32) NOT NULL, foreign_key VARCHAR(64) NOT NULL, content LONGTEXT DEFAULT NULL, INDEX quiztranslations_IDX (locale, object_class, field, foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quiz (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, sending_email VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, sending_email_language VARCHAR(6) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quiz_category (quiz_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_D088E084853CD175 (quiz_id), INDEX IDX_D088E08412469DE2 (category_id), PRIMARY KEY(quiz_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quiz_answer (id INT AUTO_INCREMENT NOT NULL, quiz_id INT NOT NULL, user_firstname VARCHAR(255) NOT NULL, user_lastname VARCHAR(255) NOT NULL, user_email VARCHAR(255) NOT NULL, score NUMERIC(5, 2) NOT NULL, total NUMERIC(5, 2) NOT NULL, INDEX IDX_3799BA7C853CD175 (quiz_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quiz_answer_question (quiz_answer_id INT NOT NULL, question_id INT NOT NULL, INDEX IDX_AAB9F27AAC5339E1 (quiz_answer_id), INDEX IDX_AAB9F27A1E27F6BF (question_id), PRIMARY KEY(quiz_answer_id, question_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quiz_answer_answer (quiz_answer_id INT NOT NULL, answer_id INT NOT NULL, INDEX IDX_29DA293AC5339E1 (quiz_answer_id), INDEX IDX_29DA293AA334807 (answer_id), PRIMARY KEY(quiz_answer_id, answer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE quiz_category ADD CONSTRAINT FK_D088E084853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quiz_category ADD CONSTRAINT FK_D088E08412469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quiz_answer ADD CONSTRAINT FK_3799BA7C853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id)');
        $this->addSql('ALTER TABLE quiz_answer_question ADD CONSTRAINT FK_AAB9F27AAC5339E1 FOREIGN KEY (quiz_answer_id) REFERENCES quiz_answer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quiz_answer_question ADD CONSTRAINT FK_AAB9F27A1E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quiz_answer_answer ADD CONSTRAINT FK_29DA293AC5339E1 FOREIGN KEY (quiz_answer_id) REFERENCES quiz_answer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quiz_answer_answer ADD CONSTRAINT FK_29DA293AA334807 FOREIGN KEY (answer_id) REFERENCES answer (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE quiz_category DROP FOREIGN KEY FK_D088E084853CD175');
        $this->addSql('ALTER TABLE quiz_answer DROP FOREIGN KEY FK_3799BA7C853CD175');
        $this->addSql('ALTER TABLE quiz_answer_question DROP FOREIGN KEY FK_AAB9F27AAC5339E1');
        $this->addSql('ALTER TABLE quiz_answer_answer DROP FOREIGN KEY FK_29DA293AC5339E1');
        $this->addSql('DROP TABLE quiz_translations');
        $this->addSql('DROP TABLE quiz');
        $this->addSql('DROP TABLE quiz_category');
        $this->addSql('DROP TABLE quiz_answer');
        $this->addSql('DROP TABLE quiz_answer_question');
        $this->addSql('DROP TABLE quiz_answer_answer');
    }
}
