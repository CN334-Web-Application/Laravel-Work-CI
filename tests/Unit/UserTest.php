<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
   
    public function test_create_user()
    {      
        $user =  new User([
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => 'password',
        ]);

        $this->assertEquals('John', $user->name);
        $this->assertEquals('john@example.com', $user->email);
        $this->assertEquals('password', $user->password);
    }

    public function test_create_user_thai()
    {      
        $user =  new User([
            'name' => 'จอน',
            'email' => 'john@example.com',
            'password' => 'password',
        ]);

        $this->assertContains('ก', $user->name);
    }

    public function test_user_contain_empty_space()
    {      
        $user =  new User([
            'name' => 'จอน',
            'email' => 'john@example.com',
            'password' => 'password',
        ]);

        $this->assertContains(' ', $user->name);
    }



    //Test Schema ทดสอบ name สามารถใช้อักษรพิเศษได้ไหม
    
    //Test Schema ทดสอบ password มีแต่ตัวเลขได้ไหม

    //Test Schema ทดสอบ password มีตัวอักษรพิเศษได้ไหม

    //Test Schema ทดสอบ name มีตัวเลขได้ไหม

    //Test Schema ทดสอบ name ใช้แต่ตัวเลขได้ไหม

    //Test Schema ทดสอบ password ว่าเปล่าได้ไหม

    //Test Schema ทดสอบ email ไม่มีอยู่จริงได้ไหม
}
