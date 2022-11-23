<?php
class avis_offres
{
    private ?int $id_avis = null;
    private ?string $nom = null;
    private ?string $email = null;
    private ?string $message = null;
  

    public function __construct($n, $e,$me)
    {   
        $this->nom = $n;
        $this->email = $e;
        $this->message= $me; 
    }
    
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

    public function setemail($email)
    {
        $this->email= $email;

        return $this;
    }
     /**
     * Get the value of address
     */
    public function getmessage()
    {
        return $this->message;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */

    public function setmessage($message)
    {
        $this->message= $message;

        return $this;
    }
   
}
