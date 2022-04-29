<?php
class View
{
    private $id;
    private $title;
    private $author;
    private $description;
    private $price;
    private $image;

    public function __construct($fullDB)
    {
        $id = 0;
        foreach ($fullDB as $arr) {
            foreach ($arr as $key => $content) {
                if ($key == 0) {
                    $id = $content;
                    $this->id[$id] = $content;
                }
                if ($key == 1) {
                    $this->title[$id] = $content;
                }
                if ($key == 2) {
                    $this->author[$id] = $content;
                }
                if ($key == 3) {
                    $this->description[$id] = $content;
                }
                if ($key == 4) {
                    $this->price[$id] = $content;
                }
                if ($key == 5) {
                    $this->image[$id] = $content;
                }
            }
        }
    }

    public function getTitles()
    {
        return $this->title;
    }

    public function getAuthors()
    {
        return $this->author;
    }

    public function getDescriptions()
    {
        return $this->description;
    }

    public function getPrices()
    {
        return $this->price;
    }

    public function getImages()
    {
        return $this->image;
    }

    public function render($template)
    {
        ob_start();
        $id = $this->id;
        $image = $this->image;
        $title = $this->title;
        $author = $this->author;
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }
}
