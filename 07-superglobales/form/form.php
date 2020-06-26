<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Form</title>
    </head>
    <body>

        <h1>Formulario en PHP</h1>

        <!-- Parametros GET ?name=set&years=34-->
        <!-- para enviar los parametros por POST (ocultos) cambiar el method a POST -->

        <!-- <form action="form_submit.php" method="GET" accept-charset="utf-8"> -->
        <form action="form_submit.php" method="POST" accept-charset="utf-8">
        
            <p>
                <label for="name">Name</label> 
                <input type="text" name="name" value="My Name">
            </p>

            <p>
                <label for="last-name">Last name</label> 
                <input type="text" name="last-name" value="My Last name">
            </p>

            <input type="submit" name="submit" value="Send data">

        </form>

    </body>
</html>
