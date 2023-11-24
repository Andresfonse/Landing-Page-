<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7fafc;
            font-family: 'Arial', sans-serif;
        }

        .container {
            display: flex;
            border: 2px solid #ff7e5f;
            border-radius: 10px;
            overflow: hidden;
            max-width: 800px;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .footer__form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin: auto;
        }

        .footer__newsletter {
            text-align: center;
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
            font-style: italic;
        }

        .footer__inputs {
            margin-top: 20px;
        }

        .footer__input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s ease;
            font-family: 'Arial', sans-serif;
        }

        .footer__input:focus,
        textarea:focus {
            outline: none;
            border-color: #ff7e5f;
        }

        .footer__submit {
            background-color: #ff7e5f;
            color: white;
            padding: 12px;
            cursor: pointer;
            border: none;
            border-radius: 20px;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .footer__submit:hover {
            background-color: #e64c38;
        }

        .image-container {
            flex: 1;
            overflow: hidden;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <form class="footer__form" action="https://formspree.io/f/mjvqdzlo" method="POST">
            <h2 class="footer__newsletter">Preguntas Y Comentarios</h2>
            <div class="footer__inputs">
                <input type="email" placeholder="Email:" class="footer__input" name="_replyto" required>
                <label>
                    <textarea name="message" placeholder="Comentarios:" required></textarea>
                </label>
                <br>
                <br>
                <input type="submit" value="Comentar!!!" class="footer__submit">
            </div>
            <br>
             <a href="{{ route('/') }} " >Later</a>       
        </form>
    </div>
   

    <div class="image-container">
        <img id="dynamicImage" src="https://images.vexels.com/media/users/3/152639/isolated/preview/506b575739e90613428cdb399175e2c8-space-astronaut-cartoon-by-vexels.png" alt="Imagen">
    </div>

    <script>
        document.getElementById('dynamicImage').src = 'https://images.vexels.com/media/users/3/152639/isolated/preview/506b575739e90613428cdb399175e2c8-space-astronaut-cartoon-by-vexels.png';
    </script>
</div>

</body>
</html>
