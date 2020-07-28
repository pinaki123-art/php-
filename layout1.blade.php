<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet"/>
<link href="css/fonts.css" rel="stylesheet"/>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">SimpleWork</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{ Request::path() == '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li class="{{ Request::path() == 'clinets' ? 'current_page_item' : '' }}"><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li class="{{ Request::path() == 'about' ? 'current_page_item' : '' }}"><a href="/about" accesskey="3" title="">About Us</a></li>
				<li class="{{ Request::path() == 'careers' ? 'current_page_item' : '' }}"><a href="#" accesskey="4" title="">Careers</a></li>
				<li class="{{ Request::path() == 'contact' ? 'current_page_item' : '' }}"><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
        </div>
        
        @yield('header')

    </div>
</div>
	
    @yield ('content1')
</body>
</html>