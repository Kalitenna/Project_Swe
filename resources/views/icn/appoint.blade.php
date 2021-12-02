
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

         <!-- <form action="{{ route('Appointment.store') }}" method="POST" role="form" class="php-email-form">
        @csrf
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control"  id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
         
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="What is your problem?"></textarea>
            <div class="validate"></div>
          </div>
          
          {{session('status')}}
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>  -->

        <div class="card-body">
  
                      <form action="{{ route('Appointment.store') }}" enctype="multipart/form-data"  method="POST">
                          @csrf
                        <div class="row">
                          <div class="col-md-3 form-group">    
                             <input type="text" name="name" placeholder="Your Name" class="form-control" >
                          </div>
                          <div class="col-md-3 form-group"> 
                             <input type="text" name="email" placeholder="Your Email" class="form-control" >
                          </div>
                           <div class="col-md-3 form-group"> 
                             <input type="text" name="phone" placeholder="Your Number" class="form-control" >
                          </div>
                          <div class="col-md-3 form-group">
                              <div class="input-group mb-3">
                                  <input type="text" name="gender" placeholder="Male or Female " class="form-control" > 
                              </div>
                          </div>
                        </div>
                          <div class="form-group mb-3">
                          <input id="x" type="hidden" name="message">
  <trix-editor input="x"></trix-editor>
                          </div>
                          
                            <div class="text-center">
                              <button class="btn btn-primary" type="submit">Make an Appointment</button>
                            </div>
                            
                         

                         

                      </form> 
                 </div>

      </div>
    </section>