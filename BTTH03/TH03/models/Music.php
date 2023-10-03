<?php
class Music{
    private $id;
    private $tenbaihat;
    private $casi;
    private $idtheloai;

    /**
     * @param $id
     * @param $tenbaihat
     * @param $casi
     * @param $idtheloai
     */
    public function __construct($id, $tenbaihat, $casi, $idtheloai)
    {
        $this->id = $id;
        $this->tenbaihat = $tenbaihat;
        $this->casi = $casi;
        $this->idtheloai = $idtheloai;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTenbaihat()
    {
        return $this->tenbaihat;
    }

    /**
     * @param mixed $tenbaihat
     */
    public function setTenbaihat($tenbaihat)
    {
        $this->tenbaihat = $tenbaihat;
    }

    /**
     * @return mixed
     */
    public function getCasi()
    {
        return $this->casi;
    }

    /**
     * @param mixed $casi
     */
    public function setCasi($casi)
    {
        $this->casi = $casi;
    }

    /**
     * @return mixed
     */
    public function getIdtheloai()
    {
        return $this->idtheloai;
    }

    /**
     * @param mixed $idtheloai
     */
    public function setIdtheloai($idtheloai)
    {
        $this->idtheloai = $idtheloai;
    }

}