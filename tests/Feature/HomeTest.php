<?php


// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * Check if the home page can be viewed.
     */
    public function view_home(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
