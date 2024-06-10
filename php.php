<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['e']) && isset($_POST['f'])) {
        $e = htmlspecialchars($_POST['e']);
        $f = htmlspecialchars($_POST['f']);

        echo "<p>Перша, потім друга: $e, $f</p>";
        echo "<p>Друга, потім перша: $f, $e</p>";
    } else {
        echo "<p>Будь ласка, введіть значення для 'e' і 'f'.</p>";
    }
} else {
    echo "<p>Будь ласка, використовуйте форму для відправки даних.</p>";
}
?>