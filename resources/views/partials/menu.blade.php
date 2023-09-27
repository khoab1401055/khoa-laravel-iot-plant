<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo mt-3 mb-2">
        <a href="{{ route('home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-thumbnail img-fluid d-block"
                    style="max-width: 50px;">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Plant IoT</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item @if (Route::currentRouteName() == 'home') active @endif ">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">{{ __('messages.dashboard') }}</div>
            </a>
        </li>

        <!-- Layouts -->


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">{{ __('messages.pages') }}</span>
        </li>


        <li class="menu-item @if (in_array(Route::currentRouteName(), ['farms.list','farm.add'])) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                {{-- <i class=" bx bx-detail"></i> --}}
                <i class='menu-icon tf-icons bx bx-directions' ></i>
                                      <div data-i18n="Form Layouts">{{ __('messages.farms') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if (Route::currentRouteName() == 'farms.list') active @endif">
                    <a href="{{ route('farms.list') }}" class="menu-link">
                        <div data-i18n="Vertical Form">{{ __('messages.farms.list') }}</div>
                    </a>
                </li>
                <li class="menu-item  @if (Route::currentRouteName() == 'farm.add') active @endif" >
                    <a href="{{ route('farm.add') }}" class="menu-link">
                        <div data-i18n="Horizontal Form">{{ __('messages.farms.add') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item @if (in_array(Route::currentRouteName(), ['devices.add', 'devices.list'])) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">{{ __('messages.devices') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item  @if (Route::currentRouteName() == 'devices.list') active @endif">
                    <a href="{{ route('devices.list') }}" class="menu-link">
                        <div data-i18n="Vertical Form">{{ __('messages.device_list') }}</div>
                    </a>
                </li>
                <li class="menu-item @if (Route::currentRouteName() == 'devices.add') active @endif" >
                    <a href="{{ route('devices.add') }}" class="menu-link">
                        <div data-i18n="Horizontal Form">{{ __('messages.add_device') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item @if (Route::currentRouteName() == 'monitoring') active @endif">
          <a href="{{ route('monitoring') }}" class="menu-link">
            <i class='bx bxs-sun'></i>
              <div data-i18n="Tables"> {{ __('messages.sensor_node') }} </div>
          </a>
      </li>
        <!-- Tables -->
        <li class="menu-item @if (Route::currentRouteName() == 'monitoring') active @endif">
            <a href="{{ route('monitoring') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables"> {{ __('messages.monitoring') }} </div>
            </a>
        </li>
        <li class="menu-header small text-uppercase"><span class="menu-header-text">{{ __('messages.administrator') }}</span></li>
        <li class="menu-item @if (in_array(Route::currentRouteName(), ['account.list'])) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Account Settings">{{ __('messages.accounts.setting') }}</div>
            </a>
            <ul class="menu-sub ">
              <li class="menu-item @if (Route::currentRouteName() == 'account.list') active @endif">
                <a href="{{ route('account.list') }}" class="menu-link">
                  <div data-i18n="Account"> {{ __('messages.accounts') }}</div>
                </a>
              </li>
              <li class="menu-item @if (Route::currentRouteName() == 'accounts.report') active @endif">
                <a href="{{ route('accounts.reports') }}" class="menu-link">
                  <div data-i18n="Notifications"> {{ __('messages.reports') }}</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item @if (in_array(Route::currentRouteName(), ['master.data', 'master.data.language'])) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-copy"></i>
              <div data-i18n="Master data">{{ __('messages.master_data') }}</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item @if (Route::currentRouteName() == 'master.data') active @endif">
                <a href="{{ route('master.data') }}" class="menu-link">
                  <div data-i18n="Text Divider">{{ __('messages.master_data_list') }}</div>
                </a>
              </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item @if (Route::currentRouteName() == 'master.data.language') active @endif">
                  <a href="{{ route('master.data.language') }}" class="menu-link">
                    <div data-i18n="Text Divider">{{ __('messages.master_data_language') }}</div>
                  </a>
                </li>
              </ul>
          </li>
        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>

        <li class="menu-item">
            <a href="#"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
            </a>
        </li>
    </ul>
</aside>
