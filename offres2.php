<?php
echo "offres" ;
class offres{
    private ? string $nom=null;
    private ?string $prenom=null;
    private ?string $email=null;
    private ?int $code_promo=null;
    private ?string $plats=null;
    private ?string $prix=null;
    private ?int $remise=null;

public function __construct( $n,$p,$e,$c,$pl,$pr,$r) {
    $this->nom=$n;
    $this->prenom=$p;
    $this->email=$e;
    $this->code_promo=$c;
    $this->plats=$pl;
    $this->prix=$pr;
    $this->remise=$r;}
    ///////////////////////////////////////////////////////////
    public function getnom(){
        return $this->nom;
    }
    public function getprenom(){
        return $this->prenom;
    }
    
    public function getemail(){
        return $this->email;
    }
    public function getcode_promo(){
        return $this->code_promo;
    }
    public function getplats(){
        return $this->plats;
    }
   public  function getprix(){
        return $this->prix;
    }
    public function getremise(){
        return $this->remise;
    }
    ///////////////////////////////////////////////////////////////////////////////////////
    public function setnom($nom){
       return $this->nom=$nom;
    }
   public function setprenom($prenom){
        return $this->prenom=$prenom;
    }
   public function setcode_promo($code_promo){
        return $this->adresse=$adresse;
    }
    public function setemail($email){
        return $this->email=$email;
    }
    public function setplats($plats){
       return $this->plats=$plats;
    }

   public function setprix($prix){
       return $this->prix=$prix;
    }
   public function setremise($remise){
      return $this->remise=$remise;
    }
}
?>