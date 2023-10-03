<?php
class Category{
    private $id;
    private $tentheloai;

    /**
     * @param $id
     * @param $tentheloai
     */
    public function __construct($id, $tentheloai)
    {
        $this->id = $id;
        $this->tentheloai = $tentheloai;
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
    public function getTentheloai()
    {
        return $this->tentheloai;
    }

    /**
     * @param mixed $tentheloai
     */
    public function setTentheloai($tentheloai)
    {
        $this->tentheloai = $tentheloai;
    }


}