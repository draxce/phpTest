<?php

require_once "broj.php";


class BrojTest extends PHPUnit_Framework_TestCase{
    
    public $test;
    
    public function setUp(){
        
    }
    
    public function testException()
    {
        //-1 
        slucajeviExc(-1);
        
        //-3
        slucajeviExc(-3);
        
        //0
        slucajeviExc(0);
        
        //-1.32
        slucajeviExc(-1.32);
        
        
        //2.58
        slucajeviExc(2.58);
        
    }
    
    public function testEcho(){
        //3
        slucajeviEcho(3);
        
        //4
        slucajeviEcho(4);
        
        //12
        slucajeviEcho(12);
    }
    
    public function slucajeviExc($no){
        try{
            $this->test = new Broj($no);//if this method not throw exception it must be fail too.
            $this->fail("Expected exception was not thrown");
        }catch(Exception $e){
           // $this->assertEquals(1162011,$e->getCode());
            $this->assertEquals("Exception Message",$e->getMessage());
        }
    }
    
    public function slucajeviEcho($br){
        try{
            $broj = new Broj($br);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    
}
