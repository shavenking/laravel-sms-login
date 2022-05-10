<form action="{{ route('auth.login') }}" method="POST">
    @csrf

    <div class="rounded w-full">
        <label for="phone" class="text-[#a3a3a3] font-bold">
            Phone Number
        </label>

        <input
                wire:keydown.enter.prevent="sendSms"
                wire:model="phone"
                id="phone"
                type="text"
                name="phone"
                class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-[#f8f8f8] bg-clip-padding border border-solid border-[#d8d8d8] rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#0076d0] focus:outline-none" />

        <button type="button" wire:click="sendSms" class="mt-8 rounded bg-[#0076d0] text-white w-full py-2">
            Send SMS
        </button>
    </div>
</form>
