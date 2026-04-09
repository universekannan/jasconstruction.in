<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('admin/dashboard') }}" class="brand-link">
        <img src="{{ asset('/assets/images/preloader.gif') }}" class="brand-image img-circle elevation-3">
        JAS Construction
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                {{-- Dashboard --}}
                <li class="nav-item {{ Request::is('admin/dashboard') ? 'menu-open' : '' }}">
                    <a href="{{ url('admin/dashboard') }}"
                        class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                {{-- Projects --}}
                <li class="nav-item has-treeview {{ request()->segment(2) == 'addproject' || request()->segment(2) == 'projects' ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->segment(2) == 'addproject' || request()->segment(2) == 'projects' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-credit-card fa-lg"></i>
                        <p>Projects <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/addproject') }}"
                                class="nav-link {{ Request::is('admin/addproject') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/projects/1') }}"
                                class="nav-link {{ Request::is('admin/projects/1') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Upcoming Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/projects/2') }}"
                                class="nav-link {{ Request::is('admin/projects/2') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Progress Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/projects/3') }}"
                                class="nav-link {{ Request::is('admin/projects/3') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Completed Projects</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Enquiry --}}
                <li class="nav-item {{ Request::is('admin/contact') ? 'menu-open' : '' }}">
                    <a href="{{ url('admin/contact') }}"
                        class="nav-link {{ Request::is('admin/contact') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-address-book fa-lg"></i>
                        <p>Enquiry</p>
                    </a>
                </li>

                {{-- Banners --}}
                <li class="nav-item {{ Request::is('admin/banners') ? 'menu-open' : '' }}">
                    <a href="{{ url('admin/banners') }}"
                        class="nav-link {{ Request::is('admin/banners') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Banners</p>
                    </a>
                </li>

                {{-- Users --}}
                @if(Auth::user()->view_user)
                <li class="nav-item has-treeview {{ Request::is('admin/users/*') || Request::is('admin/usertype*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/users/*') || Request::is('admin/usertype*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Users <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach ($userStatu as $userStatus)
                        <li class="nav-item">
                            <a href="{{ url('admin/users/' . $userStatus->id) }}"
                                class="nav-link {{ isset($user_statu_id) && $user_statu_id == $userStatus->id ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ $userStatus->user_types_name }}</p>
                            </a>
                        </li>
                        @endforeach
                        <li class="nav-item">
                            <a href="{{ url('admin/usertype') }}"
                                class="nav-link {{ Request::is('admin/usertype*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Type</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                {{-- Attendances --}}
                <li class="nav-item has-treeview {{ Request::is('admin/attendances*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/attendances*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>View Attendances <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/attendances') }}"
                                class="nav-link {{ Request::is('admin/attendances') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Attendance</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Payments --}}
                <li class="nav-item has-treeview {{ Request::is('admin/expense*') || Request::is('fund_transfer*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/expense*') || Request::is('fund_transfer*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>Payments <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/expense') }}"
                                class="nav-link {{ Request::is('admin/expense') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Expense</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('fund_transfer') }}"
                                class="nav-link {{ Request::is('fund_transfer') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fund Transfer</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Website --}}
                <li class="nav-item has-treeview {{ Request::is('admin/website-settings*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/website-settings*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>Website <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/website-settings') }}"
                                class="nav-link {{ Request::is('admin/website-settings') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Website Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Accounting --}}
                <li class="nav-item has-treeview {{ Request::is('admin/accounting_year*') || Request::is('admin/expense_type*') || Request::is('admin/income_type*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/accounting_year*') || Request::is('admin/expense_type*') || Request::is('admin/income_type*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p>Accounting <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/accounting_year') }}"
                                class="nav-link {{ Request::is('admin/accounting_year') ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Accounting Year</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/expense_type') }}"
                                class="nav-link {{ Request::is('admin/expense_type') ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Expense Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/income_type') }}"
                                class="nav-link {{ Request::is('admin/income_type') ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Income Type</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Settings --}}
                @if(Auth::user()->view_bank || Auth::user()->setting || Auth::user()->backup || Auth::user()->view_expense || Auth::user()->view_expense_type)
                <li class="nav-item has-treeview {{ Request::is('admin/setting*') || Request::is('admin/web_setting*') || Request::is('admin/govt_bank*') || Request::is('users/permissions*') || Request::is('admin/backup*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('admin/setting*') || Request::is('admin/web_setting*') || Request::is('admin/govt_bank*') || Request::is('users/permissions*') || Request::is('admin/backup*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Setting <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(Auth()->user()->id == 1)
                        <li class="nav-item">
                            <a href="{{ url('/admin/setting') }}"
                                class="nav-link {{ Request::is('admin/setting') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Setting</p>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->backup)
                        <li class="nav-item">
                            <a href="{{ url('/admin/backup') }}"
                                class="nav-link {{ Request::is('admin/backup') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Backup</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif

                {{-- Profile --}}
                <li class="nav-item has-treeview {{ Request::is('admin/profile*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/profile*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/profile') }}"
                                class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/changepassword') }}"
                                class="nav-link {{ Request::is('admin/changepassword') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/logout') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>