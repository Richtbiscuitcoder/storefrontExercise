<?php

class Characters
{
    private int $character_id;
    private string $character;
    public function characterChecklist(): string{
        return '<input type="checkbox" id="category1" value=' . $this->character_id . '>
                <label for="category1">' . $this->character . '</label> <br>';
    }
}