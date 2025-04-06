<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SliderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class SliderCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Slider::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/slider');
        CRUD::setEntityNameStrings('slider', 'sliders');
        $this->crud->enableReorder('title', 1);
    }

    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'image',
            'label' => "Image",
            'type' => 'image',
            'height' => '50px',
            'width' => '50px',
        ]);

        CRUD::addColumn([
            'name' => 'title',
            'label' => 'Title',
        ]);

        CRUD::addColumn([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'closure',
            'function' => function ($entry) {
                $html = '';
                if ($entry->status == 'DRAFT') {
                    $textColor = 'text-danger';
                } elseif ($entry->status == 'PUBLISHED') {
                    $textColor = 'text-success';
                }

                $html .= '<span class="' . $textColor . '">' . $entry->status . '</span>';
                return $html;
            }
        ]);
    }

    protected function setupShowOperation()
    {
        CRUD::addColumn([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'image',
            'height' => '200px',
            'width' => '200px'
        ]);

        CRUD::addColumn([
            'name' => 'title',
            'label' => 'Title',
        ]);

        // CRUD::addColumn([
        //     'name' => 'sub_title',
        //     'label' => 'Sub Title',
        // ]);

        CRUD::addColumn([
            'name' => 'url',
            'label' => 'URL',
            'type' => 'closure',
            'function' => function ($entry) {
                $html = '';

                if ($entry->url) {
                    $html .= '<a href="' . $entry->url . '">' . $entry->url . '</a>';
                }

                return $html;
            }
        ]);

        CRUD::addColumn([
            'name' => 'url_title',
            'label' => 'URL Title',
        ]);

        CRUD::addColumn([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'closure',
            'function' => function ($entry) {
                $html = '';
                if ($entry->status == 'DRAFT') {
                    $textColor = 'text-danger';
                } elseif ($entry->status == 'PUBLISHED') {
                    $textColor = 'text-success';
                }

                $html .= '<span class="' . $textColor . '">' . $entry->status . '</span>';
                return $html;
            }
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(SliderRequest::class);

        CRUD::addField([
            'name' => 'title',
            'label' => 'Title',
            'type' => 'text',
        ]);

        // CRUD::addField([
        //     'name' => 'sub_title',
        //     'label' => 'Sub Title',
        //     'type' => 'text',
        // ]);

        CRUD::addField([
            'name' => 'url',
            'label' => 'URL',
            'type' => 'url',
        ]);

        CRUD::addField([
            'name' => 'url_title',
            'label' => 'URL Title',
            'type' => 'text',
        ]);

        // add the image preview field
        if ($this->crud->getCurrentEntryId()) {
            $image = $this->crud->model->find($this->crud->getCurrentEntryId())->image;
            if ($image) {
                if (!file_exists(public_path($image))) {
                    $imgSrc = 'https://dummyimage.com/200x150&text=No%20Image%20Available!';
                } else {
                    $imgSrc = asset($image);
                }
                $this->crud->addField([
                    'name' => 'image_preview',
                    'type' => 'custom_html',
                    'value' => '<img src="' . $imgSrc . '" height="150">',
                ]);
            }
        }

        CRUD::addField([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'browse',
        ]);

        CRUD::addField([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'custom_radio_2_options',
            'options' => [
                'DRAFT' => 'DRAFT',
                'PUBLISHED' => 'PUBLISHED',
            ],
            'default' => 'PUBLISHED',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
