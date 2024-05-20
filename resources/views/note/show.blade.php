<x-app-layout>
    <div class="max-w-4xl mx-auto my-5">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-orange-500">Note created at: {{ $note->created_at }}</h1>
            <div class="flex gap-2">
                <a href="{{ route('note.edit', $note) }}" class="px-2 py-1 border border-orange-500 text-white transition duration-300 cursor-pointer no-underline text-sm hover:bg-orange-600">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="px-2 py-1 border border-orange-500 text-white transition duration-300 cursor-pointer no-underline text-sm hover:bg-red-700">Delete</button>
                </form>
            </div>
        </div>
        <div class="bg-gray-800 text-gray-300 w-full shadow-md transition duration-500 cursor-pointer no-underline p-5">
            <div class="outline-none text-2xl">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-app-layout>
