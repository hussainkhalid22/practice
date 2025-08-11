<div class="contact-container">

    <form action="submit-form" method="POST">   
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" placeholder="Enter your name" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" placeholder="Enter your email" id="email" name="email" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea placeholder="Enter your message" id="message" name="message" required></textarea>
        </div>
        <button type="submit">Send Message</button>
        <label>
            <input type="checkbox" required>
            I agree to the <a href="/terms">Terms of Service</a> and <a href="/privacy">Privacy Policy</a>.
        </label>
    </form>
    <p>Thank you for visiting our contact page!</p>

</div>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }

    .contact-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        
    }

    h1 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 10px;
    }

    p {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
    }

    textarea {
        height: 120px;
        resize: vertical;
    }

    button {
        background-color: #3498db;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #2980b9;
    }

    a {
        color: #3498db;
        text-decoration: none;
        font-size: 14px;
    }

    a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .contact-container {
            padding: 15px;
        }

        form {
            padding: 20px;
        }
    }
</style>