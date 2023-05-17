@extends('layouts.app')
@section('content')
<head>
    <title>Laravel Contact US Form Example - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<style>
    .bg-imagee {
  background-image: url('/img/spring.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  
}
</style>
<body>     
    <div class="container px-2 my-4 mb-5">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-sm-6 d-none d-sm-block bg-imagee"></div>
                <div class="col-sm-6 p-4">
                  <div class="text-center">
                    <div class="h2 fw-bold">Contact Us</div>
                    <p class=" mb-0 text-muted">We'd love to hear from you! </p>
                    <p class=" mb-4 text-muted "> Please fill out the form below to get in touch with us. </p>
                  </div>

                <div class="card-body">
                  @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                  @endif
                        
                  <form method="POST" action="{{ route('contact.us.store') }}" >
                  {{ csrf_field() }}

                  <!-- Name Input -->
                  <div class="form-floating mb-3">
                      <input class="form-control" name="name" type="text" placeholder="Name" value="{{ old('name') }}"/>
                      <label for="name">Full Name</label>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                      
                  </div>

                  <!-- Email -->
                  <div class="form-floating mb-3">
                      <input class="form-control" name="email" type="text" placeholder="Email" value="{{ old('email') }}"/>
                      <label for="email">Email Address</label>
                      @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                      @endif
                  </div>


                  <!-- Phone -->

                  <div class="form-floating mb-3">
                      <input class="form-control" name="phone" type="text" placeholder="Phone" value="{{ old('phone') }}"/>
                      <label for="phone">Phone</label>
                      @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                      @endif
                  </div>



                  <!-- Subject -->

                  <div class="form-floating mb-3">
                      <input class="form-control" name="subject" type="text" placeholder="Subject" value="{{ old('subject') }}"/>
                      <label for="subject">Subject</label>
                      @if ($errors->has('subject'))
                          <span class="text-danger">{{ $errors->first('subject') }}</span>
                      @endif

                  </div>

                  <!-- Message Input -->

                  <div class="form-floating mb-3">
                      <textarea class="form-control" name="message" type="text" placeholder="Message" style="height: 10rem;"> {{ old('message') }}</textarea>
                      <label for="message">Message</label>
                      @if ($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                      @endif
                    </div>


                    <!-- Submit success message -->
                    <div class="d-none" id="submitSuccessMessage">
                      <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        <p>To activate this form, sign up at</p>
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                      </div>
                    </div>

                    <!-- Submit error message -->
                    <div class="d-none" id="submitErrorMessage">
                      <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>

                    <!-- Submit button -->
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg rounded-pill" id="submitButton" type="submit">Submit</button>
                    </div>
                </form>
                </div>
                  <!-- End of contact form -->

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CDN Link to SB Forms Scripts -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

  </body>
 
</html>





@endsection
