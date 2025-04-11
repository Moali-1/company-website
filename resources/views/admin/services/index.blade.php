@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="mb-3 page-title-box d-flex align-items-center justify-content-between">
                    <h2 class="m-0 h5 page-title">{{ __('keywords.services') }}</h2>

                    <x-action-button href="{{ route('admin.services.create') }}" type="create"></x-action-button>
                </div>


                <div class="shadow card">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th width="10%">{{ __('keywords.icon') }}</th>
                                    <th width="15%">{{ __('keywords.action') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (count($services) > 0)
                                    @foreach ($services as $key => $service)
                                        <tr>
                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>
                                                <i class="{{ $service->icon }} fa-2x"></i>
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.services.edit', ['service' => $service]) }}"
                                                    type="edit"></x-action-button>


                                                <x-action-button
                                                    href="{{ route('admin.services.show', ['service' => $service]) }}"
                                                    type="show">
                                                </x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.services.destroy', ['service' => $service]) }}"
                                                    id="{{ $service->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $services->render('pagination::bootstrap-4') }}

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function confirmDelete(id) {
            if (confirm('are you sure you want to delete this record?')) {
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>

@endsection
