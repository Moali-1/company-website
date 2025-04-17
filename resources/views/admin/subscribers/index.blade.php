@extends('admin.master')

@section('title', __('keywords.subscribers'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="mb-3 page-title-box d-flex align-items-center justify-content-between">
                    <h2 class="m-0 h5 page-title">{{ __('keywords.subscribers') }}</h2>
                </div>


                <div class="shadow card">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.email') }}</th>
                                    <th width="15%">{{ __('keywords.action') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (count($subscribers) > 0)
                                    @foreach ($subscribers as $key => $subscriber)
                                        <tr>
                                            <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                            <td>{{ $subscriber->email }}</td>
                                            <td>

                                                <x-delete-button
                                                    href="{{ route('admin.subscribers.destroy', ['subscriber' => $subscriber]) }}"
                                                    id="{{ $subscriber->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $subscribers->render('pagination::bootstrap-4') }}

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
