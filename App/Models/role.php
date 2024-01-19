<?php

namespace App\Models;
use App\Core\Model as BaseModel;

class role extends BaseMOdel
{
    protected ?int $id;
    protected ?string $name;

    static public function setDbColumns()
    {
        return ["id","name"];
    }
    static public function setTableName()
    {
        return "role";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

}