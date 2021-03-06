<?php
namespace App\Repositories\Word;

interface WordInterface
{
    public function storeWordAndAnswers($input);

    public function getWordUnlearnedForLesson($categoryId);

    public function listWordIdLearned();

    public function answerCorrect();

    public function getWordList();

    public function groupWordByAlpha($words);

    public function getWordByFilter($inputs);
}
