<?php
session_start();
include "questions.php";

// $index = rand(0, count($questions)-1);
// $question = $questions[$index];

$show_score = false;

// $answers = array($question['correctAnswer'], $question['firstIncorrectAnswer'], $question['secondIncorrectAnswer']);

// shuffle($answers);

$toast = null;

// Step 9 gave me an error because $_POST['index'] wasn't set yet

if ($questions[$_POST['index']]['correctAnswer'] == $_POST['answer']) {
    $toast = "Well done! That's correct.";
    $_SESSION['totalCorrect']++;
}else {
    $toast = "Bummer! That was incorrect";
}

$totalQuestions = count($questions);

if (!isset($_SESSION['used_indexes'])) {
    $_SESSION['used_indexes'] = [];
    $_SESSION['totalCorrect'] = 0;  // Repeated instructions for this twice
}
// array_push($_SESSION['used_indexes'], $index);

if(count($_SESSION['used_indexes']) == $totalQuestions) {
    $_SESSION['used_indexes'] == [];
    $show_score = true;
} else {
    $show_score = false;
    if(count($_SESSION['used_indexes']) == 0){
        $_SESSION['totalCorrect'] = 0;
        $toast = "";
    }
    do {
    $index = rand(0, count($questions)-1);
    } while(in_array($index, $_SESSION['used_indexes']));
    $question = $questions[$index];
    array_push($_SESSION['used_indexes'], $index);
    $answers = array($question['correctAnswer'], $question['firstIncorrectAnswer'], $question['secondIncorrectAnswer']);
    shuffle($answers);
}
/*
 * PHP Techdegree Project 2: Build a Quiz App in PHP
 *
 * These comments are to help you get started.
 * You may split the file and move the comments around as needed.
 *
 * You will find examples of formating in the index.php script.
 * Make sure you update the index file to use this PHP script, and persist the users answers.
 *
 * For the questions, you may use:
 *  1. PHP array of questions
 *  2. json formated questions
 *  3. auto generate questions
 *
 */

// Include questions

// Keep track of which questions have been asked

// Show which question they are on
// Show random question
// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score