<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Schema;




class TaskUnitTest extends TestCase
{

    // test schema ทดสอบ description ถูกต้อง
    public function test_schema_description()
    {
        
        $this->assertTrue(
            Schema::hasTable('users')
        );
        // $this->assertTrue( 
        //     Schema::hasColumns('users', [
        //       'id','name', 'email', 'email_verified_at', 'password'
        //   ]), 1);
    }

    // test schema ทดสอบ user_id ถูกต้อง
    public function test_schema_user_id()
    {

        $this->assertTrue(
            Schema::hasColumn('tasks', 'user_id')
        );
    }

    //test schema ทดสอบ รองรับภาษาไทยไหม
    public function test_description_thai_language()
    {
        // $this->assertDatabaseHas('tasks', [
        //     'description' => 'ภาษาไทย'
        // ]);
    }

    //test schema ทดสอบ รองรับภาษาอังกฤษได้ไหม
    public function test_description_english_language()
    {
    }

    //test schema ทดสอบ ใส่ตัวเลขอย่างเดียวได้ไหม
    public function test_description_numeric()
    {
    }

    //test schema ทดสอบ คำสั่ง SQL ได้ไหม
    public function test_description_sql_query()
    {
    }

    //test schema ทดสอบ เป็น null ได้ไหม
    public function test_description_null()
    {
    }

    //test schema ทดสอบ เป็น empty string ได้ไหม
    public function test_description_empty_string()
    {
    }

    //test schema ทดสอบ เป็น integer.max+1 ได้ไหม
    public function test_description_integer_max()
    {
    }
}
