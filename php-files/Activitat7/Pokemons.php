<?php

class Pokemons {

    private array $pokemons; 
    
    function __construct() {
        $this->pokemons = [];
    }

    public function add_pokemon(Pokemon $pokemon): void {
        $this->pokemons[] = $pokemon;

    }
    public function get_generations(int $generation): array {
        $array = [];
        foreach ($this->pokemons as $pokemon) {
            if ($pokemon->get_generation() == $generation) {
                $array[] = $pokemon;
            }
        }
        return $array;
    }
    public function get_pokemon_name(string $name): array { 
    $lowercase_name = strtolower($name); // Convertir $name a minúsculas
    $name_array = [];
        foreach ($this->pokemons as $pokemon) {
            $lowercase_pokemon_name = strtolower($pokemon->name);
            if (str_contains($lowercase_pokemon_name, $lowercase_name)) {
                $name_array[] = $pokemon->name;
            }
        }
        return $name_array;
    }

    public function get_pokemon_type(string $type): array { 
        $lowercase_type = strtolower($type); // Convertir $type a minúsculas
        $type_array = [];
            foreach ($this->pokemons as $pokemon) {
                $lowercase_pokemon_type1 = strtolower($pokemon->type1);
                $lowercase_pokemon_type2 = strtolower($pokemon->type2);
                if (str_contains($lowercase_pokemon_type1, $lowercase_type) or str_contains($lowercase_pokemon_type2, $lowercase_type)) {
                    $type_array[] = $pokemon->name;
                }
            }
        return $type_array;
    }

    function get_pokemons(): array
    {
        return $this->pokemons;
    }

}