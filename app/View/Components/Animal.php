<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Animal as AnimalModel;

class Animal extends Component
{
    public AnimalModel $animal;

    public function __construct(AnimalModel $animal)
    {
        $this->animal = $animal;
    }
    public function render()
    {
        return view('components.animal');
    }
}
