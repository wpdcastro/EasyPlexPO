<style type="text/css">
.navbar-default {
    background-color: #F8F8F8;
    border-color: #E7E7E7;
}

</style>

<?php
class template
{
	public $title;
	public $content;
	public $projectName;
	public $table;

	public function SetTitle($t)
	{
		$this->title = $t;
	}

	public function GetTitle()
	{
		return $this->title;
	}

	public function SetContent($c)
	{
		$this->content = $c;
	}

	public function GetContent()
	{
		return $this->content;
	}

	public function SetProjectName($p)
	{
		$this->projectName = $p;
	}

    public function GetProjectName()
    {
		return $this->projectName;
	}

	public function ShowTemplate()
	{
	  	echo '
			<!DOCTYPE html>
			<html lang="pt">
				<head>
			    	<meta charset="utf-8">
				    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			    	<meta name="viewport" content="width=device-width, initial-scale=1">
			 	   	<title>'    .$this->GetTitle().    '</title>
			    	<link href="view/bootstrap/css/bootstrap.css" rel="stylesheet">
			    	<link href="view/bootstrap/css/app.css" rel="stylesheet">
				</head>

			  	<body>
			  		<!--navbar-->
						<nav class="navbar navbar-inverse navbar-fixed-top">
				    		<div class="container">
			        			<div class="navbar-header">
			          				<button type="button" style="color:#337ab7;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            				<span class="sr-only">Toggle navigation</span>
			           		 			<span class="icon-bar"></span>
			            				<span class="icon-bar">Trem</span>
			            				<span class="icon-bar"></span>
			          				</button>
			          				<a class="navbar-brand" href="#">'       .$this->GetProjectName().     '</a>
			        			</div>

			        			<div id="navbar" class="collapse navbar-collapse">
			          				<ul class="nav navbar-nav">
			            				<li class="active"><a href="index.php">Simplex</a></li>
			            				<li class="active"><a href="mochila.html">Mochila</a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			            				<li><a href="">  </a></li>
			                          	<li><a href="">  </a></li>
				                          <li><a href="">  </a></li>
			            				<li class="active"><a href="time.php">Time de Desenvolvimento</a></li>		
			            			</ul>
			    	    		</div>
			    	  		</div>
				    	</nav> 
				    	<br>
					    <br>
					    <br>
				    	<br>
					    <br>
					<!--navbar-->
					
					<div class="container theme-showcase">
			    		<div class="row">
			    			<div class="center">
			   					'.$this->GetContent().'
			  				</div>
			    		</div><!--row-->
					</div><!--container theme-showcase-->

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script src="js/bootstrap.min.js"></script>
				</body>
			</html>
	  	';
	}
}
?>