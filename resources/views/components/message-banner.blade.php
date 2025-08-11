<section>
    <span>User login successfully</span>
    <button type="button" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <style>
        .close {
            background: none;
            border: none;
            font-size: 1.5em;
            cursor: pointer;
        }
    </style>
    <script>
        document.querySelector('.close').addEventListener('click', function() {
            this.parentElement.style.display = 'none';
        });
    </script>
    <style>
        section {       
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        span {
            font-weight: bold;
        }
    </style>
</section>