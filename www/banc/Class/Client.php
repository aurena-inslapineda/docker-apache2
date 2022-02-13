<?php

class Client
{
    /** @arg string */
    private string $dni;
    /** @arg string */
    private string $nom;
    /** @arg string */
    private string $cognoms;
    /** @arg string */
    private string $direccio;
    /** @arg string */
    private string $edat;

    /**
     * @param string $dni
     * @param string $nom
     * @param string $cognoms
     * @param string $direccio
     * @param string $edat
     */
    public function __construct(string $dni, string $nom, string $cognoms, string $direccio, string $edat)
    {
        $this->dni = $dni;
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->direccio = $direccio;
        $this->edat = $edat;
    }

    /**
     * @return string
     */
    public function getDni(): string
    {
        return $this->dni;
    }
    /**
     * @param string $dni
     * @return Client
     */
    public function setDni(string $dni): Client
    {
        $this->dni = $dni;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    /**
     * @param string $nom
     * @return Client
     */
    public function setNom(string $nom): Client
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getCognoms(): string
    {
        return $this->cognoms;
    }
    /**
     * @param string $cognoms
     * @return Client
     */
    public function setCognoms(string $cognoms): Client
    {
        $this->cognoms = $cognoms;
        return $this;
    }

    /**
     * @return string
     */
    public function getDireccio(): string
    {
        return $this->direccio;
    }
    /**
     * @param string $direccio
     * @return Client
     */
    public function setDireccio(string $direccio): Client
    {
        $this->direccio = $direccio;
        return $this;
    }

    /**
     * @return int
     */
    public function getEdat(): int
    {
        return date_diff(date_create($this->edat), date_create())->y;
    }
    /**
     * @param string $edat
     * @return Client
     */
    public function setEdat(string $edat): Client
    {
        $this->edat = $edat;
        return $this;
    }

    // No lo uso pero lo dejo por aqui si lo necesito
//    /**
//     * Funcion para comprobar que el cliente no existe en la array de clientes
//     * @param Client $client
//     * @param array<Client> $clients
//     * @return bool
//     */
//    public static function comprobar(Client $client, Array $clients): bool{
//        $flag = true;
//        for ($i = 0; $i < count($clients); $i++) {
//            if ($client->getDni() == $clients[0]->getDni()) {
//                print "Existe";
//                $flag = false;
//            }
//            else {
//                print "No existe";
//            }
//        }
//        return $flag;
//    }
}