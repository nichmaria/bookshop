<?php 
    class GuestBook
    {
        private $data;

        public function __construct($path)
        {
            $this->data = file($path);
        }

        public function getData()
        {
            return $this->data;
        }

        public function append($text)
        {
            $this->data[] = $text . PHP_EOL;
        }

        public function save($path)
        {
            file_put_contents($path, $this->data);
        }
    }
?>