<?php

namespace App\Http\Livewire\Region;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Livewire\Component;

class Dropdowns extends Component
{
    public $province;
    public $regencies = [];
    public $regency;
    public $districts = [];
    public $district;
    public $villages = [];
    public $village;

    public function render()
    {
        $provinces = Province::orderBy('name')->get();

        if ($this->province) {
            $this->regencies = Regency::where('province_id', $this->province)->get();
            if ($this->regency) {
                $this->districts = District::where('regency_id', $this->regency)->get();
                if ($this->district) {
                    $this->villages = Village::where('district_id', $this->district)->get();
                }
            }
        }
        return view('livewire.region.dropdowns', compact('provinces'));
    }
}
