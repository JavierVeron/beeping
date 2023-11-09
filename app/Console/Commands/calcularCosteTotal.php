<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\CalcularCosteTotalJob;

class calcularCosteTotal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:calcularCosteTotal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cálculo del Coste Total';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        CalcularCosteTotalJob::dispatch();
    }
}
