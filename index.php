<!DOCTYPEhtml>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


        <title>Project 1</title>

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <h1>Sarah Baughman</h1>

            <div class="imgcontainer">
            <img class="img-responsive" width="30%" src="imgs/Project1_photo.png">
            </div>

            <h2>About Me</h2>
            <p class="lead">I live in Somerville, Massachusetts and I work in client services for a tech company.
            I enjoy working out and recently started learning piano.</p>

            <h2>Random Quote</h2>
            <?php

                $quoteArray = [
                    "I would always rather be happy than dignified.",
                    "Of course it is happening inside your head, Harry, but why on earth should that mean
                    that it is not real?",
                    "Beware for I am fearless, and therefore powerful.",
                    "I am not afraid of storms, for I am learning how to sail my ship",
                    "I can't go back to yesterday because I was a different person then.",
                    "I cannot fix on the hour, or the spot, or the look or the words, which laid the foundation.
                    It is too long ago. I was in the middle before I knew that I had begun.",
                    "I have never met any really wicked person before. I feel rather frightened. I am so afraid he will look
                    just like everyone else.",
                ];

                /*$authorArray = [
                    "Charlotte Bronte",
                    "JK Rowling",
                    "Mary Shelley",
                    "Louisa May Alcott",
                    "Lewis Carroll",
                    "Jane Austen",
                    "Oscar Wilde",
                ];

                $bookArray = [
                    "Jane Eyre",
                    "Harry Potter and the Deathly Hallows",
                    "Frankenstein",
                    "Little Women",
                    "Alice in Wonderland",
                    "Pride and Prejudice",
                    "The Importance of Being Earnest",
                ];
                */

                $randQuotes = array_rand($quoteArray, 1);
                echo $quoteArray[$randQuotes];
                

            ?>
        </div>        
    </body>
</html>