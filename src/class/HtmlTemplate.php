<?php

class HtmlTemplate
{
    public static function PrimaryHeader($desc)
    {
        echo <<<HTML
        <h1>$desc</h1>
        HTML;
    }

    public static function Info()
    {
        echo <<<HTML
            <p><u>Temat</u>: Quiz tekstowy - test wyboru, pytania w postaci tekstowej, dowolne dziedziny wiedzy</p>
            <p><u>Język programowania</u>: PHP</p>
            <p><u>Baza Danych</u>: sqlite <a href="/database" target="_blank"> - phpLiteAdmin </a> (hasło: admin)</p>
            <p><u>Technologie</u>: HTML,CSS,JavaScript</p>
            
            <table>
            <tr>
                <td>Numer indexu</td>
                <td>Nazwisko</td>
                <td>Imię</td>
            </tr>
            <tr>
                <td>U-20096</td>
                <td>Monasterski</td>
                <td>Szymon</td>
            </tr>
            <tr>
                <td>U-15991</td>
                <td>Marciniak</td>
                <td>Karol</td>
            </tr>
            </table>
        
        HTML;
    }
    public static function Question($row)
    {
        echo <<<HTML
        <div class="question" id="{$row['id']}">
            <fieldset>
                <a href="index.php?action=single" id="submit-btn">Wylosuj 1 pytanie</a>
                <legend>Pytanie #{$row["id"]}</legend>
                <div id="quiz-form">
                <form>
                    <div class="question">
                        <h2>{$row["question_text"]}</h2>
                    </div>
            
                    <div class="options">
                        <label class="option" id="A"><input type="radio" name="answer" value="A"> {$row["answer_a"]}  </label> <br>
                        <label class="option" id="B"><input type="radio" name="answer" value="B"> {$row["answer_b"]} </label> <br>
                        <label class="option" id="C"><input type="radio" name="answer" value="C">{$row["answer_c"]} </label> <br>
                        <label class="option" id="D"><input type="radio" name="answer" value="D"> {$row["answer_d"]} </label> <br>
                        
                        
                          <input type="text" value="{$row["correct_answer"]}" id="correct"/> 
                    </div>
                    <br>
                    
                    <div type="submit" id="submit-btn" class="check-btn" onclick="checkQue()">Sprawdź</div>
                    <h2 id="info"></h2>
                </form>
            </div>

            </fieldset>
        </div>
        HTML;
    }

    public static  function scoreCount(){
        echo <<<HTML
            <h3 id="score"></h3>
        HTML;

    }

    public static function checkButton()
    {
        echo <<<HTML
        <div id="submit-btn" class="showInfoBtn" onclick="showInfo()">Sprawdź wynik</div>
        HTML;

    }


    public static function QuestionItemFrom10($row)
    {
//        $input_id = "";
        echo <<<HTML
        <div class="question" id="{$row['id']}">
            <fieldset>
                <legend>Pytanie #{$row["id"]}</legend>
                <div id="quiz-form">
                <form>
                    <div class="question">
                        <h2>{$row["question_text"]}</h2>
                    </div>
            
                    <div class="options">
                        <label class="option" id="A{$row['id']}"><input class="add{$row['id']}" id="radioA{$row['id']}" type="radio" name="answer" value="A" required> {$row["answer_a"]}  </label> <br>
                        <label class="option" id="B{$row['id']}"><input class="add{$row['id']}" id="radioB{$row['id']}" type="radio" name="answer" value="B"> {$row["answer_b"]} </label> <br>
                        <label class="option" id="C{$row['id']}"><input class="add{$row['id']}" id="radioC{$row['id']}" type="radio" name="answer" value="C">{$row["answer_c"]} </label> <br>
                        <label class="option" id="D{$row['id']}"><input class="add{$row['id']}" id="radioD{$row['id']}" type="radio" name="answer" value="D"> {$row["answer_d"]} </label> <br>
                        <label class="option" id="0" style="display: none"><input type="radio" name="answer" value="0"  checked> 0 </label> <br>
                        
                        
                          <input type="text" value="{$row["correct_answer"]}" id="correct{$row['id']}" target="{$row["correct_answer"]}{$row['id']}" class="correct"/> 
                    </div>
                    <br>
                </form>
            </div>

            </fieldset>
        </div>
        HTML;
    }
    public static function AddUserFrom($path)
    {
        echo <<<HTML
        <form action="$path" method="POST">
            <fieldset>
                <legend>Użytkownik</legend>
                <input type="text" name="login" required>
            </fieldset>
            <fieldset>
                <legend>Hasło</legend>
                <input type="password" id="password" name="password" required>
            </fieldset>
            <input type="submit" value="Dodaj">
        </form>
        HTML;

    }

    public static function LoginForm($path)
    {
        echo <<<HTML
        <form action="$path" method="POST">
            <fieldset>
                <legend>Użytkownik</legend>
                <input type="text" name="login" required>
            </fieldset>
            <fieldset>
                <legend>Hasło</legend>
                <input type="password" id="password" name="password" required>
            </fieldset>
            <input type="submit" value="Zaloguj">
        </form>
        HTML;

    }

    public static function ConfirmDelte($id)
    {
        echo <<<HTML
        <h1>USUWANIE</h1>
        <p>Czy jesteś pewien że chcesz usunąć cytat #$id?</p>
        <a href="?action=delete&id=$id&confirm=true">
            <button>
                Usun
            </button>
        </a>
        HTML;
    }

    public static function OptionCytat($id)
    {
        echo <<<HTML
        <a href="?action=delete&id=$id">
            <button>Usuń #$id </button>
        </a>
        <a href="?action=update__form&id=$id">
            <button>Edytuj #$id </button>
        </a>
        <br>
        HTML;
    }

}

