<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">

                <form method="POST" action="{{ route('portfolio.contactSubmit') }}">
                    @csrf
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control @error('fullname') is-invalid @enderror " id="name" type="text" placeholder="Enter your name..." name="fullname" value="{{ old('fullname') }}" />
                        <label for="name">Full name</label>
                        @error('fullname')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control @error('email') is-invalid @enderror " id="email" type="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" />
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control @error('phone') is-invalid @enderror " id="phone" type="tel" placeholder="(123) 456-7890" name="phone" value="{{ old('phone') }}" />
                        <label for="phone">Phone number</label>
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('message') is-invalid @enderror " id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" name="message">{{ old('message') }}</textarea>
                        <label for="message">Message</label>
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>
