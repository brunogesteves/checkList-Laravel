<div>
    <section class="mt-10 w-full ">
        <div class="max-w-screen px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg ">
                <div class="flex items-center justify-between  p-4">
                    <div class="flex">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live.debounce.300ms = "search" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                placeholder="Search" required="">
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <div class="flex space-x-3 items-center">
                            <select wire:model.live="invitationId"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="">All Events</option>
                                @foreach ($events as $event)
                                    <option value={{ $event->invitationCode }}>{{ $event->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3">FirstName</th>
                                <th scope="col" class="px-4 py-3">LastName</th>
                                <th scope="col" class="px-4 py-3">Role</th>
                                <th scope="col" class="px-4 py-3">Company Name</th>
                                <th scope="col" class="px-4 py-3">Event</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                                <th scope="col" class="px-4 py-3">Time</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guests as $guest)
                                <tr wire:key="{{ $guest->id }}" class="border-b dark:border-gray-700 text-white">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $guest->firstName }}</th>
                                    <td class="px-4 py-3">{{ $guest->lastName }}</td>
                                    <td class="px-4 py-3 text-green-500">
                                        {{ $guest->role }}</td>
                                    <td class="px-4 py-3">{{ $guest->companyName }}</td>
                                    @foreach ($events as $event)
                                        @if ($guest->invitation == $event->invitationCode)
                                            <td class="px-4 py-3">{{ $event?->name }}</td>
                                        @endif
                                    @endforeach
                                    <td class="px-4 py-3 w-28">
                                        <button wire:click="updateGuest({{ $guest->id }})"
                                            class="rounded-lg p-1 w-28 bg-green-500">{{ $guest->check ? 'Chech-Out' : 'Check-In' }}</button>
                                    </td>
                                    <td class="px-4 py-3 w-auto">{{ $guest->time ?? 'no time' }}</td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="py-4 px-3">
                    <div class="flex">
                        <div class="flex space-x-4 items-center mb-3">
                            <label class="w-32 text-sm font-medium text-white">Per Page</label>
                            <select wire:model.live="perPage"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    {{ $guests->links() }}
                </div>
            </div>
        </div>
    </section>

</div>
