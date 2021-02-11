<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
        // Aktuális dátum kiíratása PHP függvényhívással
        echo date("Y.M.d. H:m:s");
        ?>
    <br>
    <?php
        // Időszaknak megfelelő köszöntés a képernyőn PHP segítségével:
        // 05-09: jó reggelt, 10-17: jó napot, 18-04: jó estét
        $ora = date("H");
        switch ( $ora ) {
            case in_array($ora, range(0-4)): echo "jó estét"; break;
            case in_array($ora, range(5-9)): echo "jó reggel"; break;
            case in_array($ora, range(10-17)): echo "jó napot"; break;
            default: echo "jó napot";
        }

    ?>
</body>
</html>
