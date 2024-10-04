<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Pagination Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <!-- jQuery from CDN -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

       <!-- Optional: Include Bootstrap CSS if needed -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

       <!-- Optional: Include Bootstrap JS if you are using Bootstrap's JS features -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <h1>Posts</h1>
    <div id="post-container">
        @include('posts')
    </div>


    <script>
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];

            $.ajax({
                url: '?page=' + page,
                success: function(data) {
                    $('#post-container').html(data);
                }
            });
        });
    </script>
</body>
</html>

<!-- resources/views/posts/index.blade.php -->
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AJAX Pagination</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Optional: Include Bootstrap JS if you are using Bootstrap's JS features -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">AJAX Pagination with Laravel</h1>
        <div id="post-data">
            @include('posts')
        </div>
        <div class="ajax-load text-center" style="display:none">
            <p><img src="https://i.stack.imgur.com/kOnzy.gif"> Loading More posts</p>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });

            function fetch_data(page) {
                $.ajax({
                    url: "/posts?page=" + page,
                    type: "GET",
                    beforeSend: function() {
                        $('.ajax-load').show();
                    },
                    success: function(data) {
                        $('#post-data').html(data);
                        $('.ajax-load').hide();
                    }
                });
            }
        });
    </script>
</body>

</html> --}}
