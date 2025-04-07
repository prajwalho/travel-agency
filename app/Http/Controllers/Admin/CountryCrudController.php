<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CountryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class CountryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Country::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/country');
        CRUD::setEntityNameStrings('country', 'countries');
        $this->crud->enableReorder('custom_reorder_name', 1);
    }

    protected function setupReorderOperation()
    {
        $this->crud->setReorderContentClass('col-md-10 col-md-offset-2');
    }

    protected function setupListOperation()
    {
        CRUD::addColumn('id');
        CRUD::addColumn([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'image',
            'height' => '50px',
            'width' => '50px'
        ]);
        CRUD::addColumn('name');
        CRUD::addColumn('code');
    }

    protected function setupShowOperation()
    {
        CRUD::addColumn([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'image',
            'height' => '100px',
            'width' => '100px'
        ]);
        CRUD::addColumn('name');
        CRUD::addColumn('code');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(CountryRequest::class);
        $this->crud->setCreateContentClass('col-md-10 bold-labels');

        CRUD::addField([
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::addField([
            'name' => 'code',
            'label' => 'Code',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        // Image preview field
        if ($this->crud->getCurrentEntryId()) {
            $image = $this->crud->model->find($this->crud->getCurrentEntryId())->image;
            $imgSrc = '';
            if ($image) {
                if (file_exists(public_path($image))) {
                    $imgSrc = asset($image);
                } else {
                    $imgSrc = 'https://dummyimage.com/200x150&text=No%20Image%20Available!';
                }
                $this->crud->addField([
                    'name' => 'image_preview',
                    'type' => 'custom_html',
                    'value' => '<img src="' . $imgSrc . '" style="max-width: 50%; min-height: 50px; max-height: 100px" />',
                ]);
            }
        }

        CRUD::addField([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'browse',
        ]);
    }

    protected function setupUpdateOperation()
    {
        abort_if(!$this->crud->getCurrentEntryId() || !$this->crud->model->find($this->crud->getCurrentEntryId()), '404');

        $this->crud->setEditContentClass('col-md-10 bold-labels');
        $this->setupCreateOperation();
    }
}
