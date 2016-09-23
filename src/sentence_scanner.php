<?php

    class SentenceScanner {
        private $scan_word;
        private $scan_sentence;
        private $scan_number;

        function __construct($scan_word, $scan_sentence, $scan_number) {
            $this->scan_sentence = $sentence;
            $this->scan_word = $word;
            $this->scan_number = 0;
        }

//----get / set----//

        function getScannedSentence() {
            return $this->scan_sentence;
        }

        function setScannedSentence($sentence) {
            $this->scanned_sentence = $sentence;
        }

        function getScanWord() {
            return $this->scan_word;
        }

        function setScanWord($word) {
            $this->scan_word = (string) $word;
        }

        function getScanCount() {
            return $this->scan_number;
        }

        function setScanCount($scan_number) {
           $this->number = (int) $scan_number;
        }
    }
?>
