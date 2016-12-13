<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register Confirm</title>
</head>
<body>
<h1>Thanks for Registering !！Wish you have a wonderful day!!</h1>

<p>
    Please click the link below to finish register：
    <a href="{{ route('confirm_email', $user->activation_token) }}">
        {{ route('confirm_email', $user->activation_token) }}
    </a>
</p>

<p>
    If this's not down by you, please ignore this email.
</p>
</body>
</html>