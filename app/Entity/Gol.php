<?php
namespace App\Entity;
use \App\DB\Database;

class Gol{
    /** ID do gol
    * @var integer 
    */
    public $id;

    /** Partida em que ocorreu o gol
    * @var integer 
    */
    public $partida;

    /** Minuto em que ocorreu o gol
    * @var integer 
    */
    public $minuto;

    /** ID do jogador que fez o gol 
    * @var integer 
    */
    public $jogador;


    /** Método que cadastra um novo gol
    * @return boolean 
    */
    public function cadastrar(){
        $obDatabase = new Database('gol');
        $this->id = $obDatabase->insert([
                                        'partida' => $this->partida,
                                        'minuto'  => $this->minuto,
                                        'jogador' => $this->jogador
                                        ]);
        return true;
        }
}