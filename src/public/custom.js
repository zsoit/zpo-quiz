function getTrue() {
    const correctElements = document.querySelectorAll(".correct");

    correctElements.forEach(function (correct) {
        let target = correct.getAttribute("target");


        let radio = document.getElementById(`radio${target}`);

        if(radio.checked){
            document.getElementById(target).style.backgroundColor = "green";
            document.getElementById(target).style.color = "white";

        }

        // disabled
        const radioInputs = document.querySelectorAll('input[type="radio"]');
        radioInputs.forEach(function (radio) {
            radio.disabled = true;
        });


    });
}

getTrue();



function getAnswear(selector){
    const elements = document.querySelectorAll(selector);
    return Array.from(elements).map(element => element.value);

}

function getPoints() {
    const check = getAnswear("input:checked");
    const correct = getAnswear(".correct");

    const point = compareArraysAndAwardPoints(check, correct);

   return `Uzyskałeś ${point} /10 pkt`;


}



function showInfo(){
    const score = document.querySelector("#score");
    const question = document.querySelectorAll(".question");
    const btn =  document.querySelector(".showInfoBtn");

    const points = getPoints();

    score.innerHTML = points;
    // question.forEach(item => item.style.display="none");
    btn.style.display="none";
    getTrue();


}


function Test(){
    const check = getAnswear("input:checked");
    const correct = getAnswear(".correct");
    console.log("The correct: " + correct + ", ");
    console.log("The checked: " + check + ", ");

    const points = getPoints();
    console.log(points);

}

function addValueToArray(selector, array) {
    const element = document.querySelector(selector);

    if (element) {
        const value = element.value;
        array.push(value);
    }
}


function compareArraysAndAwardPoints(array1, array2) {
    let points = 0;
    if (array1.length !== array2.length) {
        console.error("Arrays must be the same lenght!.");
        return points;
    }


    for (let i = 0; i < array1.length; i++) {
        if (array1[i] === array2[i]) {
            points++;
        }
    }

    return points;
}


function changeColor(selector,color,info){
    document.querySelector(selector).style.backgroundColor=color;
    document.querySelector(selector).style.color="white";
}


function checkQue(){
    const getAn = document.querySelector('input[name="answer"]:checked');
    const correct = document.querySelector("#correct").value;
    const alert = document.querySelector("#info");


    if(getAn.value == correct){
        alert.innerHTML="Super! poprawna odpowiedź";
        alert.style.color="green";


        changeColor(`#${correct}`,"green");


    }
    else {
        alert.innerHTML="Niepoprawna odpowiedź! Poprawna odpowiedź to " + correct;
        alert.style.color="red";

        changeColor(`#${getAn.value}`,"red");


    }

    document.querySelectorAll("input").forEach(item => {
        item.disabled = true;
        document.querySelector(".check-btn").style.display="none";
    });

}