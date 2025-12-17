<?php
session_start();
if (!empty($_POST)) {
    if (isset($_POST["home"]) && $_POST["home"] === "Home") {
        header("Location: ../index.php");
    } else if (isset($_POST["invia"])) {
        if (isset($_POST["righe"]) && isset($_POST["colonne"]) && isset($_POST["contenuto"])) {
            $_SESSION["righe"] = $_POST["righe"];
            $_SESSION["colonne"] = $_POST["colonne"];
            $_SESSION["contenuto"] = $_POST["contenuto"];
        }
    } else if (isset($_POST["destroy"])) {
        session_unset();
        session_destroy();
    } else {
        header("Location: ../index.php");
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabella Sessione</title>
    <style>
        div {
            margin-top: 20px;
        }

        form {
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<h1>DATI TABELLA</h1>
<form action="" method="post">
    <div>
        <label for="righe">Righe</label>
        <input name="righe" id="righe" type="number" min="1" max="20">
    </div>
    <div>
        <label for="colonne">Colonne</label>
        <input name="colonne" id="colonne" type="number" min="1" max="20">
    </div>
    <div>
        <div>
            <label for="contenuto">Contenuto</label>
            <input name="contenuto" id="contenuto" type="text">
        </div>
    </div>

    <div>
        <input type="submit" value="Invia" name="invia">
        <input type="submit" value="Home" name="home">
        <input type="submit" value="Destroy" name="destroy">
    </div>
</form>


<?php
if (!empty($_SESSION) && isset($_SESSION["righe"]) && isset($_SESSION["colonne"]) && isset($_SESSION["contenuto"])):
    $contatore = 0
    ?>

    <table>
        <?php
        for ($i = 0; $i < $_SESSION["righe"]; $i++):
            ?>
            <tr>
                <?php
                for ($j = 0; $j < $_SESSION["colonne"]; $j++):
                    ?>
                    <td>
                        <?= $_SESSION["contenuto"] . " - " . $contatore++ ?>
                    </td>
                <?php
                endfor;
                ?>
            </tr>
        <?php
        endfor;
        ?>
    </table>

<?php
endif;
?>

</body>
</html>