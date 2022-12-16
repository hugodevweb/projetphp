<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="dropdown">
  <div class="dropdown-trigger">
    <button id="btn" class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
      <span>Click me</span>
      <span class="icon is-small">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu3" role="menu">
    <div class="dropdown-content">
      <a href="#" class="dropdown-item">
        Overview
      </a>
      <a href="#" class="dropdown-item">
        Modifiers
      </a>
      <a href="#" class="dropdown-item">
        Grid
      </a>
      <a href="#" class="dropdown-item">
        Form
      </a>
      <a href="#" class="dropdown-item">
        Elements
      </a>
      <a href="#" class="dropdown-item">
        Components
      </a>
      <a href="#" class="dropdown-item">
        Layout
      </a>
      <hr class="dropdown-divider">
      <a href="#" class="dropdown-item">
        More
      </a>
    </div>
  </div>
</div>
<script>
    $('#btn').click(function() {

        if($('.dropdown').hasClass('is-active')){
            $('.dropdown').removeClass('is-active') 
        }
        else{
            $('.dropdown').addClass('is-active');
        }
       
    });

</script>
</body>
</html>