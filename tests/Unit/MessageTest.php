<?php

namespace Tests\Unit;
use Tests\TestCase;


class MessageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_message_beachside(){
        
        $response = $this->post('beachside',[
             'name'=> 'dmax',
             'email'=>'aggie@gmail.com',
             'subject'=>'nice',
             'message'=>'nice',
             'access'=>'beachside',
             
         ]);
 
         $response->assertRedirect('/beachside');
 
     }

     public function test_message_riverside(){
        
        $response = $this->post('riverside',[
             'name'=> 'dmax',
             'email'=>'aggie@gmail.com',
             'subject'=>'nice',
             'message'=>'nice',
             'access'=>'riverside',
             
         ]);
 
         $response->assertRedirect('/riverside');
 
     }

     public function test_message_courtside(){
        
        $response = $this->post('courtside',[
             'name'=> 'dmax',
             'email'=>'aggie@gmail.com',
             'subject'=>'nice',
             'message'=>'nice',
             'access'=>'courtside',
             
         ]);
 
         $response->assertRedirect('/courtside');
 
     }
}
