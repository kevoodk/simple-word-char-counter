<!DOCTYPE html>
<html>
<head>
    <title>Simple word & character count</title>
</head>
<body>
<form method="POST">
    <label for="name">Indtast navn:</label>
    <input id="name" name="name" type="text" placeholder="John Doe..." />
    <input type="submit" />
</form>
<div>
    <?php
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $words = str_word_count($name);
            $chars = strlen(str_replace(' ', '', $name));

            echo sprintf("<p><b>Hej %s</b></p><p>Dit navn indeholder %s bogstaver og %s ord</p>", $name, $chars, $words);
        }
    ?>
</div>
</body>
</html>