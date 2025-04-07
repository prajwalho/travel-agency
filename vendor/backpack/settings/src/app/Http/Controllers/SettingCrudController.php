<?php

namespace Backpack\Settings\app\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\Settings\app\Http\Requests\SettingRequest;

class SettingCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

    public function setup()
    {
        CRUD::setModel("Backpack\Settings\app\Models\Setting");
        CRUD::setEntityNameStrings(trans('backpack::settings.setting_singular'), trans('backpack::settings.setting_plural'));
        CRUD::setRoute(backpack_url(config('backpack.settings.route')));
    }

    public function setupListOperation()
    {
        // only show settings which are marked as active
        CRUD::addClause('where', 'active', 1);

        CRUD::addColumn([
            'name'  => 'name',
            'label' => trans('backpack::settings.name'),
        ]);
        CRUD::addColumn([
            'name'  => 'key',
            'label' => 'Key',
        ]);

        CRUD::addColumn([
            'name'  => 'value',
            'label' => trans('backpack::settings.value'),
            'type'     => 'closure',
            'function' => function ($entry) {
                if ($entry->key === 'fav_icon' || $entry->key === 'header_logo' || $entry->key === 'footer_logo') {
                    $image = $entry->value;
                    $html = '';
                    if ($image) {
                        $html .= '<img src="' . asset($image) . '" style="max-width: 100px; max-height: 100px; margin-right: 4px;">';
                    } else {
                        $html = '-';
                    }
                    return $html;
                } else {
                    return $entry->value;
                }
            }
        ]);
    }

    public function setupShowOperation()
    {
        $this->crud->setShowContentClass('col-md-12');
        CRUD::addColumn('name');
        CRUD::addColumn('key');

        CRUD::addColumn([
            'name'  => 'value',
            'label' => trans('backpack::settings.value'),
            'type'     => 'closure',
            'function' => function ($entry) {
                if ($entry->key === 'fav_icon' || $entry->key === 'header_logo' || $entry->key === 'footer_logo') {
                    $image = $entry->value;
                    $html = '';
                    if ($image) {
                        $html .= '<a href="' . asset($image) . '" class="spotlight">';
                        $html .= '<img src="' . asset($image) . '" style="max-width: 100%; max-height: 150px; object-fit: cover;"  />';
                        $html .= '</a>';
                        $html .= '<script src="' . asset('js/spotlight.bundle.js') . '"></script>';
                    } else {
                        $html = '-';
                    }
                    return $html;
                } else {
                    return $entry->value;
                }
            }
        ]);

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

        CRUD::addColumn('field');
        CRUD::addColumn([
            'name' => 'active',
            'label' => 'Active',
            'type' => 'closure',
            'function' => function ($entry) {
                $html = '';
                $btn = '';
                $icon = '';
                $active = $entry->active;
                if ($entry->active === 0) {
                    $btn = 'btn-sm bg-danger';
                    $icon = '<i class="las la-times-circle"></i> ';
                    $active = 'No';
                } elseif ($entry->active === 1) {
                    $btn = 'btn-sm bg-success';
                    $icon = '<i class="las la-check-circle"></i> ';
                    $active = 'Yes';
                }

                $html .= '<span class="' . $btn . '">' . $icon . $active . '</span>';
                return $html;
            }
        ]);
    }

    public function setupCreateOperation()
    {
        CRUD::setValidation(SettingRequest::class);
        $this->crud->setCreateContentClass('col-md-10 bold-labels');

        CRUD::addField([
            'name'  => 'name',
            'label' => trans('backpack::settings.name'),
            'type'  => 'text',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::addField([
            'name'  => 'key',
            'label' => 'Key',
            'type'  => 'text',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::addField([
            'name'  => 'value',
            'label' => trans('backpack::settings.value'),
            'type'  => 'text',
        ]);

        CRUD::addField([
            'name'  => 'description',
            'label' => trans('backpack::settings.description'),
            'type'  => 'textarea',
        ]);

        CRUD::addField([
            'name'  => 'field',
            'label' => 'Field',
            'type'  => 'hidden',
            'value' => '{"name":"value","label":"Value","type":"text"}',
        ]);

        CRUD::addField([
            'name'  => 'active',
            'label' => 'Active',
            'type'  => 'hidden',
            'value' => '1',
        ]);
    }


    public function setupUpdateOperation()
    {
        $this->crud->setEditContentClass('col-md-10 bold-labels');

        CRUD::addField([
            'name'       => 'name',
            'label'      => trans('backpack::settings.name'),
            'type'       => 'text',
            'attributes' => [
                'disabled' => 'disabled',
            ],
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::addField([
            'name'  => 'key',
            'label' => 'Key',
            'type'  => 'text',
            'attributes' => [
                'disabled' => 'disabled',
            ],
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::addField(json_decode(CRUD::getCurrentEntry()->field, true));

        CRUD::addField([
            'name'  => 'description',
            'label' => 'Description',
            'type'  => 'textarea',
            'attributes' => [
                'rows' => '4',
            ],
        ]);
    }
}
