<?php

    class SentenceScanner {
        public $scan_word;
        public $scan_sentence;
        public $scan_number;

        function __construct($scan_word, $scan_sentence) {
            $this->scan_word = $scan_sentence;
            $this->scan_sentence = $scan_sentence;
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

        function wordRepeats()
        {
            $result = 0;
            $lower_word = strtolower($this->getScanWord());
            $lower_sentence = strtolower($this->getScannedSentence());
            $explo_sentence = explode(" ", $lower_sentence);

            foreach($explo_sentence as $scan_match)
            {
                if($lower_word === $scan_match)
                {
                    $result += 1;
                }
            }

            return $result;
        }
    }
?>
