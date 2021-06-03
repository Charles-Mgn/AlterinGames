<?php

    require_once('class.Altrules.php');
    require_once('class.Users.php');

    class Votesfor
        {
            private $id_users = 0;
            private $id_altrules = null;

            public function __construct($id_users, $id_altrules)
            {
                $this->id_users = $id_users;
                $this->id_altrules = $id_altrules;
            }

            public function getIdUsers()
            {return $this->id_users;}

            public function setIdUsers($id_users)
            {$this->id_users = $id_users;}

            public function getIdAltrules()
            {return $this->id_altrules;}

            public function setIdAltrules($id_altrules)
            {$this->id_altrules = $id_altrules;}
        }