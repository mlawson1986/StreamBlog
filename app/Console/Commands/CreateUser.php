<?php

namespace StreamBlog\Console\Commands;

use Illuminate\Console\Command;
use StreamBlog\Models\User;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stream_blog:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create users for the system';

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
        $this->info('Welcome to Stream Blog\'s Super Simple User System!');
        $userName = $this->ask('Username?');
        $password = bcrypt($this->secret('Password'));
        $email = $this->ask('Email?');
        $isAdmin = $this->choice('Is this user an admin?', ['yes', 'no']);

        $user = new User();
        $user->name = $userName;
        $user->password = $password;
        $user->email = $email;
        if ($isAdmin == 'yes') {
            $user->is_admin = true;
        }
        else {
            $user->is_admin = false;
        }

        $user->save();
    }
}
