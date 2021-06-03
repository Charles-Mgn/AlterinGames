<?php

    require_once('class.Altrules.php');
    require_once('class.Game.php');

    class Belongs
        {
            private $id_game = 0;
            private $id_altrules = 0;

            public function __construct($id_game, $id_altrules)
            {
                $this->id_game = $id_game;
                $this->id_altrules = $id_altrules;
            }

            public function getIdGame()
            {return $this->id_game;}

            public function setIdGame($id_game)
            {$this->id_game = $id_game;}

            public function getIdAltrules()
            {return $this->id_altrules;}

            public function setIdAltrules($id_altrules)
            {$this->id_altrules = $id_altrules;}
        }