<?php

    require_once (__DIR__ . "/../src/SentenceScanner.php");

    class SentenceScannerTest extends PHPUnit_Framework_TestCase {

        function test_noInputWord()
        {
            //Arrange
            $scan_word = "";
            $scan_sentence = "testing for words";
            $expected_result = -1;
            $scanner = new SentenceScanner($scan_sentence, $scan_word);

            //Act
            $result = $scanner->countRepeats();

            //Assert
            $this->assertEquals($expected_result, $result);
        }

        function test_noInputSentence()
        {
            //Arrange
            $scan_word = "word";
            $scan_sentence = "";
            $expected_result = -1;
            $scanner = new SentenceScanner($scan_sentence, $scan_word);

            //Act
            $result = $scanner->countRepeats();

            //Assert
            $this->assertEquals($expected_result, $result);
        }

        function test_frequencySingleLetter() {

            // Arrange
            $scan_word = "i";
            $scan_sentence = "i";
            $expected_output = 1;
            $scanner = new SentenceScanner($scan_word, $scan_sentence);

            // Act
            $test_result = $scanner->countRepeats();

            // Assert
            $this->assertEquals($expected_output, $test_result);
        }

        function test_frequencySingleWord() {

            // Arrange
            $scan_word = "ice";
            $scan_sentence = "ice";
            $expected_output = 1;
            $scanner = new SentenceScanner($scan_word, $scan_sentence);

            // Act
            $test_result = $scanner->countRepeats();

            // Assert
            $this->assertEquals($expected_output, $test_result);
        }

        function test_frequencySingleWordInSentence() {

            // Arrange
            $expected_output = 1;
            $scan_word = "ice";
            $scan_sentence = "i love ice cream cones";
            $scanner = new SentenceScanner($scan_word, $scan_sentence);

            // Act
            $test_result = $scanner->countRepeats();

            // Assert
            $this->assertEquals($expected_output, $test_result);
        }

        function test_frequencyMultipleWord() {

            // Arrange
            $scan_word = "ice";
            $scan_sentence = "I gots ice on my neck, ice on my fingers, ice on the ground, bling bling.";
            $expected_output = 3;
            $scanner = new SentenceScanner($scan_word, $scan_sentence);

            // Act
            $test_result = $scanner->countRepeats();

            // Assert
            $this->assertEquals($expected_output, $test_result);
        }
    }
?>
