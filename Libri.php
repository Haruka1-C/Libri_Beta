
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "Libri.css">
    <title>Libri</title>
</head>
<body>
    <header class="libri-header">
        <div class="libri-logo">
            <div>
                Libri
            </div>
            <div>
                Searchbar
            </div>
        </div>
        <div class="header-menu">
            <div>
                <a href="#">XXX</a>
            </div>
            <div>
                <a href="#">AAA</a>
            </div>
            <div>
                <a href="#">DDD</a>
            </div>
        </div>
    </header>

    <body>
        <div class="main-body-container">
            <div class="file-upload">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file" id="fileToUpload">
                    <input type="submit" value="submit">Upload file</button>
                </form>
            </div>
            <div class="file-download">
                <h4>Download file: </h4>
                <a href="download.php?Screenshot(1).png">Download</a>
            </div>
        </div>
    </body>
</body>
</html>