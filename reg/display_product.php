<html>
<head>
    <link rel="stylesheet" href="disp_prod.css">
</head>
<body>
<?php
    include './ft_auth.php';
    include('../get_data.php');
    session_start();
    $data = ft_get_data('private/data.csv');
    foreach ($data as $value) {
        if ($value[1] == $_GET['genre']) {
            echo "<div class=\"all\">";
            echo "<div class=\"genre\">Buy me,baybe</div>";
            echo "<div class=\"author\">Author:" . $value[2] . "</div>";
            echo "<div class=\"price\">Price: " . $value[3] . "</div>";
            echo "<div class=\"presence\">Presence:" . $value[4] . "</div>";
            if ($value[4] != "0")
            {
                echo "<form method=\"post\" action=\"add_bascket.php\"><input class=\"butt\" name=\"item\" type=\"submit\" value=\"Buy\"></form>";
            }
            if ($_SESSION) 
            {
                if ($_SESSION['loggued_on_user'] && $_SESSION['root']=='adm')
                    echo "<input class=\"del\" type=\"button\" value=\"Del\">";
            }
            echo "</div></div></br>";
        }
    }
?>
</body>
</html>