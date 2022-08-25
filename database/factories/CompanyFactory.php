<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Config;

use App\Models\Company;
use App\Models\User;
use App\Models\Country;


class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition()
    {
        $owner = User::factory()->create();

        $website = explode("@", $this->faker->unique()->companyEmail())[1];
        $name = ucfirst(explode(".", $website)[0]) . " " . $this->faker->companySuffix();

        $isos = Config::get('constants.countries');
        $country = Country::where('iso', $isos[array_rand($isos)])->first();
        $nDigits = !empty($country->phone_nsn) ? $country->phone_nsn : 7; // if no NSN, use 7 digits

        // update owner record with a professional business email address
        // $owner->email = strtolower($owner->first_name[0].$owner->last_name."@").$website;
        $owner->email = strtolower($this->faker->firstName())."@".$website; // *PENDING* this line is temporary, use the line of code exactly before this line
        $owner->save();

        return [
            'name' => $name,
            'slogan' => $this->faker->text($maxNbChars=50),
            'description' => $this->faker->text($maxNbChars=160),
            // 'size' => rand(1,6),
            'country_id' => $country->id,
            'website' => $website,
            'email' => ['hello', 'admin', 'info'][rand(0,2)]  . '@' . $website,
            'phone' => '+'.$country->phonecode.rand(10**($nDigits-1),10**$nDigits-1),
            'owner_id' => $owner->id
        ];
    }
}