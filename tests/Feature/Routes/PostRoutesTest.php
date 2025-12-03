<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;

beforeEach(function () {
    (new DatabaseSeeder)->run();
});

describe('Routes [PostController]', function () {
    it('should load the correct view - /posts', function () {
        $response = $this->get(route('posts.index'));

        $response->assertStatus(200)
            ->assertViewIs('post.index')
            ->assertViewHas('posts');
    });

    it('should load the correct view - /posts/create', function () {
        $response = $this->get(route('posts.create'));

        $response->assertStatus(200)
            ->assertViewIs('post.create')
            ->assertViewHas(['categories', 'users']);
    });

    it('should store a new post - /posts', function () {
        $category = Category::query()->first();
        $user = User::query()->first();

        $data = [
            'title'        => 'Test Post Title',
            'slug'         => 'test-post-title',
            'content'      => 'This is test content for the post.',
            'excerpt'      => 'Test excerpt',
            'category_id'  => $category->id,
            'user_id'      => $user->id,
            'published_at' => now(),
        ];

        $response = $this->post(route('posts.store'), $data);

        $response->assertRedirect(route('posts.index'))
            ->assertSessionHas('success', 'Post created successfully');

        $this->assertDatabaseHas('posts', [
            'title' => 'Test Post Title',
            'slug'  => 'test-post-title',
        ]);
    });

    it('should load the correct view - /posts/{post}/edit', function () {
        $post = Post::query()->first();

        $response = $this->get(route('posts.edit', $post));

        $response->assertStatus(200)
            ->assertViewIs('post.edit')
            ->assertViewHas(['post', 'categories', 'users']);
    });

    it('should update an existing post - /posts/{post}', function () {
        $post = Post::query()->first();

        $data = [
            'title'        => 'Updated Post Title',
            'slug'         => 'updated-post-title',
            'content'      => $post->content,
            'excerpt'      => $post->excerpt,
            'category_id'  => $post->category_id,
            'user_id'      => $post->user_id,
            'published_at' => $post->published_at,
        ];

        $response = $this->put(route('posts.update', $post), $data);

        $response->assertRedirect(route('posts.index'))
            ->assertSessionHas('success', 'Post updated successfully');

        $this->assertDatabaseHas('posts', [
            'id'    => $post->id,
            'title' => 'Updated Post Title',
            'slug'  => 'updated-post-title',
        ]);
    });

    it('should delete a post - /posts/{post}', function () {
        $post = Post::query()->first();

        $response = $this->delete(route('posts.destroy', $post));

        $response->assertRedirect(route('posts.index'))
            ->assertSessionHas('success', 'Post deleted successfully');

        $this->assertDatabaseMissing('posts', [
            'id' => $post->id,
        ]);
    });
});
