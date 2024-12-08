<div class="bg-[#353ca6] h-auto py-10 text-center">
    <h1 class="text-center text-white text-2xl mb-7 h-5">
        Checklist Events
    </h1>
    <div class="relative h-auto bg-black ">
        <img src="./party.jpg" alt="party" class="w-full object-cover h-72 opacity-25" />
        <span class="absolute bottom-10 left-10 text-white font-bold text-5xl">
            {{-- {selectedEvent ? 'CheckList : ' : ''} {selectedEvent} --}}
        </span>
        <span class="absolute bottom-10 right-10 text-white font-bold text-5xl">
            <livewire:clock />
        </span>
    </div>
    <div class="flex justify-center my-5 items-center gap-x-2">
        <span class=" text-white text-3xl font-bold  ">
            You are expecting
        </span>
        <span class="text-4xl text-white font-extrabold">
            {{ count($guests) }}
        </span>
        <span class=" text-white text-3xl font-bold  ">
            {{ count($guests) > 1 ? 'guests' : 'guest' }} in total!
        </span>
    </div>

    {{-- <ArrivedAbsent />
    <GuestList /> --}}
</div>
