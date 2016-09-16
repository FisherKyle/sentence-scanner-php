<?php

    class SentenceScanner {
        private $scan_word;
        private $scan_sentence;
        private $scan_number;

        function __construct($scan_word, $scan_sentence) { //NOTE variables here potentially problematic
            $this->scan_sentence = $sentence;
            $this->scan_word = $word;
            $this->scan_count = 0;
        }

        function getScannedSentence() {
           return $this->scan_sentence;
        }

        function setScannedSentence($sentence) {
            if ($sentence !== "") {
               $exploded_sentence = explode(" ", $sentence);
               $this->scanned_sentence = $exploded_sentence;
            }
        }

        function getScanWord() {
           return $this->scan_word;
        }

        function setScanWord($word) {
            if ($word !== "") {
               $this->scan_word = (string) $word;
            }
        }

        function getScanCount() {
           return $this->scan_count;
        }

        function setCount($scan_count) {
           $this->count = (int) $scan_count;
        }
    }
?>
