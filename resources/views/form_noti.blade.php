<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Application</title>
</head>
<body>

<div class="container">
    <div class="col-md-4 col-md-offset-2">
        <fieldset style="padding-top: 30px">
            <legend>Form test thông báo:</legend>
            <form action="{{ route('send_noti') }}" method="POST">
                @csrf
                <div class="form-group">
                <label  for="">Tên</label>
                <input type="text" class="form-control" name="author" />
            </div>
            <div class="form-group">
                <label  for="">Nội dung</label>
                <textarea name="content" class="form-control" rows="3" ></textarea>
            </div>
            <button type="submit" name="send" class="btn btn-primary">Send</button>
            </form>
        </fieldset>
    </div>
</div>
</body>
<script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>