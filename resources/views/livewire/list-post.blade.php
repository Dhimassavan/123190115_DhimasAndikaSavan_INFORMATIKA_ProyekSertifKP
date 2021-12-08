<div >
    
    @foreach ($posts as $post)   
        <div class="p-4 my-2 mt-2 bg-white shadow-xL rounded-md">
            <div>
                <span class="text-xl font-bold">{{$post->user->name}} 
                </span>
                <span class="text-gray-600">{{$post->created_at->diffForHumans()}}
                </span>
                <button
                    wire:click="showUpdateForm({{ $post->id }})"    
                    type="button" class="inline-flex items-center px-3 py-2 border
                    border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white
                    hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2
                    focus:ring-indigo-500">Edit 
                </button>
                <button
                onclick="return confirm('hapus catatan?') ||
                event.stopImmediatePropagation()"
                wire:click="delete({{ $post->id }})" 
                class="inline-flex justify-center py-2 px-4 border 
                border-transparent shadow-sm text-sm font-medium rounded-md text-white 
                bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 
                focus:ring-offset-2 focus:ring-indigo-500">delete</button>
            </div>
            
            <div>
            @if ($updateStateId !== $post->id)
                    <span>{{ $post->body }}</span>      
                @endif
                @if ($updateStateId === $post->id)
             <textarea 
                wire:model="body"
                class="shadow apperance-none border rounded 
                w-full py-2 px-3 text-gray-700 Leading-tight focus:outline-none 
                focus:shadow-outline" rows="3"
                
            ></textarea>
            <button
                    wire:click="update({{ $post->id }})"
                    type="button" class="inline-flex items-center px-3 py-1 border
                    border-transparent rounded-md shadow-sm text-sm font-medium text-white text-base bg-red-600  
                    hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2
                    focus:ring-red-500">save
                </button>
            @endif
            </div>
        </div>
        
    @endforeach  
</div>
