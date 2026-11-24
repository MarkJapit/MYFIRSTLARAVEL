<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME GWAPO NYOY</title>
</head>
<body style="background-color: powderblue; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 40px 20px; text-align: center;">

    <div style="max-width: 650px; margin: 0 auto; background-color: #ffffff; padding: 40px 30px; border-radius: 16px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);">
        
        <h1 style="color: #1e3a8a; font-size: 2rem; margin: 0 0 12px 0; letter-spacing: 1px;">
            LOVE KO NIYA DILI MAN TANTADOOOO!
        </h1>
        
        <h2 style="color: #475569; font-size: 1.15rem; font-weight: 500; margin: 0 0 32px 0;">
            THIS IS MY HOME PAGE!
        </h2>

        <nav style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
            <a href="{{ route('home') }}" style="background-color: blueviolet; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: bold; font-size: 0.95rem;">
                HOME
            </a>
            <a href="{{ route('contact') }}" style="background-color: #2563eb; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: bold; font-size: 0.95rem;">
                CONTACT
            </a>
            <a href="{{ route('about') }}" style="background-color: #0d9488; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: bold; font-size: 0.95rem;">
                ABOUT ME!
            </a>
        </nav>

    </div>

</body>
</html>
