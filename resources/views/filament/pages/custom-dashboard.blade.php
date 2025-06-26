<x-filament::page>
    {{-- Dashboard Grid Layout --}}
    
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
       
       
        
        {{-- Custom Section: Quick Actions --}}
        <div class="p-6 bg-white shadow-xl rounded-xl col-span-3">
            <h2 class="text-lg font-bold text-gray-700">🚀 Quick Actions</h2>
            <div class="flex space-x-4 mt-4">
                <a href="{{ route('filament.admin.resources.posts.index') }}" 
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">
                    ➕ Add New Post
                </a>
                <a href="{{ route('filament.admin.resources.video-galleries.index') }}" 
                    class="px-4 py-2 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 transition">
                    🎥 Manage Videos
                </a>
            </div>
        </div>

        {{-- Recent Activity --}}
        <div class="p-6 bg-white shadow-xl rounded-xl col-span-3 mt-6">
            <h2 class="text-lg font-bold text-gray-700">📌 Recent Activity</h2>
            <ul class="mt-3 text-gray-600">
                <li>✅ New gallery image uploaded</li>
                <li>🎥 3 new videos added</li>
                <li>📩 5 unread notifications</li>
            </ul>
        </div>

    </div>
</x-filament::page>
