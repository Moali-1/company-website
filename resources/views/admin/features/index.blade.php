@extends('admin.master')

@section('title', __('keywords.features'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="mb-3 page-title-box d-flex align-items-center justify-content-between">
                    <h2 class="m-0 h5 page-title">{{ __('keywords.features') }}</h2>

                    <x-action-button href="{{ route('admin.features.create') }}" type="create"></x-action-button>
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
                                @if (count($features) > 0)
                                    @foreach ($features as $key => $feature)
                                        <tr>
                                            <td>{{ $features->firstItem() + $loop->index }}</td>
                                            <td>{{ $feature->title }}</td>
                                            <td>{{ $feature->icon }}</td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.features.edit', ['feature' => $feature]) }}"
                                                    type="edit"></x-action-button>


                                                <x-action-button
                                                    href="{{ route('admin.features.show', ['feature' => $feature]) }}"
                                                    type="show">
                                                </x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.features.destroy', ['feature' => $feature]) }}"
                                                    id="{{ $feature->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $features->render('pagination::bootstrap-4') }}

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
