<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifica esercizio 1</title>
    <style>
        div{
            margin-top: 20px;
        }
        form{
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<!--FORM INSERT-->
<h1>Insert</h1>
<form action="insert.php" method="post">
    <div>
        <label for="nome">Nome</label>
        <input type="text" name = "nome" id="nome" >
    </div>
    <div>
        <label for="cognome">Cognome</label>
        <input type="text" name = "cognome" id="cognome">
    </div>
    <div>
        <label for="ruolo_id">Ruoli</label>
            <select name="ruolo_id"  id="ruolo_id">
                <option value = 1>Sviluppatore</option>
                <option value = 2>Project Manager</option>
                <option value = 3>Designer</option>
                <option value = 4>Analista</option>
            </select>
    </div>
    <div>
        <label for ="data_assunzione">Data assunzione</label>
        <input type="date" name = "data_assunzione" id="data_assunzione">
    </div>
    <div>
        <input type="submit" value="Inserisci">
    </div>
</form>

<!--FORM DELETE-->
<h1>Delete</h1>
<form action="delete.php" method="post">
    <div>
        <label for="id">ID</label>
        <input type="text" name = "id" id="id" >
    </div>
    <div>
        <input type="submit" value="DELETE">
    </div>
</form>


<!--FORM UPDATE-->
<h1>Update</h1>
<form action="update.php" method="post">
    <div>
        <label for="id">ID</label>
        <input type="text" name = "id" id="id" >
    </div>
    <div>
        <label for="nome">Nome</label>
        <input type="text" name = "nome" id="nome" >
    </div>
    <div>
        <label for="cognome">Cognome</label>
        <input type="text" name = "cognome" id="cognome">
    </div>
    <div>
        <label for="ruolo_id">Ruoli</label>
        <select name="ruolo_id"  id="ruolo_id">
            <option value = 1>Sviluppatore</option>
            <option value = 2>Project Manager</option>
            <option value = 3>Designer</option>
            <option value = 4>Analista</option>
        </select>
    </div>
    <div>
        <label for ="data_assunzione">Data assunzione</label>
        <input type="date" name = "data_assunzione" id="data_assunzione">
    </div>
    <div>
        <input type="submit" value="Update">
    </div>
</form>

<!--FORM SELECT ALL-->
<h1>SELECT *</h1>
<form action="select-all.php" method="post">
    <div>
        <input type="submit" value="Select All">
    </div>
</form>


<!--FORM SELECT ROLE-->
<h1>SELECT ROLE</h1>
<form action="select-role.php" method="post">
    <div>
        <label for="ruolo_id">Ruoli</label>
        <select name="ruolo_id"  id="ruolo_id">
            <option value = 1>Sviluppatore</option>
            <option value = 2>Project Manager</option>
            <option value = 3>Designer</option>
            <option value = 4>Analista</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Select Role" name ="button">
    </div>
</form>




</body>
</html>