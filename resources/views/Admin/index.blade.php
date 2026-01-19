<x-admin-layout>

    <div class="min-h-screen bg-gray-50">
        <main class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <section class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-medium text-gray-800"><i class="fas fa-plus mr-2"></i> Monthly Reports</h2>
                    </div>
                    <div class="w-full">
                        <canvas id="chartOne" class="w-full h-64"></canvas>
                    </div>
                </section>

                <section class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-medium text-gray-800"><i class="fas fa-check mr-2"></i> Resolved Reports</h2>
                    </div>
                    <div class="w-full">
                        <canvas id="chartTwo" class="w-full h-64"></canvas>
                    </div>
                </section>
            </div>

            <section class="mt-8 bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-100">
                    <h3 class="text-lg font-medium text-gray-800"><i class="fas fa-list mr-2"></i> Latest Reports</h3>
                </div>
                <div class="p-6 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last name</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100 text-sm text-gray-700">
                            @foreach ([
                                ['Lian','Smith','622322662','jonsmith@mail.com'],
                                ['Emma','Johnson','622322662','jonsmith@mail.com'],
                                ['Oliver','Williams','622322662','jonsmith@mail.com'],
                                ['Isabella','Brown','622322662','jonsmith@mail.com']
                            ] as $row)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3">{{ $row[0] }}</td>
                                    <td class="px-4 py-3">{{ $row[1] }}</td>
                                    <td class="px-4 py-3"><a href="tel:{{ $row[2] }}" class="text-blue-600 hover:underline">{{ $row[2] }}</a></td>
                                    <td class="px-4 py-3"><a href="mailto:{{ $row[3] }}" class="text-blue-600 hover:underline">{{ $row[3] }}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

            <footer class="mt-8 text-right text-sm text-gray-500">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
            </footer>
        </main>
    </div>
</x-admin-layout>
