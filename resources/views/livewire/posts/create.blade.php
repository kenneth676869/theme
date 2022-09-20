<div>
    {{-- The whole world belongs to you. --}}
    <div id="create-post-box" class="mt-4">
        <div class="card-header">
            <h2 class="text-center">Create Post</h2>
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
                <button class="btn" type="submit" style="color:white" wire:click="createPost()"><span>Post</span></button>
            </div>
        </div>
    </div>
    <style scoped>
        #create-post-box{
            background-color:  	#AF0171;
        }

        .card-header{
            background-color:#790252;
        }
       

        .btn{
            background-color: #E80F88;
        }
       
        .btn:hover {
            background-color: #790252;
            color: white;
        }
        .text-center{
            color: white;
        }

        .card{
            width: 500px;
        }
    
    </style>
</div>
