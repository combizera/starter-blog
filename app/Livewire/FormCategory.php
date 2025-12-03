<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class FormCategory extends Component
{
    public ?string $button = 'Save Category';

    public ?string $name = null;

    public ?string $slug = null;

    public ?string $description = null;

    public ?int $postFeatured = null;

    public ?bool $isEditing = false;

    public ?Collection $posts = null;

    public function render(): View
    {
        return view('livewire.form-category');
    }

    public function mount(Category $category, ?Collection $posts = null, bool $isEditing = false): void
    {
        $this->isEditing = $isEditing;
        $this->posts = $posts ?? Collection::make();
        $this->button = $category->exists ? 'Update Category' : 'Save Category';
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->description = $category->description;
        $this->postFeatured = $category->post_featured;
    }
}
