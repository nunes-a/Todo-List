<?php

class User{
	Public $prenom;
	Public $nom;
	Public $email;
	Public $mdp;
}

$userObj = new User;

$bdd = new bddConnect ('localhost', 'todolist', '+t0d0list!AE19');

?>