<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar" wire:ignore>
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <div class="navbar-nav align-items-center w-100">
            <div class="nav-item d-flex align-items-center w-100">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" wire:model="search"  id="searchInput"class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
            </div>
        </div>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('messages.languages') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                    @foreach (config('app.locales') as $locale => $lang)
                        <li>
                            <a class="dropdown-item @if(app()->getLocale() === $locale) current-locale @endif" href="#" data-locale="{{ $locale }}">{{ $lang['name'] }} ({{ strtoupper($locale) }})</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>

        <ul class="navbar-nav flex-row align-items-center ms-auto">


            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        @php
                        $avatar = '';
                        $user = auth()->user();
                        if ($user->sex === 'male') {
                            $avatar = asset('images/undraw_male_avatar_g98d.svg');
                        } elseif ($user->sex === 'female') {
                            $avatar = asset('images/undraw_female_avatar_efig.svg');
                        } else {
                            $avatar = asset('images/logo.png');
                        }
                    @endphp
                    <img src="{{  $avatar }}" alt
                        class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        @php
                                            $avatar = '';
                                            $user = auth()->user();
                                            if ($user->sex === 'male') {
                                                $avatar = asset('images/undraw_male_avatar_g98d.svg');
                                            } elseif ($user->sex === 'female') {
                                                $avatar = asset('images/undraw_female_avatar_efig.svg');
                                            } else {
                                                $avatar = asset('images/logo.png');
                                            }
                                        @endphp
                                        <img src="{{  $avatar }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">{{ __('messages.profile') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">{{ __('messages.settings') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <span class="d-flex align-items-center align-middle">
                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                <span class="flex-grow-1 align-middle">{{ __('messages.billing') }}</span>
                                <span
                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" id="logout">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">{{ __('messages.logout') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
