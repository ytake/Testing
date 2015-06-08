<?php

class ReportTest extends \PHPUnit_Framework_TestCase
{
    /** @var \App\Report  */
    protected $report;


    protected function setUp()
    {
        /**
         * このまま実行すると、テストのたびにファイルが生成されます。
         *
        $this->report = new \App\Report(
            new \Illuminate\Filesystem\Filesystem()
        );
         */
        // コンストラクタでタイプヒンティングで記述したFilesystemクラスをモックします
        $filesystemMock = Mockery::mock('Illuminate\Filesystem\Filesystem');
        $content = 'report';
        $filesystemMock->shouldReceive('put')->with('report.txt', $content)
            ->once()->andReturn(mb_strlen($content));
        $this->report = new \App\Report($filesystemMock);
    }

    public function testOutput()
    {
        // $this->report->output();
        // ファイル内に書き込まれる文字の長さをテスト
        $this->assertSame(6, $this->report->output());
    }

}