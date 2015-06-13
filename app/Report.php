<?php
namespace App;

use Illuminate\Filesystem\Filesystem;

/**
 * Class Report
 * @package App
 */
class Report
{

    /** @var Filesystem  */
    protected $file;

    /**
     * 1).
     * テストを簡単に、依存を取り除くためにコンストラクタでタイプヒンティングする様に変更します
     *
    public function __construct()
    {
        $this->file = new Filesystem();
    }
     */

    /**
     * 2).コンストラクタで利用するクラスをタイプヒンティングします
     *
     * @param Filesystem $file
     */
    public function __construct(Filesystem $file)
    {
        $this->file = $file;
    }

    /**
     * 3).
     * デフォルトを利用
     * @param Filesystem $file
     *
    public function __construct(Filesystem $file = null)
    {
        $this->file = $file ?: new Filesystem();
    }
     */
    /**
     * セッターインジェクション
     * @param Filesystem $file
     */
    public function setFile(Filesystem $file)
    {
        $this->file = $file;
    }

    /**
     * @return int
     */
    public function output()
    {
        return $this->file->put('report.txt', 'report');
    }

}
