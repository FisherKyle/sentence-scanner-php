<?php

    require_once (__DIR__ . "/../src/sentence_scanner.php");

    class SentenceScannerTest extends PHPUnit_Framework_TestCase

    {
        function test_noMatch()
        {
            //Arrange
            $scan_sentence = "b";
            $scan_word = "a";
            $scan_number = new SentenceScanner($scan_sentence, $scan_word);

            //Act
            $result = $scan_number->wordRepeats();
            $expected_result = 0;

            //Assert
            $this->assertEquals($expected_result, $result);
        }

        function test_oneWordMatch()
        {
            //Arrange
            $scan_sentence = "brown";
            $scan_word = "brown";
            $scan_number = new SentenceScanner($scan_sentence, $scan_word);

            //Act
            $result = $scan_number->wordRepeats();
            $desired_result = 1;

            //Assert
            $this->assertEquals($expected_result, $result);
        }

        function test_wordToTwoMatch()
        {
            //Arrange
            $scan_sentence = "brown cow";
            $scan_word = "brown";
            $scan_number = new SentenceScanner($scan_sentence, $scan_word);

            //Act
            $result = $scan_number->wordRepeats();
            $expected_result = 1;

            //Assert
            $this->assertEquals($expected_result, $result);
        }

        function test__wordToMultiple()
        {
            //Arrange
            $scan_sentence = "Brown chicken, brown cow.";
            $scan_word = "brown";
            $scan_number = new SentenceScanner($scan_sentence, $scan_word);

            //Act
            $result = $scan_number->wordRepeats();
            $desired_result = 2;

            //Assert
            $this->assertEquals($expected_result, $result);
        }

?>
