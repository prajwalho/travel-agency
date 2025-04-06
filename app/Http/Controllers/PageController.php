<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\ActivityPreference;
use App\Models\Article;
use App\Models\Country;
use App\Models\Destination;
use App\Models\Slider;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Trip;

class PageController extends Controller
{
    protected $data = [];

    public function index($slug, $subs = null)
    {
        $page = Page::findBySlug($slug);

        if (!$page) {
            abort(404, 'Please go back to our <a href="' . url('') . '">homepage</a>.');
        }
        $this->data['page'] = $page->withFakes();

        $this->data['meta_title'] = $page->extras['meta_title'] ?? $page->title;
        $this->data['meta_keywords'] = $page->extras['meta_keywords'] ?? $page->title;
        $this->data['meta_description'] = $page->extras['meta_description'] ?? $page->title;

        if ($slug == 'home') {
            // $this->data['sliders'] = Slider::where('status', 'PUBLISHED')->orderedByLft()->limit(4)->get();
            // $this->data['testimonials'] = Testimonial::where('status', 'PUBLISHED')->orderedByLft()->limit(10)->get();
            // $this->data['blogs'] = Article::where('status', 'PUBLISHED')->orderedByLft()->limit(10)->get();
        }

        if ($slug == 'about') {
            $teamMemberIds = $page->team_members;
            $teamMembers = TeamMember::whereIn('id', $teamMemberIds)->with('teamMemberCategory')->get();
            $teamMemberCategories = $teamMembers->groupBy('team_member_category_id');

            $this->data['teamMemberCategories'] = $teamMemberCategories;
        }

        if ($slug == 'customize-trip') {
            if (request()->query('trip')) {
                $tripSlug = request()->query('trip');
                $this->data['trip_id'] = Trip::where('slug', $tripSlug)?->first()?->id;
            }

            // Essential Infos
            $this->data['trips'] = Trip::where('status', 'PUBLISHED')->orderedByLft()->pluck('title', 'id');
            $this->data['countries'] = Country::pluck('name', 'code') ?? [];
        }

        $this->data['title'] = $page->title;

        return view('pages.template.' . $page->template, $this->data);
    }
}
