<!doctype html>
<!--[if IE 8]><html class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title></title>
    <link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
    <link href='css/bootstrap-responsive.min.css' rel='stylesheet' type='text/css'>
    <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <!--<link rel="icon" href="images/favicon.png" type="image/png">-->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
        document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <style>
        body{
            background: #2a77c5;
            font-family: 'PT Sans', sans-serif;
        }
        body>div{
            background: #fff;
        }
        header{
            background: #f8fbfd;
            margin-bottom: 2em;
            padding: 2em 0;
        }
        header .row div + div{
            padding-top: .7em;
            text-align: right;
        }
        h1{
            font-size: 555%;
            line-height: .8em;
            padding-top: .1em;
        }
        h2{
            color: #918762;
            font-size: 190%;
            font-weight: normal;
        }
        .btn{
            background: #ffb431;
            border: 5px solid #fff;
            border-radius: 0;
            box-shadow: 0 0 7px rgba(0,0,0,.1);
            color: #fff;
            font-family: 'PT Sans', sans-serif;
            font-size: 200%;
            margin: 0 auto;
            padding: .6em 0;
            width: 50%;
        }
        .btn:hover{
            background: #ff780a;
            color: #fff;
        }
        .btn-main{
            font-size: 300%;
            margin: 0 .8em 0 0;
            width: 70%;
        }
        #selling-points{
            margin: 3em 0 4em 0;
        }
        p{
            color: #585549;
        }
        #bottom{
            box-shadow: 2px 2px 5px rgba(0,0,0,.4);
            margin: 40em auto;
            padding: 3em;
            position: relative;
            overflow: hidden;
            width: 40em;
        }
        form>div{
            display: none;
            left: 1000px;
            min-height: 650px;
            position: relative;
        }
        #form1{
            display: block;
            left: 0;
        }
        #form1 p{
            font-size: 140%;
            margin: 1.5em 0 0 0;
        }
    </style>
</head>
<body>
<div>
    <header>
        <div class="container">
            <div class="row">
                <div class="span5"><img src="images/8semesters-logo.png" alt="8semesters logo" width="332" height="37"></div>
                <div class="span2 offset5"><a class="how">How it works</a></div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="span7">
                <h1>Find your major</h1>
                <h2>Answer a few questions and map out your life.</h2>
                <a href="#bottom" class="btn btn-large btn-block btn-main">Get your major!</a>
            </div>
            <div class="span5">
                <img src="images/illustration.png" alt="An illustration of a face with icons symbolizing college majors over his head. He does not look happy about math." width="407" height="317">
            </div>
        </div>

        <div id="selling-points">
            <div class="row">
                <div class="span6">
                    <div class="row">
                        <div class="span2"><img src="images/money.png" alt="A dollar sign" width="148" height="99"></div>
                        <p class="span4">A college semester costs $20,000 in America. Choose your major wisely and save a lot.</p>
                    </div>
                </div>
                <div class="span6">
                    <div class="row">
                        <div class="span2"><img src="images/happy.png" alt="That little guy is happy about art though." width="149" height="97"></div>
                        <p class="span4">If you enjoy what you study in school, you're a lot more likely to enjoy your career. Your career lasts a long time.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="bottom" class="container">
    <form>
        <div id="form1">
            <h2>Tell us about yourself and we'll plan your college career.</h2>
            <p>Do you want to move somewhere new?</p>
            <label class="radio inline">
                <input type="radio" name="question1" value="Wants to move">yes
            </label>
            <label class="radio inline">
                <input type="radio" name="question1" value="Doesn't want to move">no
            </label>
            <p>Do you have a pet?</p>
            <label class="radio inline">
                <input type="radio" name="question5" value="Likes pets">yes
            </label>
            <label class="radio inline">
                <input type="radio" name="question5" value="Doesn't like pets">no
            </label>
            <p>Do you play video games?</p>
            <label class="radio inline">
                <input type="radio" name="question2" value="Plays video games">yes
            </label>
            <label class="radio inline">
                <input type="radio" name="question2" value="Doesn't play video games">no
            </label>
            <p>Do you drink coffee?</p>
            <label class="radio inline">
                <input type="radio" name="question3" value="Drinks coffee">yes
            </label>
            <label class="radio inline">
                <input type="radio" name="question3" value="Doesn't drink coffee">no
            </label>
            <p>Did you take calculus in high school?</p>
            <label class="radio inline">
                <input type="radio" name="question4" value="Took calculus">yes
            </label>
            <label class="radio inline">
                <input type="radio" name="question4" value="Didn't take calculus">no
            </label>
            <button class="btn btn-large btn-block">Pick your major!</button>
        </div>
        <div id="form2">
            <h2>We recommend one of these majors for you to consider.</h2>
            <h3>Which one do you think best fits you?</h3>
            <ul id="recommended_majors">
            </ul>
        </div>
        <div id="form3">
            <h2>Good luck in school!</h2>
            <h3>Schools with <span class="major_text"></span> degrees you should consider.</h3>
            <ul>
                <li><a href="#">Coker College</a></li>
                <li><a href="#">USC</a></li>
            </ul>
            <h3>Read up on <span class="major_text"></span> before you go.</h3>
            <ul>
                <li><a href="#">{{AmazonBook}}</a></li>
                <li><a href="#">{{AmazonBook}}</a></li>
            </ul>
        </div>
    </form>
</div>
<script src="/js/app.js"></script>
<script>
    $(document).ready(function(){
        $('#form1, #form2').on('click', 'button', function(event){
            event.preventDefault();
            $(this).closest('div').animate({ left: -800 }, 400).fadeOut(0, function(){
                $(this).next().fadeIn(0).animate({ left: 0 }, 400);
            });
        });
        // Scroll Animation
        $('.btn-main').on('click', function(event){
            event.preventDefault();
            scrollToSpot($(this).attr('href'));
        });
        function scrollToSpot(url){
            var idName,
                offsetOfAnchor;
            idName = url.substr( url.indexOf("#") );
            offsetOfAnchor = $(idName).offset().top;
            $('html, body').animate({scrollTop: offsetOfAnchor});
        }
    });
</script>
</body>
</html>