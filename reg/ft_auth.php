<?php
    function auth($login, $passwd) {
        if (!$login || !$passwd)
            return false;
        $user = unserialize(file_get_contents('../private/passwd'));
        foreach ($user as $k => $value) {
            if ($value['login'] == $login && $value['passwd'] == hash('whirlpool', $passwd)) {
                return true;
            }
        }
        return false;
    }
?>