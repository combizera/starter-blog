<?php

use App\Models\Category;
use Database\Seeders\DatabaseSeeder;

beforeEach(function () {
    (new DatabaseSeeder)->run();
});

describe('Routes [CategoryController]', function () {
    it('should load the correct view - /categories', function () {
        $response = $this->get(route('categories.index'));

        $response->assertStatus(200)
            ->assertViewIs('category.index')
            ->assertViewHas('categories');
    });

    it('should load the correct view - /categories/create', function () {
        $response = $this->get(route('categories.create'));

        $response->assertStatus(200)
            ->assertViewIs('category.create');
    });

    // it('should store a new category - /categories', function () {
    //    $data = [
    //        'id' => 20,
    //        'name' => 'Test Category',
    //        'slug' => 'test-category',
    //        'description' => 'This is a test category description',
    //    ];
    //
    //
    //    $response = $this->post(route('categories.store'), $data->id);
    //
    //    $response->assertRedirect(route('categories.index'))
    //        ->assertSessionHas('success', 'Category created successfully');
    //
    //    $this->assertDatabaseHas('categories', [
    //        'name' => 'Test Category',
    //        'slug' => 'test-category',
    //    ]);
    // });

    it('should load the correct view - /categories/{category}/edit', function () {
        $category = Category::query()->first();

        $response = $this->get(route('categories.edit', $category));

        $response->assertStatus(200)
            ->assertViewIs('category.edit')
            ->assertViewHas(['category', 'posts']);
    });

    it('should update an existing category - /categories/{category}', function () {
        $category = Category::query()->first();

        $data = [
            'name'        => 'Updated Category Name',
            'slug'        => 'updated-category-name',
            'description' => $category->description,
        ];

        $response = $this->put(route('categories.update', $category), $data);

        $response->assertRedirect(route('categories.index'))
            ->assertSessionHas('success', 'Category updated successfully');

        $this->assertDatabaseHas('categories', [
            'id'   => $category->id,
            'name' => 'Updated Category Name',
            'slug' => 'updated-category-name',
        ]);
    });

    it('should delete a category - /categories/{category}', function () {
        $category = Category::query()->first();

        $response = $this->delete(route('categories.destroy', $category));

        $response->assertRedirect(route('categories.index'))
            ->assertSessionHas('success', 'Category deleted successfully');

        $this->assertDatabaseMissing('categories', [
            'id' => $category->id,
        ]);
    });
});
