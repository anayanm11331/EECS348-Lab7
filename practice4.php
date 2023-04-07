<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>

    <h1>EECS 348 Lab Seven Practice Four</h1>
    <form action="" method="post">
        <label for="number">Size of the multiplication table:</label>
        <input type="number" id="number" name="number" min="1" required>
        <button type="submit">Submit</button>
    </form>

    <?php
        if (isset($_POST['number'])) {
            $number = intval($_POST['number']);
            echo '<table>';
            echo '<tr><td></td>';

            for ($i = 1; $i <= $number; $i++) {
                echo '<td>' . $i . '</td>';
            }

            echo '</tr>';

            for ($i = 1; $i <= $number; $i++) {
                echo '<tr>';
                echo '<td>' . $i . '</td>';

                for ($j = 1; $j <= $number; $j++) {
                    echo '<td>' . ($i * $j) . '</td>';
                }

                echo '</tr>';
            }

            echo '</table>';
        }
    ?>
</body>
</html>
