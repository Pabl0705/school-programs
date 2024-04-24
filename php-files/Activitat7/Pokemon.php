<?php

class Pokemon {

    private int $code;

    private string $name;

    private string $type1;

    private string $type2;

    private int $healthPoints;

    private int $attack;

    private int $defense;

    private int $speed;

    private int $specialDefense;

    private int $specialAttack;

    private int $generation;

    private bool $legendary;

    private string $image;

    private int $total;

    function __construct(int $code, string $name, string $type1, string $type2, int $healthPoints, int $attack, int $defense, int $speed, 
    int $specialDefense, int $specialAttack, int $generation, bool $legendary, string $image) 
    {
        $this->code = $code;
        $this->name = $name;
        $this->type1 = $type1;
        $this->type2 = $type2;
        $this->healthPoints = $healthPoints;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->speed = $speed;
        $this->specialDefense = $specialDefense;
        $this->specialAttack = $specialAttack;
        $this->generation = $generation;
        $this->legendary = $legendary;
        $this->image = $image;
        $this->total = $this->total();
    }
    function total(): int
    {
        return $this->healthPoints + $this->attack + $this->defense + $this->speed + $this->specialDefense + $this->specialAttack;
    }
    function get_code(): int
    {
        return $this->code;
    }
    function get_name(): string
    {
        return $this->name;
    }
    function get_type1(): string
    {
        return $this->type1;
    }
    function get_type2(): string
    {
        return $this->type2;
    }
    function get_healthPoints(): int
    {
        return $this->healthPoints;
    }
    function get_attack(): int
    {
        return $this->attack;
    }
    function get_defense(): int
    {
        return $this->defense;
    }
    function get_speed(): int
    {
        return $this->speed;
    }
    function get_specialAttack(): int
    {
        return $this->specialAttack;
    }
    function get_specialDefense(): int
    {
        return $this->specialDefense;
    }
    function get_generation(): int
    {
        return $this->generation;
    }
    function get_legendary(): bool
    {
        return $this->legendary;
    }
    function get_image(): string
    {
        return $this->image;
    }
    function get_total(): int
    {
        return $this->total;
    }
}