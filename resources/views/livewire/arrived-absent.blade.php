<div class="flex justify-center">
    <div class="bg-[#1d206f] flex justify-center items w-3/4 h-64 rounded-3xl mb-5 ">
        <div class="w-1/2 flex justify-center items-center flex-col text-white ">
            <span class="text-2xl font-bold">Arrived</span>
            <span class="text-xl ">Guests</span>
            <span class="text-5xl my-4 font-bold">
                {{ $arrived }}
            </span>
        </div>
        <div class="w-[1px] bg-white my-9 opacity-20"></div>
        <div class="w-1/2 flex justify-center items-center flex-col text-white ">
            <span class="text-2xl font-bold">Absent</span>
            <span class="text-xl ">Guests</span>
            <span class="text-5xl my-4 font-bold">
                {{ $absent }}
            </span>
        </div>
    </div>
</div>
