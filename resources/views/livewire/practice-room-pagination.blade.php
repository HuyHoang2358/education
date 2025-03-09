<div>
    <div class="grid grid-cols-2 pt-4 gap-6">
        <!-- Pratice room card -->
        @foreach($students as $student)
            @include('components.practice_room_card')
        @endforeach
    </div>

    <div class="flex w-full justify-center pt-10">
        {{ $students->links('vendor.livewire.tailwind') }}
    </div>
</div>

