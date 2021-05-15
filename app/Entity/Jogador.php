<?php
namespace App\Entity;
use \App\DB\Database;
use \PDO;
class Jogador{
    /** ID do jogador
    * @var integer 
    */
    public $id;

    /** Nome do jogador
    * @var string 
    */
    public $nome;

    /** Selecao do jogador
    * @var integer 
    */
    public $selecao;

    /** Idade do jogador 
    * @var integer 
    */
    public $idade;

    /** Gols do jogador 
    * @var integer 
    */
    public $gols;

    /** Método que cadastra um novo jogador
    * @return boolean 
    */
    public function cadastrar(){
        $obDatabase = new Database('jogador');
        $this->id   = $obDatabase->insert([
                                            'nome'    => $this->nome,
                                            'selecao' => $this->selecao,
                                            'idade'   => $this->idade,
                                            'gols'    => $this->gols
                                            ]);
        return true;
    }

 /**
   * Método responsável por excluir o jogador do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('jogador'))->delete('id = '.$this->id);
  }

 /**
   * Método responsável por atualizar o jogador no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('jogador'))->update('id = '.$this->id,[
                                                                'nome'         => $this->nome,
                                                                'selecao'         => $this->selecao,
                                                                'idade'    => $this->idade,
                                                                'gols'    => $this->gols
                                                              ]);
  }

        /** Método que obtem os jogadores do banco de dados
     * @param string where
     * @param string order
     * @param string limit
     * @return array 
     */
    public static function getJogadores($where = null, $order = null, $limit = null){
        return (new Database('jogador'))->select($where, $order, $limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

 /**
   * Método responsável por buscar um jogador com base em seu ID
   * @param  integer $id
   * @return Jogador
   */
  public static function getJogador($id){
    return (new Database('jogador'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }
}