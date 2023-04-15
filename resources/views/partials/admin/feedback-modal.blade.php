<!-- Activate Modal -->
<div class="modal fade" id="activateModal{{$feedback->id}}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="activateModal{{$feedback->id}}">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <p class="text-dark">Do you really want to activate this feedback?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><a href="{{ url('dashboard/feedback/'.$feedback->id) }}" class="text-white">Activate</a></button>
              
            </div>
        </div>
    </div>
</div>

<!--Deactivate Modal -->
<div class="modal fade" id="deactivateModal{{$feedback->id}}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deactivateModal{{$feedback->id}}">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <p class="text-dark">Do you really want to deactivate this record?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger"><a href="{{ url('dashboard/feedback/'.$feedback->id) }}">Deactivate</a></button>
            </div>
        </div>
    </div>
</div>
