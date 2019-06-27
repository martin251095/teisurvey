<?php

namespace App\Service;

use App\Entity\QuizAnswer;

class ScoreCalculator
{

    public function calculateScore(QuizAnswer $quizAnswer)
    {

        $quiz = $quizAnswer->getQuiz();
        // Initialize $userAnswers to array
        $userAnswers = [];

        foreach ($quizAnswer->getAnswers() as $answer) {
            $userAnswers[$answer->getQuestion()->getId()][] = $answer;
        }

        // initialize $scoreCategories, $scoreQuestions, $maxQuestions, $maxCategories to array
        $scoreCategories = [];
        $scoreQuestions = [];
        $maxQuestions = [];
        $maxCategories = [];

        // Get all categories
        $categories = $quiz->getCategories();

        // $maxCategories: max possible score for each Category in an array
        // $scoreCategories: score obtained for each Category in an array
        foreach ($categories as $category) {
            // initialize categories score and maximum to zero
            $maxCategories[$category->getId()] = 0.0;
            $scoreCategories[$category->getId()] = 0.0;

            // Get all questions for current category
            $questions = $category->getCategory()->getQuestions();

            // $maxCategories: max possible score for each Category in an array
            // $maxQuestions: max possible score for each Question in an array
            // $scoreQuestions: score obtained for each Question in an array
            foreach ($questions as $question) {
                $maxCategories[$category->getId()] += $question->getPoint();
                $maxQuestions[$question->getId()] = (float)$question->getPoint();

                // initialize questions score to zero
                $scoreQuestions[$question->getId()] = 0.0;

                // foreach answer of the user linked to his key $question_id
                foreach ($userAnswers as $question_id => $answer) {

                    // if question->getId() match with the key question_id
                    if ($question->getId() == $question_id) {

                        // foreach Answer set
                        // $scoreQuestions: score obtained for each Question in an array
                        foreach ($answer as $ans) {
                            $scoreQuestions[$question->getId()] += $ans->getPoint();
                            $scoreCategories[$category->getId()] += $ans->getPoint();
                        }
                    }
                }
            }
        }

        return [
          'maxCategories' => $maxCategories,
          'maxQuestions' => $maxQuestions,
          'scoreCategories' => $scoreCategories,
          'scoreQuestions' => $scoreQuestions,
        ];
    }
}
