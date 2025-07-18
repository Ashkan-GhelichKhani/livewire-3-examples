<?php

namespace App\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class Regions extends Component
{
    public $continents = [];
    public $selectedContinent;

    public $countries = [];
    public $selectedCountry;

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function setCountries()
    {

        if ($this->selectedContinent !== 0) {
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }

    }

    public function render()
    {
        return view('livewire.regions');
    }
}
