<?php

class Views
{
    public static function DisplayQuestion($result)
    {

        $row = $result->fetchArray();
        HtmlTemplate::Question($row);

    }

    public static function DisplayQuestionFromExam10($result)
    {

        $row = $result->fetchArray();
        HtmlTemplate::QuestionItemFrom10($row);

    }

    public static function DisplayAllQue($res)
    {
        while ($row = $res->fetchArray()) {
            HtmlTemplate::QuestionsList($row);
        }
    }
    public static function DisplayEditForm($res){
        $id = DataController::fetchGET("id");
        $row = $res->fetchArray();
        HtmlTemplate::EditForm("index.php?action=edit&id=$id", $row);
    }

}