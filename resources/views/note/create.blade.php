<x-app-layout>
    <div class="max-w-4xl mx-auto my-5">
        <h1 class="text-2xl font-bold text-orange-500">Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="bg-gray-800 text-gray-300 w-full shadow-md transition duration-500 cursor-pointer no-underline p-5">
            <div class="outline-none text-2xl">
            @csrf
            <textarea name="note" rows="10" class="w-full h-64 bg-transparent outline-none border-none resize-none p-5 text-2xl placeholder-gray-500" placeholder="Enter your note here"></textarea>
            <div class="text-right p-2 flex gap-2 justify-end">
                <a href="{{ route('note.index') }}" class="px-2 py-1 border border-orange-500 text-white transition duration-300 cursor-pointer no-underline text-sm hover:bg-orange-600">Cancel</a>
                <button class="px-2 py-1 border border-orange-500 text-white transition duration-300 cursor-pointer no-underline text-sm hover:bg-green-700">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
