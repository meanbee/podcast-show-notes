<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\ConceptInsightsCommand::class,
        Commands\ConvertMp3ToOpus::class,
        Commands\DownloadConvertUpload::class,
        Commands\DownloadMp3::class,
        Commands\SpeechToTextCommand::class,
        Commands\SyncRssFeeds::class,
        Commands\ConceptInsightsCommand::class,
        Commands\SpeechToTextCommand::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }
}
