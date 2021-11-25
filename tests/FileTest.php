<?php
namespace TDD\Test;
// declare(strict_types=1); 
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
use TDD\SrcFile; // imports SrcFile class
// Create Test Class

/*
* @covers  TDD\SrcFile
*/
class FileTest extends  TestCase {
 
   public function  testSum() {

       $obj = new SrcFile(); 
       $input = [ 0, 2, 5, 8]; 
       $output = $obj->sum($input); 
        $this->assertEquals( 
            15, 
           $output, 
           'When summing the total should equal 15' 
       );
   

   $obj = new SrcFile(); 
       $input = [ 1, 1, 1, 1, 1]; 
       $output = $obj->sum($input); 
        $this->assertEquals( 
            5, 
           $output, 
           'When summing the total should equal 5' 
       );
   }
}

// -- only info for me -- //

// $obj = new SrcFile(); // dummy object for testing
//        $input = [ 0, 2, 5, 8]; // put the inputs in its own array
//        $output = $obj->sum($input); // store the sum of the array within a $output variable
//         $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
//             15, // 1st param is the expected value
//            $output, // 2nd param is the $output variable
//            'When summing the total should equal 15' // 3rd param is a message displayed in case of failure
//        );