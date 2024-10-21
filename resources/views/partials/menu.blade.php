<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('slider_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.sliders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sliders") || request()->is("admin/sliders/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-bullhorn c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.slider.title') }}
                </a>
            </li>
        @endcan
        @can('header_link_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.header-links.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/header-links") || request()->is("admin/header-links/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-link c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.headerLink.title') }}
                </a>
            </li>
        @endcan
        @can('about_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.abouts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/abouts") || request()->is("admin/abouts/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.about.title') }}
                </a>
            </li>
        @endcan
        @can('link_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.links.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/links") || request()->is("admin/links/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-link c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.link.title') }}
                </a>
            </li>
        @endcan
        @can('partner_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.partners.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-certificate c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.partner.title') }}
                </a>
            </li>
        @endcan
        @can('menu_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.menus.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/menus") || request()->is("admin/menus/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-bars c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.menu.title') }}
                </a>
            </li>
        @endcan
        @can('common_information_edit')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.common-informations.edit", [1]) }}" class="c-sidebar-nav-link {{ request()->is("admin/common-informations") || request()->is("admin/common-informations/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.commonInformation.title') }}
                </a>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>