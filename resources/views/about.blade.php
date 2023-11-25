@extends('Layout.app')
@section('content')
<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <!-- Replace with your image URL -->
                <img src="{{ asset('img/about-us.jpeg') }}" alt="About Image" class="img-fluid rounded about-image">
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="about-content">
                    <h2 class="section-title">About Me</h2>
                    <p class="lead">I'm a passionate web developer dedicated to creating stunning and user-friendly websites. With a strong foundation in HTML, CSS, and JavaScript, I bring creative designs to life while ensuring functionality and performance.</p>
                    <p>My goal is to craft unique digital experiences that leave a lasting impression. I thrive on learning and implementing new technologies to stay ahead in this ever-evolving field.</p>
                    <div class="skills">
                        <h3 class="skills-title">Skills</h3>
                        <ul class="list-unstyled">
                            <li>HTML5 &amp; CSS3</li>
                            <li>JavaScript &amp; ES6</li>
                            <li>Responsive Design</li>
                            <li>UI/UX Design</li>
                            <li>PHP &amp; MySQL</li>
                            <li>Frameworks (e.g., Bootstrap)</li>
                            <li>Version Control (e.g., Git)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection