<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Web CI</title>
	
	<style>
.about-container img{
height:250px;	
}
.about-text{
	width:500px;
} 
.about-text p:nth-child(1){
	color:#403e3e;
	font-family: myriad pro;
	font-weight:bold;
	font-size:23px;
	line-height:0px;
}
.about-text p:nth-child(2){
	color:#3e3d3d;
	font-size:13px;
	font-family: myriad pro;
	font-weight:bold;
	line-height:5px;
}
.about-text p:nth-child(3),.about-text p:nth-child(4){
	color:#7e7d7d;
	font-family:calibri;
	font-size:16px;
}
.about-text button{
	width:120px;
	height: 40px;
}
	</style>
  </head>
  <body>

  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo2.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      Akbar Siddiq
    </a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
		<section class="bg-dark text-light p-5">
            <div class="container-fluid ">
                <div class="d-flex">
                    <div>
                        <h2>Hello Everyone</h2>
                        <p>My name is <span class="text-warning">Muhammad Rizky Akbar Siddiq</span> Nice to known you all</p>
                    </div>
                </div>	
                </div>
            </div>
        </section>

		<p></p>

		<div class="container-fluid bg-light" id="profile">
			<div class="about-container">
           	 <div class="about-text text-sm-start">
            	<p>About Me</p>
           		<p>Student & Human</p>
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vulputate, enim sit amet tristique porta, velit turpis luctus diam, a tincidunt massa turpis nec justo. Nulla iaculis massa vel orci egestas hendrerit. Vivamus consectetur lectus luctus sapien pretium, eu ornare eros blandit. Sed malesuada dignissim condimentum.</p>
           		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vulputate, enim sit amet tristique porta, velit turpis luctus diam, a tincidunt massa turpis nec justo.</p>
            </div>
		</div>

	<section class="p-5" id="contact">
      <div class="container-fluid bg-light">
        <div class="row g-4">
          <div class="col-md">
            <h2 class="text-center mb-4">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
              <li class="list-group-item">
                <span class="fw-bold">Address:</span> Tajur, Kota Bogor, Jawa barat, Indonesia.
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Phone:</span> 0857778278831
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Email:</span> akbarsiddiq402@gmail.com
              </li>
              <li class="list-group-item">
                <span class="fw-bold">School:</span> SMKN 4 BOGOR
              </li>
            </ul>
          </div>
    </section>
</div>
    
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">akbarsiddiq</a></li>
    </ul>
  </footer>
</div>





















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>