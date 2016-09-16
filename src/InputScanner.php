<?php

    class SentenceScanner
    {
        private $scan_word;
        private $scan_sentence;
        private $scan_number;

        function __construct($word, $sentence)
        {
            $this->search_sentence = $sentence;
            $this->search_word = $word;
            $this->count = 0;
        }

?>
