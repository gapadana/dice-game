<html>
<head>
    <meta name="author" content="Ali Ebrahiminejad, 9231909">
    <title>9231909</title>
    <style type="text/css">
        @font-face {
            font-family: font;
            src: url('fonts/Ico.woff') format('woff')
        }
        *{
            -webkit-user-select: none; /* Safari */
            -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* IE10+/Edge */
            user-select: none; /* Standard */
        }
        body {
            background-image: url("./img/bg.jpg");
            background-repeat:no-repeat;
            background-size:cover;
            background-position:center;
            font-family: font;
        }
        .box {
            padding: 40px;
            box-shadow: 0 4px 20px 5px rgba(19, 35, 47, 0.3);
            margin: 100px auto;
            width: 50%;
            height: 600px;
            background-color: #faf9f9;
            position: relative;
            z-index: 1;
        }
        .new {
            font-family: font;
            left: 50%;
            text-align: center;
            font-size: 30px;
            align: middle;
            position: absolute;
            z-index: 3;
        }
        .winScore {
            font-family: font;
            left: 50%;
            text-align: center;
            font-size: 25px;
            align: middle;
            top: 100px;
            color: #488b8f;
            position: absolute;
            z-index: 3;
        }
        .text{
            position: relative;
            left: -50%;
        }
        .left{
            background-color: #add2c9;
            left: 0px;
            top: 0px;
            width: 50%;
            height: 100%;
            position: absolute;
            z-index: 2;
        }
        .right{
            left: 50%;
            top: 0px;
            width: 50%;
            height: 100%;
            position: absolute;
            z-index: 2;
        }
        .player{
            left: 50%;
            font-family: font;
            font-size: 30px;
            position: absolute;
            text-align: center;
            top: 150px;
            text-transform: uppercase;
        }
        .number{
            left: 50%;
            font-family: font;
            font-size: 80px;
            position: absolute;
            text-align: center;
            top: 200px;
            color: #488b8f;
        }
        .score{
            left: 50%;
            width: 180px;
            font-family: font;
            font-size: 30px;
            position: absolute;
            text-align: center;
            top: 500px;
        }
        .score-content{
            background-color: #488b8f;
            position: relative;
            left: -50%;
            padding: 20px;
        }
        .num{
            color: #faf9f9;
            padding-top: 15px;
        }
        .dice1{
            top: 300px;
            left: 50%;
            align: middle;
            position: absolute;
            z-index: 3;

        }
        .dice2{
            top: 170px;
            left: 50%;
            align: middle;
            position: absolute;
            z-index: 4;

        }
        .dice-img{
            position: relative;
            left: -50%;
            box-shadow: 0 0 100px 5px rgba(19, 35, 47, 0.3);
        }
        .roll{
            font-family: font;
            left: 50%;
            text-align: center;
            font-size: 30px;
            align: middle;
            position: absolute;
            z-index: 3;
            top: 450px;
        }
        .hold{
            font-family: font;
            left: 50%;
            text-align: center;
            font-size: 25px;
            align: middle;
            position: absolute;
            z-index: 3;
            top: 500px;
        }
        .highscore{
            font-family: font;
            left: 50%;
            text-align: center;
            font-size: 25px;
            align: middle;
            position: absolute;
            z-index: 4;
            top: 550px;
        }
        .input{
            border-radius: 10px;
            background-color: #faf9f9;
            position: relative;
            left: -50%;
            border: 5px solid #5ea3a3;
            padding: 10px;
            z-index: 5;
            width: 100px;
            text-align: center;
        }
        .buttons:hover {
            cursor: pointer;
            -webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));
            filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));
        }
        .dot{
            right: 45px;
            float: right;
            top: 6px;
            align: top;
            position: absolute;
        }
    </style>
</head>
<body>
<div class="box">
    <div class="new">
        <div id="newB" class="text buttons">
            <img src="./img/plus.png" style="width:32px;height:32px;"> NEW GAME
        </div>
    </div>
    <div class="winScore">
        <div id="winScore" class="text">
            Win Score: 100
        </div>
    </div>
    <div class="dice1">
        <div id="dice1" class="dice-img"><img id="dice1Img" src="./img/dice-1.png" style="width:100px;height:100px;"> </div>
    </div>
    <div class="dice2">
        <div id="dice2" class="dice-img"><img id="dice2Img" src="./img/dice-1.png" style="width:100px;height:100px;"> </div>
    </div>
    <div class="roll">
        <div id="rollB" class="text buttons">
            <img src="./img/reload.png" style="width:32px;height:32px;"> ROLL DICE
        </div>
    </div>
    <div class="hold">
        <div id="holdB" class="text buttons">
            <img src="./img/hold.png" style="width:20px;height:20px;"> HOLD
        </div>
    </div>
    <div class="highscore">
        <input id="scoreI" type="number" placeholder="score" class="input" min="20" max="1000"/>
    </div>
    <div id="left" class="left">
        <div class="player">
            <div id="player1" class="text">PLAYER 1</div><img id="dotp1" class="dot" src="./img/dot.png" style="width:16px;height:16px;">
        </div>
        <div class="number">
            <div id="p1-score" class="text">0</div>
        </div>
        <div class="score">
            <div class="score-content">
                <div>CURRENT</div>
                <div id="p1-current" class="num">2</div>
            </div>
        </div>
    </div>
    <div id="right" class="right">
        <div class="player">
            <div id="player2" class="text">PLAYER 2</div><img id="dotp2" class="dot" src="./img/dot.png" style="width:16px;height:16px;">
        </div>
        <div class="number">
            <div id="p2-score" class="text">0</div>
        </div>
        <div class="score">
            <div class="score-content">
                <div>CURRENT</div>
                <div id="p2-current" class="num">0</div>
            </div>
        </div>
    </div>
</div>
<script>
    var p1Name = "player 1";
    var p2Name = "player 2";
    var maxScore = 1000;
    var turn = 1;
    var first6 = false;
    var gameFinished = false;
    startNewGame();
    document.getElementById('newB').addEventListener("click", startNewGame);
    document.getElementById('rollB').addEventListener("click", rollDice);
    document.getElementById('holdB').addEventListener("click", doHold);

    alert("RULES:\n     .Press ROLL DICE to roll 2 dices.\n     .If u get a double '1' you will lose all current score.\n     .If u got 2 double 6 continusly u will lose all current score.\n     .You can hold all your current score by pressing hold.\n     .First player reach score 1000 will win.\n     .You can change win score by seting your ideal score in the input and press NEW GAME.");

    function generateRandomNumber(max) {
        let random_number = Math.random() * max + 1
        return Math.floor(random_number);
    }

    function startNewGame(){

        document.getElementById("player1").innerText = p1Name;
        document.getElementById("player1").style.color = "#000";
        document.getElementById("player2").innerText = p2Name;
        document.getElementById("player2").style.color = "#000";

        document.getElementById('p1-score').innerText = 0;
        document.getElementById("p2-score").innerText = 0;
        document.getElementById("p1-current").innerText = 0;
        document.getElementById("p2-current").innerText = 0;
        var dice1 = document.getElementById("dice1");
        var dice2 = document.getElementById("dice2");
        dice1.style.display = "none";
        dice2.style.display = "none";
        document.getElementById("left").style.backgroundColor = "#add2c9";
        document.getElementById("right").style.backgroundColor = "#ffffff";
        turn = 1;

        var myInput = document.getElementById("scoreI");
        if (myInput && myInput.value) {
            maxScore = parseInt(myInput.value)
        }
        document.getElementById("winScore").innerText = "Win Score: " + maxScore;
        document.getElementById("dotp2").style.display = "none";
        document.getElementById("dotp1").style.display = "initial";
        gameFinished = false;

    }

    document.getElementById('newB').addEventListener("click", startNewGame);

    function doHold(){
        hold();
        changeTurn();
    }

    function hold(){
        if(gameFinished)
            return;
        var p1Current = document.getElementById("p1-current");
        var p2Current = document.getElementById("p2-current");
        var p1Score = document.getElementById('p1-score');
        var p2Score = document.getElementById("p2-score");
        p1Score.innerText = parseInt(p1Score.innerText) + parseInt(p1Current.innerText);
        p2Score.innerText = parseInt(p2Score.innerText) + parseInt(p2Current.innerText);
        p1Current.innerText = 0;
        p2Current.innerText = 0;
        if(parseInt(p1Score.innerText) >= maxScore){
            document.getElementById("player1").innerText = "Winner!";
            document.getElementById("player1").style.color = "#488b8f";
            gameFinished = true;
        }
        else if(parseInt(p2Score.innerText) >= maxScore){
            document.getElementById("player2").innerText = "Winner!";
            document.getElementById("player2").style.color = "#488b8f";
            gameFinished = true;
        }
        if(gameFinished){
            document.getElementById("dotp2").style.display = "none";
            document.getElementById("dotp1").style.display = "none";
        }
    }

    function changeTurn(){
        if(gameFinished)
            return;
        first6 = false;
        if(turn == 1){
            document.getElementById("right").style.backgroundColor = "#add2c9";
            document.getElementById("left").style.backgroundColor = "#ffffff";
            document.getElementById("dotp1").style.display = "none";
            document.getElementById("dotp2").style.display = "initial";
            turn = 2;
        }else{
            document.getElementById("left").style.backgroundColor = "#add2c9";
            document.getElementById("right").style.backgroundColor = "#ffffff";
            document.getElementById("dotp2").style.display = "none";
            document.getElementById("dotp1").style.display = "initial";
            turn = 1;
        }
    }

    function update(dice, number){
        var srcDice = "./img/dice-" + number + ".png";
        var diceDiv = document.getElementById(dice);
        var dice = document.getElementById(dice+"Img");
        dice.src = srcDice;
        diceDiv.style.display = "initial";
    }

    function rollDice(){
        if(gameFinished)
            return;
        var rand1 = generateRandomNumber(6);
        var rand2 = generateRandomNumber(6);
        update("dice1", rand1);
        update("dice2", rand2)

        if(rand1 == 1 && rand2 == 1){
            document.getElementById("p1-current").innerText = 0;
            document.getElementById("p2-current").innerText = 0;
            changeTurn();
            return;
        }else if(rand1 == 6 && rand2 == 6){
            if(!first6){
                first6 = true;
            }else{
                document.getElementById("p1-current").innerText = 0;
                document.getElementById("p2-current").innerText = 0;
                first6 = false;
                changeTurn();
                return;
            }
        }else{
            first6 = false;
        }
        if(turn == 1){
            var p1Current = document.getElementById("p1-current");
            p1Current.innerText = parseInt(p1Current.innerText) + rand1 + rand2;
        }else{
            var p2Current = document.getElementById("p2-current");
            p2Current.innerText = parseInt(p2Current.innerText) + rand1 + rand2;
        }
    }

</script>
</body>
</html>