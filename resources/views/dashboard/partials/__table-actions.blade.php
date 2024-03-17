<td>
    <div class="form-check form-switch d-inline">
        <input class="form-check-input active-resource" type="checkbox" @disabled(isset($disableActive) && $disableActive)
               data-activation="{{$resource->is_active}}" data-id="{{$resource->id}}"
            @checked($resource->is_active)>
        @if(isset($disableActive) && $disableActive)
            <form action="{{route("$route.active", $resource->id)}}" class="d-inline" method="POST" id="activeResourceForm-{{$resource->id}}">
                @csrf
                @method('PUT')
            </form>
        @endif
    </div>
</td>
<td>
    @if($showModel)
        <a class="link-success cursor-pointer px-2" id="resource-details{{$resource->id}}">
            {{__('messages.show')}} <i class="bi bi-eye"></i>
        </a>
    @else
        <a href="{{route("$route.show", $resource->id)}}" class="link-success px-2">
            {{__('messages.show')}} <i class="bi bi-eye"></i>
        </a>
    @endif
    @if(!isset($disableEdit) || !$disableEdit)
        <a href="{{route("$route.edit", $resource->id)}}" class="link-info px-2">
            {{__('messages.edit')}} <i class="bi bi-pencil-fill"></i>
        </a>
    @endif
    @if(!isset($disableDelete) || !$disableDelete)
        <a class="link-danger delete-resource cursor-pointer px-2" data-id="{{$resource->id}}">
            {{__('messages.delete')}} <i class="bi bi-trash-fill"></i>
        </a>
        <form action="{{route("$route.destroy", $resource->id)}}" class="d-inline" method="POST" id="deleteResourceForm-{{$resource->id}}">
            @csrf
            @method('DELETE')
        </form>
    @endif
</td>

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
        $(document).ready(function() {
            $('#resource-details{{$resource->id}}').on('click', function(e) {
                e.preventDefault();
                $('#detailsModal{{$resource->id}}').modal('show');
            });
        });
    </script>
@endpush
