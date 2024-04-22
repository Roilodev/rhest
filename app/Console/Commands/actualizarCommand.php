<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
Use App\Models\Estadistica;
Use Illuminate\Support\Facades\DB;


class actualizarCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:actualizar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualiza la pantalla de informacion';

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
        $estadisticas = DB::select('exec pa_estadistica');
        return Command::SUCCESS;
    }
}
