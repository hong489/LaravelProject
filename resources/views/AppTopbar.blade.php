<div id="app-topbar">
<div class="layout-topbar" id="app-topbar-root">
    <a href="/">
        <div class="cursor-pointer min-w-max flex align-items-end">
            <!-- You can include an image here if needed -->
            <h3 class="text-red-500" style="font-family: MarlinGeo; font-weight: bolder; margin: 0">
                react-frontend
            </h3>
        </div>
    </a>

    @if($showSideMenuButton)
        <a href="#" class="p-link layout-menu-button layout-topbar-button" onclick="{{ $onToggleMenuClick }}">
            <i class="pi pi-bars"></i>
        </a>
    @endif

    <a href="#" class="p-link layout-topbar-menu-button layout-topbar-button" onclick="{{ $onMobileTopbarMenuClick }}">
        <i class="pi pi-ellipsis-v"></i>
    </a>

    <ul class="layout-topbar-menu lg:flex origin-top @if($mobileTopbarMenuActive) layout-topbar-menu-mobile-active @endif">
        @if($onSettings)
            <li>
                <a href="#" class="p-link layout-topbar-button" onclick="{{ $onSettings }}">
                    <i class="pi pi-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        @endif
        @if($onAccount)
            <li>
                <a href="#" class="p-link layout-topbar-button" onclick="{{ $onAccount }}">
                    <i class="pi pi-user"></i>
                    <span>Profile</span>
                </a>
            </li>
        @endif
        @if($isLoggedIn)
            <button class="p-button-rounded p-button-outlined ml-3" style="z-index: 20" icon="pi pi-user" label="{{ $user->email }}" onclick="{{ $toggleUserMenu }}" aria-controls="user-popup-menu" aria-haspopup></button>
        @else
            <a href="/login" class="p-button-rounded">Login</a>
        @endif
    </ul>

    <!-- You may need to create a PHP array for the $items variable with the same structure as in your React component -->
    <ul class="p-menu-list p-reset border-top-1 border-200">
        <li class="p-menu-list p-reset">
            <a class="p-menuitem-link" onclick="{{ $onLogout }}" role="menuitem">
                <span class="p-menuitem-icon pi pi-sign-out text-primary"></span>
                <span class="p-menuitem-text text-primary">Account</span>
            </a>
        </li>
        <li class="p-menu-list p-reset">
            <a class="p-menuitem-link" onclick="{{ $onLogout }}" role="menuitem">
                <span class="p-menuitem-icon pi pi-sign-out text-primary"></span>
                <span class="p-menuitem-text text-primary">LogOut</span>
            </a>
        </li>
    </ul>
</div>

<!-- You will also need to include the necessary CSS and JavaScript dependencies for your menu component -->

</div>
