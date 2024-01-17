@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('.delete-resource').on('click', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                console.log(id);
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
        });
    </script>
@endpush
