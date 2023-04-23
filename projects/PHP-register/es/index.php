<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Form</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header> <!-- Header -->
        <h1>completa el formulario</h1>
        <select onchange="selectLang(this.value)">
            <option value="../pt-br/index.php">Português</option>
            <option value="../en/index.php">English</option>
            <option value="./index.php" selected>Español</option>
        </select>
    </header> <!-- /end Header -->

    <main role="main"> <!-- Main -->
        <form method="get" action="./index.php"> <!-- form -->
            <!-- Username -->
            <input class="input-style" type="text" name="name" autofocus placeholder="Usuario">
            <!-- /end Username -->
            <!-- Email -->
            <input class="input-style" type="email" name="email" placeholder="ejemplo@email.com">
            <!-- /end Email -->
            <!-- Password -->
            <input class="input-style" type="password" name="password" placeholder="min.: 6 caracteres" minlength="6">
            <!-- /end Password -->

            <fieldset> <!-- Gender options -->
                <p>Género</p>
                <div id="radio-gens-es">
                    <label> <!-- Male option -->
                        Masculino <input type="radio" name="gen" id="idM" value="M" checked>
                    </label> <!-- /end Male option -->
                    <label> <!-- Female option -->
                        Femenino <input type="radio" name="gen" id="idF" value="F">
                    </label> <!-- /end Female option -->
                    <label>
                        Otro <input type="radio" name="gen" id="idX" value="X">
                    </label>
                </div>
            </fieldset> <!-- /end Gender options -->

            <button type="submit">entregar</button>
        </form> <!-- /end form -->

        <div id="result"> <!-- Result -->
            <?php
                // Import Person.php class
                require_once('../php/Person.php');

                // Variables getting the input values
                $name = $_GET["name"] ?? '[indefinido]';
                $email = $_GET["email"] ?? '[indefinido]';
                $password = $_GET["password"] ?? '[indefinido]';
                $gen = $_GET["gen"] ?? '[indefinido]';

                // set variables values to Person object
                $p1 = new Person($name, $email, $password, $gen);

                echo "<p>".$p1->getName()."</p>";
                echo "<p>".$p1->getEmail()."</p>";
                echo "<p>".$p1->getPassword()."</p>";
                echo "<p>".$p1->getGen()."</p>";
            ?>
        </div> <!-- /end Result -->
    </main> <!-- /end main -->
    <script src="../js/script.js"></script>
</body>
</html>