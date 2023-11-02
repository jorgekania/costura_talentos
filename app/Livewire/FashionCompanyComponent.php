<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\FashionCompany;
use Livewire\WithPagination;

class FashionCompanyComponent extends Component
{

    use WithPagination;

    public $company;

    #[Rule('required|min:5|string')]
    public $corporateReason;

    #[Rule('required|email|string')]
    public $email;

    #[Rule('required|min:8|string')]
    public $password;

    #[Rule('required|min:9|string')]
    public $zipCode;

    #[Rule('required|string')]
    public $address;

    #[Rule('required|string')]
    public $number;

    #[Rule('required|string')]
    public $neighborhood;

    #[Rule('required|string')]
    public $city;

    #[Rule('required|string')]
    public $longState;

    #[Rule('required|max:2|string')]
    public $shortState;

    #[Rule('required|integer')]
    public $companySize;

    #[Rule('required|string')]
    public $description;

    #[Rule('required|string')]
    public $website;

    public $isActive = true;

    public function create(): void
    {
        $this->validate();

        FashionCompany::create([
            'corporate_reason' => $this->corporate_reason,
            'email' => $this->email,
            'password' => $this->password,
            'zip_code' => $this->zipCode,
            'address' => $this->address,
            'number' => $this->number,
            'neighborhood' => $this->neighborhood,
            'city' => $this->city,
            'long_state' => $this->longState,
            'short_state' => $this->shortState,
            'company_size' => $this->companySize,
            'description' => $this->description,
            'website' => $this->website,
            'is_active' => $this->isActive,
        ]);
        session()->flash('success', 'Company created successfully.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.fashion-company-component',[
            'companies' => FashionCompany::paginate(5)
        ]);
    }
}
