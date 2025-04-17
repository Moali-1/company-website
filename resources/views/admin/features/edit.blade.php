@extends('admin.master')

@section('title', __('keywords.edit_feature'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="m-0 h5 page-title">{{ __('keywords.edit_feature') }}</h2>

                <div class="shadow card">
                    <div class="card-body">
                        <div class="mb-4 shadow card">

                            <form action="{{ route('admin.features.update', ['feature' => $feature]) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-form-label field="title"></x-form-label>
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="{{ __('keywords.title') }}" value="{{ $feature->title }}">
                                        <x-validation-error field="title"></x-validation-error>
                                    </div>
                                    <div class="col-md-6">
                                        <x-form-label field="icon"></x-form-label>
                                        <input type="text" id="description" name="icon" class="form-control"
                                            placeholder="{{ __('keywords.icon') }}" value="{{ $feature->icon }}">
                                        <x-validation-error field="icon"></x-validation-error>
                                    </div>
                                    <div class="mt-2 col-md-12">
                                        <x-form-label field="description"></x-form-label>
                                        <textarea id="description" name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $feature->description }}</textarea>
                                        <x-validation-error field="description"></x-validation-error>
                                    </div>
                                </div>
                                <x-submit-button></x-submit-button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
