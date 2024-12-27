<?php
class Plat
{
    private $platX;
    private $code;
    private $prix;

    public function __construct( $platX,$code,int $prix)
    {
        $this->plat = $platX;
        $this->code = $code;
        $this->prix = $prix; 
    }

    public function affichageBrute()
    {
        echo $this->plat.": code ".$this->code." à ".$this->prix."€";
    }

   
   

   

}

$bouffe=new Plat('plat d\'entrecôte','DEXXX',22.80);
$bouffe1=new Plat("plat de poisson",'1Z334E',19.99);
$bouffe2=new Plat("plat de salade",'1Z334E',13.20);

echo '<pre>';$bouffe->affichageBrute();echo '</pre>';
echo '<pre>';$bouffe1->affichageBrute();echo '</pre>';
echo '<pre>';$bouffe2->affichageBrute();echo '</pre>';

class creerLignePlat
{
    public function creerLignePlat($quantite,
    $description)
     {

     }
}









