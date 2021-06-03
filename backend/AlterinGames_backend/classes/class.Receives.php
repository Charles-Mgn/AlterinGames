<?php

    require_once('class.Users.php');
    require_once('class.Newsletter.php');

    class Receives
        {
            private $id_users = 0;
            private $id_newsletter = 0;

            // association 1 à *
            private $newslettersReceived = array();
            private $newslettersSent = array();

            function __construct($id_users, $id_newsletter)
                {
                    $this->id_users = $id_users;
                    $this->id_newsletter = $id_newsletter;
                }

            public function getIdUsers()
            {return $this->id_users;}

            public function setIdUsers($id_users)
            {$this->id_users = $id_users;}

            public function getIdNewsletter()
            {return $this->id_newsletter;}

            public function setIdNewsletter($id_newsletter)
            {$this->id_newsletter = $id_newsletter;}

            public function getNewslettersReceived()
            {return $this->newslettersReceived;}

            public function setNewslettersReceived($newslettersReceived)
            {$this->newslettersReceived = $newslettersReceived;}

            public function getNewslettersSent()
            {return $this->newslettersSent;}

            public function setNewslettersSent($newslettersSent)
            {$this->newslettersSent = $newslettersSent;}
        }