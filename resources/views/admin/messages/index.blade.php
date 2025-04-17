@extends('admin.master')

@section('title', __('keywords.messages'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="mb-3 page-title-box d-flex align-items-center justify-content-between">
                    <h2 class="m-0 h5 page-title">{{ __('keywords.messages') }}</h2>
                </div>


                <div class="shadow card">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.name') }}</th>
                                    <th>{{ __('keywords.email') }}</th>
                                    <th>{{ __('keywords.subject') }}</th>
                                    <th width="15%">{{ __('keywords.action') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (count($messages) > 0)
                                    @foreach ($messages as $key => $message)
                                        <tr>
                                            <td>{{ $messages->firstItem() + $loop->index }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->subject }}</td>
                                            <td>

                                                <x-action-button
                                                    href="{{ route('admin.messages.show', ['message' => $message]) }}"
                                                    type="show">
                                                </x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.messages.destroy', ['message' => $message]) }}"
                                                    id="{{ $message->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $messages->render('pagination::bootstrap-4') }}

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
