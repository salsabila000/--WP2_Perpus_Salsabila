<?php
class Modelsepatu extends CI_Model
{
    public $merk, $harga;

    public function getHarga($merk=null)
    {
        $this->merk=$merk;
        if($this->merk == "Adidas")
                {$this->harga=200000;}
        elseif($this->merk == "kickers")
                {$this->harga=200000;}
        elseif($this->merk == "eiger")
                {$this->harga=200000;}
        elseif($this->merk == "Nike")
                {$this->harga=200000;}
        elseif($this->merk == "bucherri")
                {$this->harga=200000;}
        
      return $this->harga;
    }
}
