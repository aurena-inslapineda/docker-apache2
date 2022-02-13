<?php

class CompteCorrent
{
    /** @var string */
    private string $num_compte;
    /** @var float */
    private float $saldo;
    /** @var Client */
    private Client $client;

    /**
     * @param string $num_compte
     * @param float $saldo
     * @param Client $client
     */
    public function __construct(string $num_compte, float $saldo, Client $client)
    {
        $this->num_compte = $num_compte;
        $this->saldo = $saldo;
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getNumCompte(): string
    {
        return $this->num_compte;
    }

    /**
     * @param string $num_compte
     * @return CompteCorrent
     */
    public function setNumCompte(string $num_compte): CompteCorrent
    {
        $this->num_compte = $num_compte;
        return $this;
    }

    /**
     * @return float
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @param float $saldo
     * @return CompteCorrent
     */
    public function setSaldo(float $saldo): CompteCorrent
    {
        $this->saldo = $saldo;
        return $this;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return CompteCorrent
     */
    public function setClient(Client $client): CompteCorrent
    {
        $this->client = $client;
        return $this;
    }


    /**
     * @param float $euros
     * @return string
     */
    public function ingresarDiners(float $euros): string
    {
        if ($euros < 0) {
            $txt = "No puedes introducir numeros negativos";
        }
        else {
            $this->setSaldo($this->getSaldo() + $euros);
            $txt = "Has ingresado " . $euros . "€, ahora tienes " . $this->getSaldo() . "€";
        }
        return $txt;
    }

    /**
     * @param float $euros
     * @return string
     */
    public function retirarDiners(float $euros): string
    {
        /** @var float */

        if ($euros < 0) {
            $txt = "No puedes introducir numeros negativos";
        }
        else {
            $aux = $this->getSaldo() - $euros;
            if ($aux < 0) {
                $this->setSaldo(0);
                $txt = "Solo has podido retirar " . ($aux + $euros) . "€, te has quedado con " . $this->getSaldo() . "€";
            }
            else {
                $this->setSaldo($this->getSaldo() - $euros);
                $txt = "Has podido retirar " . ($euros) . "€, te has quedado con " . $this->getSaldo() . "€";
            }
        }
        return $txt;
    }

    /**
     * Funcion para comprobar que el cliente no existe en la array de clientes
     * @param string $client
     * @param array<CompteCorrent> $comptes
     * @return bool
     */
    public static function comprobar(string $client, Array $comptes): bool{
        $flag = true;
        /** @var CompteCorrent */
        foreach ($comptes as $compte) {
            if ($compte->getClient()->getNom() == $client){
                $flag = false;
                print "ok";
            }
        }
        if (count($comptes) == 0){
            $flag = false;
        }
        return $flag;
    }
}