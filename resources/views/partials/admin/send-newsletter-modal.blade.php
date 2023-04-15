<div class="modal fade" id="sendNewsLetter{{ $newsletter->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sendNewsLetter{{ $newsletter->id }}">Send NewsLetter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="{{ url('dashboard/newsletter/send-newsletter') }}" method="post"
                                    role="form">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label class="form-label" for="subject">Subject</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" class="form-control" id="subject" name="subject"
                                                value="{{ isset($newsletter->subject) ? $newsletter->subject : old('subject') }}"
                                                placeholder="Enter newsletter subject" required />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="{{ isset($newsletter->email) ? $newsletter->email : old('email') }}"
                                                placeholder="Enter subscriber email" required />
                                        </div>
                                    </div>
                                    <input type="hidden" name="category"
                                        value="{{ isset($newsletter->category) ? $newsletter->category : old('category') }}">
                                    <div class="mb-3">
                                        <label class="form-label" for="content">Content</label>
                                        <div class="input-group input-group-merge">
                                            <textarea id="content" name="content" class="form-control" rows="12"
                                                placeholder="Enter the newsletter content here..." required>{{ isset($newsletter->content) ? $newsletter->content : old('content') }}</textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="action" class="btn btn-primary" value="save">Send</button>
                <button type="submit" name="action"  class="btn btn-outline-secondary" value="send_and_save">Send & Save</button> 
                </form>
            </div>
        </div>
    </div>
</div>
