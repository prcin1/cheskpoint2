<?php

namespace App\Models;
use App\Core\Model as BaseModel;

class products extends BaseModel
{
    protected ?int $id;
    protected ?string $nazov;
    protected ?string $popis;
    protected ?int $cena;
    protected ?int $druh_id;
    protected ?string $cesta;

    static public function setDbColumns()
    {
        return ["id","nazov", "popis", "cena", "druh_id", "cesta"];
    }
    static public function setTableName()
    {
        return "products";
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setNazov(?string $nazov): void
    {
        $this->nazov = $nazov;
    }

    public function setPopis(?string $popis): void
    {
        $this->popis = $popis;
    }

    public function setCena(?int $cena): void
    {
        $this->cena = $cena;
    }

    public function setDruhId(?int $druh_id): void
    {
        $this->druh_id = $druh_id;
    }

    public function setCesta(?string $cesta): void
    {
        $this->cesta = $cesta;
    }


    public function getId(): ?int{
        return $this->id;
    }
    public function getNazov(): ?string{
        return $this->nazov;
    }
    public function getPopis(): ?string{
        return $this->popis;
    }
    public function getCena(): ?string{
        return $this->cena;
    }
    public function getDruh_id(): ?string{
        return $this->druh_id;
    }
    public function getCesta(): ?string{
        return $this->cesta;
    }
}