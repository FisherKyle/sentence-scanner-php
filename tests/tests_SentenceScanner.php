<?php

    require_once (__DIR__ . "/../src/InputScanner.php");

    class SentenceScannerTest extends PHPUnit_Framework_TestCase

  
    {
        function test_WordSingleChar() {

            //ARRANGE
            $word =
            $word =
            $expected_output =
            $sentence_scanner_instance = new SentenceScanner($input_word_string_to_check, $input_word_to_check);

            //ACT
            $test_result = $sentence_scanner_instance->countRepeats();

            //ASSERT
            $this->assertEquals($expected_output, $test_result);

?>
