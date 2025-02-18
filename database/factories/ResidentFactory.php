<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resident>
 */
class ResidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  

    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName,         
            'middlename' => $this->faker->lastName,         
            'lastname' => $this->faker->lastName,             
            'age' => $this->faker->numberBetween(19, 80),    
            'sex' => $this->faker->randomElement(['male', 'female']),  
            'address' => $this->faker->address,               
            'contactNumber' => $this->faker->phoneNumber,     
            'incidentDate' => $this->faker->date,            
            'incidentTime' => $this->faker->time,            
            'admissionDate' => $this->faker->date,           
            'reportDate' => $this->faker->date,              
            'natureOfTheCrime' => $this->faker->word,        
            'caseStatus' => $this->faker->randomElement(['open', 'closed', 'pending']),  
            'residentImage' => 'images/chancellor.png',     
        ];
    }



}
