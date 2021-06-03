<?php

    require_once('class.Game.php');
    require_once('class.Belongs.php');
    require_once('class.Users.php');
    require_once('class.Publishes.php');
    require_once('class.Favorites.php');
    require_once('class.Votesfor.php');

    class Altrules
        {
            private $id = 0;
            private $name = null;
            private $desc = null;
            private $vote_no = 0;
            private $vote_yes = 0;

            // association 1 à *
            private $usersPostingRules = array();
            private $gamesWithAlt = array();

            function __construct($id, $name, $desc, $vote_no, $vote_yes)
            {
                $this->id = $id;
                $this->name = $name;
                $this->desc = $desc;
                $this->vote_no = $vote_no;
                $this->vote_yes = $vote_yes;
            }

            public function getId()
            {return $this->id;}

            public function setId($id)
            {$this->id = $id;}

            public function getName()
            {return $this->name;}

            public function setName($name)
            {$this->name = $name;}

            public function getDesc()
            {return $this->desc;}

            public function setDesc($desc)
            {$this->desc = $desc;}

            public function getVoteNo()
            {return $this->vote_no;}

            public function setVoteNo($vote_no)
            {$this->vote_no = $vote_no;}

            public function getVoteYes()
            {return $this->vote_yes;}

            public function setVoteYes($vote_yes)
            {$this->vote_yes = $vote_yes;}

            public function getUsersPostingRules()
            {return $this->usersPostingRules;}

            public function setUsersPostingRules($usersPostingRules)
            {$this->usersPostingRules = $usersPostingRules;}

            public function getGamesWithAlt()
            {return $this->gamesWithAlt;}

            public function setGamesWithAlt($gamesWithAlt)
            {$this->gamesWithAlt = $gamesWithAlt;}
        }