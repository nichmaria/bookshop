<?php
class Book
{
    private $booksinfo;
    public function __construct($fullDB)
    {
        foreach ($fullDB as $keyone => $array) {
            foreach ($array as $keytwo => $content) {
                if ($keytwo == 'id') {
                    $this->booksinfo[$keyone][$keytwo] = $content;
                }
                if ($keytwo == 'title') {
                    $this->booksinfo[$keyone][$keytwo] = $content;
                }
                if ($keytwo == 'author') {
                    $this->booksinfo[$keyone][$keytwo] = $content;
                }
                if ($keytwo == 'description') {
                    $this->booksinfo[$keyone][$keytwo] = $content;
                }
                if ($keytwo == 'price') {
                    $this->booksinfo[$keyone][$keytwo] = $content;
                }
                if ($keytwo == 'image') {
                    $this->booksinfo[$keyone][$keytwo] = $content;
                }
            }
        }
    }

    public function getBooksInfo()
    {
        return $this->booksinfo;
    }
}
