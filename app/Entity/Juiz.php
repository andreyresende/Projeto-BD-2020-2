<?php
namespace App\Entity;
use \App\DB\Database;

class Juiz{
    /** ID do juiz
    * @var integer 
    */
    public $id;

    /** Nome do juiz
    * @var string 
    */
    public $nome;

    /** Método que cadastra um novo juiz
    * @return boolean 
    */
    public function cadastrar(){
        $obDatabase = new Database('juiz');
        $this->id   = $obDatabase->insert([
                                            'nome'    => $this->nome
                                            ]);
        return true;
    }
}