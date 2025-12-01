<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class CategoryTable extends PowerGridComponent
{
    public string $tableName = 'categoryTable';

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
        return Category::query()
            ->withCount('posts');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('slug')
            ->add('posts_count')
            ->add('created_at')
            ->add('created_at_formatted', fn($category) => Carbon::parse($category->created_at)->format('d/m/Y'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),

            Column::make('Posts', 'posts_count')
                ->sortable(),

            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Slug', 'slug')
                ->sortable()
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
        $this->redirect(route('categories.edit', $rowId));
    }

    #[\Livewire\Attributes\On('delete')]
    public function delete($rowId): void
    {
        $category = Category::find($rowId);

        if ($category) {
            if ($category->posts()->count() > 0) {
                session()->flash('error', 'Cannot delete category with posts!');
                $this->dispatch('pg:eventRefresh-categoryTable');
                return;
            }

            $category->delete();

            $this->dispatch('pg:eventRefresh-categoryTable');

            session()->flash('success', 'Category deleted successfully!');
        }
    }

    public function actions(Category $row): array
    {
        // TODO: Criar action p/ ir p/ category

        return [
            Button::add('edit')
                ->slot('Edit')
                ->id()
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
