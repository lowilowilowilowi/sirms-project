<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRMS - Add Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Add New Student</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Student Number</label>
                <input type="text" name="student_number" value="{{ old('student_number') }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">First Name</label>
                <input type="text" name="first_name" value="{{ old('first_name') }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Last Name</label>
                <input type="text" name="last_name" value="{{ old('last_name') }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <!-- Address -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Address</label>
                <input type="text" name="address" value="{{ old('address') }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <!-- Contact Number -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Contact Number</label>
                <input type="text" name="contact_number" value="{{ old('contact_number') }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Course</label>
                <input type="text" name="course" value="{{ old('course') }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Year Level</label>
                <input type="text" name="year_level" value="{{ old('year_level') }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('students.index') }}" class="text-gray-600 hover:underline">
                    Cancel
                </a>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Save Student
                </button>
            </div>
        </form>
    </div>
</body>
</html>