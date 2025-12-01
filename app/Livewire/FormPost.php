<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class FormPost extends Component
{
    public ?string $button = 'Save Post';
    public ?int $categoryId = null;
    public ?int $userId = null;
    public ?string $title = null;
    public ?string $slug = null;
    public ?string $thumbnail = null;
    public ?string $content = null;
    public ?Collection $categories = null;
    public ?Collection $users = null;

    public function render(): View
    {
        return view('livewire.form-post');
    }

    public function mount(Post $post): void
    {
        $this->button = $post->exists ? 'Update Post' : 'Save Post';
        $this->categoryId = $post->category_id;
        $this->userId = $post->user_id;
        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->thumbnail = $post->thumbnail;
        $this->content = $post->content;
    }
}
