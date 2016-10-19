 <div class="container">  
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<li <?php if($this->uri->segment(1)=="") echo 'class="active"'?>>
				<a href="http://sultanasproject.x10host.com/sultana/">Home</a></li>
				
				
			</ul>
			
		</div>
    </div>
	
	<div class="hero-unit">
		</div>
		
	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" >Information</a>
			
			<ul class="nav">
				<li <?php if($this->uri->segment(1)=="aboutMe") echo 'class="active"'?>>
				<a href="http://sultanasproject.x10host.com/sultana/aboutMe/">About Me</a></li>
				
				<li <?php if($this->uri->segment(1)=="project") echo 'class="active"'?>>
					<a href="http://sultanasproject.x10host.com/sultana/project/">This project</a></li>
			</ul>
		</div>
		
    </div>
	
	
	<div id="scroll_box">
		<marquee behavior="scroll" align="middle" direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()";">
		*This is a small PHP(CodeIgniter) project. &nbsp &nbsp
		*I used PHP,MySQL,Bootstrap, JQuery, MySQL  &nbsp &nbsp</marquee>	
	</div>
</div>
	
