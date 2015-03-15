<body>
<div id="head"><div class="pad1"></div>Header</div>
<div id="content">
<a name="Top"></a>
<div class="pad2"></div>
<h2>Back to Basics II</h2>
<h3>The bare essentials of the <a href="http://www.cssplay.co.uk/layouts/body2.html" title="Fixed layout version 2">Fixed Layout version 2</a></h3>
<p class="bold">This is the alternative method of having a scrolling content area with fixed header and footer.</p>
<p>March 29th 2005 - Now with anchors - see bottom of page content.</p>
<p>This one has a full height scroll bar, works the same in all browsers and does not require IE to be in quirks mode.</p>
<p class="bold">CSS - the html tag:</p>
<p class="red">
html {<br />
height:100%; /* fix height to 100% for IE */<br />
max-height:100%; /* fix height for other browsers */<br />
padding:0; /*remove padding */<br />
margin:0; /* remove margins */<br />
border:0; /* remove borders */<br />
<a name="Middle"></a>
background:#fff; /*color background - only works in IE */<br />
font-size:80%; /*set default font size */<br />
font-family:"trebuchet ms", tahoma, verdana, arial, sans-serif; /* set default font */<br />
/* hide overflow:hidden from IE5/Mac */<br /> 
/* \*/<br />
overflow:hidden; /*get rid of scroll bars in IE */<br />
/* */<br /> 
}<br />
</p>
<p class="bold">CSS - the body tag:</p>
<p class="red">
body {<br />
height:100%; /* fix height to 100% for IE */<br />
max-height:100%; /* fix height for other browsers */<br />
overflow:hidden; /*get rid of scroll bars in IE */<br />
padding:0; /*remove padding */<br />
margin:0; /* remove margins */<br />
border:0; /* remove borders */<br />
}<br />
</p>
<p>This now gives a html / body size of 100% x 100% with no scroll bars on which we can place a header and footer using position absolute in the normal way. The header and footer will stay fixed because the body cannot scroll.</p>
<p>OK. now to tackle the content which must appear below the header, above the footer and scroll on overflow. <span class="bold">In this example ALL browsers work the same way</span>.</p>
<p>The #content div is set up as follows:</p>
<p class="red">
#content {
<br />
display:block; /* set up as a block */<br />
height:100%; /* set height to full page */<br />
max-height:100%;<br />
overflow:auto; /* add scroll bars as required */<br />
padding-left:200px; /* pad left to avoid navigation div if required */<br />
position:relative; /* set up relative positioning so that z-index will work */<br />
z-index:3; /* allocate a suitable z-index */<br />
}<br />
</p>
<p>This now gives you a full height content div. BUT we need to avoid the header and footer when first viewed. So we add top and bottom 'padding'.<br />If we literally added padding-top and padding-bottom then the vertical scroll bar will move down the screen so instead we add a padding div at the top and bottom of our content.</p>
<p class="red">
.pad2 {<br />
display:block;<br />
height:100px; /* height to miss header and footer */<br />
}<br />
</p>
<p>You can now add the header and footer using position:absolute; with a suitable z-index such that it appears over the content div. When the content is scrolled it will disappear under the header / footer.</p>
<p>BUT note that the header and footer will need to be positioned right:18px; to avoid covering the scroll bar. This will make the header and footer overhang the left of the screen by 18px so you may need a 'pad' of 18px to bring header and footer back on screen.</p>
<p>&copy; 2004/5/6 Stuart Nicholls</p>

<div class="pad2"></div>
</div>
<div id="foot">Footer</div>
</body>