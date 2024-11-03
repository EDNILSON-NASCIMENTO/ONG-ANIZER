<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONG-anizer</title>
    <link rel="shortcut icon" href="img/books_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <?php require("conexao.php"); ?>
</head>
<body>
    <div id="logo">
        <img src="img/school_icon.png" alt="Logo">
    </div>

    <div id="caixa_login">
        <form  name ="form" method="post" action="" enctype="multipart/form-data">
           <table>
            <tr>
                <td><h1>Codigo acesso:</h1></td>
            </tr>
            <tr>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td><h1>Senha:</h1></td>
            </tr>
            <tr>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input class="input" type="submit" name="button" value="Entrar"></input></td>
            </tr>
           </table> 
        </form>
    </div>
</body>
</html>