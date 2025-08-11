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
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: start;
        }
        .footer-links {
            list-style: none;
            padding: 0;
        }
        .footer-links li {
            display: inline;
            margin: 0 10px;
        }
        .footer-links a {
            text-decoration: none;
            color: #007bff;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        