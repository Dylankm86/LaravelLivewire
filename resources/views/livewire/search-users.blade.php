<div class="p-6">
    <input wire:model.debounce.500ms="search" type="text" placeholder="Search users..." class="px-4 py-2 border rounded"/>

    <ul class="mt-4 space-y-2">
        @foreach($users as $user)
            <li class="px-4 py-2 border rounded">{{ $user->name }}</li>
        @endforeach
    </ul>
</div>