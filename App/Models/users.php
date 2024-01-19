<?php

namespace App\Models;
use App\Core\Model as BaseModel;
class users extends BaseModel
{
    protected ?int $id;
    protected ?string $login;
    protected ?string $password;
    protected ?int $roleId;

    static public function setDbColumns()
    {
        return ["id", "login", "password", "roleId"];
    }

    static public function setTableName()
    {
        return "users";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoleId(): ?int
    {
        return $this->roleId;
    }

    public function setRoleId(?int $roleId): void
    {
        $this->roleId = $roleId;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): void
    {
        $this->login = $login;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }


}