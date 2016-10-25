<?php

//$bg_color = '#1bae5d';
$bg_color = "#67A1C6";
//$bg_color = "#67A1C6";
?>
<style>
/* CSS Document */

/*==========================================*/
/*           Color Schemes
/*==========================================*/
/*==========================================*/
/*       01 - Global Elements
/*==========================================*/


html,
body {
  color: #777;
}
html h1,
body h1,
html h2,
body h2,
html h3,
body h3,
html h4,
body h4,
html h5,
body h5 {
  color: #333333;
}
a {
  color: <?= $bg_color?>;
}
a:hover {
  color: <?= $bg_color?>;
}

.banner .overlay {
  position: absolute;
  z-index: 1;
  height: 100%;
  width: 100%;
  /*
  background: <?= $bg_color?>;
  opacity: 0.8;
  -webkit-opacity: 0.8;
  -moz-opacity: 0.8;*/
}

/*==========================================*/
/*       02 - Navbar Elements
/*==========================================*/
.navbar-inverse.scroll-fixed-navbar .navbar-nav li:hover a {
  color: #888888;
}
.navbar-inverse.scroll-fixed-navbar .navbar-nav li.active a {
  color: #888888;
  font-weight:bold;
}
.navbar-inverse.scroll-fixed-navbar .navbar-nav li.active a:hover {
  color: #888888;
}
/*==========================================*/
/*       03 - Banner Elements
/*==========================================*/
.banner .banner-content .buttons .def-btn:hover {
  color: #888888;
}
/*==========================================*/
/*           04 - Intro Elements
/*==========================================*/
.intro {
  background: <?= $bg_color ?>;
}
.intro .link .def-btn:hover {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*         05 - About Elements
/*==========================================*/
.about .content .icon i {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*        06 - Testimonial Elements
/*==========================================*/
.testimonial .carousel .carousel-control .control-circle:hover {
  border: 1px solid <?= $bg_color ?>;
}
.testimonial .carousel .carousel-control .control-circle:hover .fa {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*        07 - Team Elements
/*==========================================*/
.team {
  padding: 80px 0px;
}
.team .content .team-info .photo .overlay {
  background: rgba(147, 190, 76, 0.8);
}
.team .content .team-info .photo .overlay .link .circle:hover {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*        08 - counter Elements
/*==========================================*/
/*==========================================*/
/*        09 - portfolio Elements
/*==========================================*/
.portfolio .portfoliofilter a .filterbutton {
  color: #cd9448;
}
.portfolio .portfoliofilter a.current .filterbutton {
  background: #dea65c;
  border: 1px solid #dea65c;
}
.portfolio .portfoliofilter a:hover .filterbutton {
  border: 1px solid #dea65c;
}
.portfolio .portfoliocontent .content .overlay:hover {
  background: rgba(147, 190, 76, 0.8);
}
/*==========================================*/
/*        10 - Why Us Elements
/*==========================================*/
.why-us .skills .skillbars .bar-container .meter {
  background: <?= $bg_color ?>;
}
/*==========================================*/
/*        11 - Pricing Elements
/*==========================================*/
.pricing .pricing-table .price {
  background: <?= $bg_color ?>;
}
.pricing .pricing-table .list .def-btn {
  border: 1px solid <?= $bg_color ?>;
  border-color: <?= $bg_color ?>;
  color: <?= $bg_color ?>;
}
.pricing .pricing-table .list .def-btn:hover {
  background: <?= $bg_color ?>;
}
/*==========================================*/
/*        12 - Offer Elements
/*==========================================*/
/*==========================================*/
/*        13 - Twitter Feed Elements
/*==========================================*/
.twitter-feed .logo i {
  color: <?= $bg_color ?>;
}
.twitter-feed .time a {
  color: #888888;
}
/*==========================================*/
/*        14 - News Elements
/*==========================================*/
.news .news-content .media .quote {
  background: <?= $bg_color ?>;
}
.news .news-content .detail .title h3 {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*        15 - Clients Elements
/*==========================================*/
/*==========================================*/
/*        16 - Map Elements
/*==========================================*/
.map .map-title {
  background: <?= $bg_color ?>;
}
/*==========================================*/
/*        17 - contact Elements
/*==========================================*/
.contact .footer-form .input-container .form-control:focus {
  border: 1px solid <?= $bg_color ?>;
}
.contact .footer-form .textarea-container textarea:focus {
  border: 1px solid <?= $bg_color ?>;
}
.contact .footer-form .button-container .def-btn {
	background: <?= $bg_color ?>;
  color:#fff;
  font-weight:bold;
  opacity:0.7;
  
}
.contact .footer-form .button-container .def-btn:hover {
  border: 1px solid <?= $bg_color ?>;
  color: <?= $bg_color?>;
  background: url(images/bg-noise.png) #fff;
 
}
/*==========================================*/
/*       18 - Footer Elements
/*==========================================*/
.footer {
  background-color: #829db0;
}
.footer .right .social-icons .circle:hover .fa {
  color: #fff;
}
/*==========================================*/
/*       19 - Responsive Settings
/*==========================================*/
@media (max-width: 768px) {
  .navbar-inverse .navbar-toggle {
    border: 1px solid <?= $bg_color ?>;
    margin: 23px 10px;
  }
  .navbar-inverse .navbar-toggle span.icon-bar {
    background: <?= $bg_color ?>;
  }
  .navbar-inverse .navbar-toggle:focus,
  .navbar-inverse .navbar-toggle:hover {
    background: <?= $bg_color ?>;
  }
  .navbar-inverse .navbar-collapse ul.navbar-nav li.active {
    color: <?= $bg_color ?>;
  }
  .navbar-inverse .navbar-collapse ul.navbar-nav li a {
    color: #888888;
  }
  .navbar-inverse .navbar-collapse ul.navbar-nav li a:hover {
    background: <?= $bg_color ?>;
  }
}


/* Skill bar */

.progress {
  width: 100%;
  height: 30px;
}

.progress-wrap1, .progress-wrap2, .progress-wrap3, .progress-wrap4, .progress-wrap5, .progress-wrap6 {
  background: <?= $bg_color?>;
  color:#fff;
  text-align: left !important;
  font-weight: bold;
  padding-top: 5px;
  padding-left:10px;
  overflow: hidden;
  position: relative;
  font-size:14px;
}


.progress-wrap1 .progress-bar1,  .progress-wrap2 .progress-bar2, .progress-wrap3 .progress-bar3, .progress-wrap4 .progress-bar4, .progress-wrap5 .progress-bar5, .progress-wrap6 .progress-bar6{
  background: #F5F5F5;
  left: 0;
  position: absolute;
  top: 0;
  
}

.skill_title{
	
	margin-bottom:5px;
	font-weight: 500;
}

/* timeline */

@media only screen and (min-width: 1170px) {
  .cd-timeline-img {
    width: 60px;
    height: 60px;
    left: 50%;
    margin-left: -30px;
    /* Force Hardware Acceleration in WebKit */
    -webkit-transform: translateZ(0);
    -webkit-backface-visibility: hidden;
	background:<?= $bg_color?>
  }
  .cssanimations .cd-timeline-img.is-hidden {
    visibility: hidden;
  }
  .cssanimations .cd-timeline-img.bounce-in {
    visibility: visible;
    -webkit-animation: cd-bounce-1 0.6s;
    -moz-animation: cd-bounce-1 0.6s;
    animation: cd-bounce-1 0.6s;
  }
}

.testimonial .overlay {
  width: 100%;
  height: 100%;
  background-color: <?= $bg_color ?>;
  position: absolute;
  opacity: 0.7;
  -webkit-opacity: 0.7;
  -moz-opacity: 0.7;
}

.gridline{
	width:100%;
	border-bottom:4px solid #ddd;
	background: url(images/bg-noise.png) #E9F0F5;
}
.form-control{
	height:50px;
	margin-bottom:20px;
}




	
			/* Icon */
			ul.icons {
		cursor: default;
		margin-left:-40px;
	}

		ul.icons li {
			display: inline-block;
			line-height: 1em;
			padding-left: 0.7em;
		}

			ul.icons li:first-child {
				padding-left: 0;
			}

	.icon {
		position: relative;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			
			font-style: normal;
			font-weight: normal;
		}

		.icon.circle {
			-moz-transition: all 0.2s ease-in-out;
			-webkit-transition: all 0.2s ease-in-out;
			-o-transition: all 0.2s ease-in-out;
			-ms-transition: all 0.2s ease-in-out;
			transition: all 0.2s ease-in-out;
			border: 0;
			border-radius: 100%;
			display: inline-block;
			font-size: 1.25em;
			height: 3em;
			left: 0;
			line-height: 2.25em;
			text-align: center;
			text-decoration: none;
			top: 0;
			width: 3em;
		}

			.icon.circle:hover {
				top: -0.2em;
			}

			.icon.circle.fa-twitter {
				background: <?= $bg_color?>;
				color: white;
			}

				.icon.circle.fa-twitter:hover {
					background: #7fb7d2;
				}

			.icon.circle.fa-facebook {
				background: url(<?= base_url() ?>assets/images/facebook-icon.png) no-repeat center #fff;
				zoom: 1;
				filter: alpha(opacity=75);
				opacity: 0.7;
				
			}

				.icon.circle.fa-facebook:hover {
					background: url(<?= base_url() ?>assets/images/facebook-icon.png) no-repeat center #
					;
					zoom: 1;
					filter: alpha(opacity=100);
					opacity: 1;
				}

			.icon.circle.fa-google-plus {
				background: url(<?= base_url() ?>assets/images/google.png) no-repeat center #fff;
				zoom: 1;
				filter: alpha(opacity=75);
				opacity: 0.7;
			}

				.icon.circle.fa-google-plus:hover {
					background: url(<?= base_url() ?>assets/images/google.png) no-repeat center #fff;
					zoom: 1;
					filter: alpha(opacity=100);
					opacity: 1;
				}

			.icon.circle.fa-github {
				background: url(<?= base_url() ?>assets/images/linkedin.png) no-repeat center #fff;
				zoom: 1;
				filter: alpha(opacity=75);
				opacity: 0.7;
				
			}

				.icon.circle.fa-github:hover {
					background: url(<?= base_url() ?>assets/images/linkedin.png) no-repeat center #fff;
					zoom: 1;
					filter: alpha(opacity=100);
					opacity: 1;
				}

			.icon.circle.fa-dribbble {
				background: <?= $bg_color?>;
				color: white;
			}

				.icon.circle.fa-dribbble:hover {
					zoom: 1;
					filter: alpha(opacity=75);
					opacity: 0.7;
				}

		.icon.feature {
			cursor: default;
			display: block;
			margin: 0 0 1.5em 0;
			opacity: 0.35;
			text-align: center;
		}

			.icon.feature:before {
				font-size: 5em;
				line-height: 1em;
			}

		.icon > .label {
			display: none;
		}

.update{
	background:<?= $bg_color?>;
	color:#fff;
	padding-bottom:20px;
}

.update .title {
  padding: 40px 0px;
  text-align: center;
}
.update .title h1 {
  color: #ffffff;
  margin: 0px;
}
.update .footer-form .input-container .form-control:focus {
  border: 1px solid <?= $bg_color ?>;
}
.update .footer-form .textarea-container textarea:focus {
  border: 1px solid <?= $bg_color ?>;
}
.update .footer-form .button-container .def-btn {
  border: 1px solid #fff;
  color: #fff;
  background: <?= $bg_color?>;
  width:100%;
  font-weight:bold;
}
.update .footer-form .button-container .def-btn:hover {
  background: #fff;
  color: <?= $bg_color?>
}

/*  new portofolio */

figure.effect-zoe figcaption {
	top: auto;
	bottom: 0;
	padding: 1em;
	height: 3.75em;
	border-top:1px solid #666;
	background:<?= $bg_color?>;
	color: #fff;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
	-webkit-transform: translate3d(0,100%,0);
	transform: translate3d(0,100%,0);
}

.about_button{
	background-color:#fff;
	text-shadow:none;
	color:#d84444;
}
.about_button:hover{
	background:#d84444;
	color: #fff;
}

</style>