<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header> <!-- Header -->
        <h1>Preencha o formulário</h1>
        <select onchange="selectLang(this.value)">
            <option value="./index.php" selected>Português</option>
            <option value="../en/index.php">English</option>
            <option value="../es/index.php">Español</option>
        </select>
    </header> <!-- /end Header -->

    <main role="main"> <!-- Main -->
        <form method="get" action="./index.php"> <!-- form -->
            <!-- Username -->
            <input class="input-style" type="text" name="name" autofocus placeholder="Usuário">
            <!-- /end Username -->
            <!-- Email -->
            <input class="input-style" type="email" name="email" placeholder="exemplo@email.com">
            <!-- /end Email -->
            <!-- Password -->
            <input class="input-style" type="password" name="password" placeholder="min.: 6 caracteres" minlength="6">
            <!-- /end Password -->

            <fieldset> <!-- Gender options -->
                <p>Gênero</p>
                <div id="radio-gens-pt">
                    <label> <!-- Male option -->
                        Masculino <input type="radio" name="gen" id="idM" value="M" checked>
                    </label> <!-- /end Male option -->
                    <label> <!-- Female option -->
                        Feminino <input type="radio" name="gen" id="idF" value="F">
                    </label> <!-- /end Female option -->
                    <label>
                        Outro <input type="radio" name="gen" id="idO" value="X">
                    </label>
                </div>
            </fieldset> <!-- /end Gender options -->

            <button type="submit">Enviar</button>
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