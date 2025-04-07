<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}
    </a>
</li>

<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon la la-users-cog">
        </i>
        Authentication
    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('user') }}">
                <i class="nav-icon la la-user">
                </i>
                <span>
                    Users
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('role') }}">
                <i class="nav-icon la la-id-badge">
                </i>
                <span>
                    Roles
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('permission') }}">
                <i class="nav-icon la la-key">
                </i>
                <span>
                    Permissions
                </span>
            </a>
        </li>
    </ul>
</li>

<!-- Team Category/Member -->
{{-- <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon la la-users">
        </i>
        Team
    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('team-member-category') }}">
                <i class="nav-icon las la-layer-group">
                </i>
                <span>
                    Category
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('team-member') }}">
                <i class="nav-icon las la-users">
                </i>
                <span>
                    Members
                </span>
            </a>
        </li>
    </ul>
</li> --}}

<!-- Trip Management -->
{{-- <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon las la-plane-departure"></i>
        Trip Management
    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('activity-preference') }}">
                <i class="nav-icon las la-shoe-prints"></i>
                <span>
                    Activity preferences
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('destination') }}">
                <i class="nav-icon las la-map-marked-alt"></i>
                <span>
                    Destinations
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('trip') }}">
                <i class="nav-icon las la-route"></i>
                <span>
                    Trips
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('equipment') }}">
                <i class="nav-icon las la-wrench"></i>
                <span>
                    Equipments
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('faq-category') }}">
                <i class="nav-icon las la-list"></i>
                <span>
                    Faq Category
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('faq') }}">
                <i class="nav-icon las la-question"></i>
                <span>
                    Faqs
                </span>
            </a>
        </li>
    </ul>
</li> --}}

{{-- <li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('booking') }}'><i class='nav-icon las la-calendar-check'></i>
        <span>Booking</span>
    </a>
</li> --}}

{{-- <li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('customize-trip') }}'><i class='nav-icon las la-calendar-check'></i>
        <span>Customize Trip</span>
    </a>
</li> --}}

<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('icon') }}'><i class='nav-icon las la-icons'></i>
        <span>Icons</span>
    </a>
</li>

<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('slider') }}'><i class='nav-icon las la-sliders-h'></i>
        <span>Sliders</span>
    </a>
</li>
{{-- <li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('home-faq') }}'><i class='nav-icon las la-question'></i>
        <span>Home FAQ's</span>
    </a>
</li> --}}
<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon la la-file-o'></i>
        <span>Pages</span>
    </a>
</li>

{{-- <li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('menu-item') }}'><i class='nav-icon la la-list'></i>
        <span>Menu</span>
    </a>
</li> --}}

{{-- <li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('tag') }}'><i class="nav-icon las la-tags"></i>
        <span>Tags</span>
    </a>
</li>

<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('article') }}'><i class="nav-icon la la-newspaper-o"></i>
        <span>Articles</span>
    </a>
</li> --}}

{{-- <li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('expert') }}'><i class='nav-icon las la-user-cog'></i>
        Experts
    </a>
</li> --}}

{{-- <li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('contact') }}'><i class="nav-icon las la-phone"></i>
        <span>Contact</span>
    </a>
</li> --}}

{{-- <li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('testimonial') }}'><i class='nav-icon las la-comments'></i>
        <span>Testimonials</span>
    </a>
</li> --}}

{{-- <li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('email-subscription') }}"><i class="nav-icon las la-rocket"></i>
        <span>Email Subscription</span>
    </a>
</li> --}}

<!-- Website -->
{{-- <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon la la-desktop">
        </i>
        Website
    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('website/footer') }}">
                <i class="nav-icon la la-hand-point-right" style="font-size: 14px;">
                </i>
                <span>
                    Footer
                </span>
            </a>
        </li>
    </ul>
</li> --}}

<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-cog'></i>
        <span>Settings</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('country') }}"><i class="nav-icon las la-globe"></i>
        Country
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i>
        <span>{{ trans('backpack::crud.file_manager') }}</span>
    </a>
</li>

<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i>
        Logs
    </a>
</li>
