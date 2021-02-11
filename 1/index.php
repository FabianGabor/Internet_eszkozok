<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<p>
    <?php
        // Aktuális dátum kiíratása PHP függvényhívással
        echo date("Y.M.d. H:m:s");
        ?>
</p>
<p>
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
</p>
<p>
    <?php
        // 10*10-es szorzótábla kiíratása a képernyőre PHP segítségével, HTML táblázatban
        ?>
    <table>
        <thead>
            <tr>
                <th colspan="10">Szorzótábla</th>
            </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
        ?>
            <tr>
                <?php
                for ($j = 1; $j <= 10; $j++) {
                ?>
                <td><?php echo $i*$j; ?></td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</p>
</body>
</html>
