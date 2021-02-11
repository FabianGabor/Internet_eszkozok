<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>

    <style type="text/css">
        .text-center {
            text-align: center; }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1rem;
            border-radius: 0; }
        thead,
        tbody,
        tfoot {
            border: 1px solid #f1f1f1;
            background-color: #fefefe; }
        thead {
            background: #f8f8f8;
            color: #0a0a0a; }
        thead tr,
        tfoot tr {
            background: transparent; }
        thead th,
        thead td {
            padding: 0.5rem 0.625rem 0.625rem;
            font-weight: bold;}
        tbody th,
        tbody td {
            padding: 0.5rem 0.625rem 0.625rem; }
        tbody tr:nth-child(even) {
            border-bottom: 0;
            background-color: #f1f1f1; }
        table.unstriped tbody {
            background-color: #fefefe; }
        table.unstriped tbody tr {
            border-bottom: 0;
            border-bottom: 1px solid #f1f1f1;
            background-color: #fefefe; }
    </style>
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

        /*
        for ($ora = 0; $ora <=23; $ora++) {
            switch ( $ora ) {
                case in_array($ora, range(5,9)):
                    echo $ora . " Jó reggel!"; break; // valamilyen okbol a 0 ertekre ide ugrik...
                case in_array($ora, range(10,17)):
                    echo $ora . " Jó napot!"; break;
                default:
                    echo $ora . " Jó estét!";
            }
            echo '<br>';
        }
        */

        //for ($ora = 0; $ora <=23; $ora++) {
            if (in_array($ora, range(5,9)))
                echo
                    //$ora .
                    " Jó reggel!";
            else
                if (in_array($ora, range(10,17)))
                    echo
                        //$ora .
                        " Jó napot!";
                else echo
                    //$ora .
                    " Jó estét!";
        //}
    ?>
</p>
<?php
    // 10*10-es szorzótábla kiíratása a képernyőre PHP segítségével, HTML táblázatban
    ?>
<table class="text-center">
    <thead>
        <tr>
            <th></th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
        ?>
            <th><?php echo $i; ?></th>
        <?php
        }
        ?>
        </tr>
    </thead>
<tbody>
    <?php
    for ($i = 1; $i <= 10; $i++) {
    ?>
        <tr>
            <th><?php echo $i; ?></th>
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

    <form id="jqueryForm">
        <input id="n1" name="n1" type="text">
        <select id="op2" name="op2">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input id="n2" name="n2" type="text">
        <button id="submit2"> = </button>
        <input id="result" type="text">
    </form>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
<script src="calculator.js"></script>
</html>
