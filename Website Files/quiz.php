<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>
<body>
    <!--Timer-->
    <h3 id="timer" class="hidden" style="text-align: right;padding-right: 2%;padding-top: 2%;"></h3>
    <!--Start Menu-->
    <div class="contentdiv">
        <div id="startMenu">
            <div class="M_Title">
                <h1 id="title1">Football</h1>
                <h2 id="title2">Quiz</h2>
            </div>
            <div class="centerDiv">
                </br><input id="startBtn" type="button" onclick="description()" value="START" class="button btnDesign">
            </div>
        </div>
    </div>
    <!--Description Menu-->
    <div class="contentdiv">
        <div id="rules" class="hidden">
            <center><h2 style="font-size: 120px;">Rules</h2><br></center>
            <ul>
                <li><h4>10 Football Quiz will be given to you</h4><br></li>
                <li><h4>For each correct answers 2 points will be given and for a wrong answer 1 point will get detected</h4></li>
                <li><h4>If the answer is correct background colour changes to green else it changes to red </h4></li>
                <li><h4>This game is time limited and it should be finished within 60 seconds</h4></li>
                <li><h4>Points will be given after the game time</h4><br><br><br></li>
            </ul>
            <center><input id='startDes' type="button" onclick="startQuiz()" value="Start Game" class="button btnDesign"></center>";
        </div>
    </div>
    <!--Question Menu-->
    <div class="contentdiv">
        <div id="questionMenu" class="centerDiv">
            <h3 id="questions"></h3>
            <div id="radioButtons" class="hidden">
                <table align="center">
                    <tr><td><input type="radio" name="questions" value="1"><h4 id="q_1"></h4></br></td></tr>
                    <tr><td><input type="radio" name="questions" value="2"><h4 id="q_2"></h4></br></td></tr>
                    <tr><td><input type="radio" name="questions" value="3"><h4 id="q_3"></h4></br></td></tr>
                    <tr><td><input type="radio" name="questions" value="4"><h4 id="q_4"></h4></br></td></tr>
                </table>
            </div></br>
            <!--<h3 id="timer" class="hidden" style="text-align: center;"></h3>-->
        </div>
    </div>
    <!--Final Answers Menu-->
    <div class="contentdiv">
        <div id="resultsMenu" class="hidden">
            <h2 id="results"></h2>

            <h3 id="ques_0"></h3><h4 id="answ_0"></h4></br><h4 id="giv_0"></h4>
            <h3 id="ques_1"></h3><h4 id="answ_1"></h4></br><h4 id="giv_1"></h4>
            <h3 id="ques_2"></h3><h4 id="answ_2"></h4></br><h4 id="giv_2"></h4>
            <h3 id="ques_3"></h3><h4 id="answ_3"></h4></br><h4 id="giv_3"></h4>
            <h3 id="ques_4"></h3><h4 id="answ_4"></h4></br><h4 id="giv_4"></h4>
            <h3 id="ques_5"></h3><h4 id="answ_5"></h4></br><h4 id="giv_5"></h4>
            <h3 id="ques_6"></h3><h4 id="answ_6"></h4></br><h4 id="giv_6"></h4>
            <h3 id="ques_7"></h3><h4 id="answ_7"></h4></br><h4 id="giv_7"></h4>
            <h3 id="ques_8"></h3><h4 id="answ_8"></h4></br><h4 id="giv_8"></h4>
            <h3 id="ques_9"></h3><h4 id="answ_9"></h4></br><h4 id="giv_9"></h4>
        </div>
    </div>
</body>
<style>
    @font-face {
        font-family: 'Gotham';
        src: url('fonts/Gotham Bold.otf');
    }
    @font-face {
        font-family: 'Gotham-Light';
        src: url('fonts/Gotham XLight.otf');
    }
    body{
        background-color: white;
    }
    .btnDesign{
        background-color: #216bbd;
        color: white;
        border: none;
        padding: 12px 50px;
        text-align: center;
        text-decoration: none;
        font-family: 'Gotham';
        display: inline-block;
        font-size: 25px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }
    .btnDesign:hover{
        background-color: #eb3e38;
        border: none;
        color: white;
    }
    .centerDiv {
        margin: auto;
        text-align: center;
    }
    .M_Title{
        text-align: center;
        padding-top: 12%;
    }
    h1 {
        color: #eb3e38;
        font-family: Gotham;
        font-size: 150px;
        display:inline;
    }
    h2 {
        color: #eb3e38;
        font-family: Gotham-Light;
        font-size: 150px;
        display:inline;
    }
    h3 {
        color: #0d0d0d;
        font-family: Gotham-Light;
        font-size: 40px;
    }
    h4 {
        color: #0d0d0d;
        font-family: Gotham-Light;
        display:inline;
        font-size: 30px;
    }
    li{
        padding-left: 6%;
        padding-top: 2%;
    }
    .hidden {
        display: none;
        margin: auto;
        text-align: left;
    }
    .visible {
        display: block;
        margin: auto;
        text-align: left;
    }
</style>
<script>
    var quiz_button = "<input id='startQuiz' type=\"button\" onclick=\"startQuestions()\" value=\"Next\" class=\"btnDesign\">";
    //var des_button = "<center><input id='startDes' type=\"button\" onclick=\"startQuiz()\" value=\"Start Game\" class=\"btnDesign\"></center>";
    function startQuiz(){
        //This function hides the description Menu and show the timer and question menu
        document.getElementById("rules").setAttribute('class','hidden');
        document.getElementById("radioButtons").setAttribute('class', 'visible');
        document.getElementById("timer").setAttribute('class', 'visible');
        document.getElementById("questionMenu").innerHTML += quiz_button;
        startQuestions();
        timer();
    }
    function description() {
        //Visible Start Menu division (Title,Button)
        document.getElementById("startMenu").style.display = 'none';
        document.getElementById("rules").setAttribute('class', 'visible');
        //document.getElementById("rules").innerHTML += des_button;

    }

    var counter = 0;
    var questions = [
            "Who won the 2015 FIFA ballon d'or ?",
            "Which team won Champions League 2015/16 ?",
            "Which team was won BPL (Barclays Premier League) without losing a match in season?",
            "Who won the Golden Ball in FIFA World Cup 2014?",
            "Who is the only player to have scored in a Champions League final, FA Cup final, UEFA Cup final and League Cup final?",
            "Which team has won UEFA EURO 2016?",
            "Which city has the most clubs competing in its country's top division?",
            "Which club has won the most Serie A titles?",
            "Who were the last French club to play in a Champions League final?",
            "Which country finished fourth in the World Cup in 2014?"
    ];
    var answers = ["2","2","4","1","4","1","2","4","1","2"];//Correct answers No.
    var users_answers = [];
    var answers = [[" Cristiano Ronaldo", " Lionel Messi", " Neymar Júnior", " Manuel Neuer"],
        [" Real Madrid", " Barcelona", " Liverpool", " Bayern Munich"],
        [" Chelsea", " Manchester United", " Liverpool", " Arsenal"],
        [" Lionel Messi", " Karim Benzema", " James Rodriguez", " Arjen Robben"],
        [" Wayne Rooney", " Frank Lampard", " Didier Drogba", " Steven Gerrard"],
        [" Portugal", " Spain", " France", " Italy"],
        [" Moscow", " London", " Tokyo", " Rome"],
        [" Inter Milan", " Milan", " Roma", " Juventus"],
        [" AS Monaco", " Saint-Étienne", " Marseille", " Paris Saint-Germain"],
        [" Argentina", " Brazil", " Holland", " Italy"]
    ];//All answers
    var quizFinished = false;

    function startQuestions() {
        //Checks the Question No.(counter) and pass an argument [counter] to displayQandA function add 1 for counter
        if(counter == 0) {
            displayQandA(answers[counter]);
            counter++;
        } else if (counter > 0 && counter < 10) {
            checkAnswers();
            displayQandA(answers[counter]);
            counter++;
        } else {
            checkAnswers();
            quizFinished = true;
            showMarks();
            counter++;
        }
    }
    //This function gets counter and displays question & answer according to counter
    //Eg- (If it gets 2 it will display 2nd question and 2 arrays (2D array) 1,2,3 and 4 th answers
    function displayQandA(answers) {
        document.getElementById("questions").innerHTML = questions[counter];//Question
        document.getElementById("q_1").innerHTML = answers[0];//Answers
        document.getElementById("q_2").innerHTML = answers[1];
        document.getElementById("q_3").innerHTML = answers[2];
        document.getElementById("q_4").innerHTML = answers[3];
    }
    /*In this function first it gets answer radio buttons then checks whether it checked or not if it checked then it
    assure the answer is correct or not if yes add 2 marks else deduct 1 marks if the answer wasn't given it add 0 marks */
    function checkAnswers() {
        var c = 0;
        var answers = document.getElementsByName('questions');
        //Correct answer list
        var q_answers = ["0","2","2","4","1","4","1","2","4","1","2"];
        for(var i = 0 ; i < answers.length ; i++){
            //Checks radio button is checked
            if(answers[i].checked == true){
                //Adds to users answer array
                users_answers.push(answers[i].value);
                //Checks given answer with correct answer
                if((answers[i].value) == q_answers[counter]){
                    changeBGToGreen()
                } else {
                    changeBGToRed();
                }
                //Un check all radio button
                answers[i].checked = false;
                c++;
            }
        }
        if(c < 1){
            //If answer wasn't given adds 0
            users_answers.push(0);
        }
    }
    //After all quiz answer marked this function starts it hide the timer and question and shows the result
    function showMarks() {
        document.getElementById("timer").setAttribute('class', 'hidden');
        document.getElementById("questionMenu").setAttribute('class', 'hidden');
        document.getElementById("resultsMenu").setAttribute('class', 'M_Title');

        var CorrectAnswers = ["2","2","4","1","4","1","2","4","1","2"];
        var marks = 0;
        for(var i = 0 ; i < CorrectAnswers.length ; i++){
            //Compares given answers and correct answers
            if(users_answers[i] == CorrectAnswers[i]){
                marks += 2;
            } else if (users_answers[i] == 0){
                marks += 0;
            } else {
                marks -= 1;
            }
        }

        var ques = "ques_";
        var x,cr_id,gi_id,answ;
        for(var i = 0 ; i < answers.length ; i++){
            //Shows Question
            document.getElementById(ques+(i)).innerHTML = questions[i];
            //Shows Correct answers
            cr_id = "answ_"+(i);
            answ = parseInt(CorrectAnswers[i]);
            x = (answ - 1);
            document.getElementById(cr_id).innerHTML = "Correct Answer - "+answers[i][x];
            //Shows Given answers
            gi_id = "giv_"+(i);
            answ = parseInt(users_answers[i]);
            x = parseInt(answ - 1);
            if(x == -1){
                document.getElementById(gi_id).innerHTML = "Answer wasn't given";
            } else {
                document.getElementById(gi_id).innerHTML = "Given Answer - "+answers[i][x];
            }

        }
        //Changes body bg color according to marks
        if(marks >= 15){
            //Green
            document.body.style.backgroundColor = "#007f00";
        } else if (marks >= 10) {
            //Blue
            document.body.style.backgroundColor = "#000066";
        } else if (marks >= 5) {
            //Orange
            document.body.style.backgroundColor = "#cc8400";
        } else if (marks > 0) {
            //Grey
            document.body.style.backgroundColor = "#696969";
        } else {
            //Red
            document.body.style.backgroundColor = "#7f0000";
        }
        //Shows marks
        document.getElementById("results").innerHTML = "Your Mark is "+ marks+ " "
        +"<div class=centerDiv><a href=home.php><input id=startBtn type=button value=OK class=btnDesign></a></div>"+
        "<a>Answers</a><br/>";
    }
    var seconds_left = 15;
    //Timer Runs until 60 seconds if users couldn't finish within 60 seconds it ends the program and show marks user until finished
    function timer() {
        var interval = setInterval(function() {
            document.getElementById('timer').innerHTML = "Seconds Left "+--seconds_left;

            if (seconds_left == 0)
            {
                document.getElementById('timer').innerHTML = 'Time finished';
                if(quizFinished == false) {
                    showMarks();
                }
                clearInterval(interval);
            }
        }, 1000);
    }
    function changeBGToRed() {
        var redColor = ["#ff0000","#ff1919","#ff3232","#ff4c4c","#ff6666","#ff7f7f","#ff9999","#ffb2b2","#ffcccc","#ffe5e5","#ffffff"];
        var counter = 0;
        var interval = setInterval(function() {
            ++counter;
            document.body.style.backgroundColor = redColor[counter];
            if (counter > 10)
            {
                clearInterval(interval);
            }
        }, 40);
    }
    function changeBGToGreen() {
        var greenColor = ["#00ff00","#19ff19","#32ff32","#4cff4c","#66ff66","#7fff7f","#99ff99","#b2ffb2","#ccffcc","#e5ffe5","#ffffff"];
        var counter = 0;
        var interval = setInterval(function() {
            ++counter;
            document.body.style.backgroundColor = greenColor[counter];
            if (counter > 10)
            {
                clearInterval(interval);
            }
        }, 40);
    }
    function changeBGToBlue() {
        var blueColor = ["#0000ff","#0000e5","#0000cc","#0000b2","#000099","#00007f","#000066","#00004c","#000033","#000019","#ffffff"];
        var counter = 0;
        var interval = setInterval(function() {
            ++counter;
            document.body.style.backgroundColor = blueColor[counter];
            if (counter > 10)
            {
                clearInterval(interval);
            }
        }, 40);
    }
</script>
</html>