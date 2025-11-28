<?php

namespace App\Livewire;

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
        return Post::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('category_id')
            ->add('user_id')
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

            Column::make('Category', 'category_id'),

            Column::make('User', 'user_id'),

            Column::make('Title', 'title_preview')
                ->sortable()
                ->searchable(),

            Column::make('Slug', 'slug')
                ->sortable()
                ->searchable(),

            Column::make('Thumbnail', 'thumbnail')
                ->sortable()
                ->searchable(),

            Column::make('Content', 'content_preview')
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

    public function actions(Post $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit')
                ->class('bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-sm')
                ->dispatch('edit', ['rowId' => $row->id])
        ];
    }
}
