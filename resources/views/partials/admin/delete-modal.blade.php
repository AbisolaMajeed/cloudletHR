<!-- Team Modal -->
@if (isset($team->id))
<div class="modal fade" id="deleteTeam{{ $team->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTeam{{ $team->id }}">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <p class="text-dark">Do you really want to delete this record?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger"><a href="{{ isset($team->id) ? url('dashboard/team/'.$team->id) : '' }}">Delete</a></button>
            </div>
        </div>
    </div>
</div>

<!-- Blog Modal -->
@elseif (isset($blog->id))
<div class="modal fade" id="deleteBlog{{ $blog->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteBlog{{ $blog->id }}">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <p class="text-dark">Do you really want to delete this record?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger"><a href="{{ isset($blog->id) ? url('dashboard/blog/'.$blog->id) : '' }}">Delete</a></button>
                {{-- <button type="button" class="btn btn-danger"><a href="">Delete</a></button> --}}
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Modal -->
@elseif (isset($newsletter->id))
<div class="modal fade" id="deleteNewsLetter{{ $newsletter->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteNewsLetter{{ $newsletter->id }}">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <p class="text-dark">Do you really want to delete this record?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-danger"><a href="{{ url('dashboard/blog/'.$blog->id)}}">Delete</a></button> --}}
                <button type="button" class="btn btn-danger"><a href="{{ isset($newsletter->id) ? url('dashboard/newsletter/'.$newsletter->id) : '' }}">Delete</a></button>
            </div>
        </div>
    </div>
</div>

<!-- User Modal -->
@elseif (isset($user->id))
<div class="modal fade" id="deleteUser{{ $user->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUser{{ $user->id }}">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <p class="text-dark">Do you really want to delete this record?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger"><a href="{{ isset($user->id) ? url('dashboard/user/'.$user->id) : '' }}">Delete</a></button>
            </div>
        </div>
    </div>
</div>

<!-- Image Modal -->
@elseif (isset($image->id))
<div class="modal fade" id="deleteImage{{ $image->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteImage{{ $image->id }}">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <p class="text-dark">Do you really want to delete this record?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger"><a href="{{ isset($image->id) ? url('dashboard/gallery/image/'.$image->id) : '' }}">Delete</a></button>
            </div>
        </div>
    </div>
</div>

<!-- Video Modal -->
@elseif (isset($video->id))
<div class="modal fade" id="deleteVideo{{ $video->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteVideo{{ $video->id }}">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <p class="text-dark">Do you really want to delete this record?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger"><a href="{{ isset($video->id) ? url('dashboard/gallery/video/'.$video->id) : '' }}">Delete</a></button>
            </div>
        </div>
    </div>
</div>
@endif

