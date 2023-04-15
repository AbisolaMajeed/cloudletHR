<!-- Modal -->
<div class="modal fade" id="employeeModal{{$key}}" tabindex="-1" aria-labelledby="employeeModalLabel{{$key}}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container">
                    <div class="d-flex justify-content-end mb-3">
                        <button type="button" class="btn-close closeBtn-iframe" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="iframe-container">
                        <iframe src="{{ $module->training_url }}" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            
            <div class="modal-body">
                <div class="container">
                    <h4 class="mt-3 mb-3">{{$module->name}}</h4>
                    <div class="mb-3" style="max-height: 40vh;-webkit-scrollbar:width: 8px !important; overflow-x:hidden">
                        {{$module->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
