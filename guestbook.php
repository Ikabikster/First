<form method="post" action="index.php">
    Name: <label>
        <input type="text" name="name">
    </label><br>
    Nachricht: <label>
        <textarea name="nachricht"></textarea>
    </label><br>
    <input type="submit" value="Abschicken">
</form>

<?php
$guestbookFile = "guestbook.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $nachricht = htmlspecialchars($_POST["nachricht"]);

    if (empty($name)){
        echo "Bitte geben Sie einen Namen ein!";
    }
    if (empty($nachricht)){
        echo "Bitte geben Sie eine Nachricht ein!";
    }
    $entry = "$name: $nachricht\n";
    file_put_contents("guestbook.txt", $entry, FILE_APPEND | LOCK_EX);
}
?>

<h2>Einträge:</h2>
<pre>
    <?php
    if (file_exists($guestbookFile)) {
    echo htmlspecialchars(file_get_contents($guestbookFile));
    }
    ?>
</pre>