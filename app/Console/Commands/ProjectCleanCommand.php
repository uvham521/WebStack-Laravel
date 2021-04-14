<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;

class ProjectCleanCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webstack:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '清空站点数据';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     * @throws \Throwable
     */
    public function handle()
    {
        // 确认操作
        $this->checkHint();

        DB::table('sites')->truncate();
        DB::table('categories')->truncate();

        $filesystem = new Filesystem;
        $filesystem->cleanDirectory(public_path('uploads/images'));

        $this->info('完成.');
    }

    /**
     * 确认操作
     *
     * @return void
     */
    protected function checkHint()
    {
        if (!$this->confirm('清除所有网站信息及图片?')) {
            exit('操作已取消.');
        }
    }
}
