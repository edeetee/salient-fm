<!doctype html>
<html>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.SRlastfm.min.js"></script>
    <script type="text/javascript" src="js/amplitude.js"></script>
    
    
        
        <head>
            
    <title>Salient Radio</title>
    <link rel="icon"
            type="image/png"
            href="http://salient.org.nz/wp-content/themes/development_salient2014/favicon.ico">
    <style type="text/css">
    
        body{
            background-color: hsl(0, 0%, 20%);
            background-repeat: repeat;
            background-position: top left;
            background-attachment: fixed;
            overflow: hidden;
        }
        
        #container{
            margin-left: inherit;
            margin-right: auto;
            display: flex;
            width: 100%;
		  max-width: 400px;
            margin-top: auto;
        }
        
        embed{
            opacity: 0;
        }
        
        p{
            font-family: 'Montserrat', sans-serif;/*'Helvetica Neue', Helvetica, Arial, sans-serif;*/
            font-weight: normal;
            font-size: 16px;
            color: #ffffff;
            max-width: 400px;
            text-align: center;
        }
        
        a{
            color: white;
            text-decoration: none;
            
        }

        #info{
            position: absolute;
            bottom: 0;
            left: 0;
            text-align: center;
            margin: 20px;
        }
        
        #turntable{
            width:50%;
            max-width:200px;
            height: 200px;
        }
        #outer, #inner{
            width: 50%;
            max-width: 200px;
            margin: auto;
            display: block;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
        }
        #outer{
            
            -webkit-animation-name: spin;
            -webkit-animation-duration: 5000ms;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            -moz-animation-name: spin;
            -moz-animation-duration: 5000ms;
            -moz-animation-iteration-count: infinite;
            -moz-animation-timing-function: linear;
            -ms-animation-name: spin;
            -ms-animation-duration: 5000ms;
            -ms-animation-iteration-count: infinite;
            -ms-animation-timing-function: linear;
            
            animation-name: spin;
            animation-duration: 5000ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        @-ms-keyframes spin {
            from { -ms-transform: rotate(0deg); }
            to { -ms-transform: rotate(360deg); }
        }
        @-moz-keyframes spin {
            from { -moz-transform: rotate(0deg); }
            to { -moz-transform: rotate(360deg); }
        }
        @-webkit-keyframes spin {
            from { -webkit-transform: rotate(0deg); }
            to { -webkit-transform: rotate(360deg); }
        }
        @keyframes spin {
            from {
                transform:rotate(0deg);
            }
            to {
                transform:rotate(360deg);
            }
        }

        #inner{
            


            -webkit-animation-name: reversespin;
            -webkit-animation-duration: 10000ms;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            -moz-animation-name: spin;
            -moz-animation-duration: 10000ms;
            -moz-animation-iteration-count: infinite;
            -moz-animation-timing-function: linear;
            -ms-animation-name: spin;
            -ms-animation-duration: 10000ms;
            -ms-animation-iteration-count: infinite;
            -ms-animation-timing-function: linear;
            
            
            animation-name: reversespin;
            animation-duration: 10000ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        @-ms-keyframes reversespin {
            from { -ms-transform: rotate(360deg); }
            to { -ms-transform: rotate(0deg); }
        }
        @-moz-keyframes reversespinspin {
            from { -moz-transform: rotate(360deg); }
            to { -moz-transform: rotate(0deg); }
        }
        @-webkit-keyframes reversespin {
            from { -webkit-transform: rotate(360deg); }
            to { -webkit-transform: rotate(0deg); }
        }
        @keyframes spin {
            from {
                transform:rotate(360deg);
            }
            to {
                transform:rotate(0deg);
            }
        }
        
       

    </style>
            
</head>

<body>
    <div id="container">
    <div id="turntable">
        <img id="outer" src="http://salient.org.nz/wp-content/uploads/2014/05/salientfm-outer1.png">
        <img id="inner" src="http://salient.org.nz/wp-content/uploads/2014/05/salientfm-inner1.png">
    </div>
        
    
    <p class='info'> 
        SalientFM 88.3 <br /><br/>
        <a
           href="mailto:fm@salient.org.nz?Subject=Hi%20there" target="_top">Get in Touch</a>
        <br/><br/>
        <a
            href="http://mixcloud.com/salientfm" target="_blank">Podcasts</a><br/><br/>
        <a href="http://s2.stationplaylist.com:8190/listen.pls">Alternate Stream</a>
    </p>

</div>
    <div id="lastfm">
        <script type="text/javascript" src="js/adapt.js"></script>

                
    
    <script>
// Edit to suit your needs.
var ADAPT_CONFIG = {
  // Where is your CSS?
  path: 'css/',
  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,    
  callback: myCallback,
  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
    '0px  to 1200px = mobile.css',
    '1280px = jquery.SRlastfm.css',
  ]
};
</script>
        <link href="css/jquery.SRlastfm.css" rel="stylesheet" type="text/css" />
   

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.SRlastfm.min.js" type="text/javascript"></script>

<title>SalientFM</title>
        
<style>
/* imports */
@import url(http://fonts.googleapis.com/css?family=Lobster);

/* resets */
*,
*:before,
*:after {
  box-sizing: border-box;
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

/* global */
bodyone {
  background-color: rgb(241, 229, 245);
  color: rgb(234, 213, 227);
  font-family: 'Montserrat', sans-serif;
  font-size: 14px;
  line-height: 1.3;
}
.wrapper {
  margin: 0 auto;
  padding: 20px;
  max-width: 95%;
  background-color: #fff;
}
h1one {
  font-family: "Times", cursive;
  font-size: 2em;
  margin-bottom: 10px;
}
h2one {
  font-weight: 700;
}

/* layout */
.containerone {
  
}
.primary {
  margin-bottom: 20px;
}


@media all and ( min-width: 600px ) {
  
  .containerone {
    padding-right: 600px;
      padding-left: 80px;
    
  }
  .primary {
    float: left;
    padding-right: 10%;
    width: 100%;
  }
  .secondary {
    float: left;
    margin-right: -300px;
    width: 300px;
  }
  
}
   .lastFMHeader{
   display:none !important;
   }
   .lastFMBody.recenttracks{
    !important;
   }
   
   .lastFM {
    margin: 2em 0em !important;
	}
    .itemRow {
    padding: 0em !important;
    }
    .even {
    background-color: #333333 !important;
    color: white !important;
    }
    .even a {
    color: white !important;
    }
    .even img {
    background-color: #333333 !important;
    }
    .odd {
    background-color: #333333 !important;
    color: white !important;
    }
</style>

    
    <div class="containerone clearfix">
      <div class="secondary">
        <p>Recent Tracks</p>
<script type="text/javascript">

  $(document).ready(function () {

	// Please use your own API key !
	$('#test').lastfm('SalientFM','recenttracks','e3abf8cc377b3f0426b986a1451fec19', {
		noimage: 'noimage.gif'
	});
});
</script>

<div id="test"></div>
      </div>
    </div>
    
    <div class="foot">
        <div id="player">
		  <div id="player-top">
			<div id="amplitude-play-pause" class="amplitude-paused"></div>
              <div id="amplitude-mute"></div>
			<div id="amplitude-volume-meter"><div id="amplitude-volume-status"></div><div id="amplitude-volume-status-tracker"></div></div>
		  </div>
	   </div>
	   <div id="single-song-container">
		<audio id="single-song" preload="none">
			<source src="http://s2.stationplaylist.com:8190/" type="audio/mp3" id="single-song"/>
			Your browser does not support the audio tag.
		</audio>
	   </div>
	<script type="text/javascript">
		amplitude_config = {
			'amplitude_live': true,
			'amplitude_live_source': 'http://s2.stationplaylist.com:8190/;',
            'track-info-container': 'Livestream',
            'autoplay': true,
		}
        
       
	   </script>
    </div>
    </div>
    
    <!-- start sw-rss-feed code --> 

    <script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="http://salient.org.nz/feed";  
rssfeed_frame_width="400"; 
rssfeed_frame_height="600"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="on"; 
rssfeed_target="_blank"; 
rssfeed_font_size="16"; 
rssfeed_font_face="Consolas, sans-serif"; 
rssfeed_border="off"; 
rssfeed_css_url=""; 
rssfeed_title="off"; 
rssfeed_title_name="Salient News"; 
rssfeed_title_bgcolor="#333333"; 
rssfeed_title_color="#ffffff"; 
rssfeed_title_bgimage="http://"; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#ffffff"; 
rssfeed_footer_color="#ffffff"; 
rssfeed_footer_bgimage="http://"; 
rssfeed_item_title_length="30"; 
rssfeed_item_title_color="#ffffff"; 
rssfeed_item_bgcolor="#333333"; 
rssfeed_item_bgimage="http://"; 
rssfeed_item_border_bottom="off"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="200"; 
rssfeed_item_description_color="#ffffff"; 
rssfeed_item_description_link_color="#ffffff"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "23f7497c590f9c8d0b3f77508b8ddd9b"; 
//--> 
</script> 
        <div id="rss">
<script type="text/javascript" src="/js/rss-feed.js"></script>  
<!-- end sw-rss-feed code -->
        
        </div>
    
    </body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50557965-1', 'salient.org.nz');
  ga('send', 'pageview');
    
    </script>
    
    

