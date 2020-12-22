<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="http://fcih.helwan.edu.eg/">FCAI-HELWAN UNIVERSITY</a>
		</div>
		
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Lobby</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>
            <?php 
            include('DES.php');
            //decryption for user name 
            $nameOfUser = decrypt($user,$secret);
            
            echo $nameOfUser;
            ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Update Photo</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
			</li>
		</ul> 
    </div>
</nav>