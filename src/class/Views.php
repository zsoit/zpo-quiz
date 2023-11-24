<?php

class Views
{
    public static  function DisplayQuestion($result)
    {

        $row = $result->fetchArray();
        HtmlTemplate::Question($row);

    }
}