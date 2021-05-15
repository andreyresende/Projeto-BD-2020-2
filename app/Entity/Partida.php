<?php
namespace App\Entity;
use \App\DB\Database;
use \PDO;
class Partida{
    /** ID da partida
    * @var integer 
    */
    public $id;

    /** Seleção 1 da partida
    * @var integer 
    */
    public $selecao_1;

    /** Seleção 2 da partida
    * @var integer 
    */
    public $selecao_2;

    /** Cor do uniforme da seleção 1
    * @var integer 
    */
    public $cor_uniforme_1;

    /** Cor do uniforme da seleção 2
    * @var integer 
    */
    public $cor_uniforme_2;

    /** Penaltis da seleção 1
    * @var integer 
    */
    public $penalti_1;

    /** Penaltis da seleção 2
    * @var integer 
    */
    public $penalti_2;

    /** ID do juiz da partida
    * @var integer 
    */
    public $juiz;

    /** ID do estádio da partida 
    * @var integer 
    */
    public $estadio;

    /** Fase em que ocorreu a partida
    * @var integer 
    */
    public $fase;

    /** Método que cadastra uma nova partida
    * @return boolean 
    */
    public function cadastrar(){
        $obDatabase = new Database('partida');
        $this->id   = $obDatabase->insert([
                                            'selecao_1'        => $this->selecao_1,
                                            'selecao_2'        => $this->selecao_2,
                                            'cor_uniforme_1'   => $this->cor_uniforme_1,
                                            'cor_uniforme_2'   => $this->cor_uniforme_2,
                                            'penalti_1'        => $this->penalti_1,
                                            'penalti_2'        => $this->penalti_2,
                                            'juiz'             => $this->juiz,
                                            'estadio'          => $this->estadio,
                                            'fase'             => $this->fase,
                                            ]);
        return true;
    }

    /**
   * Método responsável por excluir a partida do banco 
   * @return boolean
   */
  public function excluir(){
    return (new Database('partida'))->delete('id = '.$this->id);
  }


    /**
   * Método responsável por atualizar a partida no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('partida'))->update('id = '.$this->id,[
                                                                'selecao_1'         => $this->selecao_1,
                                                                'selecao_2'         => $this->selecao_2,
                                                                'cor_uniforme_1'    => $this->cor_uniforme_1,
                                                                'cor_uniforme_2'    => $this->cor_uniforme_2,
                                                                'penalti_1'         => $this->penalti_1,
                                                                'penalti_2'         => $this->penalti_2,
                                                                'juiz'              => $this->juiz,
                                                                'estadio'           => $this->estadio,
                                                                'fase'              => $this->fase
                                                              ]);
  }

    /** Método que obtem as partidas do banco de dados
     * @param string where
     * @param string order
     * @param string limit
     * @return array 
     */
    public static function getPartidas($where = null, $order = null, $limit = null){
        return (new Database('partida'))->select($where, $order, $limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    /**
   * Método responsável por buscar uma partida com base em seu ID
   * @param  integer $id
   * @return Partida
   */
  public static function getPartida($id){
    return (new Database('partida'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }
}