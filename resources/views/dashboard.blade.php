<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - {{ $appName }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .card h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 8px;
        }
        .card .subtitle {
            color: #888;
            font-size: 14px;
            margin-bottom: 24px;
        }
        .stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }
        .stat {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 16px;
            text-align: center;
        }
        .stat .label {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #888;
            margin-bottom: 4px;
        }
        .stat .value {
            font-size: 18px;
            font-weight: 700;
            color: #333;
        }
        .badge {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }
        .badge-ok { background: #d4edda; color: #155724; }
        .badge-fail { background: #f8d7da; color: #721c24; }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #aaa;
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>{{ $appName }}</h1>
        <div class="subtitle">Application Dashboard</div>
        <div class="stats">
            <div class="stat">
                <div class="label">Environment</div>
                <div class="value">{{ $appEnv }}</div>
            </div>
            <div class="stat">
                <div class="label">PHP Version</div>
                <div class="value">{{ $phpVersion }}</div>
            </div>
            <div class="stat">
                <div class="label">Laravel</div>
                <div class="value">v{{ $laravelVersion }}</div>
            </div>
            <div class="stat">
                <div class="label">Database</div>
                <div class="value">
                    <span class="badge {{ $dbOk ? 'badge-ok' : 'badge-fail' }}">
                        {{ $dbOk ? 'Connected' : 'Disconnected' }}
                    </span>
                </div>
            </div>
        </div>
        <div class="footer">Fly Hello Laravel &mdash; {{ date('Y-m-d H:i:s') }}</div>
    </div>
</body>
</html>
