<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use PhpParser\Node\Stmt\Foreach_;

class Expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'expire users every one month automatically';

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
        $users=User::where('expire',0)->get();
        Foreach($users as $user){
            $user->Update(['expire'=>1]);
        }
    }
}
