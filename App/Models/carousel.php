<?php

namespace App\Models;
use App\Core\Model as BaseModel;
class carousel extends BaseModel
{
    protected ?int $id;
    protected ?string $cesta;

    static public function setDbColumns()
    {
        return ["id", "cesta"];
    }

    static public function setTableName()
    {
        return "carousel";
    }

    public function getId(): ?int{
        return $this->id;
    }
    public function getCesta(): ?string{
        return $this->cesta;
    }
}