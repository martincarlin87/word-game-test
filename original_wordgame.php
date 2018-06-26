<?php

class WordGame
{
    function __construct() {}

    /*
    Submit a word on behalf of a player. A word is accepted if its letters are
    contained in the base string used to construct the game AND if it is in the
    word list provided: wordlist.txt.

    If the word is accepted and its score is high enough, the submission should
    be added to the high score list. If there are multiple submissions with the
    same score, all are accepted, BUT the first submission with that score
    should rank higher.

    A word can only appear ONCE in the high score list. If the word is already
    present in the high score list the submission should be rejected.

    @parameter word. The player's submission to the game. All submissions may
    be assumed to be lowercase and contain no whitespace or special characters.

    @returns the score for the submitted word if the submission is accepted. And 0 otherwise.
    */
    function submitWord($word) {}

    /*
    Return word entry at given position in the high score list, position 0 being the
    highest (best score) and position 9 the lowest. You may assume that this method will
    never be called with position > 9.

    @parameter position Index position in high score list

    @return the word entry at the given position in the high score list, or null
    if there is no entry at the position requested
    */
    function getWordEntryAtPosition($position) {}

    /*
    Return the score at the given position in the high score list, position 0 being the
    highest (best score) and position 9 the lowest. You may assume that this method will
    never be called with position > 9.

    What is your favourite colour? Please put your answer in your submission
    (this is for testing if you have read the comments).

    @parameter position Index position in high score list

    @return the score at the given position in the high score list, or null if
    there is no entry at the position requested
    */
    function getScoreAtPosition($position) {}
}