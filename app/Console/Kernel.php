<?php namespace JamylBot\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		'JamylBot\Console\Commands\Inspire',
        'JamylBot\Console\Commands\CheckApis',
        'JamylBot\Console\Commands\RegisterSlackUsers',
        'JamylBot\Console\Commands\RunKillbot',
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		//$schedule->command('inspire')->hourly();
        $schedule->command('api:checks')->everyTenMinutes();
        $schedule->command('slack:register')->everyFiveMinutes();
        $schedule->command('killbot:fire')->everyFiveMinutes();
	}

}
