<style>
    nav ul li a:hover {
        background-color: grey;
        color: white !important;
    }
</style>
<nav class="navbar navbar-expand-lg bg-light p-2 mx-auto">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?=ASSETS?>/logo1.png" style="width: 50px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=ROOT?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/classes">classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/users">users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/test">test</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a></li>
            <li><a class="dropdown-item" href="<?=ROOT?>">Dashboard</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>