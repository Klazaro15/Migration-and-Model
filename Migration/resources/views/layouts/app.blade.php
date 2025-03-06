<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        header h1 {
            color: #007bff;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">Laravel App</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.index') }}">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.create') }}">Create Task</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Header -->
        <header class="mt-4">
            <h1>My Laravel App</h1>
        </header>

        <!-- Main Content -->
        <main class="mt-4">
            @yield('content')
        </main>
    </div>
    
    <!-- Footer -->
    <footer class="text-center mt-4">
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>

    <!-- JavaScript (Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
