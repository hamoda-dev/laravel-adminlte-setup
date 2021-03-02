<?php


namespace LaravelSetupAdmin\Commands;

use Illuminate\Console\Command;
use LaravelSetupAdmin\Providers\InstallerProvider;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'copy all resources to project';

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
        if (is_dir(public_path('dashboard')) && is_dir(resource_path('views/dashboard'))) {
            echo "I can't copy my resources, pleas rename or delete folder in public or views named dashboard" . PHP_EOL;
            die();
        } else {
            echo shell_exec("figlet 'You Are Ready'");

            $installerProvider = InstallerProvider::class;
            echo shell_exec('php artisan vendor:publish --provider="' . $installerProvider . '"');
        }
    }
}
