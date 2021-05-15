<?php
namespace App\Entity;
use \App\DB\Database;

class Fase{
    /** ID da fase
    * @var integer 
    */
    public $id;

    /** Nome da fase
    * @var string 
    */
    public $nome;

    /** Método que cadastra uma nova fase
    * @return boolean 
    */
    public function cadastrar(){
        $obDatabase = new Database('fase');
        $this->id = $obDatabase->insert([
                                        'nome' => $this->nome
                                        ]);
            return true;
        }
}