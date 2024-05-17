<?php

class Categories
{
    private int $category_id;
    private string $category;
    public function categoryChecklist(): string
    {
        return '<input type="checkbox" id="category1" value=' . $this->category_id . '>
                <label for="category1">' . $this->category . '</label><br>';
    }
}