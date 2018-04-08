<?php
    if ($_POST['submit'] != 'OK' || $_POST['newpw'] == '' || $_POST['oldpw'] == '' || $_POST['login'] == '') {
        echo "ERROR\n";
        return ;
    }
    $user = unserialize(file_get_contents('../private/passwd'));
    $exist = 0;
    if ($user) {
        foreach ($user as $k => $v)  {
            if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
                $exist = 1;
                $user[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']);
            }
        }
    }
    if (!$exist) {
        echo "ERROR\n";
    } else {
        file_put_contents('../private/passwd', serialize($user));
        header("Location: ../index.php");
    }
?>