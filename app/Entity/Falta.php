<?php
namespace App\Entity;
use \App\DB\Database;

class Falta{
    /** ID da falta
    * @var integer 
    */
    public $id;

    /** Partida onde a falta ocorreu
    * @var integer 
    */
    public $partida;

    /** Minuto da falta
    * @var integer 
    */
    public $minuto;

    /** ID do Agente 
    * @var integer 
    */
    public $agente;

    /** Cartão amarelo 
    * @var boolean 
    */
    public $cartao_amarelo;

    /** Cartão vermelho 
    * @var boolean 
    */
    public $cartao_vermelho;

    /** Método que cadastra uma nova falta
    * @return boolean 
    */
    public function cadastrar(){
        $obDatabase = new Database('falta');
        $this->id = $obDatabase->insert([
                                        'partida'         => $this->partida,
                                        'minuto'          => $this->minuto,
                                        'agente'          => $this->agente,
                                        'cartao_amarelo'  => $this->cartao_amarelo,
                                        'cartao_vermelho' => $this->cartao_vermelho
                                        ]);
            return true;
        }
}