<?php

class ReportTest extends \PHPUnit_Framework_TestCase
{
    /** @var \App\Report  */
    protected $report;

    protected function tearDown()
    {
        parent::tearDown();
        \Mockery::close();
    }

    public function testOutput()
    {
        // ファイル内に書き込まれる文字の長さをテスト
        $filesystemMock = \Mockery::mock('Illuminate\Filesystem\Filesystem');
        $content = 'report';
        $filesystemMock->shouldReceive('put')->with('report.txt', $content)
            ->once()->andReturn(mb_strlen($content));
        $report = new \App\Report($filesystemMock);
        $this->assertSame(6, $report->output());
    }

    /**
     *
     */
    public function testSetterInject()
    {
        // ファイル内に書き込まれる文字の長さをテスト
        $filesystemMock = \Mockery::mock('Illuminate\Filesystem\Filesystem');
        $report = new \App\Report($filesystemMock);
        $report->setFile($filesystemMock);
        $this->assertInstanceOf(\App\Report::class, $report);
    }
}
