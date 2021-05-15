<?php
namespace App\Entity;
use \App\DB\Database;

class Uniforme{
    /** ID do uniforme
    * @var integer 
    */
    public $id;

    /** Cor do uniforme
    * @var string 
    */
    public $cor;

    /** Método que cadastra um novo uniforme
    * @return boolean 
    */
    public function cadastrar(){
        $obDatabase = new Database('uniforme');
        $this->id   = $obDatabase->insert([
                                            'cor' => $this->cor
                                          ]);
        return true;
    }
}