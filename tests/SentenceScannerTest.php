<?php

    require_once (__DIR__ . "/../src/SentenceScanner.php");

    class SentenceScannerTest extends PHPUnit_Framework_TestCase {

        function test_noInputWord()
        {
            //Arrange
            $scan_sentence = "testing for words";
            $scan_word = "";
            $expected_result = -1;
            $scan_number = new SentenceScanner($scan_sentence, $scan_word);

            //Act
            $result = $scan_number->wordRepeats();

            //Assert
            $this->assertEquals($expected_result, $result);
        }

        function test_noInputSentence()
        {
            //Arrange
            $scan_sentence = "";
            $scan_word = "word";
            $expected_result = -1;
            $scan_number = new SentenceScanner($scan_sentence, $scan_word);

            //Act
            $result = $scan_number->wordRepeats();

            //Assert
            $this->assertEquals($expected_result, $result);
        }

        function test_frequencySingle() {

            // Arrange
            $test_frequency = 0;
            $expected_output = 1;
            $sentenceScan_1 = new SentenceScanner;
            $test_word = "i";
            $test_sentence = "i love bavarian creme donuts.";

            // Act
            $test_result = $sentenceScan_1->freqRepeats($test_word, $test_string);

            // Assert
            $this->assertEquals($expected_output, $test_result);
        }

        function test_frequencyDouble() {

            // Arrange
            $test_score = 0;
            $expected_output = 2;
            $sentenceScan_2 = new SentenceScanner;
            $test_word = "ice";
            $test_sentence = "i love ice cream cones even on days where ice is on the road.";

            // Act
            $test_result = $sentenceScan_2->freqRepeats($test_word, $test_string);

            // Assert
            $this->assertEquals($expected_output, $test_result);
        }

        function test_frequencyMultiple() {

            // Arrange
            $test_score = 0;
            $expected_output = 3;
            $sentenceScan_3 = new SentenceScanner;
            $test_word = "ice";
            $test_sentence = "I gots ice on my neck, ice on my fingers, ice on the ground, bling bling.";

            // Act
            $test_result = $sentenceScan_3->freqRepeats($test_word, $test_string);

            // Assert
            $this->assertEquals($expected_output, $test_result);
        }
    }
?>
