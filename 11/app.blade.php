<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CRUD Item (Session)</title>
    <style>
        :root {
            --bg: #f4f6f8;
            --card: #fff;
            --accent: #2563eb;
            --danger: #ef4444;
            --muted: #6b7280
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: Inter, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;
            background: var(--bg);
            color: #111
        }

        .container {
            max-width: 900px;
            margin: 36px auto;
            padding: 20px
        }

        .card {
            background: var(--card);
            border-radius: 10px;
            padding: 18px;
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.08)
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px
        }

        h1 {
            font-size: 20px;
            margin: 0
        }

        .form-row {
            display: flex;
            gap: 8px;
            flex-wrap: wrap
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px
        }

        button {
            padding: 10px 14px;
            border-radius: 8px;
            border: 0;
            font-weight: 600;
            cursor: pointer
        }

        .btn-primary {
            background: var(--accent);
            color: #fff
        }

        .btn-ghost {
            background: transparent;
            border: 1px solid #e5e7eb;
            color: var(--muted)
        }

        .list {
            margin-top: 16px;
            border-collapse: collapse;
            width: 100%
        }

        .list th,
        .list td {
            padding: 12px 10px;
            text-align: left;
            border-bottom: 1px solid #f1f5f9
        }

        .actions {
            display: flex;
            gap: 8px
        }

        a.link {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600
        }

        .msg {
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 12px
        }

        .success {
            background: #ecfeff;
            border: 1px solid #bbf7d0;
            color: #065f46
        }

        .error {
            background: #fff1f2;
            border: 1px solid #fecaca;
            color: #7f1d1d
        }

        @media (max-width:600px) {
            .form-row {
                flex-direction: column
            }

            .actions {
                flex-wrap: wrap
            }
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
