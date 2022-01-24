<?php

namespace App\Console\Commands;

use App\Task;
use Illuminate\Console\Command;

class RandomTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:random';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add random task';

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
        $task = new Task;
        $task->name = "Ontohod";
        $task->save();
    }
}
