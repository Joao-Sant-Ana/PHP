<?php 
    declare(stict_types=1);

    function is_input_empty(string $username, string $password) {
        if (empty($username) || empty($password)) {
            return true;
        } else {
            return false;
        }
    }

    function verify_username_exist (object $pdo, string $username) {
        if(get_user_if_exist($pdo, $username)) {
            return true;
        } else {
            return false;
        }
    }

    function verify_account(object $pdo, string $username, string $pwd) {
        if(get_user_pwd ($pdo, $username, $pwd)) {
            return true;
        } else {
            return false;
        }
    }