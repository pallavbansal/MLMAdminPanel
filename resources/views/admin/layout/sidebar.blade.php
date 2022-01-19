<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ __('MLM') }}
                <!-- {{ trans('brackets/admin-ui::admin.sidebar.content') }} -->
            </li>
            {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <!-- <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li> -->
            <li class="nav-title">{{ __('Master Control') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-pin"></i>  {{ __('Manage access') }}</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li> -->
            <li class="nav-item"><a class="nav-link" href="{{ url('/Register') }}"><i class="nav-icon icon-pin"></i> {{ __('Registration Of 1st Level') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/AllRegisteredUsers') }}"><i class="nav-icon icon-pin"></i> {{ __('Registered Users') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/AllOrders') }}"><i class="nav-icon icon-pin"></i> {{ __('All Orders') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/UploadCategories') }}"><i class="nav-icon icon-pin"></i> {{ __('Upload Categories') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/UploadProducts') }}"><i class="nav-icon icon-pin"></i> {{ __('Upload Product') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
