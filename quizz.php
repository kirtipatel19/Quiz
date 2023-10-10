<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
        .box{
            border: 2px solid black;
            background-color: darkseagreen;
            margin: 50px 220px 50px 220px ;
            padding: 100px 100px 100px 100px ;
            text-align: center;
        }
        .question{
            color: black;
            font-family: cursive;
            font-weight: 35px;
            font-size: 25px;
        }
        .options{
            color: green;
            font-family: cursive;
            font-size: 30px;
            font-weight: 30px;
        }
        #btn{
            width: 30%;
            height: auto;
            color: darkblue;
            text-decoration-color: white;
            font-size: 20px;
        }
    </style>
</head>

<body>
	<div class="box">
		<h1>QUIZ</h1>
		<div class="question" id="ques"></div>
		<div class="options" id="opt"></div>
		<button onclick="checkAns()" id="btn">SUBMIT</button>
		<div id="score"></div>
		<script>
        
        
        // Questions 
const Questions = [{
	q: "Which tag is used for table?",
	a: [{ text: "<table>", isCorrect: true},
	{ text: "<tr>", isCorrect: false },
	{ text: "<td>", isCorrect: false},
	{ text: "<th>", isCorrect: false }
	]

},
{
	q: "Which tag is used for break the line?",
	a: [{ text: "<hr>", isCorrect: false, isSelected: false },
	{ text: "<h1>", isCorrect: false },
	{ text: "<tr>", isCorrect: false },
	{ text: "<br>", isCorrect: true }
	]

},
{
	q: "HTML stands for ",
	a: [{ text: "High transfer markup language", isCorrect: false },
	{ text: "High text markup langugae", isCorrect: false },
	{ text: "Hyper text markup language", isCorrect: true },
	{ text: "Hyper text markup label", isCorrect: false }
	]

},
                   {
	q: "Which tag is used for paragraph?",
	a: [{ text: "<header>", isCorrect: false },
	{ text: "<div>", isCorrect: false },
	{ text: "<p>", isCorrect: true },
	{ text: "<span>", isCorrect: false }
	]

},{
	q: "Which tag is use for hyperlink in HTML? ",
	a: [{ text: "<a>", isCorrect: true},
	{ text: "<link>", isCorrect: false},
	{ text: "<href>", isCorrect: false },
	{ text: "<mark>", isCorrect: false }
	]

},

]

let currQuestion = 0
let score = 0

function loadQues() {
	const question = document.getElementById("ques")
	const opt = document.getElementById("opt")

	question.textContent = Questions[currQuestion].q;
	opt.innerHTML = ""

	for (let i = 0; i < Questions[currQuestion].a.length; i++) {
		const choicesdiv = document.createElement("div");
		const choice = document.createElement("input");
		const choiceLabel = document.createElement("label");

		choice.type = "radio";
		choice.name = "answer";
		choice.value = i;

		choiceLabel.textContent = Questions[currQuestion].a[i].text;

		choicesdiv.appendChild(choice);
		choicesdiv.appendChild(choiceLabel);
		opt.appendChild(choicesdiv);
	}
}

loadQues();

function loadScore() {
	const totalScore = document.getElementById("score")
	totalScore.textContent = `You scored ${score} out of ${Questions.length}`
}


function nextQuestion() {
	if (currQuestion < Questions.length - 1) {
		currQuestion++;
		loadQues();
	} else {
		document.getElementById("opt").remove()
		document.getElementById("ques").remove()
		document.getElementById("btn").remove()
		loadScore();
	}
}

function checkAns() {
	const selectedAns = parseInt(document.querySelector('input[name="answer"]:checked').value);

	if (Questions[currQuestion].a[selectedAns].isCorrect) {
		score++;
		console.log("Correct")
		nextQuestion();
	} else {
		nextQuestion();
	}
}

        
        </script>
	</div>

</body>

</html>
