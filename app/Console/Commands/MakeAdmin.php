<?php

namespace StreamBlog\Console\Commands;

use Illuminate\Console\Command;
use StreamBlog\Models\User;

class MakeAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stream_blog:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Makes the given user an admin';

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
        $this->info('Let\'s make a user an admin!');
        $email = $this->ask('What is the user\'s email?');
        $user = User::where('email', $email)->first();
        if ($user == null) {
            $this->info('User not found!');
            exit;
        }
        if ($user->is_admin) {
            $this->info('User is already an admin!');
            exit;
        }
        $user->is_admin = true;
        $user->save();
        $this->info("User $email is now an admin!");
    }
}
