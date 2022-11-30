<?php
class offres
{
    private ?int $id_offres = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $email = null;
    private ?int $code_promo = null;
    private ?string $plats = null;
    private ?int $prix = null;
    private ?int $remise = null;

    public function __construct($n, $p, $e,$co, $pl, $pr, $r)
    {   
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $e;
        $this->code_promo= $co;
        $this->plats = $pl;
        $this->prix = $pr;
        $this->remise= $r;
    }

     /**
     * Get the value of idClient
     */
    
    /**
     * Get the value of lastName
     */
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getprenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getemail()
    {
        return $this->email;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */

    public function setcode_promo($email)
    {
        $this->code_promo= $code_promo;

        return $this;
    }
     /**
     * Get the value of address
     */
    public function getcode_promo()
    {
        return $this->code_promo;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    /**
     * Get the value of Eamil
     */
    public function getplats()
    {
        return $this->plats;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */
    public function setplats($plats)
    {
        $this->plats = $plats;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setprix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
    /**
     * Get the value of dob
     */
    public function getremise()
    {
        return $this->remise;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setremise($remise)
    {
        $this->remise= $remise;

        return $this;
    }
}
