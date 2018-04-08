<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK") {
        if (!file_exists('../private')) {
            mkdir ('../private');
        }
        if (!file_exists('../private/passwd')) {
            file_put_contents('../private/passwd', null);
        }
        $user = unserialize(file_get_contents('../private/passwd'));
        $exist = 0;
        if ($user) {
            foreach ($user as $k=>$v) {
                if ($v['login'] === $_POST['login'])
                    $exist = 1;
                }
        }
        if ($exist) {
            header ("Location: errors/duplicate.php");
        } else {
            $data['login'] = $_POST['login'];
            $data['passwd'] = hash('whirlpool', $_POST['passwd']);
            $user[] = $data;
            file_put_contents('../private/passwd', serialize($user));
            header("Location: ../index.php");
        }
    }
    else {
        header("Location: errors/empty.php");
    }
    
?>