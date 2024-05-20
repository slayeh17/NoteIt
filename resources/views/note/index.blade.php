<x-app-layout>
    <div class="max-w-4xl mx-auto my-5">
        <a href="{{ route('note.create') }}" class="block w-48 mx-auto mb-5 p-2 border border-orange-800 text-xl outline-none transition duration-300 cursor-pointer text-center font-semibold no-underline text-orange-500 active:relative active:top-1">
            Add a new note
        </a>
        <div class="flex justify-center flex-wrap mx-auto">
            @foreach ($notes as $note)
                <div class="bg-gray-800 border border-orange-800 w-72 m-2 shadow-md transition duration-500 cursor-pointer no-underline text-gray-300 hover:shadow-xl">
                    <div class="outline-none text-2xl p-2">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="text-right p-2 flex gap-2 justify-end group-hover:opacity-100 transition duration-300">
                        <a href="{{ route('note.show', $note) }}" class="px-2 py-1 border border-orange-500 text-white transition duration-300 cursor-pointer no-underline text-sm hover:bg-orange-600">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="px-2 py-1 border border-orange-500 text-white transition duration-300 cursor-pointer no-underline text-sm hover:bg-orange-600">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="px-2 py-1 border border-orange-500 text-white transition duration-300 cursor-pointer no-underline text-sm hover:bg-red-700">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $notes->links() }}
    </div>
</x-app-layout>
