@extends('layouts.admin.app')
@section('title', translate('messages.landing_page_settings'))
@push('css_or_js')
    <!-- Custom styles for this page -->
    <link href="{{ asset('public/assets/admin/css/croppie.css') }}" rel="stylesheet">
    <style>
        .flex-item {
            padding: 10px;
            flex: 20%;
        }

        /* Responsive layout - makes a one column-layout instead of a two-column layout */
        @media (max-width: 768px) {
            .flex-item {
                flex: 50%;
            }
        }

        @media (max-width: 480px) {
            .flex-item {
                flex: 100%;
            }
        }

    </style>
@endpush
@section('content')
    <div class="content container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ translate('messages.dashboard') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{ translate('messages.landing_page_settings') }}</li>
            </ol>
        </nav>
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-header-title">{{ translate('messages.landing_page_settings') }}</h1>
            <!-- Nav Scroller -->
            <div class="js-nav-scroller hs-nav-scroller-horizontal">
                <!-- Nav -->
                <ul class="nav nav-tabs page-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('admin.business-settings.landing-page-settings', 'index') }}">{{ translate('messages.text') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('admin.business-settings.landing-page-settings', 'links') }}"
                            aria-disabled="true">{{ translate('messages.button_links') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "
                            href="{{ route('admin.business-settings.landing-page-settings', 'speciality') }}"
                            aria-disabled="true">{{ translate('messages.speciality') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('admin.business-settings.landing-page-settings', 'testimonial') }}"
                            aria-disabled="true">{{ translate('messages.testimonial') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('admin.business-settings.landing-page-settings', 'feature') }}"
                            aria-disabled="true">{{ translate('messages.feature') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('admin.business-settings.landing-page-settings', 'image') }}"
                            aria-disabled="true">{{ translate('messages.image') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"
                            href="{{ route('admin.business-settings.landing-page-settings', 'background-change') }}"
                            aria-disabled="true">{{ translate('messages.background_color') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('admin.business-settings.landing-page-settings', 'web-app') }}"
                            aria-disabled="true">{{ translate('messages.web_app') }}</a>
                    </li>
                </ul>
                <!-- End Nav -->
            </div>
            <!-- End Nav Scroller -->
        </div>
        <!-- End Page Header -->
        <!-- Page Heading -->
        <div class="card my-2">
            <div class="card-body">
                <form action="{{ route('admin.business-settings.landing-page-settings', 'background-change') }}"
                    method="POST">
                    @php($backgroundChange = \App\Models\BusinessSetting::where(['key' => 'backgroundChange'])->first())
                    @php($backgroundChange = isset($backgroundChange->value) ? json_decode($backgroundChange->value, true) : null)
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label">{{ translate('messages.change_header_bg') }}</label>
                        </div>
                        <div class="col-2">
                            <input name="header-bg" type="color" class="form-control form-control-color" value="{{ isset($backgroundChange['header-bg']) ? $backgroundChange['header-bg'] : '#EF7822' }}">
                        </div>
                        <div class="col-2">
                            <label class="form-label">{{ translate('messages.change_footer_bg') }}</label>
                        </div>
                        <div class="col-2">
                            <input name="footer-bg" type="color" class="form-control form-control-color" value="{{ isset($backgroundChange['footer-bg']) ? $backgroundChange['footer-bg'] :'#333E4F'}}">
                        </div>
                        <div class="col-2">
                            <label class="form-label">{{ translate('messages.landing_page_bg') }}</label>
                        </div>
                        <div class="col-2">
                            <input name="landing-page-bg" type="color" class="form-control form-control-color"
                                value="{{ isset($backgroundChange['landing-page-bg']) ? $backgroundChange['landing-page-bg'] : '#ffffff' }}">

                        </div>

                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="{{ translate('messages.submit') }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script_2')
@endpush
