<?php
    function ft_get_data() {
        if (($handle = fopen('../private/data.csv', "r")) !== FALSE) {
            $result = array (array ());
            $i = 0;
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                for ($c=0; $c < $num; $c++) {
                    $result[$i][$c] = $data[$c];
                }
                $i++;
            }
            fclose($handle);
            return ($result);  
        }
    }
    if ($_POST) {
        session_start();
        $data = ft_get_data();
        foreach ($data as $val) {
            if ($_POST['bookname'] == $val[0]) {
                echo "<div class=\"bookname\">" . $val[0] . "</div>";
                echo "<div class=\"genre\">" . $val[1] . "</div>";
                echo "<div class=\author\">" . $val[2] . "</div>";
                echo "<div class=\price\">" . $val[3] . "</div>";
                echo "<div class=\presence\">" . $val[4] . "</div>";
                if ($_SESSION) {
                    if ($_SESSION['root'] == 'adm') {
                        echo "<button type=\button\">\"Change\"</button>";
                    }
                }
                echo "</div></br>";
            }
                
        }
    }
        
?>