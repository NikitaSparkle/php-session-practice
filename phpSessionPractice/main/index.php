<?php
session_id('2b0ts5toa1figmt8gtkt0bi5lm');
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Session Practice</title>
    <link href="style.css">
</head>
<body>

<?php

if(isset($_SESSION) and isset($_SESSION['connections'])) {

    if ($_SESSION['connections'] <= 5) {
        $_SESSION['connections'] = $_SESSION['connections'] + 1;
        echo'<div class="background_red"><p>Connections:'.$_SESSION['connections'].'</p></div>';
    }

    if ($_SESSION['connections'] > 5 and $_SESSION['connections'] < 10) {
        $_SESSION['connections'] = $_SESSION['connections'] + 1;
        echo '<div class="background_green"> <p>Connections:' . $_SESSION['connections'] . '</p> </div>';
        }

    if ($_SESSION['connections'] >= 10) {
        $_SESSION['connections'] = $_SESSION['connections'] + 1;
        echo '<div class="background_white"> <p>Connections:' . $_SESSION['connections'] . '</p> </div>';
        session_destroy();
    }

}
else{
    $_SESSION['connections'] = 0;
}

?>
</body>
</html>