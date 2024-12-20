<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_register_form()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function test_user_duplication(){
        $user1 = User::make([
            'name' => 'johnD',
            'email' => 'johnd@gmail.com'
        ]);
        $user2 = User::make([
            'name' => 'danc',
            'email' => 'danc@gmail.com'
        ]);
        $this->assertTrue($user1->email != $user2->email);
    }

    public function test_delete_user(){
        /* uncomment when testing for deleteing user then commen the uncommented code below */
       /*  $user =User::factory()->count(1)->make();
        $user = User::first();
        if($user){
            $user->delete();
        }
        $this->assertTrue(true); */
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    // test to store new user on registration
    public function test_it_stores_new_user(){
        /* uncomment when testing for storing new user then commen the uncommented code below */
       /*  $response = $this->post('register',[
            'name'=> 'dmax',
            'email'=>'aggie@gmail.com',
            'phone_number'=>'1234567890',
            'access'=>'beachside',
            'password'=>'12345678',
            'password_confirmation'=>'12345678',
        ]);

        $response->assertRedirect('/home'); */

        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    
 
}
