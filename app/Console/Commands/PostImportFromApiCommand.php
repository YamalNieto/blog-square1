<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Services\ApiClient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class PostImportFromApiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:import-from-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import posts from api';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ApiClient $apiClient, Post $model)
    {
        $this->apiClient = $apiClient;
        $this->model = $model;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        //Retrive posts from api
        $posts = $this->apiClient->getLastPosts();
        $adminId = Config::get('app.admin_id');

        //Persist posts
        $posts->each(function ($post) use ($adminId) {
            $this->model->create([
                'user_id' => $adminId,
                'title' => $post['title'],
                'description' => $post['description'],
                'publication_date' => $post['publication_date']
            ]);
        });
    }
}
