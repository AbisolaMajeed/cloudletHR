<div>
    {{-- <form wire:submit.prevent="submit"> --}}
        @if ($status == true)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Email added successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- <div wire:loading>
            typing...
        </div> --}}
        {{-- <div wire:offline>
            You are now offline.
        </div> --}}
            <div class="mb-3">
                <div class="form-group">
                    <input type="email" class="@error('email') is-invalid @enderror form-control"
                        id="exampleInputEmail" placeholder="Enter email..." wire:model="email" wire:keydown.enter="">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="button" wire:click="submit"  wire:keydown class="btn btn-primary btn-sm w-100">Subscribe</button>
    {{-- </form> --}}
</div>
