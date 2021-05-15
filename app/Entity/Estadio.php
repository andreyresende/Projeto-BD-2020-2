<?php
namespace App\Entity;
use \App\DB\Database;
use \PDO;
class Estadio{
    /** ID
    * @var integer 
    */
    public $id;

    /** Nome
    * @var string 
    */
    public $nome;

    /** Cidade
    * @var string 
    */
    public $cidade;

    /** Capacidade 
    * @var integer 
    */
    public $capacidade;


    /** Método que cadastra um novo estádio
    * @return boolean 
    */
    public function cadastrar(){
        $obDatabase = new Database('estadio');
        $this->id = $obDatabase->insert([
                                        'nome' => $this->nome,
                                        'cidade'  => $this->cidade,
                                        'capacidade' => $this->capacidade
                                        ]);
        return true;
    }

  /**
   * Método responsável por excluir o estádio do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('estadio'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por atualizar o estádio no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('estadio'))->update('id = '.$this->id,[
                                                                'nome'         => $this->nome,
                                                                'cidade'         => $this->cidade,
                                                                'capacidade'    => $this->capacidade
                                                              ]);
  }

      /** Método que obtem os estádios do banco de dados
     * @param string where
     * @param string order
     * @param string limit
     * @return array 
     */
    public static function getEstadios($where = null, $order = null, $limit = null){
        return (new Database('estadio'))->select($where, $order, $limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

  /**
   * Método responsável por buscar um estádio com base em seu ID
   * @param  integer $id
   * @return Estadio
   */
  public static function getEstadio($id){
    return (new Database('estadio'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }
}