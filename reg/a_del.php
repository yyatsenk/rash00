<?php
	include './ft_auth.php';
    $user = unserialize(file_get_contents('../private/passwd'));
    $exist = 0;
    if ($user) {
        foreach ($user as $k => $v)  {
            if ($v['login'] === $_GET['login'] && $_GET['login'] !== 'yyatsenk' && $_GET['login'] !== 'mmotov') {
                $exist = 1;
                unset($user[$k]);
            }
        }
    }
    if (!$exist) {
        echo "Admin account\n";
    } else {
        file_put_contents('../private/passwd', serialize($user));
        header("Location: ../index.php");
    }

    ?>