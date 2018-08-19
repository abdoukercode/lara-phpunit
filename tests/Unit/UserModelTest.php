<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsUserModelTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function user_has_full_name_attribute()
    {
        $user =  User::create([
            'firstname' => 'abdou1',
            'lastname' => 'camara',
            'password' => 'secret',
            'email' => 'abdou1@test.com',
        ]);
var_dump($user->fullname);

$this->assertEquals('abdou1 camara', $user->fullname);


        

    }
}
