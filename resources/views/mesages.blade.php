<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<title>chat</title>
</head>
<body>
	<div class="container">
		<div id="data">
			<?php foreach ($messages as $key => $message): ?>
			<p id="{{$message->id}}"><b>{{$message->author}} </b> : {{$message->content}}</p>
			<?php endforeach ?>
		</div>
		<form action="send-message" method="POST" role="form">
			{{csrf_field()}}
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
	</div>
</body>
	<script src="//code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script>
		var socket = io.connect('http://noti.todo.com:6001')
		console.log(socket);
		socket.on('laravel_database_chat:message',function(data){
			if($('#'+data.id).length == 0){
				$('#data').append('<p><b>' + data.author +' </b> : ' + data.content + '</p>')
			}else{
				console.log('không dc')
			}
		})
	</script>
</html>