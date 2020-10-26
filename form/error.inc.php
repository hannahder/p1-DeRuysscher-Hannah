<style type="text/css">
* {
  margin: 0;
  border: 0;
  padding: 0;
}

body {
  background-image: url("../images/forest.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  font-family: 'Montserrat', sans-serif;
}

nav ul li {
  display: inline;
}

header nav {
  padding: 40px;
}

header {
  background-color: white;
  box-shadow: 1px 5px 25px 3px #d1d1d1;
}

li {
  font-family: 'Montserrat', sans-serif;
  font-size: 24px;
  padding-right: 30px;
}

li:hover {
  font-weight: 700;
  transition-duration: .2s;
}

nav a {
  text-decoration: none;
}

</style>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
    </ul>
  </nav>
</header>
<div class="container">
<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
