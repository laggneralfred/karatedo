<div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-6 border border-zinc-200 dark:border-zinc-700">
    <h2 class="text-xl font-semibold mb-4 text-zinc-800 dark:text-white">👨‍🎓 Student Directory</h2>

    <table class="min-w-full text-sm">
        <thead>
            <tr class="border-b dark:border-zinc-700 text-zinc-500 dark:text-zinc-300">
                <th class="py-2 text-left">Name</th>
                <th class="py-2 text-left">Email</th>
                <th class="py-2 text-left">Phone</th>
                <th class="py-2 text-left">Joined</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr class="border-b border-zinc-100 dark:border-zinc-700 text-zinc-800 dark:text-white">
                    <td class="py-2">{{ $student->first_name }} {{ $student->last_name }}</td>
                    <td class="py-2">{{ $student->email }}</td>
                    <td class="py-2">{{ $student->phone }}</td>
                    <td class="py-2">{{ \Carbon\Carbon::parse($student->date_joined)->format('Y-m-d') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="py-4 text-center text-zinc-400 dark:text-zinc-500">
                        No students found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
