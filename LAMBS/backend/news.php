<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lambs Band </title>
    <style>
        .logo {
            height: 40px;
            margin-right: 10px;
        }
        body {
            background-image: url("IMG_1200.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../frontend/css/styles.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                
                <img src="lambslogo.jpg" alt="Lambs Band Logo" class="logo">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="history.php">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="albums.php">Albums</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="concerts.php">Concerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="music.php">Music</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="videos.php">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="partners.php">Partners</a>
                        </li>
                    </ul>
                    <a class="btn btn-outline-light" href="login.php">Login</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <?php
            // Fetch news articles from the database and assign them to $newsArticles variable
            // Replace this placeholder code with your actual database retrieval logic
            $newsArticles = []; // Placeholder array for news articles

            foreach ($newsArticles as $article) {
                ?>
                <div class="article">
                    <h2><?php echo $article['title']; ?></h2>
                    <p><?php echo $article['content']; ?></p>
                    <p>Date: <?php echo $article['date']; ?></p>
                    <p>Author: <?php echo $article['author']; ?></p>
                </div>
                <?php
            }
            ?>
        </section>
    </main>
</body>
</html>
