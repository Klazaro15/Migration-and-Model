<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1a1a1a;
            color: #e0e0e0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            text-align: center;
        }
        .btn-primary {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn-primary:hover {
            background-color: #555;
        }
        .card {
            background-color: #2a2a2a;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.1);
        }
        .bg-custom-dark {
            background-color: #0d0d0d;
        }
        .hover\:text-custom-gray:hover {
            color: #b0b0b0;
        }
        .nav-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: 100%;
        }
        .nav-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        footer {
            margin-top: auto;
            width: 100%;
            text-align: center;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto px-4 content-wrapper">
        
        <nav class="bg-custom-dark shadow-md py-4">
            <div class="max-w-7xl mx-auto px-4 nav-container">
                <div class="nav-links">
                    <a href="{{ url('/') }}" class="text-3xl font-extrabold text-white hover:text-custom-gray">Laravel App</a>
                    <a href="{{ route('tasks.index') }}" class="text-white hover:text-custom-gray">Tasks</a>
                    <a href="{{ route('tasks.create') }}" class="text-white hover:text-custom-gray">Create Task</a>
                </div>
            </div>
        </nav>

      
        <header class="flex flex-col items-center justify-center text-center h-screen">
            <h1 class="text-5xl font-extrabold text-gray-200">Welcome to My Laravel App</h1>
            <p class="mt-4 text-gray-400 text-lg">A simple and elegant way to manage your tasks.</p>
            <a href="{{ route('tasks.create') }}" class="btn-primary mt-6 inline-block">Get Started</a>
        </header>

 
        <main class="mt-12">
            @yield('content')
        </main>

     
        <section class="mt-12">
            <div class="card max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-100">About This App</h2>
                <p class="text-gray-400 mt-4">This is a simple Laravel application to manage tasks. You can view, create, and track tasks in this app.</p>
                <a href="{{ route('tasks.create') }}" class="btn-primary mt-4 inline-block">Create Task</a>
            </div>
        </section>
    </div>


    <footer class="text-center mt-16 py-6 bg-custom-dark text-white">
        <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
    </footer>
</body>
</html>
