<?php

use Mockery as m;
use TenantCloud\Excel\Readers\LaravelExcelReader;
use TenantCloud\Excel\Classes;

class ReaderTest extends TestCase {

    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();

        // Set excel class
        $this->excel    = App::make('phpexcel');

        // Set writer class
        $this->reader   = App::make('old_excel.reader');
        $this->reader->injectExcel($this->excel);
    }

    /**
     * Test the excel injection
     * @return [type] [description]
     */
    public function testExcelInjection()
    {
        $this->assertEquals($this->excel, $this->reader->getExcel());
    }

}