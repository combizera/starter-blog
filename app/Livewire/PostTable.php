<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class PostTable extends PowerGridComponent
{
    public string $tableName = 'postTable';

    public function setUp(): array
    {
        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Post::query()
            ->with(['category', 'user']);
    }

    public function relationSearch(): array
    {
        return [
            'category' => ['name'],
            'user' => ['name'],
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('category_id')
            ->add('category_name', fn($post) => $post->category->name ?? 'N/A')
            ->add('user_id')
            ->add('user_name', fn($post) => $post->user->name ?? 'N/A')
            ->add('title_preview', fn($post) => Str::limit($post->title, 20, '...'))
            ->add('title')
            ->add('slug')
            ->add('thumbnail')
            ->add('content')
            ->add('content_preview', fn($post) => Str::limit($post->content, 20, '...'))
            ->add('created_at')
            ->add('created_at_formatted', fn($post) => Carbon::parse($post->created_at)->format('d/m/Y'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),

            Column::make('Category', 'category_name', 'category_id')
                ->sortable()
                ->searchable(),

            Column::make('User', 'user_name', 'user_id')
                ->sortable()
                ->searchable(),

            Column::make('Title', 'title_preview', 'title')
                ->sortable()
                ->searchable(),

            Column::make('Slug', 'slug')
                ->sortable()
                ->searchable(),

            Column::make('Thumbnail', 'thumbnail')
                ->sortable()
                ->searchable(),

            Column::make('Content', 'content_preview', 'content')
                ->searchable(),

            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->sortable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->redirect(route('posts.edit', $rowId));
    }

    #[\Livewire\Attributes\On('delete')]
    public function delete($rowId): void
    {
        $post = Post::find($rowId);

        if ($post) {
            $post->delete();

            $this->dispatch('pg:eventRefresh-postTable');

            session()->flash('success', 'Post deleted successfully!');
        }
    }

    public function actions(Post $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit')
                ->class('bg-zinc-500 text-white px-3 py-1 rounded text-sm font-medium hover:bg-zinc-600 transition hover:cursor-pointer')
                ->dispatch('edit', ['rowId' => $row->id]),

            Button::add('delete')
                ->slot('Delete')
                ->id()
                ->class('bg-red-500 text-white px-3 py-1 rounded text-sm font-medium hover:bg-red-600 transition hover:cursor-pointer')
                ->dispatch('delete', ['rowId' => $row->id])
                ->confirm('Are you sure you want to delete this category?')
        ];
    }
}
