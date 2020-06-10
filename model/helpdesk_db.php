<?php
    function is_valid_helpdesk_login($username, $password) {
        global $db;
        $query = 'SELECT * FROM helpdesk WHERE username = :username AND u_password  = :password';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->execute();
        if($statement->rowCount() == 1)
        {
            $valid = true;
        }
        else
        {
            $valid = false;
        }
        $statement->closeCursor();
        return $valid;
    }
?>