<?php

final class Quiz
{

    public static function Run()
    {
        $Page = new PageController();
        $Page->include_html("__head");
        $Page->include_html("__nav");
        $Page->Start();
        $Page->include_html("__footer");

    }
}
