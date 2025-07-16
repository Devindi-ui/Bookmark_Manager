<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>simple_bookmark_manager</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4"> 📚 Bookmark Manager</h1>

        <!-- Add Bookmark Form -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Add New Bookmark</h5>
            </div>
            <div class="card-body">               
                <form action="server.php" method="POST" id="bookmarkform">
                    <input type="hidden" name="action" value="add">
                    <div class="mb-3">
                        <label for="title" class="form-lable">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-lable">Title</label>
                        <input type="url" class="form-control" id="url" name="url">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Bookmark</button>
                </form>
            </div>
        </div>

<!-- Bookmark List -->
        <div id="bookmarkList">
            <h3 class="mb-3">My Bookmarks</h3>
            <div class="row" id="bookmarksContainer">
                <!-- Bookmarks will be loaded here via AJAX -->
            </div>
        </div>

    </div>
</body>
</html>