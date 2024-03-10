<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <link rel="icon" type="image/png" href="icon/nota.png">
    <title>NOTA</title>
    <style>
        body {
            font-family: 'verdana', 'Arial';
            background-color: hsl(0, 1%, 51%);
            color: #000000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .songlist {
            list-style: none;
            align-items: baseline;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 25px;
        }

        .songitem {
            text-decoration: none;
            font-family: 'Lucida Sans Regular';
            border-radius: 15px;
            overflow: hidden;
            margin: 30px;
            width: 300px;
            box-shadow: 0 0px 30px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s ease-in-out;
            position: relative; 
            background-color: rgb(204, 201, 201);
        }

        .songitem:hover {
            transform: scale(1.10);
        }

        #photo {
            height: 200px;
            width: 100%;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .songinfo {
            padding: 15px;
        }

        .songtitle {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-weight: bolder;
            color: #000000;
            margin: 5px 0;
            position: relative; 
        }

        .songartist {
            font-family: Arial, Helvetica, sans-serif;
            color: #818181;
            font-size: 16px;
            margin: 0;
        }

        .heart-icon {
            position: absolute;
            top: 10px; 
            right: 10px;
            color: black;
        }
        
        .websitename {
            margin-bottom: 30px; 
        }

        .websitename h1 {
            font-size: 6em;
            color: rgb(204, 201, 201);
        }
    </style>
</head>
<body>
    <header>
        <div class="websitename">
            <h1>Liked Songs</h1>
        </div>
    </header>
    <div class="songlist">
        <a class="songitem" href="song1.php">
            <img id="photo" src="song covers/Fallen.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Fallen
                    <span class="heart-icon">&#10084;</span>
                </p>
                <p class="songartist">
                    Lola Amour
                </p>
            </div>
        </a>

        <a class="songitem" href="song2.php">
          <img id="photo" src="song covers/Tip Toe.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Tip Toe
                   <span class="heart-icon">&#10084;</span>
                </p>
                <p class="songartist">
                  HYBS 
                </p>
            </div>
        </a>

        <a class="songitem" href="song3.php">
            <img id="photo" src="song covers/Estranghero.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Estranghero
                    <span class="heart-icon">&#10084;</span>
                </p>
                <p class="songartist">
                    Cup of Joe
                </p>
            </div>
        </a>

        <a class="songitem" href="song4.php">
            <img id="photo" src="song covers/Paninindigan Kita.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Paninindigan Kita
                    <span class="heart-icon">&#10084;</span>
                </p>
                <p class="songartist">
                    Ben&Ben
                </p>
            </div>
        </a>

        <a class="songitem" href="song5.php">
            <img id="photo" src="song covers/Yakap sa Dilim.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Yakap sa Dilim
                    <span class="heart-icon">&#10084;</span>
                </p>
                <p class="songartist">
                    Orange & Lemons
                </p>
            </div>
        </a>

        <a class="songitem" href="song6.php">
            <img id="photo" src="song covers/Pagtingin.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Pagtingin
                    <span class="heart-icon">&#10084;</span>
                </p>
                <p class="songartist">
                    Ben&Ben
                </p>
            </div>
        </a>

        <a class="songitem" href="song7.php">
            <img id="photo" src="song covers/Heaven Knows.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Heaven Knows
                    <span class="heart-icon">&#10084;</span>
                </p>
                <p class="songartist">
                    Orange & Lemons
                </p>
            </div>
        </a>
        
        <a class="songitem" href="song8.php">
            <img id="photo" src="song covers/Pwede Ba.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Pwede Ba
                    <span class="heart-icon">&#10084;</span>
                </p>
                <p class="songartist">
                    Lola Amour
                </p>
            </div>
        </a>
    </div>
</body>
</html>
