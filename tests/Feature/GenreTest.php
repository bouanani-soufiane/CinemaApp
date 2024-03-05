<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GenreTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_genre_data(): void
    {
        $response = $this->get('/genre');

        $response->assertStatus(200);
        $response->assertSee(('no data found'));
    }
}
