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
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link rel="icon" href="images/favicon.png" type="image/png">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
        document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
        h3{

        }
        a{
            cursor: pointer;
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
            margin: 4em auto;
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
        ul,li{
            list-style: none;
            margin: 0;
            padding: 0;
        }
        #form3 ul{
            margin: 0 1em;
            padding: 0;
        }
        #form3 li{
            list-style: disc;
        }
        li{
            margin-bottom: 1em;
        }
        #social{
            margin: 1.8em 0 2.2em 0;
        }
        #form1 button{
            margin: 0;
        }
        #form2 button{
            font-size: 130%;
            margin-bottom: .2em;
            width: 40%;
        }
        #bottom h2{
            color: #2a77c5;
            margin: 0;
        }
        #bottom h3{
            color: #918762;
            font-size: 140%;
            font-weight: normal;
            margin: 0;
        }
        #form2 h2{
            margin-bottom: .5em;
        }
    </style>
</head>
<body>
<div>
    <header>
        <div class="container">
            <div class="row">
                <div class="span5"><img src="images/8semesters-logo.png" alt="8semesters logo" width="332" height="37"></div>
                <div class="span2 offset5"><a id="how" class="how" data-toggle="popover" data-content="Netflix can recomend movies based on its data, why not use data for a worthier cause &mdash; choosing a college major." data-placement="left">How it works</a></div>
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
            <ul id="social">
                <li><h4>Use info from your digital life to improve the recommendation.</h4></li>
                <li><a href="#"><img src="images/fb.png" width="194" height="25"></a></li>
                <li><a href="#"><img src="images/twitter.gif" width="146" height="23"></a></li>
                <li><a href="#"><img src="images/spotify.png" width="176" height="41"></a></li>
                <li><a href="#"><img src="images/netflix.png" width="150" height="31"></a></li>
            </ul>
            <button class="btn btn-large btn-block">Pick your major!</button>
        </div>
        <div id="form2">
            <h3>We recommend you consider these 3 majors.</h3>
            <h2>Which one do you think best fits you?</h2>
            <ul id="recommended_majors">
            </ul>
        </div>
        <div id="form3">
            <h2>Good luck in school!</h2>
            <h3>Schools with <span class="major_text"></span> degrees you should consider.</h3>
            <ul id="recommended_colleges">
            </ul>
            <h3>Read up on <span class="major_text"></span> before you go.</h3>
            <ul id="recommended_books">
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

        $('#how').popover();
    });

    function getBooks(response) {
        for (var i = 0; i < response.items.length; i++) {
            var item = response.items[i];
            // in production code, item.text should have the HTML entities escaped.
            $('#recommended_books').append('<li><a href="#">' + item.volumeInfo.title + '</a></li>');
        }
    }
</script>
<script src="https://www.googleapis.com/books/v1/volumes?q=<?php $data = array('biology', 'chemistry', 'programming', 'landscape'); echo $data[array_rand($data)]; ?>&callback=getBooks"></script>
</body>
</html>