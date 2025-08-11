
<header>
    <div class="container">
        <div class="header-content">
            <h1>Demo Application</h1>
            <div class="language-switcher">
                <label for="language-select">Language:</label>
                <select id="language-select" onchange="changeLanguage(this.value)">
                    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                    <option value="es" {{ app()->getLocale() == 'es' ? 'selected' : '' }}>Español</option>
                    <option value="fr" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>Français</option>
                    <option value="de" {{ app()->getLocale() == 'de' ? 'selected' : '' }}>Deutsch</option>
                </select>
            </div>
            <div class="auth-links">
                <a href="{{ url('/login') }}" class="login-btn">Login</a>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<style>
    header {
        background-color: #f8f9fa;
        padding: 20px 0;
        text-align: start;
        position: relative;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
    }

    .header-content {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin-bottom: 10px;
        gap: 16px;
        position: relative;
    }

    header h1 {
        margin: 0;
        font-size: 24px;
    }

    .language-switcher {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .language-switcher label {
        font-size: 14px;
        color: #666;
    }

    .language-switcher select {
        padding: 5px 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: white;
        font-size: 14px;
    }

    .auth-links {
        position: absolute;
        right: 0;
        top: 0;
        display: flex;
        align-items: center;
    }

    .login-btn {
        padding: 6px 18px;
        background: #007bff;
        color: #fff;
        border-radius: 4px;
        text-decoration: none;
        font-size: 15px;
        border: none;
        transition: background 0.2s;
    }
    .login-btn:hover {
        background: #0056b3;
    }

    nav ul {
        list-style: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin: 0 15px;
    }

    nav ul li a {
        text-decoration: none;
        color: #007bff;
    }
    nav ul li a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .header-content {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }

        .auth-links {
            position: static;
            margin-left: 0;
            align-self: flex-end;
            width: 100%;
            justify-content: flex-end;
        }

        nav ul li {
            display: block;
            margin: 5px 0;
        }
    }
</style>
<script>
    function changeLanguage(locale) {
        window.location.href = "{{ url('/') }}" + "/change-language/" + locale;
    }
</script>