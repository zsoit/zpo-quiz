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
                <td>U-20xxx</td>
                <td>Monasterski</td>
                <td>Szymon</td>
            </tr>
            <tr>
                <td>U-16xxx</td>
                <td>Marciniak</td>
                <td>Karol</td>
            </tr>
            </table>
        
        HTML;
    }
    public static function Question($row)
    {
        echo <<<HTML
        <div class="cytat_bomba" id="{$row['id']}">
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
        <script>
        function checkQue(){
            const getAn = document.querySelector('input[name="answer"]:checked');
            const correct = document.querySelector("#correct").value;
            const alert = document.querySelector("#info");
            
           
            if(getAn.value == correct){
              alert.innerHTML="Super! poprawna odpowiedź";
            alert.style.color="green";
            document.querySelector("#"+correct).style.backgroundColor="green";
            document.querySelector("#"+correct).style.color="white";
            
              
            }
            else {
                alert.innerHTML="Niepoprawna odpowiedź! Poprawna odpowiedź to " + correct;
                document.querySelector("#"+getAn.value).style.backgroundColor="red";
                document.querySelector("#"+getAn.value).style.color="white";
                
                alert.style.color="red";
            }
            
           document.querySelectorAll("input").forEach(item => {
                item.disabled = true;
            document.querySelector(".check-btn").style.display="none";
            });

        }
        
        
         
        </script>
        HTML;
    }

    public static function AddFrom($path)
    {
        echo <<<HTML
        <form action="$path" method="POST">
            <fieldset>
                <legend>Autor</legend>
                <input type="text" name="autor" required>
            </fieldset>
            <fieldset>
                <legend>Cytat</legend>
                <textarea id="cytat" name="cytat" rows="5" cols="50"></textarea>
            </fieldset>
            <input type="submit" value="Dodaj">
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

