<?php
namespace App\Entity;
use \App\DB\Database;

class Funcao{
    /** ID da função
    * @var integer 
    */
    public $id;

    /** Nome da função
    * @var string 
    */
    public $nome;

    /** Método que cadastra uma nova função
    * @return boolean 
    */
    public function cadastrar(){
        $obDatabase = new Database('funcao');
        $this->id = $obDatabase->insert([
                                        'nome' => $this->nome
                                        ]);
        return true;
        }
}