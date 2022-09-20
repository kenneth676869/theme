<div>
    {{-- In work, do what you enjoy. --}}
    <div class="container col-md-6 offset-md-3">
        <div class="asd">
            <div class="wew">
                <h1 class="text-center mt-5" style="color:white"><b>Edit Post</b></h1>
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="title">
                    <label for="title">Title</label>
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="content">
                    <label for="content">Content</label>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn" type="submit" style="color:white" wire:click="editPost()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style scoped>
    .btn{
        background-color: #E80F88;
    }
    .btn:hover {
        background-color: #790252;
        color: white;
    }
    .asd{
        background-color: #AF0171;
        border-radius: 2em;
    }

</style>
