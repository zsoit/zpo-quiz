class Quiz {
    constructor() {
        this.correctColor = "green";
        this.incorrectColor = "red";
        this.points = 0;
    }

    getTrue() {
        const correctElements = document.querySelectorAll(".correct");

        correctElements.forEach((correct) => {
            let target = correct.getAttribute("target");
            let radio = document.getElementById(`radio${target}`);

            if (radio.checked) {
                document.getElementById(target).style.backgroundColor = this.correctColor;
                document.getElementById(target).style.color = "white";
            }

            const radioInputs = document.querySelectorAll('input[type="radio"]');
            radioInputs.forEach((radio) => {
                radio.disabled = true;
            });
        });
    }

    getAnswer(selector) {
        const elements = document.querySelectorAll(selector);
        return Array.from(elements).map((element) => element.value);
    }

    compareArraysAndAwardPoints(array1, array2) {
        let points = 0;

        if (array1.length !== array2.length) {
            console.error("Arrays must be the same length.");
            return points;
        }

        for (let i = 0; i < array1.length; i++) {
            if (array1[i] === array2[i]) {
                points++;
            }
        }

        return points;
    }

    showInfo() {
        const score = document.querySelector("#score");
        const question = document.querySelectorAll(".question");
        const btn = document.querySelector(".showInfoBtn");

        const check = this.getAnswer("input:checked");
        const correct = this.getAnswer(".correct");

        this.points = this.compareArraysAndAwardPoints(check, correct);

        score.innerHTML = `Uzyskałeś ${this.points} / 10 pkt`;
        btn.style.display = "none";
        this.getTrue();
    }

    Test() {
        const check = this.getAnswer("input:checked");
        const correct = this.getAnswer(".correct");
        console.log("The correct: " + correct + ", ");
        console.log("The checked: " + check + ", ");

        this.points = this.compareArraysAndAwardPoints(check, correct);
        console.log(`Uzyskałeś ${this.points} /10 pkt`);
    }

    addValueToArray(selector, array) {
        const element = document.querySelector(selector);

        if (element) {
            const value = element.value;
            array.push(value);
        }
    }

    changeColor(selector, color, info) {
        document.querySelector(selector).style.backgroundColor = color;
        document.querySelector(selector).style.color = "white";
    }

    checkQue() {
        const getAn = document.querySelector('input[name="answer"]:checked');
        const correct = document.querySelector("#correct").value;
        const alert = document.querySelector("#info");

        if (getAn.value == correct) {
            alert.innerHTML = "Super! poprawna odpowiedź";
            alert.style.color = this.correctColor;

            this.changeColor(`#${correct}`, this.correctColor);
        } else {
            alert.innerHTML = "Niepoprawna odpowiedź! Poprawna odpowiedź to " + correct;
            alert.style.color = this.incorrectColor;

            this.changeColor(`#${getAn.value}`, this.incorrectColor);
        }

        document.querySelectorAll("input").forEach((item) => {
            item.disabled = true;
            document.querySelector(".check-btn").style.display = "none";
        });
    }
}

const myQuiz = new Quiz();
