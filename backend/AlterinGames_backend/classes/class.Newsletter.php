<?php

    require_once('class.Users.php');
    require_once('class.Receives.php');

    class Newsletter
        {
            private $id = 0;
            private $content = null;
            private $date = null;

            // association 1 à *
            private $usersReceivingNews = array();

            function __construct($id, $content, $date)
            {
                $this->id = $id;
                $this->content = $content;
                $this->date = $date;
            }

            public function getId()
            {return $this->id;}

            public function setId($id)
            {$this->id = $id;}

            public function getContent()
            {return $this->content;}

            public function setContent($content)
            {$this->content = $content;}

            public function getDate()
            {return $this->date;}

            public function setDate($date)
            {$this->date = $date;}

            public function getUsersReceivingNews()
            {return $this->usersReceivingNews;}

            public function setUsersReceivingNews($usersReceivingNews)
            {$this->usersReceivingNews = $usersReceivingNews;}
        }