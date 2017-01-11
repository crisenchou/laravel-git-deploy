<?php

namespace Crisen\LaravelGitDeploy\Console;

use Illuminate\Console\Command;

class Deploy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git {action}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'auto git command';

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
        $masterCommands = ['pull', 'push'];
        $action = $this->argument('action');
        $command = 'git ' . $action;
        if (in_array($action, $masterCommands)) {
            $command .= ' origin master';
        }
        system($command);
    }
}