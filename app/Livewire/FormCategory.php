<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\View\View;
use Livewire\Component;

class FormCategory extends Component
{
    public ?string $button = 'Save Category';
    public ?string $name = null;
    public ?string $slug = null;

    public function render(): View
    {
        return view('livewire.form-category');
    }

    public function mount(Category $category): void
    {
        $this->button = $category->exists ? 'Update Category' : 'Save Category';
        $this->name = $category->name;
        $this->slug = $category->slug;
    }
}
