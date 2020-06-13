<?php
    function is_valid_teacher_login($username, $password) {
        global $db;
        $query = 'SELECT * FROM teachers WHERE username = :username AND u_password  = :password';
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
        function is_valid_teacher_exist($username) {
        global $db;
        $query = 'SELECT * FROM teachers WHERE username = :username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
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