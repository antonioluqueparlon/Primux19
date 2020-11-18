<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light" style="border-style: solid;">
            <a class="navbar-brand" href="">
                <img src="https://pbs.twimg.com/media/D2lrXfOX0AElvFG.jpg" width="65" height="50" class="d-inline-block align-top" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">Item 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Item 2</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                      Item 3
                    </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">Item 3.1</a>
                            <a class="dropdown-item" href="">Item 3.2</a>
                            <a class="dropdown-item" href="">Item 3.3</a>
                        </div>
                    </li>
                </ul>
            </div>
            <form class="form-inline justify-content-lg-end collapse navbar-collapse" id="navbarNavDropdown">
                <input class="form-control mr-sm-2" type="search" placeholder="Escribe algo">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </nav>
    </div>
<!--
<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
	  </li>
	</ul>
</div>
-->