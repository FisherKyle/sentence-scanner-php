<?php

    class SentenceScanner {

        public $word_scan;
        public $sentence_scan;
        public $count;

        function __construct($word, $sentence) {
            $this->word_scan = $word;
            $this->sentence_scan = $sentence;
            $this->count = 0;
        }

//----get / set----//

        function getSentence() {

            return $this->sentence_scan;
        }

        function setSentence($sentence) {

            $this->sentence_scan = $sentence;
        }

        function getWord() {

            return $this->word_scan;
        }

        function setWord($word) {

            $this->word_scan = (string) $word;
        }

        function getCount() {
            return $this->frequency;
        }

        function setCount($word_count) {

            $this->count = (int) $word_count;
        }

        function countRepeats() {

            $sentence_explode = explode(" ", $this->getSentence());
            $word_provided = $this->getWord();
            $word_count = $this->setCount(0);

            if ($word_provided && $this->getSentence()) {

                for ($i = 0; $i < count($sentence_explode); $i++) {

                    if ($sentence_explode[$i] === $word_provided) {
                        $word_count++;
                    }
                }
            }
            else {
                return -1;
            }

            return $word_count;

        }
    }
?>
