function CorrectAnswears(){
    const elements = document.querySelectorAll(".correct");
    const valuesArray = Array.from(elements).map(element => element.value);
    console.log("The correct: " + valuesArray + ", ");


}

function CheckAnswear(){
    const elements = document.querySelectorAll("input:checked");
    const valuesArray = Array.from(elements).map(element => element.value);
    console.log("The checked: " + valuesArray + ", ");

}

function addValueToArray(selector, array) {
    const element = document.querySelector(selector);

    if (element) {
        const value = element.value;
        array.push(value);
    }
}


function compareArraysAndAwardPoints(array1, array2) {
    if (array1.length !== array2.length) {
        console.error("Tablice muszą mieć taką samą długość.");
        return 0;  // Jeżeli tablice mają różne długości, nie dodajemy punktów
    }

    let points = 0;

    for (let i = 0; i < array1.length; i++) {
        if (array1[i] === array2[i]) {
            points++;
        }
    }

    return points;
}


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