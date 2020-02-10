
<!DOCTYPE html>
<html>
<head>
	<title>Football Statistics, News, Goals & More - {{config('app.name')}}</title>
<meta name="description" content="Football Matches Statistics, Reviews, Goals & Highlights" />
<meta property="og:site_name" content="{{config('app.name')}}" />
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
<meta property="og:locale" content="en" />
<meta property="og:title" content="Football Statistics, News, Goals & More - {{config('app.name')}}" />
<meta property="og:description" content="Football Matches Statistics, Reviews, Goals & Highlights" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">

</head>
<body>

@extends('header')
  <div class="container">
    <div class="wrapper">
      
      <div class="contact">
        <h3>Email Us</h3>
        <div class="alert">Your message has been sent</div>
        <form id="contactForm">
          <p>
            <label>Name</label>
            <input type="text" name="name" id="name" required>
          </p>
          <p>
            <label>Company</label>
            <input type="text" name="company" id="company">
          </p>
          <p>
            <label>Email Address</label>
            <input type="email" name="email" id="email" required>
          </p>
          <p>
            <label>Phone Number</label>
            <input type="text" name="phone" id="phone">
          </p>
          <p class="full">
            <label>Message</label>
            <textarea name="message" rows="5" id="message"></textarea>
          </p>
          <p class="full">
            <button type="submit">Submit</button>
          </p>
        </form>
      </div>
    </div>
  </div>

  <script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
  <script src="{{asset('js/contact.js')}}"></script>
</body>
</html>