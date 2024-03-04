<div>
    <input type="text" wire:model="search" placeholder="Search Users" />
    
    <ul>
        @foreach($users as $user)
            <li>{{ $user->username }}</li>
        @endforeach
    </ul>
</div>
