<?php

class Views
{
    public static  function DisplayQuestion($result)
    {

        $row = $result->fetchArray();
        HtmlTemplate::Question($row);

    }

    public static  function DisplayQuestionFromExam10($result)
    {

        $row = $result->fetchArray();
        HtmlTemplate::QuestionItemFrom10($row);

    }

}