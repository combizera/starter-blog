<?php

use Database\Seeders\DatabaseSeeder;

beforeEach(function () {
    (new DatabaseSeeder)->run();
});

describe('Routes [Blog]', function () {
    it('should load the correct view - /', function () {
        $response = $this->get(route('site.index'));

        $response->assertStatus(200)
            ->assertViewIs('welcome');
    });

    it('should load the correct view - /blog', function () {
        $response = $this->get(route('blog.index'));

        $response->assertStatus(200)
            ->assertViewIs('blog.index');
    });

    it('should load the correct view - /blog/$post', function () {
        $post = \App\Models\Post::query()->first();

        $response = $this->get(route('blog.post', $post));

        $response->assertStatus(200)
            ->assertViewIs('blog.single-post');
    });

    it('should load the correct view - /blog/$category', function () {
        $category = \App\Models\Category::query()->first();

        $response = $this->get(route('blog.category', $category->slug));

        $response->assertStatus(200)
            ->assertViewIs('blog.category');
    });

    it('should return 404 for non-existent routes', function () {
        $response = $this->get('/rota-que-nao-existe');

        $response->assertStatus(404);
    });
});
