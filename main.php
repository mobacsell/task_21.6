<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>task_21.6 - Сайт-визитка</title>
</head>
<body>
    <header class="header">
        <div class="header__wrapper">
            <?php
            include "logo.inc.php";
            include "menu.inc.php";
            ?>
        </div>
    </header>

    <main>
        <section class="about">
            <div class="about__wrapper">
                <h1 class="about-title">
                    <?php
                    echo $greetings;
                    ?>
                </h1>

                <div class="about-data">
                    <?php
                    echo '<img src="img/me.jpg" class="about-data__img">';
                    ?>
                    <p class="about-data__text">Меня зовут <?php echo "$surname $name" ?>.<br>
                    Мне <?php echo "$age года" ?>, я из города <?php echo $city ?>.<br>
                    В этом модуле мы научились создавать переменные, а также изучили основы языка PHP.</p>
                </div>
            </div>
        </section>

        <section class="knowledge">    
            <h2 class="knowledge__title">Полученные знания</h2>
            <?php
            include 'knowledge.inc.php';
            ?>
        </section>
    </main>

    <?php
    include 'footer.inc.php'
    ?>
</body>
</html>
