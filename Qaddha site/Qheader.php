
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css files-->
    <link rel="stylesheet" href="assets/css/demo.css">
    <link rel="stylesheet" href="assets/css/header-basic.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">

    <!--home files-->
    <link rel="stylesheet" type="text/css" href="assets/css/isotope.css" media="screen" />  
    <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- skin -->
    <link rel="stylesheet" href="assets/skin/default.css">

    <!---->
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <!--wizard step-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="assets/css/easyWizard.css">
    <script src="assets/js/easyWizard.js"></script>
    
    <!--add date -->
    <!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
    <script type="text/javascript" src="http://formden.com/static/cdn/formden.js"></script>
    <!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
    <link rel="stylesheet" href="http://formden.com/static/cdn/bootstrap-iso.css" />
    <!--Font Awesome (added because you use icons in your prepend/append)
    <link rel="stylesheet" href="http://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />-->
    <link href="assets/css/date.css" rel="stylesheet" />
    
    <!--button-->
    <link href="assets/css/button.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--another links-->
    <link href="assets/css/pop.css" rel="stylesheet" />
    <link href="assets/css/switch.css" rel="stylesheet" />
    <link href="assets/css/profile.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/css/easyWizard.css">
    <script src="//code.jquery.com/jquery-2.1.4.js"></script>
    <style type="text/css">
    .extraClass{ font-size:15px; }
    .extraC{ font-size:30px; }
    .right-corder-container {
    position:fixed;
    right:20px;
    bottom:20px;
}
.right-corder-container .right-corder-container-button {
    height: 52px;
    width: 52px;
    border:none;
    background-color:#6FB583;
    border-radius: 62px;        /*Transform the square into rectangle, sync that value with the width/height*/
    transition: all 300ms;      /*Animation to close the button (circle)*/
    box-shadow:2px 2px 5px rgb(25, 73, 15)  ;
    cursor:pointer;
}
.right-corder-container .right-corder-container-button span {
    font-size: 45px;
    color:white;
    position: absolute;
    left: 12px;
    top: 13px;
    line-height: 28px;
}
.right-corder-container .right-corder-container-button:hover {
    transition: all 400ms cubic-bezier(.62,.1,.5,1);      
    width:200px;                                            
    border-top-right-radius: 5px;                           
    border-bottom-right-radius: 5px;                        
}
.right-corder-container .right-corder-container-button .long-text {
    transition: opacity 1000ms; /*Only the text fadein/fadeout is animated*/
    opacity:0;                /*By default we do not display the text, we want the text to fade in*/
    color:white;
    white-space: nowrap;      
    font-size: 0;             /*Set to 0 to not have overflow on the right of the browser*/
    width: 0;                 /*Set to 0 to not have overflow on the right of the browser*/
    margin:0;                 /*Set to 0 to not have overflow on the right of the browser*/
}
.right-corder-container .right-corder-container-button .long-text.show-long-text{
  transition: opacity 700ms,
              width 1ms linear 270ms,       /*two thirds of the animation on the container width*/
              font-size 1ms linear 270ms;   /*two thirds of the animation on the container width*/
  opacity:1;
  margin-top: 2px;                          /*Center the position vertically*/
  margin-left: 65px;                        /*Center between the + and the right end side*/
  font-size: 20px;                          /*Text size, cannot be defined initially without moving the scrollbar*/
  width: auto;                              /*Required to be set with a delay (see animation) to not have scrollbar. Delay is to wait container to size up*/
}

.pull{padding-left: 460px;}

.btn-round-lg{
border-radius: 22.5px;
}
.btn-round{
border-radius: 17px;
}
    </style>


</head>
	<body>
		<header class="header-basic">
			<div class="header-limiter ">
				<a href="#QaddhaHome.php"><img src="assets/img/LogoS.png"width="50"></a>
				<nav>
				
					<a href="QaddhaHome.php#section-contact">التواصل</a>
					<a href="special.php">متميزي قدّها</a>
					<a href="QaddhaHome.php#section-help">المساعدة</a>
					<a href="QaddhaHome.php#section-about">عن قدّها</a>
					<a href="QaddhaHome.php">الرئيسية</a>
				</nav>
				
					<div class="header-user-menu">
					 <img src="assets/img/find_user.png" alt="User Image"/>
				<ul>
					<li><a href="profile.php">حسابي</a></li>
					<li><a href="timeline.php">Timeline</a></li>
					<li><a href="logout.php" class="highlight">خروج</a></li>
				</ul>
			</div> 
				
			</div>

		</header>
<script>
    $(document).ready(function(){
        var userMenu = $('.header-basic .header-user-menu');
        userMenu.on('touchend', function(e){
            userMenu.addClass('show');
            e.preventDefault();
            e.stopPropagation();
        });
        // This code makes the user dropdown work on mobile devices
        $(document).on('touchend', function(e){
            // If the page is touched anywhere outside the user menu, close it
            userMenu.removeClass('show');
        });
    });
</script>
</body>
</html>