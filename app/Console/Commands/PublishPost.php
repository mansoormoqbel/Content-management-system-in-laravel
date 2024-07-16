<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Carbon\Carbon;

class PublishPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:publish';
    protected $description = 'Publish posts that are scheduled for publishing.';


    //protected $signature = 'app:publish-post';

    /**
     * The console command description.
     *
     * @var string
     */
   // protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         // Fetch posts that are scheduled for publishing (e.g., where publish_at <= current time)
        $posts = Post::where('status', 'scheduled')
        ->where('publish_at', '<=', Carbon::now())
        ->get();

        foreach ($posts as $post) {
        $post->status = 'published';
        $post->save();
        $this->info("Post published: {$post->title}");
        }

        $this->info('Publishing completed.');
    }
}
