<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Task;

class TaskUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testcreatetask()
    {
        $task = new Task();
        $task->description = 'Test Task';
        $task->user_id = 1;
        
        $this->assertEquals('Test Task', $task->description);
    }

    
}
