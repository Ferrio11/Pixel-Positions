<x-layout>
    <x-heading-section>Users List</x-heading-section>

    <div class="mt-6 grid sm:grid-cols-3 gap-4 w-full">
        @foreach($users as $user)
            <div class="p-4 bg-white/5 rounded-xl border border-white/10 hover:border-blue-800 group transition-colors duration-300 flex flex-col text-center">
                <div class="font-bold text-lg">{{ $user->name }}</div>
                <div class="text-sm text-gray-400">{{ $user->email }}</div>
                <div class="text-xs text-gray-500 mt-auto pt-4">Joined: {{ $user->created_at->format('d.m.Y') }}</div>
            </div>
        @endforeach
    </div>
</x-layout>
