<div>
    <div class="mb-4">
        <input type="text" wire:model.live="search" placeholder="Search todos..." class="border rounded px-2 py-1 w-full" />
    </div>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
                <tr>
                    <td>
                        <input type="checkbox" wire:model.live="completed.{{ $todo->id }}" value="1">
                    </td>
                    <td>
                        {{ $todo->title}}
                    </td>
                    <td>
                        <button wire:click="delete({{ $todo->id }})" class="text-red-500 cursor-pointer">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
