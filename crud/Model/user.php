<?php
	class user{
		private $id_user=null;
		private $nom=null;
		private $prenom=null;
		private $adresse=null;
		private $email=null;
		private $roleuser=null;
		private $typeuser=null;
		private $dob=null;
		function __construct($nom, $prenom, $adresse, $email, $roleuser,$typeuser,$dob){
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->adresse=$adresse;
			$this->email=$email;
			$this->roleuser=$roleuser;
			$this->typeuser=$typeuser;
			$this->dob=$dob;
		}
		function getiduser(){
			return $this->id_user;
		}
		function getnom(){
			return $this->nom;
		}
		function getprenom(){
			return $this->prenom;
		}
		function getadresse(){
			return $this->adresse;
		}
		function getemail(){
			return $this->email;
		}
		function getroleuser(){
			return $this->roleuser;
		}
		function gettypeuser(){
			return $this->typeuser;
		}
		function getdob(){
			return $this->dob;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setprenom(string $prenom){
			$this->prenom=$prenom;
		}
		function setadresse(string $adresse){
			$this->adresse=$adresse;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function setroleuser(string $roleuser){
			$this->roleuser=$roleuser;
		}
		function settypeuser(string $typeuser){
			$this->typeuser=$typeuser;
		}
		function setdob(string $dob){
			$this->dob=$dob;
		}
	}
?>