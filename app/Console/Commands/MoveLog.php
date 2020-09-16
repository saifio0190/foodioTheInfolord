<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Storage;
use Carbon\Carbon;
class MoveLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'moveLogFiles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'moveLogFiles';

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
     */
    public function handle()
    {
        //
        $localDisk = Storage::disk('log'); //getting “log” disk instance
            $localFiles = $localDisk->allFiles('logs'); // getting all log files in from location “storage/logs”
            $cloudDisk = Storage::disk('s3'); //getting instance of “s3” disk
            $pathPrefix = 'BackupLogs' . DIRECTORY_SEPARATOR . Carbon::now() . DIRECTORY_SEPARATOR;  // setting target path for log files.
            foreach ($localFiles as $file) 
                {
                $contents = $localDisk->get($file);
                $cloudLocation = $pathPrefix . $file;
                $cloudDisk->put($cloudLocation, $contents);
                $localDisk->delete($file);
            } // moving log files into s3 bucket.
    }
}
