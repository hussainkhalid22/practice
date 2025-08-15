
<footer>
    <div class="container">
        <p>&copy; {{ date('Y') }} Demo Application. All rights reserved.</p>
        <ul class="footer-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </div>
    <style>
        footer {
            background: linear-gradient(90deg, #ffb6c1 0%, #ff69b4 100%);
            padding: 24px 0;
            text-align: center;
            color: #fff;
            box-shadow: 0 2px 8px rgba(255, 182, 193, 0.15);
        }
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 16px 0 0 0;
        }
        .footer-links li {
            display: inline;
            margin: 0 16px;
        }
        .footer-links a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            transition: color 0.2s;
        }
        .footer-links a:hover {
            color: #ffe4e1;
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        p {
            margin: 0;
            font-size: 1.1em;
            letter-spacing: 0.5px;
        }