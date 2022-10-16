<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class PageTest extends TestCase
{
    // use RefreshDatabase;
    /**
     @test
     */
    public function root_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     @test
     */
    public function redirect_if_not_auth()
    {

        $this->get('/home')
            ->assertRedirect(route('login'));
    }
    /**
     @test
     */
    public function home_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->get('/home')
            ->assertStatus(200);
    }

    /**
     @test
     */
    public function detail_post_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->get('/detail/1/article')
            ->assertStatus(200);
    }
    /**
     @test
     */
    public function create_post_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->get('/dashboard/create-post')
            ->assertStatus(200);
    }

    /**
     @test
     */
    public function all_user_post_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->get('dashboard/user/post')
            ->assertStatus(200);
    }

    /**
     @test
     */
    public function edit_user_post_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->get('dashboard/user/1/edit')
            ->assertStatus(200);
    }
}
