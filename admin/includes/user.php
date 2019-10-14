<?php

class User {

    //changed this to a static method. 
    public static function find_all_user()
    {
        global $database; // this is coming from the database.php

        $result_set = $database->query("SELECT * FROM users");
        return $result_set;
    }

    public static function find_user_by_id($id)
    {
        global $database; // this is coming from the database.php

        $result_set = $database->query("SELECT * FROM users where id = $id");
        $found_user = mysqli_fetch_assoc($result_set);
        return $found_user;
    }

}

?>