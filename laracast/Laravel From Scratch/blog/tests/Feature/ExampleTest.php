<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Post;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    // for rollback 
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $response = $this->get('/')->assertSee('The Bootstrap Blog');

        // $response->assertStatus(200);

        // Given I have to record in the database that are posts, 
        // and each one is posted a month apart
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
                'created_at' => \Carbon\Carbon::now()->subMonth()
            ]);
        // When i fetch the archives
        $posts = Post::archives();
        // Then the response should be in the proper format
        $this->assertEquals([
                [
                    "year" => $first->created_at->format('Y'),
                    "month" => $first->created_at->format('F'),
                    "published" => 1
                ],
                [
                    "year" => $second->created_at->format('Y'),
                    "month" => $second->created_at->format('F'),
                    "published" => 1
                ],
            ], $posts);
    }
}
