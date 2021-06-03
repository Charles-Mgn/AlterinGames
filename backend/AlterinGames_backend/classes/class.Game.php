<?php

    require_once('class.Altrules.php');
    require_once('class.Belongs.php');

    class Game
        {
            private $id = 0;
            private $name = null;
            private $category = null;

            // association 1 à *
            private $rulesOfGame = array();

            function __construct($id, $name, $category) {
                $this->id = $id;
                $this->name = $name;
                $this->category = $category;
            }

            public function getId()
            {return $this->id;}

            public function setId($id)
            {$this->id = $id;}

            public function getName()
            {return $this->name;}

            public function setName($name)
            {$this->name = $name;}

            public function getCategory()
            {return $this->category;}

            public function setCategory($category)
            {$this->category = $category;}

            public function getRulesOfGame()
            {return $this->rulesOfGame;}

            public function setRulesOfGame($rulesOfGame)
            {$this->rulesOfGame = $rulesOfGame;}
        }