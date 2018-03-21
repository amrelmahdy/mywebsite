<!DOCTYPE html>
<html>
<head>
	<title>Contact Message</title>
	<style>
	    .container{
	    	background-color: #F8F8F8;
	    }

		.content{
			width: 80%;
			margin: auto;
			box-shadow: 0 0 20px #c1bebe;
		}



		.header h2 {
		    width: 30%;
		    float: left;
		    margin: 35px 20px;
		    text-align: left;
		}

		.logo{
			width: 30%;
			float: right;
		}

		.logo img{
			width: 150px;
		    height: 70px;
		    margin-top: 9px;
		}

		.body{
			background-color: #DDD;
			border: 1px slid #EEE;
			text-align: center;
			padding: 20px;
		}

		.msg{
			background-color: #FFF;
			padding: 35px 20px;
		}

		.footer{
			background-color: #eaeaea;
			height: 20px;
		}

		hr{
			border: 1px solid #EEE;
		}

		address p{
			margin: 0;
			padding: 2px 0;
		}
	</style>
</head>
<body>
     <div class="container">
        <div class="content">
	     	<div class="header">
	     	    <h2>New Qoute</h2>
		     </div>
		     <div class="msg">
		         <h4>Contact Message From :  {{ $data['name'] . ' <' . $data["email"] .'>' }}</h4>
		         <p>{{ $data['project'] }}</p>

		          <hr>

		          <address>
		          	<p><strong>Sent From    : </strong></strong><span>{{ $data['email'] }}</span></p>
		          	<p><strong>Sener Name   : </strong></strong><span>{{ $data['name'] }}</span></p>
		          </address>
		     </div>
		     <div class="footer"></div>
	     </div>
     </div>
</body>
</html>


