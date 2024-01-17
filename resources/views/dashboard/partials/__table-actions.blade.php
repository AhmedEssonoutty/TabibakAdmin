<a href="{{route("$route.edit", $resource->id)}}" class="link-success">
    {{__('messages.edit')}} <i class="bi bi-pencil-fill"></i>
</a>
<a class="link-danger delete-resource" data-id="{{$resource->id}}">
    {{__('messages.delete')}} <i class="bi bi-trash-fill"></i>
</a>
<form action="{{route("$route.destroy", $resource->id)}}" method="POST" id="deleteResourceForm-{{$resource->id}}">
    @csrf
    @method('DELETE')
</form>
