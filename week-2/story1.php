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
        <ul><li><a href="index.php">Er heerst paniek...<a href=""></a></li><li><a href="index2.php">Onkunde</a></li></ul>
    </header>
    <main>
        <h2>Er heerst paniek...</h2>
        <p>Er heerst paniek in het koninkrijk <?php echo $_POST['question3']; ?>. Koning <?php echo $_POST['question6']; ?> is ten einde raad en als koning <?php echo $_POST['question6']; ?> ten einde raad is, dan roept hij zijn ten-einderaadsheer <?php echo $_POST['question2']; ?>.</p>
        <p>"<?php echo $_POST['question2']; ?>! Het is een ramp! Het is een schande!"</p>
        <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
        <p>"Mijn <?php echo $_POST['question1']; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST['question5']; ?> voor hem gekocht!"</p>
        <p>"Majesteit, uw <?php echo $_POST['question1']; ?> komt vast vanzelf weer terug?"</p>
        <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['question8']; ?> leren?"</p>
        <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST['question7']; ?> voor gebruiken."</p>
        <p>"<?php echo $_POST['question2']; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
        <p>"<?php echo $_POST['question4']; ?>, Sire."</p>
    </main>

    <footer>De website is gemaakt door <?php echo $_POST['question2']; ?>.</footer>


</body>
</html>