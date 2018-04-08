<?php
function ft_get_data($file) {
    
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
    echo "SYKA\n";
}
?>