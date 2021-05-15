<?php
namespace App\Entity;
use \App\DB\Database;

class Selecao{
    /** ID da seleção
    * @var integer 
    */
    public $id;

    /** Nome da seleção
    * @var string 
    */
    public $nome;

    /** Grupo da seleção
    * @var string 
    */
    public $grupo;

    /** Pontos do grupo da seleção
    * @var integer 
    */
    public $pontos_grupo;

    /** Cor do uniforme 1 
    * @var integer 
    */
    public $cor_uniforme_1;

    /** Cor do uniforme 2 
    * @var integer 
    */
    public $cor_uniforme_2;

    /** Bandeira
    * @var resource 
    */
    public $bandeira;

    /** Método que cadastra uma nova seleção
    * @return boolean 
    */
    public function cadastrar(){
        $obDatabase = new Database('selecao');
        $this->id = $obDatabase->insert([
                                        'nome'            => $this->nome,
                                        'grupo'           => $this->grupo,
                                        'pontos_grupo'    => $this->pontos_grupo,
                                        'cor_uniforme_1'  => $this->cor_uniforme_1,
                                        'cor_uniforme_2'  => $this->cor_uniforme_2,
                                        'bandeira'  => $this->bandeira,
                                        ]);
        return true;
    }

}