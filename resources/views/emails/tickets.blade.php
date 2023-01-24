<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="http://127.0.0.1:8000/ticketemail.css"/>
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Staatliches&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap");

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body,
html {
	height: 100vh;
	display: grid;
	font-family: "Staatliches", cursive;
	background: #f3e9ec;
	color: black;
	font-size: 14px;
	letter-spacing: 0.1em;
}

.ticket {
	margin: auto;
	display: flex;
	background: white;
	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}

.left {
	display: flex;
}

.image {
	height: 250px;
	width: 250px;
	background-image: url("http://127.0.0.1:8000/ticket.jpg");
    background-repeat: no-repeat;
	background-size: cover;
	opacity: 0.85;
}

.admit-one {
	position: absolute;
	color: darkgray;
	height: 250px;
	padding: 0 10px;
	letter-spacing: 0.15em;
	display: flex;
	text-align: center;
	justify-content: space-around;
	writing-mode: vertical-rl;
	transform: rotate(-180deg);
}

.admit-one span:nth-child(2) {
	color: white;
	font-weight: 700;
}

.left .ticket-number {
	height: 250px;
	width: 250px;
	display: flex;
	justify-content: flex-end;
	align-items: flex-end;
	padding: 5px;
}

.ticket-info {
	padding: 10px 30px;
	display: flex;
	flex-direction: column;
	text-align: center;
	justify-content: space-between;
	align-items: center;
}

.date {
	border-top: 1px solid gray;
	border-bottom: 1px solid gray;
	padding: 5px 0;
	font-weight: 700;
	display: flex;
	align-items: center;
	justify-content: space-around;
}

.date span {
	width: 100px;
}

.date span:first-child {
	text-align: left;
}

.date span:last-child {
	text-align: right;
}

.date .june-29 {
	color: #d83565;
	font-size: 20px;
}

.show-name {
	font-size: 32px;
	font-family: "Nanum Pen Script", cursive;
	color: #d83565;
}

.show-name h1 {
	font-size: 48px;
	font-weight: 700;
	letter-spacing: 0.1em;
	color: #4a437e;
}

.time {
	padding: 10px 0;
	color: #4a437e;
	text-align: center;
	display: flex;
	flex-direction: column;
	gap: 10px;
	font-weight: 700;
}

.time span {
	font-weight: 400;
	color: gray;
}

.left .time {
	font-size: 16px;
}


.location {
	display: flex;
	justify-content: space-around;
	align-items: center;
	width: 100%;
	padding-top: 8px;
	border-top: 1px solid gray;
}

.location .separator {
	font-size: 20px;
}

.right {
	width: 180px;
	border-left: 1px dashed #404040;
}

.right .admit-one {
	color: darkgray;
}

.right .admit-one span:nth-child(2) {
	color: gray;
}

.right .right-info-container {
	height: 250px;
	padding: 10px 10px 10px 35px;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	align-items: center;
}

.right .show-name h1 {
	font-size: 18px;
}

.barcode {
	height: 100px;
}

.barcode img {
	height: 100%;
}

.right .ticket-number {
	color: gray;
}

	</style>
</head>
<body>


<div class="ticket">
	<div class="left">
		<div class="image">
			<p class="admit-one">
				<span>BOOKURSHOWS</span>
				<span>BOOKURSHOWS</span>
			</p>
			<div class="ticket-number">
				<p>
					Ticket No# {{ $details['ticket_no'] }}
				</p>
			</div>
		</div>
		<div class="ticket-info">
			<p class="date">
				<span>{{ $details['day'] }}</span>
				<span class="june-29">{{ $details['month'] }} {{ $details['date'] }}{{ $details['day_suff'] }}</span>
				<span>{{ $details['year'] }}</span>
			</p>
			<div class="show-name">
				<h1>Book Your</h1>
				<h2>Shows</h2>
			</div>
			<div class="time">
				<p>Time</p>
				<p>{{$details['time']}}</p>			
			</div>
			<p class="location" style="color:red;"><span>Arrived Before 30min
				otherwise your ticket will be cancelled</span>
			</p>
		</div>
	</div>
	<div class="right">
		<p class="admit-one">
            <span>BOOKURSHOWS</span>
			<span>BOOKURSHOWS</span>
		</p>
		<div class="right-info-container">
			<div class="show-name">
				<h1>Book Shows</h1>
			</div>
			<div class="time">
		
				<p>tickets:{{$details['no_of_seats']}}</p>
				<p>Price:{{$details['no_of_seats']*700}}</p>
			</div>
			<div class="barcode">
				<img src="http://127.0.0.1:8000/stamp.png" alt="QR code">
			</div>
			<p class="ticket-number">
				#Ticket No# {{ $details['ticket_no'] }}
			</p>
            <p class="ticket-number">
				Signature
			</p>
            <label for=""></label>
            <input type="text" style="width:90px;" name="" id="">
		</div>
	</div>
</div>
</body>
</html>
