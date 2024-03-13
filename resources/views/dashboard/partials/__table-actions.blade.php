<div class="form-check form-switch d-inline">
    <input class="form-check-input active-resource" type="checkbox" data-activation="{{$resource->is_active}}" data-id="{{$resource->id}}"
    @checked($resource->is_active)>
</div>
<a href="{{route("$route.show", $resource->id)}}" class="link-success">
    {{__('messages.show')}} <i class="bi bi-eye"></i>
</a>
<a href="{{route("$route.edit", $resource->id)}}" class="link-info">
    {{__('messages.edit')}} <i class="bi bi-pencil-fill"></i>
</a>
<a class="link-danger delete-resource cursor-pointer" data-id="{{$resource->id}}">
    {{__('messages.delete')}} <i class="bi bi-trash-fill"></i>
</a>
<form action="{{route("$route.destroy", $resource->id)}}" class="d-inline" method="POST" id="deleteResourceForm-{{$resource->id}}">
    @csrf
    @method('DELETE')
</form>
<form action="{{route("$route.active", $resource->id)}}" class="d-inline" method="POST" id="activeResourceForm-{{$resource->id}}">
    @csrf
    @method('PUT')
</form>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.delete-resource').on('click', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to delete this resource!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#2a4fd7',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed && result.value) {
                        $('#deleteResourceForm-'+id).submit();
                    }
                })
            })
            $('.active-resource').on('change', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let activation = $(this).data('activation');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to change this resource activation!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#2a4fd7',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, change it!'
                }).then((result) => {
                    if (result.isConfirmed && result.value) {
                        $('#activeResourceForm-' + id).submit();
                    } else {
                        if (activation === 1) {
                            $(this).prop('checked', true);
                        } else {
                            $(this).prop('checked', false);
                        }
                    }
                })
            })
        });
    </script>
@endpush
