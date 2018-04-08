<?PHP

    if ($_POST['bookname'] && $_POST['genre'] && $_POST['author'] && $_POST['price'] && $_POST['presence'] && $_POST['submit'] === "OK") {
        if (!file_exists('private')) {
            mkdir ('private');
        }
        if (!file_exists('private/data.csv')) {
            file_put_contents('private/data.csv', null);
        }
        $exist = 0;
        $file = fopen('private/data.csv', "a+");
        while (($data = fgetcsv($file, 100, ",")) !== false) {
            $num = count($data);
            if ($data[0] === $_POST['bookname'])
                $exist = 1;
        }
        if ($exist) {
            fclose($file);
            header ("Location: reg/errors/duplicate.php");
        } else {
            $tmp['bookname'] = $_POST['bookname'];
            $tmp['genre'] = $_POST['genre'];
            $tmp['author'] = $_POST['author'];
            $tmp['price'] = $_POST['price'];
            $tmp['presence'] = $_POST['presence'];
            $data[] = $tmp;
            foreach ($data as $value) {
                fputcsv($file, $value);
            }
            fclose($file);
            header("Location: index.php");
        }
    } else {
        header("Location: reg/errors/empty.php");
    }
?>