<?php

namespace Tests\Feature;
use Tests\TestCase;
class PostsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test  */
    public function a_user_can_browse_posts()
    {
        $response = $this->get('/posts');
        $response->assertStatus(200);
    }
}
