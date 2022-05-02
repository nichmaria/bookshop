<?php 
    //require __DIR__ . '/GuestBook.php';

    class Uploader
    {
        private $name;
        private $book;

        public function __construct($str, GuestBook $book)
        {
            $this->name = $str;
            $this->book = $book;
        }

        public function isUploaded()
        {
            if (!empty($_POST[$this->name])) {
                return true;
            }
            return false;
        }

        public function upload()
        {
            if ($this->isUploaded()) {
                $this->book->append($_POST[$this->name]);
                $this->book->save(__DIR__ . '/data.txt');
            }
        }
    }
?>