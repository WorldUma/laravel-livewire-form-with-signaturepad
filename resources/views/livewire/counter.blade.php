<div>
    @if (session()->has('success'))
        <div class="mt-4 p-4 bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 shadow-md" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <form wire:submit.prevent='createNewUser'>
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
            <div class="mt-10 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-6">
                <div class="sm:col-span-1">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">User name</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name" wire:model="name" autocomplete="given-name"
                            class="block w-full rounded-md border border-gray-300 py-1.5 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-6"">
                    </div>
                </div>
                <div class="sm:col-span-1">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" wire:model="email" autocomplete="email"
                            class="block w-full rounded-md border border-gray-300 py-1.5 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-1">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" wire:model="password"
                            autocomplete="new-password"
                            class="block w-full rounded-md border border-gray-300 py-1.5 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6">
            <label class="block text-sm font-medium leading-6 text-gray-900">Signature</label>
            <div class="mt-2 border border-gray-300 rounded-md">
                <canvas id="signatureCanvas" class="block"></canvas>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-center gap-x-6">
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>

    </form>


</div>
