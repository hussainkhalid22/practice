
<header>
    <div class="rainbow-bg"></div>
    <div class="container header-sections">
        <div class="header-left">
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
        </div>
        <div class="header-right">
            <div class="auth-links">
                <a href="{{ url('/login') }}" class="login-btn">Login</a>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<style>
    header {
        position: relative;
        overflow: hidden;
        min-height: 120px;
        margin-bottom: 0;
    }
    .rainbow-bg {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        z-index: 0;
        width: 100%;
        height: 100%;
        background: conic-gradient(
            from 0deg,
            #ff0080, #ff8c00, #40e0d0, #ff0080, #ff8c00, #40e0d0, #ff0080
        );
        animation: spin 8s linear infinite;
        filter: blur(8px) brightness(1.1);
        opacity: 0.85;
    }
    @keyframes spin {
        0% { transform: rotate(0deg);}
        100% { transform: rotate(360deg);}
    }
    .container.header-sections {
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 24px 20px;
    }
    .header-left {
        display: flex;
        align-items: center;
        gap: 24px;
    }
    .header-left h1 {
        margin: 0;
        font-size: 2em;
        font-weight: 700;
        color: #fff;
        text-shadow: 0 2px 8px rgba(0,0,0,0.15);
        letter-spacing: 1px;
    }
    .language-switcher label {
        font-size: 15px;
        color: #fff;
        font-weight: 500;
        margin-right: 6px;
        text-shadow: 0 1px 4px rgba(0,0,0,0.12);
    }
    .language-switcher select {
        padding: 6px 12px;
        border: none;
        border-radius: 6px;
        background: rgba(255,255,255,0.8);
        font-size: 15px;
        color: #333;
        box-shadow: 0 1px 4px rgba(0,0,0,0.08);
        outline: none;
        transition: background 0.2s;
    }
    .header-right {
        display: flex;
        align-items: center;
        gap: 32px;
    }
    .auth-links .login-btn {
        padding: 8px 22px;
        background: linear-gradient(90deg, #ff0080 0%, #ff8c00 100%);
        color: #fff;
        border-radius: 6px;
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        border: none;
        box-shadow: 0 2px 8px rgba(255, 0, 128, 0.15);
        transition: background 0.2s, box-shadow 0.2s;
    }
    .auth-links .login-btn:hover {
        background: linear-gradient(90deg, #40e0d0 0%, #ff0080 100%);
        box-shadow: 0 4px 16px rgba(255, 140, 0, 0.18);
    }
    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 20px;
    }
    nav ul li a {
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        font-weight: 500;
        padding: 6px 14px;
        border-radius: 4px;
        transition: background 0.2s, color 0.2s;
    }
    nav ul li a:hover {
        background: rgba(255,255,255,0.18);
        color: #ff8c00;
    }
    @media (max-width: 900px) {
        .container.header-sections {
            flex-direction: column;
            align-items: stretch;
            padding: 18px 10px;
        }
        .header-left, .header-right {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }
        .header-right {
            margin-top: 12px;
        }
        nav ul {
            flex-direction: column;
            gap: 8px;
        }
    }
</style>
<script>
    function changeLanguage(locale) {
        window.location.href = "{{ url('/') }}" + "/change-language/" + locale;
    }
</script>