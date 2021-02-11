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
            case in_array($ora, range(0,4)): echo "jó estét"; break;
            case in_array($ora, range(5,9)): echo "jó reggel"; break;
            case in_array($ora, range(10,17)): echo "jó napot"; break;
            default: echo "jó napot";
        }
    ?>
</p>

    <?php
        // 10*10-es szorzótábla kiíratása a képernyőre PHP segítségével, HTML táblázatban
        ?>
    <table border="1px">
        <thead>
            <tr>
                <th colspan="11">Szorzótábla</th>
            </tr>
        </thead>
        <tbody>
        <tr style="background-color: #ccc">
        <?php
        for ($i = 0; $i <= 10; $i++) {
        ?>
                <td><?php echo $i; ?></td>
        <?php
        }
        ?>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
        ?>
            <tr>
                <td style="background-color: #ccc"><?php echo $i; ?></td>
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

<?php
// Egyszerű számológép készítése HTML űrlap és PHP felhasználásával.
$total = "";
$n1 = "";
$n2 = "";
if(isset($_POST['submit'])) {
    if(is_numeric($_POST['n1']) && is_numeric($_POST['n2'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        if($_POST['op'] == '+')
            $total = $_POST['n1'] + $_POST['n2'];

        if($_POST['op'] == '-')
            $total = $_POST['n1'] - $_POST['n2'];

        if($_POST['op'] == '*')
            $total = $_POST['n1'] * $_POST['n2'];

        if($_POST['op'] == '/')
            $total = $_POST['n1'] / $_POST['n2'];
    } else {
        echo 'Hiba';
    }
}
?>
    <form method="post" action="index.php">
        <input name="n1" type="text" value="<?php echo $n1; ?>">
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input name="n2" type="text" value="<?php echo $n2; ?>">
        <input name="submit" type="submit" value="=">
        <span><?php echo $total; ?></span>
    </form>

</body>
</html>
