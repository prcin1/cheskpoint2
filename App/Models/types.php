<?php

namespace App\Models;
use App\Core\Model as BaseModel;

class types extends BaseMOdel
{
    protected ?int $id;
    protected ?string $nazov;
    protected ?string $cesta;
    static public function setDbColumns()
    {
        return ["id","nazov, cesta"];
    }
    static public function setTableName()
    {
        return "types";
    }
    public function getId(): ?int{
        return $this->id;
    }
    public function getNazov(): ?string{
        return $this->nazov;
    }
    public function getCesta(): ?string{
        return $this->cesta;
    }
}