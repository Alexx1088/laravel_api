<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MachineLearning extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'ml:run';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Run ML';

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
	 * @return int
	 */

	public function handle()
	{
		function sigmoid($x)
		{
			return round(1 / (1 + pow(M_E, -$x)), 9);
		}

		$i1 = 1;
		$i2 = 0;
		
		$w1 = 0.45;
		$w2 = 0.78;
		$w3 = -0.12;
		$w4 = 0.13;
		$w5 = 1.5;
		$w6 = -2.3;








	}
}
