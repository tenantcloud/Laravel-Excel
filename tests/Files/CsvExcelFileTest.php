<?php

include_once 'classes/CsvTestImport.php';

class CsvExcelFileTest extends TestCase {


    public function testInit()
    {
        $importer = app('CsvTestImport');
        $this->assertInstanceOf(\TenantCloud\Excel\Files\ExcelFile::class, $importer);
    }


    public function testGetResultsDirectlyWithCustomDelimiterSetAsProperty()
    {
        $importer = app('TestImport');
        $results = $importer->get();

        $this->assertInstanceOf(\TenantCloud\Excel\Collections\RowCollection::class, $results);
        $this->assertCount(5, $results);
    }

}