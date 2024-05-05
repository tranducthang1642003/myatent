<!-- resources/views/password_update.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Update</title>
</head>
<body>
    <div>
        <h2>Password Update</h2>
        
        @if(session('error'))
            <div>{{ session('error') }}</div>
        @endif

        @if(session('status'))
            <div>{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
        
            <!-- New Password -->
            <div>
                <label for="password">New Password</label>
                <input id="password" type="password" name="password" required>
            </div>
        
            <!-- Confirm New Password -->
            <div>
                <label for="password_confirmation">Confirm New Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
            </div>
        
            <div>
                <button type="submit">Update Password</button>
            </div>
        </form>
    </div>
</body>
</html>
