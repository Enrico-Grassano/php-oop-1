<?php 
    class Movie {
        public $title;
        public $genre;
        public $year;
        public $language;
        public $runtime;
        public $plot;

        function __construct($title,$genre,$year,$runtime) {
            $this->runtime = $runtime;
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
        }

        public function getLanguage() {
            if ($language = "en") {
                return $this -> language = "Inglese";
            }
        }

    };
?>