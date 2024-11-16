<html lang="en">
    <head>
        <title>Page Sort</title>
    </head>
    <body>
        <?php

            include_once "utils/sort/print.php";
            include_once "utils/sort/sortShell.php";

            if (!isset($_GET['arr'])) {
                echo "Не указан массив";
                die();
            }
            $arr = explode(',', $_GET['arr']);
            $arr = array_map('intval', $arr);

            printArr($arr, "Массив до сортировки: ");
            $arr = sortShell($arr);
            printArr($arr, "Массив после сортировки: ");

        ?>
    </body>
</html>