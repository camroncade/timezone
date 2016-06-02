<?php

class TimezoneTest extends PHPUnit_Framework_TestCase{
    public function testConvertFromUTC(){
        $timezone = new \Camroncade\Timezone\Timezone();

        $this->assertEquals('2016-01-01 18:00:00',$timezone->convertFromUTC('2016-01-01 18:00:00','UTC'));
        $this->assertEquals('18:30:20',$timezone->convertFromUTC('2016-01-01 18:30:20','UTC','H:i:s'));
    }

    public function testConvertToUTC(){
        $timezone = new \Camroncade\Timezone\Timezone();

        $this->assertEquals('2016-01-01 18:00:00',$timezone->convertToUTC('2016-01-01 18:00:00','UTC'));
        $this->assertEquals('18:30:20',$timezone->convertToUTC('2016-01-01 18:30:20','UTC','H:i:s'));
    }
}