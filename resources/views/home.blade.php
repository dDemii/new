@extends('layouts.app')

@section('content')
<header class="container-fluid">
  <div class="row row-cols-1 row-cols-lg-2 vh-100">
    <div class="image-holder">
    </div>
      <div class="text-holder p-5">
          <div class="text-center text-container">
            <h1 class="heading-text">Food<span class="text-amber">Hub</span></h1>
              <p class="subtitle">Satisfy your Cravings in a Click!</p>
        </div>
      </div>
  </div>
</header>

<section class="container-fluid section1">
    <div class="row row-cols-1 row-cols-lg-2 vh-100">
        <div class="text-holder p-5">
            <div class="dropdown d-flex justify-content-end"></div>
            <div class="text-center text-container2">
                <h1 class="who">WHO<br>WE ARE</h1>
                <p class="subtitle2">FoodHub is a web app that offers features like food menu, restaurant listings, recipe search, user reviews, weekly meal planner, and nutritional info. Its goal is to provide wholesome food options for those away from home, encourage cooking, and support local businesses in Naga City. FoodHub believes in making access to nutritious and delicious meals a reality for everyone.</p>
            </div>
        </div>
        <div class="image-holder2"></div>
    </div>
</section>

<x-menu-list></x-menu-list>

<div class="container">
    <div class="row">
        <h2 class="about-us">About Us</h2>
        <div class="col-md-4 text-center">
            <img src="img/adrey.jpg" alt="Owner 1" class="rounded-circle">
            <h3 class="dev">Adrey John Rafallo</h3>
            <p class="dev">Co-founder and CEO</p>
        </div>

        <div class="col-md-4 text-center">
            <img src="img/dimmie.jpg" alt="Owner 2" class="rounded-circle">
            <h3 class="dev">Dimmie Luces</h3>
            <p class="dev">Co-founder and CEO</p>
        </div>

        <div class="col-md-4 text-center">
            <img src="img/ryli.jpg" alt="Owner 3" class="rounded-circle">
            <h3 class="dev">Ryann Philippe Balunso</h3>
            <p class="dev">Co-founder and CEO</p>
        </div>
    </div>
</div>
@endsection
