<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>madlibs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <img src="./madlibs.png" alt="madlibs">
    </div>
    <header>
        <ul><li><a href="index.php">Er heerst paniek...</a></li>
           
    </header>
    <main>
    <h2>Er heerst paniek...</h2>
            <form action="story1.php" method="post" id="form1">
            <label id="row1">Welk dier zou je nooit als huisdier willen?</label> <input type="text" name="question1"><br>
            <label id="row2">Wie is de belangrijkste persoon in je leven?</label> <input type="text" name="question2"><br>
            <label id="row3">In welk land zou je graag willen wonen?</label> <input type="text" name="question3"><br>
            <label id="row4">Wat doe je als je je verveelt?</label> <input type="text" name="question4"><br>
            <label id="row5">Met welk speelgoed speelde je als kind het meest?</label> <input type="text" name="question5"><br>
            <label id="row6">Bij welke docent spijbel je het liefst?</label> <input type="text" name="question6"><br>
            <label id="row7">Als je € 100.000,- had wat zou je dan kopen?</label> <input type="text" name="question7"><br>
            <label id="row8">Wat is je favoriete bezigheid?</label> <input type="text" name="question8"><br>
        </form>
        <button type="submit" form="form1" value="Submit">Versturen</button>
    </main>


</body>
</html>