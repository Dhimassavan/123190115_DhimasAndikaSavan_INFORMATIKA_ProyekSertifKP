<div class="p-4">
    {{$body}}
<textarea 
        wire:model="body"
        class="shadow apperance-none border rounded 
            w-full py-2 px-3 text-gray-700 Leading-tight focus:outline-none 
            focus:shadow-outline" rows="3"
            placeholder="apa yang ingin kamu catat?"
            ></textarea>
            <div class="mt-2 flex justify-end">
                <button
                wire:click="createPost" type="submit" class="group relative w-full flex justify-center py-2 px-4 
                border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600
                 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded-md">
               catat</button>
             </div>
</div>
