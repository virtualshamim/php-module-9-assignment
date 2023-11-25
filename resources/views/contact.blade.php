@extends('Layout.app')
@section('content')
<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Contact Me</h2>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>
</section>

@endsection
