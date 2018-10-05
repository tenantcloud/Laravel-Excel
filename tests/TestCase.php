<?php

use Orchestra\Testbench\TestCase as TestBenchTestCase;

class TestCase extends TestBenchTestCase
{

    public function testExcelClass()
    {
        $excel = App::make('TenantCloud\Excel\Excel');
        $this->assertInstanceOf(\TenantCloud\Excel\Excel::class, $excel);
    }


    protected function getPackageProviders($app)
    {
        return array('TenantCloud\Excel\ExcelServiceProvider');
    }


    protected function getPackagePath()
    {
        return realpath(implode(DIRECTORY_SEPARATOR, [
            __DIR__,
            '..',
            'src',
            'TenantCloud',
            'Excel'
        ]));
    }
}
