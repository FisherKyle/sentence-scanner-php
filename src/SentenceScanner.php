<?php

    class SentenceScanner {

        public $frequency;

        function __construct() {
            $this->frequency = 0;
        }

//----get / set----//

        function getFrequency() {
            return $this->getfrequency;
        }

        function freqRepeats($inputWord, $inputSentence)
        {
            $wordScan = strtolower($inputWord);
            $sentenceScan = explode(" ", $inputString);

            for ($index = 0; $index < count($sentenceScan); $index++) {

                if ($wordScan === strtolower($sentenceScan[$index])) {

                    $this->frequency++;
                }
            }
            return $this->frequency;
        }
    }
?>
