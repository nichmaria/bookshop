<?php
class View
{
    public function render($template, $booksinfo)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template, $booksinfo)
    {
        echo $this->render($template, $booksinfo);
    }
}
