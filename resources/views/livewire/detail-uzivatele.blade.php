<div class="grid grid-cols-6">
        <div>
            <input type="text" wire:model="userName">
            {{$userName}}</div>
        <div>
            <input type="text" wire:model="userEmail">
            {{$userEmail}}</div>
        <div>
            @if (null==$userVerified)
                Ne
            @else
                ANO
            @endif
        </div>
        <div>
                <input type="submit" value="Přepiš" wire:click="rename">
        </div>
</div>
