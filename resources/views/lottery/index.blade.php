@extends('layouts.default')

@section('content')
    <!-- CONTACT US -->
    <section id="teste" class="section text-center">
        <div class="container">
            <h2 class="section-title">{{ trans('text.lottery.page_title') }}</h2>
            <div class="row">

                <!-- CONTACT FORM -->
                <div class="col-md-7 col-md-offset-1 text-left wow fadeInLeft" data-wow-duration="1s">

                	<div class="row">
                		<div class="col-md-12">
		                    <form action="#" method="post" class="contact-form  wow fadeInLeft">

			                	<div class="row">
			                		<div class="col-sm-4">
				                        <div class="form-group">
				                        	<label for="tickets">Tickets</label>
				                            <input type="text" id="tickets" name="tickets" required class="form-control">
				                        </div>
			                		</div>

			                		<div class="col-sm-4">
				                        <div class="form-group">
				                        	<label for="numbers">Numbers</label>
				                            <input type="text" id="numbers" name="numbers" required class="form-control">
				                        </div>
			                		</div>

			                		<div class="col-sm-4">
				                        <div class="form-group">
				                        	<label for="maximum">Maximum</label>
				                            <input type="text" id="maximum" name="maximum" required class="form-control">
				                        </div>
			                		</div>

			                	</div>

		                        <button type="button" id="btnConfirm" class="pull-left btn btn-primary">Confirm</button>
		                    </form>
                		</div>
                	</div>

                	<div class="row">
                		<div id="results" class="col-md-12">
	                		Results
	                		<ul>
	                			<li>No data</li>
	                		</ul>
                		</div>
                	</div>

                </div>
                <!-- END CONTACT FORM -->

                <!-- CONTACT INFO -->
                <div class="col-md-3">
                    <div class="contact-info text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <h3>Other Services</h3>
                        <p><span><i class="fa fa-unlock"></i></span> <a href="#">Hash/Password</a></p>
                        <p><span><i class="fa fa-users"></i></span> <a href="{{ url('names') }}">Names</a></p>
                    </div>
{{--                     <div class="business-hours text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">
                        <h3>Business Hours</h3>
                        <p>Monday - Friday: 9 am to 20 pm</p>
                        <p>Saturday: 9 am to 17 pm</p>
                        <p>Sunday: day off</p>
                    </div>
 --}}
                 </div>
                <!-- END CONTACT INFO -->

            </div>
        </div>
    </section>
    <!-- END CONTACT US -->


@endsection

@section('javascripts')
 @parent


<script type="text/javascript">
	

// ?tickets=5&numbers=15&maximum=25

$('#btnConfirm').click(function() {
   $.ajax({
      url: 'http://localhost/randomisy/public/api/lotteries/generator',
      data: {
         tickets: $('input[name="tickets"]').val(),
         numbers: $('input[name="numbers"]').val(),
         maximum: $('input[name="maximum"]').val()
      },
      error: function() {
         $('#results').html('<p>An error has occurred</p>');
      },
      dataType: 'json',
      success: function(data) {
      		$('#results').html('Results');
      		var list = $('<ul/>');
           $.each(data, function(index, value) {
               list.append('<li>'+value.join(' - ')+'</li>');
           });

           $('#results').append(list);


      },
      type: 'GET'
   });
});

</script>

@endsection