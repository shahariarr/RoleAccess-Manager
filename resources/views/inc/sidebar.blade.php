@php
    $user = Auth::user();
@endphp
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">
                <img src="{{ $user->image ? asset('storage/' . $user->image) : asset('backend/assets/img/avatar/xyz.png') }}"
                    alt="Profile Image" style="width: 30px; height: 30px; border-radius: 50%;">
                <span class="logo-name">Hi, {{ Auth::user()->name }}</span>
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img src="{{ $user->image ? asset('storage/' . $user->image) : asset('backend/assets/img/avatar/xyz.png') }}"
                    alt="Profile Image" style="width: 30px; height: 30px; border-radius: 50%;">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ Route::is('dashboard') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('dashboard') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('dashboard') }}">Dashboard</a></li>
                </ul>
            </li>

            @can(['index-categorie'])
                <li class="menu-header">Category Management</li>
                <li class="dropdown {{ Route::is('categories.*') ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cubes"></i>
                        <span>Category</span></a>
                    <ul class="dropdown-menu">
                        {{-- @can('create-categorie')
                <li class="{{ Route::is('categories.create')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('categories.create') }}">Category Create</a></li>
                @endcan --}}
                        @can('index-categorie')
                            <li class="{{ Route::is('categories.index') ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('categories.index') }}">Category List</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can(['index-product'])
                <li class="menu-header">Product Management</li>
                <li class="dropdown {{ Route::is('products.*') ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                            class="fas fa-shopping-basket"></i> <span>Product</span></a>
                    <ul class="dropdown-menu">
                        {{-- @can('create-categorie')
                <li class="{{ Route::is('products.create')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('products.create') }}">Product Create</a></li>
                @endcan --}}
                        @can('index-categorie')
                            <li class="{{ Route::is('products.index') ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('products.index') }}">Product List</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can(['index-store'])
                <li class="menu-header">Store Management</li>
                <li class="dropdown {{ Route::is('stores.*') ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-store"></i>
                        <span>Store</span></a>
                    <ul class="dropdown-menu">
                        @can('index-categorie')
                            <li class="{{ Route::is('stores.index') ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('stores.index') }}">Store List</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can(['index-user', 'index-role', 'index-permission'])
                <li class="menu-header">User Management</li>
                <li
                    class="dropdown {{ Route::is('users.*') || Route::is('roles.*') || Route::is('permissions.*') ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i>
                        <span>User</span></a>
                    <ul class="dropdown-menu">
                        @can('index-user')
                            <li class="{{ Route::is('users.*') ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('users.index') }}">Users List</a></li>
                        @endcan
                        @can('index-role')
                            <li class="{{ Route::is('roles.*') ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('roles.index') }}">Roles List</a></li>
                        @endcan
                        @can('index-permission')
                            <li class="{{ Route::is('permissions.*') ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('permissions.index') }}">Permissions List</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
        </ul>
    </aside>
</div>
