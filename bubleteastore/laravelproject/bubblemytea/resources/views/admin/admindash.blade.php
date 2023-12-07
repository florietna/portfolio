<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <style>
        .dashboard {
            text-align: center;
            margin-top: 50px;
        }

        .admin-actions {
            margin-top: 20px;
        }

        a {
            color: #7d5c00;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="antialiased">
@include('post/header')
    <!-- Dashboard -->
    <div class="dashboard">
        <h1>Welcome to Admin Dashboard</h1>
        
        <!-- Admin Actions -->
        <div class="admin-actions">
            <!-- <a href="{{ route('admin.menu.list') }}">Manage Menus</a> -->
        </div>
    </div>
</body>
</html>
