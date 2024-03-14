{{-- Details Modal --}}
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('messages.details')}}</h5>
            </div>
            <div class="modal-body">
                <div class="card p-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">{{__('messages.name')}}</div>
                            <div class="col-6">{{$resource->name}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6">{{__('messages.created')}}</div>
                            <div class="col-6">{{date_format($resource->created_at, 'd-m-Y')}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="hideModal()">{{__('messages.close')}}</button>
            </div>
        </div>
    </div>
</div>
{{-- Details Modal --}}
