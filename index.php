<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<?php

require('controllers/posts.php');
require('controllers/comments.php');

$action = $_GET['action'] ?? 'posts-list';

// Routing
// -------
switch ($action) {
    case 'posts-list':
        getPostsListController();
        break;
    case 'comments-list':
        $postId = $_GET['post_id'] ?? 0;
        getCommentsOfPostController($postId);
        break;
    default:
        echo '404 - Page Not Found';
}