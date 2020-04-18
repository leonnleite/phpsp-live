<?php


namespace App\Entity;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class User
{
    private UuidInterface $id;

    private string $name;

    private string $email;

    private int $age;

    private float $weight;

    /** @var array|Role[]  */
    private array $roles;

    public function __construct(string $name, string $email)
    {
        $this->id = Uuid::uuid4();
        $this->name = $name;
        $this->email = $email;
    }

    public function setWeight(float $weight): User
    {
        $this->weight = $weight;
        return $this;
    }

    public function addRole(Role $role): User
    {
        array_push($this->roles, $role);
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return array|Role[]
     */
    public function getRoles(): array
    {
        return $this->roles;
    }




}