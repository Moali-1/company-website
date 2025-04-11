<form action="{{ $href }}" method="POST" class="d-inline" id="deleteForm-{{ $id }}">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $id }})">

        <i class="fe fe-trash-2 fa-2x"></i>
    </button>
</form>
