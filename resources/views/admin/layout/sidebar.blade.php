<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ __('MLM') }}
                <!-- {{ trans('brackets/admin-ui::admin.sidebar.content') }} -->
            </li>
            {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <!-- <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li> -->
            <li class="nav-title">{{ __('Master Control') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"> {{ __('Manage Access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/Register') }}"> {{ __('Register Accounts') }}</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li> -->
            <hr>
            <li class="nav-title">{{ __('Services') }}</li>
           
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/AllRegisteredUsers') }}">{{ __('Registered Users') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/AllOrders') }}"> {{ __('All Orders') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/UploadCategories') }}">{{ __('Upload Categories') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/UploadProducts') }}"> {{ __('Upload Product') }}</a></li>
            <hr>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
            <li class="nav-title">Security Contracts</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/ParentCategories') }}">{{ __('Categories') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/UploadMonitoringProvider') }}">{{ __('Monitoring Provider') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/UploadPackageType') }}"> {{ __('Package') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/UploadSystemPanel') }}"> {{ __('System Panel') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/UploadEquipements') }}">{{ __('Equipments') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/Cat1Orders') }}">{{ __('Contracts Ordered') }}</a></li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
