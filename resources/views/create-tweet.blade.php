<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create tweet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .create-tweet-area{
            padding: 30px;
        }
        .create-tweet h2{
            font-size: 28px;
            color: #484242;
        }
    </style>
</head>
<body>
    <div class="create-tweet-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="navigation my-5">
                        <ul>
                            <a class="list-group-item active" href="#">Create Tweet</a>
                            <a class="list-group-item" href="#">All Tweets</a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="create-tweet">
                        <h2>Tweet a tweet!</h2>
                        <form action="{{ route('tweet-page') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <!-- Tweet Box -->
                                <textarea class="form-control" id="tweet" name="tweet" rows="3" placeholder="What's Happening"></textarea>
                                <!-- Submit -->
                                <div class="text-right">
                                    <button type="submit" class="my-2 btn btn-success">Tweet</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
