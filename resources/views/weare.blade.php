<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ez9Fh1R1XGoWj+lNU5iKjtJvsOqAnKQDtvX8b/fsFOc5pI+J8DAaLB4wu9R2XxK1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ez9Fh1R1XGoWj+lNU5iKjtJvsOqAnKQDtvX8b/fsFOc5pI+J8DAaLB4wu9R2XxK1" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://wallpaperaccess.com/full/2968326.jpg'); /* Cambia la URL de la imagen de fondo */
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }

        .message-container {
            text-align: center;
        }

        .message {
            font-size: 2em;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo semi-transparente */
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            font-style: italic;
        }

        .icon {
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="message-container">
    <a class="message" href="{{ route('/') }} " >
        Build this view 
    

    </a>       
</div>

</body>
</html>
