<?php


use Livewire\Livewire;
use App\Livewire\FashionCompanyComponent;



it('can create a new fashion company', function () {
    Livewire::test(FashionCompanyComponent::class)
        ->set('corporate_reason', 'Example Company')
        ->set('email', 'example@example.com')
        ->set('password', 'password123')
        ->set('zip_code', '12345-678')
        ->set('address', '123 Example St')
        ->set('number', '123')
        ->set('neighborhood', 'Example Neighborhood')
        ->set('city', 'Example City')
        ->set('long_state', 'Example Long State')
        ->set('short_state', 'ES')
        ->set('company_size', 'SMALL')
        ->set('description', 'Example Description')
        ->set('website', 'http://example.com')
        ->set('is_active', true)
        ->call('create')
        ->assertStatus(200);
});
