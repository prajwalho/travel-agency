<?php

namespace App;

use App\Models\ActivityPreference;
use App\Models\Destination;
use App\Models\HomeFaq;
use App\Models\TeamMember;
use App\Models\Trip;

trait PageTemplates
{
    // Function to format TeamMember options
    // protected function getFormattedTeamMemberOptions()
    // {
    //     $teamMembers = TeamMember::where('status', 'PUBLISHED')->get();

    //     $formattedOptions = $teamMembers->pluck('name', 'id')->map(function ($name, $id) {
    //         $post = TeamMember::find($id)->post;
    //         return $name . ' (' . $post . ')';
    //     });

    //     return $formattedOptions->toArray();
    // }

    // Function to format ActivityPreference options
    // protected function getFormattedActivityPreferenceOptions()
    // {
    //     $activityPreferences = ActivityPreference::orderedByLft()->get();

    //     $formattedOptions = $activityPreferences->pluck('title', 'id');

    //     return $formattedOptions->toArray();
    // }

    // protected function getFormattedDestinationOptions()
    // {
    //     $destinations = Destination::orderedByLft()->get();

    //     $formattedOptions = $destinations->pluck('title', 'id');

    //     return $formattedOptions->toArray();
    // }

    // protected function getFormattedHomeFaqOptions()
    // {
    //     $homeFaqs = HomeFaq::where('status', 'PUBLISHED')->orderedByLft()->get();

    //     $formattedOptions = $homeFaqs->pluck('question', 'id');

    //     return $formattedOptions->toArray();
    // }

    // protected function getFormattedTripOptions()
    // {
    //     $trips = Trip::where('status', 'PUBLISHED')->orderedByLft()->get();

    //     $formattedOptions = $trips->pluck('title', 'id');

    //     return $formattedOptions->toArray();
    // }

    // private function services()
    // {
    //     $this->crud->setCreateContentClass('col-md-10 bold-labels');
    //     $this->crud->setEditContentClass('col-md-10 bold-labels');

    //     // Banner
    //     // Image preview field
    //     if ($this->crud->getCurrentEntryId()) {
    //         if (isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['banner_image'])) {
    //             $banner_image = $this->crud->model->find($this->crud->getCurrentEntryId())->extras['banner_image'];
    //             $imgSrc = '';
    //             if ($banner_image) {
    //                 if (file_exists(public_path($banner_image))) {
    //                     $imgSrc = asset($banner_image);
    //                 } else {
    //                     $imgSrc = 'https://dummyimage.com/200x150&text=No%20Image%20Available!';
    //                 }
    //                 $this->crud->addField([
    //                     'tab' => 'Banner',
    //                     'name' => 'banner_image_preview',
    //                     'type' => 'custom_html',
    //                     'value' => '<img src="' . $imgSrc . '" style="max-width: 50%; min-height: 100px; max-height: 150px" />',
    //                 ]);
    //             }
    //         }
    //     }

    //     $this->crud->addField([
    //         'tab' => 'Banner',
    //         'name' => 'banner_image',
    //         'label' => 'Image',
    //         'type' => 'browse',
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     // General
    //     // Image preview field
    //     if ($this->crud->getCurrentEntryId()) {
    //         if (isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['image'])) {
    //             $image = $this->crud->model->find($this->crud->getCurrentEntryId())->extras['image'];
    //             $imgSrc = '';
    //             if ($image) {
    //                 if (file_exists(public_path($image))) {
    //                     $imgSrc = asset($image);
    //                 } else {
    //                     $imgSrc = 'https://dummyimage.com/200x150&text=No%20Image%20Available!';
    //                 }
    //                 $this->crud->addField([
    //                     'tab' => 'General',
    //                     'name' => 'image_preview',
    //                     'type' => 'custom_html',
    //                     'value' => '<img src="' . $imgSrc . '" style="max-width: 50%; min-height: 100px; max-height: 150px" />',
    //                 ]);
    //             }
    //         }
    //     }
    //     $this->crud->addField([
    //         'tab' => 'General',
    //         'name' => 'image',
    //         'label' => 'Image',
    //         'type' => 'browse',
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    //     $this->crud->addField([
    //         'tab' => 'General',
    //         'name' => 'content',
    //         'label' => trans('backpack::pagemanager.content'),
    //         'placeholder' => trans('backpack::pagemanager.content_placeholder'),
    //         'type' => 'ckeditor',
    //         'options' => [
    //             'autoGrow_minHeight'   => 200,
    //             'autoGrow_bottomSpace' => 50,
    //             'extraPlugins' => 'justify',
    //             'format_tags' => 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
    //         ],
    //     ]);

    //     // Metas
    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_title',
    //         'label' => trans('backpack::pagemanager.meta_title'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_description',
    //         'label' => trans('backpack::pagemanager.meta_description'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_keywords',
    //         'type' => 'textarea',
    //         'label' => trans('backpack::pagemanager.meta_keywords'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    // }

    private function home_page()
    {
        $this->crud->setCreateContentClass('col-md-10 bold-labels');
        $this->crud->setEditContentClass('col-md-10 bold-labels');

        // Activity Preference
        // $this->crud->addField([
        //     'tab' => 'Activity Preference',
        //     'name' => 'activity_preferences',
        //     'label' => 'Activity Preferences <small class="text-success">(*allow multiple)</small>',
        //     'type' => 'select2_from_array',
        //     'options' => $this->getFormattedActivityPreferenceOptions(),
        //     'allows_multiple' => true,
        //     'attributes' => [
        //         'multiple' => true,
        //         'data-placeholder' => 'Select entries',
        //         'data-allow-clear' => true,
        //     ],
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-12'],
        // ]);

        // Welcome
        // Image preview field
        if ($this->crud->getCurrentEntryId()) {
            if (isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['wc_image'])) {
                $wc_image = $this->crud->model->find($this->crud->getCurrentEntryId())->extras['wc_image'];
                $imgSrc = '';
                if ($wc_image) {
                    if (file_exists(public_path($wc_image))) {
                        $imgSrc = asset($wc_image);
                    } else {
                        $imgSrc = 'https://dummyimage.com/200x150&text=No%20Image%20Available!';
                    }
                    $this->crud->addField([
                        'tab' => 'Welcome',
                        'name' => 'wc_image_preview',
                        'type' => 'custom_html',
                        'value' => '<img src="' . $imgSrc . '" style="max-width: 50%; min-height: 100px; max-height: 150px" />',
                    ]);
                }
            }
        }

        $this->crud->addField([
            'tab' => 'Welcome',
            'name' => 'wc_image',
            'label' => 'Image',
            'type' => 'browse',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'tab' => 'Welcome',
            'name' => 'wc_caption',
            'label' => 'Caption <span class="text-danger">*</span>',
            'type' => 'text',
            'attributes' => [
                'required' => true,
            ],
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        $this->crud->addField([
            'tab' => 'Welcome',
            'name' => 'wc_title',
            'label' => 'Title <span class="text-danger">*</span>',
            'type' => 'text',
            'attributes' => [
                'required' => true,
            ],
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-8'],
        ]);
        $this->crud->addField([
            'tab' => 'Welcome',
            'name' => 'wc_description',
            'label' => 'Description <span class="text-danger">*</span>',
            'type' => 'textarea',
            'attributes' => [
                'rows' => '4',
                'required' => true,
            ],
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-12'],
        ]);
        $this->crud->addField([
            'tab' => 'Welcome',
            'name' => 'wc_readmore_title',
            'label' => 'Read More Link',
            'type' => 'text',
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        $this->crud->addField([
            'tab' => 'Welcome',
            'name' => 'wc_readmore_url',
            'label' => 'Read More Link',
            'type' => 'text',
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-8'],
        ]);

        // About
        // Image preview field
        if ($this->crud->getCurrentEntryId()) {
            if (isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['about_image'])) {
                $about_image = $this->crud->model->find($this->crud->getCurrentEntryId())->extras['about_image'];
                $imgSrc = '';
                if ($about_image) {
                    if (file_exists(public_path($about_image))) {
                        $imgSrc = asset($about_image);
                    } else {
                        $imgSrc = 'https://dummyimage.com/200x150&text=No%20Image%20Available!';
                    }
                    $this->crud->addField([
                        'tab' => 'About',
                        'name' => 'about_image_preview',
                        'type' => 'custom_html',
                        'value' => '<img src="' . $imgSrc . '" style="max-width: 50%; min-height: 100px; max-height: 150px" />',
                    ]);
                }
            }
        }

        $this->crud->addField([
            'tab' => 'About',
            'name' => 'about_image',
            'label' => 'Image',
            'type' => 'browse',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'tab' => 'About',
            'name' => 'about_caption',
            'label' => 'Caption <span class="text-danger">*</span>',
            'type' => 'text',
            'attributes' => [
                'required' => true,
            ],
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        $this->crud->addField([
            'tab' => 'About',
            'name' => 'about_title',
            'label' => 'Title <span class="text-danger">*</span>',
            'type' => 'text',
            'attributes' => [
                'required' => true,
            ],
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-8'],
        ]);
        $this->crud->addField([
            'tab' => 'About',
            'name' => 'about_description',
            'label' => 'Description <span class="text-danger">*</span>',
            'type' => 'textarea',
            'attributes' => [
                'rows' => '4',
                'required' => true,
            ],
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-12'],
        ]);
        $this->crud->addField([
            'tab' => 'About',
            'name' => 'about_readmore_title',
            'label' => 'Read More Link',
            'type' => 'text',
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        $this->crud->addField([
            'tab' => 'About',
            'name' => 'about_readmore_url',
            'label' => 'Read More Link',
            'type' => 'text',
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-8'],
        ]);

        // Exp Trips
        $this->crud->addField([
            'tab' => 'Exp Trips',
            'name' => 'exp_caption',
            'label' => 'Caption <span class="text-danger">*</span>',
            'type' => 'text',
            'attributes' => [
                'required' => true,
            ],
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        $this->crud->addField([
            'tab' => 'Exp Trips',
            'name' => 'exp_title',
            'label' => 'Title <span class="text-danger">*</span>',
            'type' => 'text',
            'attributes' => [
                'required' => true,
            ],
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-8'],
        ]);

        // Blog
        $this->crud->addField([
            'tab' => 'Blog',
            'name' => 'blog_caption',
            'label' => 'Caption <span class="text-danger">*</span>',
            'type' => 'text',
            'attributes' => [
                'required' => true,
            ],
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        $this->crud->addField([
            'tab' => 'Blog',
            'name' => 'blog_title',
            'label' => 'Title <span class="text-danger">*</span>',
            'type' => 'text',
            'attributes' => [
                'required' => true,
            ],
            'fake' => true,
            'store_in' => 'extras',
            'wrapper' => ['class' => 'form-group col-md-8'],
        ]);

        // Add the image field preview for each item in the repeatable field
        // if ($this->crud->getCurrentEntryId() && isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['wc_services'])) {
        //     $wc_services = json_decode($this->crud->model->find($this->crud->getCurrentEntryId())->extras['wc_services'], true) ?? [];

        //     if (!is_array($wc_services)) {
        //         $wc_services = json_decode($wc_services, true);
        //     }

        //     if (!empty($wc_services)) {
        //         $spotlight = '<script src="' . asset('js/spotlight.bundle.js') . '"></script>';
        //         $this->crud->addField([
        //             'tab' => 'Welcome',
        //             'name' => 'spotlight_script',
        //             'type' => 'custom_html',
        //             'value' => $spotlight,
        //         ]);

        //         $imgContainer = '';
        //         $imgContainer .= '<div class="row">';
        //         foreach ($wc_services as $key => $service) {
        //             $imgHtml = '';
        //             $imgHtml .= '<div class="form-group col-6 col-sm-4 col-md-3 mb-2">';
        //             if ($service['image'] && file_exists(public_path($service['image']))) {
        //                 $imgHtml .= '<a href="' . asset($service['image']) . '" class="spotlight">';
        //                 $imgHtml .= '<img src="' . asset($service['image']) . '" style="height: 64px; object-fit: cover;" />';
        //                 $imgHtml .= '</a>';
        //             } else {
        //                 $imgHtml .= '<a href="https://dummyimage.com/64x64&text=No%20Image%20Available!" class="spotlight">';
        //                 $imgHtml .= '<img src="https://dummyimage.com/64x64&text=No%20Image%20Available!" style="height: 64px; object-fit: cover;" />';
        //                 $imgHtml .= '</a>';
        //             }
        //             $imgHtml .= '</div>';
        //             $imgContainer .= $imgHtml;
        //         }
        //         $imgContainer .= '</div>';

        //         if ($imgContainer) {
        //             $this->crud->addField([
        //                 'tab' => 'Welcome',
        //                 'name' => 'wc_services_image_preview',
        //                 'type' => 'custom_html',
        //                 'value' => $imgContainer,
        //                 'wrapper' => ['class' => 'form-group col-sm-12 py-2', 'style' => 'border: 1px dashed #ccc;'],
        //             ]);
        //         }
        //     }
        // }

        // $this->crud->addField([
        //     'tab' => 'Welcome',
        //     'name' => 'wc_services',
        //     'label' => 'Services',
        //     'type' => 'repeatable',
        //     'fake' => true,
        //     'store_in' => 'extras',

        //     'fields' => [
        //         [
        //             'type' => 'browse',
        //             'name' => 'image',
        //             'label' => 'Image <span class="text-danger">*</span>',
        //             'wrapper' => ['class' => 'form-group col-md-6'],
        //         ],
        //         [
        //             'type' => 'text',
        //             'name' => 'heading',
        //             'label' => 'Heading <span class="text-danger">*</span>',
        //             'attributes' => [
        //                 'required' => true,
        //             ],
        //             'wrapper' => ['class' => 'form-group col-md-6'],
        //         ],
        //         [
        //             'type' => 'textarea',
        //             'name' => 'description',
        //             'label' => 'Description <span class="text-danger">*</span>',
        //             'attributes' => [
        //                 'rows' => '4',
        //                 'required' => true,
        //             ],
        //             'wrapper' => ['class' => 'form-group col-md-12'],
        //         ],
        //         [
        //             'type' => 'text',
        //             'name' => 'link',
        //             'label' => 'Link',
        //             'attributes' => [],
        //             'wrapper' => ['class' => 'form-group col-md-12'],
        //         ],
        //     ],
        //     'new_item_label' => 'Add New',
        //     'init_rows' => 1,
        //     'min_rows' => 0,
        //     'max_rows' => 10,
        // ]);

        // // Featured Trips
        // $this->crud->addField([
        //     'tab' => 'Featured Trips',
        //     'name' => 'ft_caption',
        //     'label' => 'Caption',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-4'],
        // ]);

        // $this->crud->addField([
        //     'tab' => 'Featured Trips',
        //     'name' => 'ft_title',
        //     'label' => 'Title',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-8'],
        // ]);

        // $this->crud->addField([
        //     'tab' => 'Featured Trips',
        //     'name' => 'ft_trips',
        //     'label' => 'Show Trips <small class="text-success">(*allow multiple)</small>',
        //     'type' => 'select2_from_array',
        //     'options' => $this->getFormattedTripOptions(),
        //     'allows_multiple' => true,
        //     'attributes' => [
        //         'data-placeholder' => 'Select trips',
        //         'data-allow-clear' => true,
        //         'multiple' => true,
        //     ],
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-12'],
        // ]);

        // // Destination
        // $this->crud->addField([
        //     'tab' => 'Destination',
        //     'name' => 'dest_caption',
        //     'label' => 'Caption',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-4'],
        // ]);
        // $this->crud->addField([
        //     'tab' => 'Destination',
        //     'name' => 'dest_title',
        //     'label' => 'Title',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-8'],
        // ]);
        // $this->crud->addField([
        //     'tab' => 'Destination',
        //     'name' => 'dest_description',
        //     'label' => 'Description <span class="text-danger">*</span>',
        //     'type' => 'textarea',
        //     'attributes' => [
        //         'rows' => '4',
        //         'required' => true,
        //     ],
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-12'],
        // ]);
        // $this->crud->addField([
        //     'tab' => 'Destination',
        //     'name' => 'dest_url_link',
        //     'label' => 'URL Link',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-6'],
        // ]);
        // $this->crud->addField([
        //     'tab' => 'Destination',
        //     'name' => 'dest_url_title',
        //     'label' => 'URL Title',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-6'],
        // ]);
        // $this->crud->addField([
        //     'tab' => 'Destination',
        //     'name' => 'destinations',
        //     'label' => 'Destinations <small class="text-success">(*allow multiple)</small>',
        //     'type' => 'select2_from_array',
        //     'options' => $this->getFormattedDestinationOptions(),
        //     'allows_multiple' => true,
        //     'attributes' => [
        //         'multiple' => true,
        //         'data-placeholder' => 'Select entries',
        //         'data-allow-clear' => true,
        //     ],
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-12'],
        // ]);

        // // Trending Trips
        // $this->crud->addField([
        //     'tab' => 'Trending Trips',
        //     'name' => 'tr_caption',
        //     'label' => 'Caption',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-4'],
        // ]);

        // $this->crud->addField([
        //     'tab' => 'Trending Trips',
        //     'name' => 'tr_title',
        //     'label' => 'Title',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-8'],
        // ]);

        // $this->crud->addField([
        //     'tab' => 'Trending Trips',
        //     'name' => 'tr_trips',
        //     'label' => 'Show Trips <small class="text-success">(*allow multiple)</small>',
        //     'type' => 'select2_from_array',
        //     'options' => $this->getFormattedTripOptions(),
        //     'allows_multiple' => true,
        //     'attributes' => [
        //         'data-placeholder' => 'Select trips',
        //         'data-allow-clear' => true,
        //         'multiple' => true,
        //     ],
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-12'],
        // ]);

        // // Testimonial
        // $this->crud->addField([
        //     'tab' => 'Testimonial',
        //     'name' => 'ts_caption',
        //     'label' => 'Caption',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-4'],
        // ]);

        // $this->crud->addField([
        //     'tab' => 'Testimonial',
        //     'name' => 'ts_title',
        //     'label' => 'Title',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-8'],
        // ]);

        // // Add the image preview field
        // if ($this->crud->getCurrentEntryId()) {
        //     $tsImage = isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['ts_image']) ? $this->crud->model->find($this->crud->getCurrentEntryId())->extras['ts_image'] : '';
        //     $html = '';
        //     $onError = "this.onerror=null;this.src='" . asset('assets/images/placeholder.jpg') . "';";
        //     if ($tsImage) {
        //         $html = '<img src="' . asset($tsImage) . '" style="max-width: 50%; min-height: 100px; max-height: 150px" onerror="' . $onError . '"/>';
        //     }

        //     if ($html) {
        //         $this->crud->addField([
        //             'tab' => 'Testimonial',
        //             'name' => 'ts_image_preview',
        //             'type' => 'custom_html',
        //             'value' => $html,
        //         ]);
        //     }
        // }

        // $this->crud->addField([
        //     'tab' => 'Testimonial',
        //     'name' => 'ts_image',
        //     'label' => 'Image',
        //     'type' => 'browse',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-12'],
        // ]);

        // // Faqs
        // $this->crud->addField([
        //     'tab' => 'Faqs',
        //     'name' => 'faqs',
        //     'label' => 'Show FAQs <small class="text-success">(*allow multiple)</small>',
        //     'type' => 'select2_from_array',
        //     'options' => $this->getFormattedHomeFaqOptions(),
        //     'allows_multiple' => true,
        //     'attributes' => [
        //         'data-placeholder' => 'Select faqs',
        //         'data-allow-clear' => true,
        //         'multiple' => true,
        //     ],
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-8'],
        // ]);

        // $this->crud->addField([
        //     'tab' => 'Faqs',
        //     'name' => 'faq_count',
        //     'label' => "Max no. of FAQ's to show",
        //     'type' => 'number',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-4'],
        // ]);

        // // Blog
        // $this->crud->addField([
        //     'tab' => 'Blog',
        //     'name' => 'blog_caption',
        //     'label' => 'Caption',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-4'],
        // ]);

        // $this->crud->addField([
        //     'tab' => 'Blog',
        //     'name' => 'blog_title',
        //     'label' => 'Title',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-8'],
        // ]);

        // Video
        // if ($this->crud->getCurrentEntryId()) {
        //     $youtubeLink = isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['yt_video']) ? $this->crud->model->find($this->crud->getCurrentEntryId())->extras['yt_video'] : '';

        //     $html = '';
        //     if (!empty($youtubeLink)) {
        //         if (filter_var($youtubeLink, FILTER_VALIDATE_URL)) {
        //             $queryString = parse_url($youtubeLink, PHP_URL_QUERY);
        //             parse_str($queryString, $params);
        //             $videoId = $params['v'] ?? '';
        //         } else {
        //             $videoId = $youtubeLink;
        //         }
        //         $html = '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' . $videoId . '?rel=0" allowfullscreen></iframe>';
        //     }
        //     if ($html) {
        //         $this->crud->addField([
        //             'tab' => 'Video',
        //             'name' => 'yt_video_preview',
        //             'type' => 'custom_html',
        //             'value' => $html,
        //         ]);
        //     }
        // }

        // $this->crud->addField([
        //     'tab' => 'Video',
        //     'name' => 'yt_video',
        //     'label' => '<i class="fab fa-youtube text-danger"></i> Video URL/Key',
        //     'type' => 'text',
        //     'fake' => true,
        //     'store_in' => 'extras',
        //     'wrapper' => ['class' => 'form-group col-md-12'],
        // ]);

        // Metas
        $this->crud->addField([
            'tab' => 'Metas',
            'name' => 'meta_title',
            'label' => trans('backpack::pagemanager.meta_title'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'tab' => 'Metas',
            'name' => 'meta_description',
            'label' => trans('backpack::pagemanager.meta_description'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'tab' => 'Metas',
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => trans('backpack::pagemanager.meta_keywords'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
    }

    // private function about_page()
    // {
    //     $this->crud->setCreateContentClass('col-md-10 bold-labels');
    //     $this->crud->setEditContentClass('col-md-10 bold-labels');

    //     // Banner
    //     // Image preview field
    //     if ($this->crud->getCurrentEntryId()) {
    //         if (isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['banner_image'])) {
    //             $banner_image = $this->crud->model->find($this->crud->getCurrentEntryId())->extras['banner_image'];
    //             $imgSrc = '';
    //             if ($banner_image) {
    //                 if (file_exists(public_path($banner_image))) {
    //                     $imgSrc = asset($banner_image);
    //                 } else {
    //                     $imgSrc = 'https://dummyimage.com/200x150&text=No%20Image%20Available!';
    //                 }
    //                 $this->crud->addField([
    //                     'tab' => 'Banner',
    //                     'name' => 'banner_image_preview',
    //                     'type' => 'custom_html',
    //                     'value' => '<img src="' . $imgSrc . '" style="max-width: 50%; min-height: 100px; max-height: 150px" />',
    //                 ]);
    //             }
    //         }
    //     }

    //     $this->crud->addField([
    //         'tab' => 'Banner',
    //         'name' => 'banner_image',
    //         'label' => 'Image',
    //         'type' => 'browse',
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     // About
    //     $this->crud->addField([
    //         'tab' => 'About',
    //         'name' => 'about_content',
    //         'label' => 'Content',
    //         'type' => 'ckeditor',
    //         'options' => [
    //             'autoGrow_minHeight' => 200,
    //             'autoGrow_bottomSpace' => 50,
    //             'extraPlugins' => 'justify',
    //             'format_tags' => 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
    //         ],
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     // Team
    //     $this->crud->addField([
    //         'tab' => 'Team',
    //         'name' => 'team_title',
    //         'label' => 'Title',
    //         'type' => 'text',
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    //     $this->crud->addField([
    //         'tab' => 'Team',
    //         'name' => 'team_content',
    //         'label' => 'Content',
    //         'type' => 'ckeditor',
    //         'options' => [
    //             'autoGrow_minHeight' => 200,
    //             'autoGrow_bottomSpace' => 50,
    //             'extraPlugins' => 'justify',
    //             'format_tags' => 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
    //         ],
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    //     // Add the image preview field
    //     if ($this->crud->getCurrentEntryId()) {
    //         if (isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['team_members'])) {
    //             $teamMembersIDs = $this->crud->model->find($this->crud->getCurrentEntryId())->extras['team_members'] ?? [];
    //             $members = [];

    //             if (!empty($teamMembersIDs)) {
    //                 $members = TeamMember::find($teamMembersIDs)->pluck('image', 'name')->toArray();
    //             }

    //             if (!empty($members)) {
    //                 $spotlight = '<script src="' . asset('js/spotlight.bundle.js') . '"></script>';
    //                 $this->crud->addField([
    //                     'tab' => 'Team',
    //                     'name' => 'spotlight_script',
    //                     'type' => 'custom_html',
    //                     'value' => $spotlight,
    //                 ]);

    //                 $imgContainer = '';
    //                 $imgContainer .= '<div class="row">';
    //                 foreach ($members as $name => $image) {
    //                     $imgHtml = '';
    //                     $imgHtml .= '<div class="form-group col-12 col-sm-6 col-md-4 col-xl-3 mb-2">';
    //                     if ($image && file_exists(public_path($image))) {
    //                         $imgHtml .= '<a href="' . asset($image) . '" class="spotlight">';
    //                         $imgHtml .= '<img src="' . asset($image) . '" style="width: 100%; height: 150px; object-fit: cover;"  />';
    //                         $imgHtml .= '<div style="display: flex; justify-content: center; border: 1px dashed #ccc; padding: 10px;">' . $name . '</div>';
    //                         $imgHtml .= '</a>';
    //                     } else {
    //                         $imgHtml .= '<a href="https://dummyimage.com/200x150&text=No%20Image%20Available!" class="spotlight">';
    //                         $imgHtml .= '<img src="https://dummyimage.com/200x150&text=No%20Image%20Available!" style="width: 100%; height: 150px; object-fit: cover;" />';
    //                         $imgHtml .= '</a>';
    //                     }
    //                     $imgHtml .= '</div>';
    //                     $imgContainer .= $imgHtml;
    //                 }
    //                 $imgContainer .= '</div>';

    //                 if ($imgContainer) {
    //                     $this->crud->addField([
    //                         'tab' => 'Team',
    //                         'name' => 'team_image_preview',
    //                         'type' => 'custom_html',
    //                         'value' => $imgContainer,
    //                         'wrapper' => ['class' => 'form-group col-sm-12'],
    //                     ]);
    //                 }
    //             }
    //         }
    //     }

    //     $this->crud->addField([
    //         'tab' => 'Team',
    //         'name' => 'team_members',
    //         'label' => 'Show Team Members <small class="text-success">(*allow multiple)</small>',
    //         'type' => 'select2_from_array',
    //         'options' => $this->getFormattedTeamMemberOptions(),
    //         'allows_multiple' => true,
    //         'attributes' => [
    //             'multiple' => true,
    //             'data-placeholder' => 'Select members',
    //             'data-allow-clear' => true,
    //         ],
    //         'fake' => true,
    //         'store_in' => 'extras',
    //         'wrapper' => ['class' => 'form-group col-md-12'],
    //     ]);

    //     // Metas
    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_title',
    //         'label' => trans('backpack::pagemanager.meta_title'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_description',
    //         'label' => trans('backpack::pagemanager.meta_description'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_keywords',
    //         'type' => 'textarea',
    //         'label' => trans('backpack::pagemanager.meta_keywords'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    // }

    // private function contact_page()
    // {
    //     $this->crud->setCreateContentClass('col-md-10 bold-labels');
    //     $this->crud->setEditContentClass('col-md-10 bold-labels');

    //     // Banner
    //     // add the bannerImage preview field
    //     if ($this->crud->getCurrentEntryId()) {
    //         if (isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['banner_image'])) {
    //             $banner_image = $this->crud->model->find($this->crud->getCurrentEntryId())->extras['banner_image'];
    //             $imgSrc = '';
    //             if ($banner_image) {
    //                 if (file_exists(public_path($banner_image))) {
    //                     $imgSrc = asset($banner_image);
    //                 } else {
    //                     $imgSrc = 'https://dummyimage.com/200x150&text=No%20Image%20Available!';
    //                 }
    //                 $this->crud->addField([
    //                     'tab' => 'Banner',
    //                     'name' => 'banner_image_preview',
    //                     'type' => 'custom_html',
    //                     'value' => '<img src="' . $imgSrc . '" style="max-width: 50%; min-height: 100px; max-height: 150px" />',
    //                 ]);
    //             }
    //         }
    //     }

    //     $this->crud->addField([
    //         'tab' => 'Banner',
    //         'name' => 'banner_image',
    //         'label' => 'Image',
    //         'type' => 'browse',
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     // Contact Info
    //     // $this->crud->addField([
    //     //     'tab' => 'Contact Info',
    //     //     'name' => 'contact_title',
    //     //     'label' => 'Title',
    //     //     'type' => 'text',
    //     //     'fake' => true,
    //     //     'store_in' => 'extras',
    //     // ]);

    //     // $this->crud->addField([
    //     //     'tab' => 'Contact Info',
    //     //     'name' => 'contact_content',
    //     //     'label' => 'Content',
    //     //     'type' => 'textarea',
    //     //     'attributes' => [
    //     //         'rows' => 4,
    //     //     ],
    //     //     'fake' => true,
    //     //     'store_in' => 'extras',
    //     // ]);

    //     // $this->crud->addField([
    //     //     'tab' => 'Contact Info',
    //     //     'name' => 'contact_attributes',
    //     //     'label' => 'Contact Attributes',
    //     //     'type' => 'repeatable',
    //     //     'fake' => true,
    //     //     'store_in' => 'extras',

    //     //     'fields' => [
    //     //         [
    //     //             'name' => 'icon',
    //     //             'label' => 'Icon',
    //     //             'type'    => 'select2',
    //     //             'attribute' => 'name',
    //     //             'model' => "App\Models\Icon",
    //     //             'attributes' => [
    //     //                 'data-placeholder' => 'Select an entry',
    //     //                 'data-allow-clear' => 'true',
    //     //             ],
    //     //             'wrapper' => ['class' => 'form-group col-md-4'],
    //     //         ],
    //     //         [
    //     //             'type' => 'text',
    //     //             'name' => 'heading',
    //     //             'label' => 'Title <span class="text-danger">*</span>',
    //     //             'attributes' => [
    //     //                 'required' => true,
    //     //             ],
    //     //             'wrapper' => ['class' => 'form-group col-md-4'],
    //     //         ],
    //     //         [
    //     //             'type' => 'text',
    //     //             'name' => 'value',
    //     //             'label' => 'Value <span class="text-danger">*</span>',
    //     //             'attributes' => [
    //     //                 'required' => true,
    //     //             ],
    //     //             'wrapper' => [
    //     //                 'class' => 'form-group col-md-4',
    //     //             ],
    //     //         ],
    //     //     ],
    //     //     'new_item_label' => 'Add Attribute',
    //     //     'init_rows' => 3,
    //     //     'min_rows' => 3,
    //     //     'max_rows' => 3,
    //     // ]);

    //     // Contact Form
    //     $this->crud->addField([
    //         'tab' => 'Contact Form',
    //         'name' => 'form_title',
    //         'label' => 'Title',
    //         'type' => 'text',
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     $this->crud->addField([
    //         'tab' => 'Contact Form',
    //         'name' => 'form_content',
    //         'label' => 'Content',
    //         'type' => 'textarea',
    //         'attributes' => [
    //             'rows' => 4,
    //         ],
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     // Google Map
    //     $this->crud->addField([
    //         'tab' => 'Google Map',
    //         'name' => 'map_content',
    //         'label' => 'Google Map',
    //         'placeholder' => 'Google Map Iframe',
    //         'type' => 'textarea',
    //         'attributes' => [
    //             'rows' => 6,
    //         ],
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     // Metas
    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_title',
    //         'label' => trans('backpack::pagemanager.meta_title'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_description',
    //         'label' => trans('backpack::pagemanager.meta_description'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_keywords',
    //         'type' => 'textarea',
    //         'label' => trans('backpack::pagemanager.meta_keywords'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    // }

    // private function customize_trip_page()
    // {
    //     $this->crud->setCreateContentClass('col-md-10 bold-labels');
    //     $this->crud->setEditContentClass('col-md-10 bold-labels');

    //     // Banner
    //     // Image preview field
    //     if ($this->crud->getCurrentEntryId()) {
    //         if (isset($this->crud->model->find($this->crud->getCurrentEntryId())->extras['banner_image'])) {
    //             $banner_image = $this->crud->model->find($this->crud->getCurrentEntryId())->extras['banner_image'];
    //             $imgSrc = '';
    //             if ($banner_image) {
    //                 if (file_exists(public_path($banner_image))) {
    //                     $imgSrc = asset($banner_image);
    //                 } else {
    //                     $imgSrc = 'https://dummyimage.com/200x150&text=No%20Image%20Available!';
    //                 }
    //                 $this->crud->addField([
    //                     'tab' => 'Banner',
    //                     'name' => 'banner_image_preview',
    //                     'type' => 'custom_html',
    //                     'value' => '<img src="' . $imgSrc . '" style="max-width: 50%; min-height: 100px; max-height: 150px" />',
    //                 ]);
    //             }
    //         }
    //     }

    //     $this->crud->addField([
    //         'tab' => 'Banner',
    //         'name' => 'banner_image',
    //         'label' => 'Image',
    //         'type' => 'browse',
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     // Customize Trip
    //     $this->crud->addField([
    //         'tab' => 'Customize Trip',
    //         'name' => 'ct_title',
    //         'label' => 'Title',
    //         'type' => 'text',
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);

    //     $this->crud->addField([
    //         'tab' => 'Customize Trip',
    //         'name' => 'ct_attributes',
    //         'label' => 'Trip Attributes',
    //         'type' => 'repeatable',
    //         'fake' => true,
    //         'store_in' => 'extras',

    //         'fields' => [
    //             [
    //                 'type' => 'text',
    //                 'name' => 'heading',
    //                 'label' => 'Title <span class="text-danger">*</span>',
    //                 'attributes' => [
    //                     'required' => true,
    //                 ],
    //                 'wrapper' => ['class' => 'form-group col-md-4'],
    //             ],
    //             [
    //                 'type' => 'textarea',
    //                 'name' => 'value',
    //                 'label' => 'Value <span class="text-danger">*</span>',
    //                 'attributes' => [
    //                     'rows' => '4',
    //                     'required' => true,
    //                 ],
    //                 'wrapper' => [
    //                     'class' => 'form-group col-md-8',
    //                 ],
    //             ],
    //         ],
    //         'new_item_label' => 'Add Attribute',
    //         'init_rows' => 0,
    //         'min_rows' => 0,
    //     ]);

    //     // Metas
    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_title',
    //         'label' => trans('backpack::pagemanager.meta_title'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_description',
    //         'label' => trans('backpack::pagemanager.meta_description'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    //     $this->crud->addField([
    //         'tab' => 'Metas',
    //         'name' => 'meta_keywords',
    //         'type' => 'textarea',
    //         'label' => trans('backpack::pagemanager.meta_keywords'),
    //         'fake' => true,
    //         'store_in' => 'extras',
    //     ]);
    // }
}
