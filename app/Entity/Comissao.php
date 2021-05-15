<?php
namespace App\Entity;
use \App\DB\Database;

class Comissao{
    /** ID da comissão
    * @var integer 
    */
    public $id;

    /** Nome da comissão
    * @var string 
    */
    public $nome;

    /** Função da comissão
    * @var integer 
    */
    public $funcao;

    /** Seleção da comissão
    * @var integer 
    */
    public $selecao;

    public function cadastrar(){
        $obDatabase = new Database('comissao');
        $this->id = $obDatabase->insert([
                                        'nome' => $this->nome,
                                        'funcao'  => $this->funcao,
                                        'selecao' => $this->selecao
                                        ]);
        return true;
    }
}