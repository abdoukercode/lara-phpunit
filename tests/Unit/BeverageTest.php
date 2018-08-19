<?php

namespace Tests\Unit;

use App\Beverage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BeverageTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @test
     */
    public function beverage_has_name()
    {
        $beverage = factory(Beverage::class, 1)->create(); 
        var_dump($beverage[0]->name); 

        $name = $beverage[0]->name;
        $this->assertNotEmpty($name);
    }
}
