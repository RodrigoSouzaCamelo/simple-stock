<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new view';

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
        $viewName = $this->argument('name');
        $fp = fopen(resource_path()."/views/".$viewName.".blade.php", "a");
        fputs($fp, "{{ -- new view -- }}");
        fclose($fp);
        $this->info("View created successfully.");
    }
}
