<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IconRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class IconCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Icon::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/icon');
        CRUD::setEntityNameStrings('icon', 'icons');
    }

    protected function setupListOperation()
    {
        CRUD::addColumn('name');
        CRUD::addColumn([
            'name' => 'icon',
            'label' => 'Icon',
            'type' => 'closure',
            'function' => function ($entry) {
                return '(' . $entry->icon . ') <i class="' . $entry->icon . '"></i>';
            }
        ]);
        CRUD::addColumn('icon');
    }

    protected function setupShowOperation()
    {
        $this->crud->setShowContentClass('col-md-10');
        CRUD::addColumn('name');
        CRUD::addColumn([
            'name' => 'icon',
            'label' => 'Icon',
            'type' => 'closure',
            'function' => function ($entry) {
                return '(' . $entry->icon . ') <i class="' . $entry->icon . '"></i>';
            }
        ]);
        CRUD::addColumn('icon');
        CRUD::addColumn([
            'name' => 'description',
            'label' => 'Description',
            'type' => 'textarea',
            'escaped' => false,
            'wrapper'   => [
                'element' => 'div',
                'style' => 'border: 1px dashed #ccc; padding: 10px',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(IconRequest::class);

        CRUD::addField([
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
        ]);
        CRUD::addField([
            'name' => 'icon',
            'label' => 'Icon',
            'type' => 'text',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
