<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta charset="UTF-8" />
    <title>Tech Support</title>
    <link rel="shortcut icon" href="lib/fav.png" />
    <link rel="stylesheet" href="lib/bootstrap.min.css" />
    <style>
        body {
            border: 5px;
            padding-top: 5px;
        }
        .jumbotron {
            border-radius: 5px;
            background-color: #fefefe;
            color: #037ef3;
        }
    </style>
    <script src="lib/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on("contextmenu", function(e) {
                e.preventDefault();
            });
        });
    </script>
    <script src="lib/popper.min.js"></script>
    <script src="lib/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <h3>T3ch Support</h3>
                    <hr class="my-2">
                    <p class="lead">
                    <form method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Write your message" name="txtMsg" />
                            <div class="input-group-append">
                                <input type="submit" class="btn btn-primary" name="txtSnd" value="Send" />
                            </div>
                            <?php include __DIR__ . "/SockClient.php"; ?>
                        </div>
                        <div class="input-group">
                            <textarea class="form-control" readonly><?php echo @$reply; ?></textarea>
                        </div>
                    </form>
                    </p>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>