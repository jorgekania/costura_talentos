<?php

namespace Tests\Feature\Feature;

use Tests\TestCase;
use App\Enums\CompanySize;
use App\Models\FashionCompany;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Factory;

class FashionCompanyTest extends TestCase
{

    use RefreshDatabase;

    # sail art test --filter=FashionCompanyTest::testListAllFashionCompanies
    public function testListAllFashionCompanies()
    {
        $fashionCompanies  = FashionCompany::factory(3)->create();
        $response = $this->get('/fashion-companies');
        $response->assertStatus(200);

        foreach ($fashionCompanies as $fashionCompany) {
            $response->assertSee($fashionCompany->corporate_reason);
        }
    }

    # sail art test --filter=FashionCompanyTest::testCreateFashionCompany
    public function testCreateFashionCompany()
    {
        $faker = Factory::create();

        $response = $this->post('/fashion-companies', [
            'corporate_reason' => $faker->company,
            'email'            => $faker->email,
            'password'         => bcrypt('password'),
            'logo'             => 'company_logos/corporate-company.png',
            'zip_code'         => $faker->postcode,
            'address'          => $faker->streetName(),
            'number'           => $faker->buildingNumber,
            'neighborhood'     => $faker->sentence(2),
            'city'             => $faker->city,
            'long_state'       => $faker->state,
            'short_state'      => $faker->stateAbbr,
            'company_size'     => CompanySize::getRandomEnumValue(),
            'description'      => $faker->sentence(2),
            'website'          => $faker->domainName(),

        ]);
        $response->assertStatus(200);
    }

    # sail art test --filter=FashionCompanyTest::testReadFashionCompany
    public function testReadFashionCompany()
    {

        $fashionCompany = FashionCompany::factory()->create();
        $response = $this->get("/fashion-companies/{$fashionCompany->id}");
        $response->assertStatus(200);
    }

    # sail art test --filter=FashionCompanyTest::testUpdateFashionCompany
    public function testUpdateFashionCompany()
    {
        $fashionCompany = FashionCompany::factory()->create();

        $newData  = [
            'corporate_reason' => 'Novo Nome da Empresa',
            'website' => 'www.teste.com',
        ];

        $response = $this->put("/fashion-companies/{$fashionCompany->id}", $newData);
        $response->assertStatus(200);

        $updatedFashionCompany = FashionCompany::find($fashionCompany->id);
        $expectedFieldNames = ['corporate_reason', 'website'];

        foreach ($expectedFieldNames as $fieldName) {
            $this->assertArrayHasKey($fieldName, $updatedFashionCompany->toArray());
        }
    }

    # sail art test --filter=FashionCompanyTest::testDeleteFashionCompany
    public function testDeleteFashionCompany()
    {
        $fashionCompany = FashionCompany::factory()->create();
        $response = $this->delete("/fashion-companies/{$fashionCompany->id}");
        $response->assertStatus(200);

    }
}
