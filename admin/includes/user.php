<?php

class User {

    public function find_all_user()
    {
        global $database; // this is coming from the database.php

        $result_set = $database->query('SELECT * FROM users');
        return $result_set;
    }

}

?>