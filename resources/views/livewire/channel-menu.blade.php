<div>

    <h2 class="text-2xl font-medium">Channels</h2>
    <p class="text-gray-400 text-sm mb-3">Although it's not required to manually set channels, it is recommended in
        order to keep track of used channels.</p>
    @foreach($channels as $channel)
        <div
            class="border-b py-2 border-gray-700 group/row items-center h-12 flex justify-between text-xs hover:bg-gray-600 cursor-pointer p-3 hover:rounded-md">
            {{$channel["name"]}}
            <button
                wire:click="removeChannel({{$channel['id']}})"
                class="relative
                hidden
                group-hover/row:inline-flex
                inline-flex items-center justify-center p-[.1rem] mb-1 overflow-hidden text-xs font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-red-700 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
              <span
                  class="relative px-2 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-800 rounded-md group-hover:bg-opacity-0">
                  remove
              </span>
            </button>


        </div>
    @endforeach

</div>
