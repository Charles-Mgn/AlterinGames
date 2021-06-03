<?php

    require_once('class.Altrules.php');
    require_once('class.Newsletter.php');
    require_once('class.Receives.php');
    require_once('class.Votesfor.php');
    require_once('class.Favorites.php');
    require_once('class.Publishes.php');

    class Users
        {
            private $id = 0;
            private $login = null;
            private $password = null;
            private $role = null;
            private $points = 0;
            private $picture = null;
            private $banner = null;
            private $bio = null;
            private $creationdate = null;
            private $firstname = null;
            private $lastname = null;
            private $email = null;
            private $phone = null;
            private $address = null;
            private $city = null;
            private $postalcode = 0;

            // association 1 à *
            private $newslettersSent = array();
            private $rulesCreated = array();

            function __construct($id, $login, $password, $role, $points, $picture, $banner, $bio, $creationdate, $firstname, $lastname, $email, $phone, $address, $city, $postalcode)
            {
                $this->id = $id;
                $this->login = $login;
                $this->password = $password;
                $this->role = $role;
                $this->points = $points;
                $this->picture = $picture;
                $this->banner = $banner;
                $this->bio = $bio;
                $this->creationdate = $creationdate;
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->email = $email;
                $this->phone = $phone;
                $this->address = $address;
                $this->city = $city;
                $this->postalcode = $postalcode;
            }

            public function getId()
            {return $this->id;}

            public function setId($id)
            {$this->id = $id;}

            public function getLogin()
            {return $this->login;}

            public function setLogin($login)
            {$this->login = $login;}

            public function getPassword()
            {return $this->password;}

            public function setPassword($password)
            {$this->password = $password;}

            public function getRole()
            {return $this->role;}

            public function setRole($role)
            {$this->role = $role;}

            public function getPoints()
            {return $this->points;}

            public function setPoints($points)
            {$this->points = $points;}

            public function getPicture()
            {return $this->picture;}

            public function setPicture($picture)
            {$this->picture = $picture;}

            public function getBanner()
            {return $this->banner;}

            public function setBanner($banner)
            {$this->banner = $banner;}

            public function getBio()
            {return $this->bio;}

            public function setBio($bio)
            {$this->bio = $bio;}

            public function getCreationdate()
            {return $this->creationdate;}

            public function setCreationdate($creationdate)
            {$this->creationdate = $creationdate;}

            public function getFirstname()
            {return $this->firstname;}

            public function setFirstname($firstname)
            {$this->firstname = $firstname;}

            public function getLastname()
            {return $this->lastname;}

            public function setLastname($lastname)
            {$this->lastname = $lastname;}

            public function getEmail()
            {return $this->email;}

            public function setEmail($email)
            {$this->email = $email;}

            public function getPhone()
            {return $this->phone;}

            public function setPhone($phone)
            {$this->phone = $phone;}

            public function getAddress()
            {return $this->address;}

            public function setAddress($address)
            {$this->address = $address;}

            public function getCity()
            {return $this->city;}

            public function setCity($city)
            {$this->city = $city;}

            public function getPostalcode()
            {return $this->postalcode;}

            public function setPostalcode($postalcode)
            {$this->postalcode = $postalcode;}

            public function getNewslettersSent()
            {return $this->newslettersSent;}

            public function setNewslettersSent($newslettersSent)
            {$this->newslettersSent = $newslettersSent;}

            public function getRulesCreated()
            {return $this->rulesCreated;}

            public function setRulesCreated($rulesCreated)
            {$this->rulesCreated = $rulesCreated;}
        }