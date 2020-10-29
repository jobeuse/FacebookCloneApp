@extends('layouts.app')
@section('content')
@include('navbar.app')
<div class="container-fluid">
    <div class="row bg-white shadow-sm">
    	<div class="container">
    		<div class="col-lg-12">
		    	<div class="col-lg-12 rounded-lg">
		    		<img class="img-thumbnail border-0" src="{{ asset('/images/Facebook-Clone-App-banner.png') }}" style="border-radius: 0px 0px 20px 20px">
		    	</div>

    			<img src='https://avataaars.io/?topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black' class="img-thumbnail" width="150px" style="border-radius: 50%;position: absolute;top: 34%; left: 44%" />

		        <div class="col-lg-12 mt-5 text-center"> 
		        	<div class="row justify-content-center mt-3">
		        		<div class="col-lg-12 text-center"> 
		        			@if(auth()->user()->name == $user->name )
								<h4 id="username" style="cursor: pointer;" title="Edit Name">{{ $user->name }}</h4>
								@else
								<h4>{{ $user->name }}</h4>
							 @endif
							 <div class="refresh alert alert-info"style="display: none;">
							 	<a href="{{ route('home') }}">refresh now</a>
							 </div>
							<div class="editinputarea" style="display: none;">
								<form class="editnameform" method="POST" action="{{route('profile.update',$user->name)}}">
									@csrf
									<input type="text" name="name" value="{{$user->name}}">
									<button class="btn btn-sm btn-primary" type="submit">Update</button>
									<button class="btn btn-sm bg-light" id="cancelname">Cancel</button>
								</form>
							</div>
		        		</div>
		        		<div class="col-lg-5">
		        			<div class="desctop">
								<p class="text-muted">
									{{$user->desc }}
								</p>
								@if(auth()->user()->name == $user->name )
									@if($user->desc === null)
										<button id="edit" class="btn  btn-link text-decoration-none">Describe who u are</button>
									@else
										<button id="edit" class="btn  btn-link text-decoration-none">Edit</button>
									@endif
								@endif
							</div>

							<div class="desctopappended" style="display: none;">
								<p class="text-muted"> 
								</p>
								@if(auth()->user()->name == $user->name )
									@if($user->desc === null)
										<button id="edit" class="btn  btn-link text-decoration-none">Describe who u are</button>
									@else
										<button id="edit" class="btn  btn-link text-decoration-none">Edit</button>
									@endif
								@endif
							</div>

							<div class="desc mt-4" style="display:none; " >

								<p id="alretmessage" style="display: none;" class="alert alert-danger"> Unable to change this <span class="close" data-target="alert" data-dismiss="alert" style="cursor: pointer;">&times;</span>
								</p>

								<p id="alretmessageover" style="display: none;" class="alert alert-danger">character must be under 20<span class="close" data-target="alert" data-dismiss="alert" style="cursor: pointer;">&times;</span>
								</p>

								<form class="editdesc" method="POST" action="{{route('profile.update',$user->name)}}">
									@csrf
									<textarea name="desc" class="form-control" style="border-radius:0px;background: none; border: 1px solid black">{{$user->desc }}</textarea> 
									<button class="btn btn-sm btn-primary" type="submit">update</button>
									<button id="cancel" class="btn btn-sm bg-light">Cancel</button>
								</form>

							</div>
		        		</div>
		        	</div>
				</div>

				<div class="col-lg-12">
					<hr>
				</div>

				<div class="col-lg-12 bg-white">
					<div class="d-flex flex-row">

						<div class="flex-fill ">
							<div class="d-flex secondlinks flex-row">
								<div class="p-2 ">
									<a href="#timeline" id="Timeline" class="active text-decoration-none">Timeline</a>
								</div> 
								<div class="p-2">
									<a href="#friends" id="Friends" class=" text-decoration-none ">{{ $follower }} Friends</a>
								</div>
								<div class="p-2">
									<a href="#photos" id="Photos" class=" text-decoration-none ">Photos</a>
								</div>
								<div class="p-2" class="">
									<a href="#archive" id="Archive" class="text-decoration-none ">Archive</a>
								</div>
							</div>
						</div>

						<div class="flex-fill"> 
							<div class="d-flex flex-row">
								<div class="p-2">
									@include('button.app')

								</div> 
								<div class="p-2">
									@if(auth()->user()->name == $user->name )
									@else
										@if(auth()->user()->following($user))
											<button class="btn bg-light mt-3 font-weight-bold">
												<i class="fa fa-comment"></i> Message
											</button>
										@endif
									@endif
								</div> 
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div> 

<div class="container mt-4">
    <div class="d-flex">
        <div class="flex-grow-1  p-3">
            <div class="row">
                <div class="col-lg-12 bg-white shadow-sm rounded-lg">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Intro</h2>
                        </div>
                        <div class="col-lg-12 newrefresh">
                        </div>
                        <div class="col-lg-12 realvalues text-muted">
                            <p class="values">
                                <img class="hu5pjgll cwsop09l" src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/X_t0JnueVu-.png" alt="" width="20" height="20">&nbsp;&nbsp; Lives in {{$user->city}}</p>
                            <p class="values"> 
                                <img class="hu5pjgll cwsop09l" src="https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/CZzXbYX7tI2.png" alt="" width="20" height="20">&nbsp;&nbsp; Joined {{ $user->created_at->diffForHumans() }}
                            </p>
                            <p class="values">
                                <a href="https://www.instagram.com/{{$user->instagram}}/" class="text-decoration-none" target="blank"> 
                                    <img class="hu5pjgll cwsop09l" src="https://static.xx.fbcdn.net/rsrc.php/v3/yz/r/22ubiF2Af05.png" alt="" width="20" height="20"> {{$user->instagram }}
                                </a>
                            </p>
                            <p class="values">
                                <a href="tel:{{$user->whatsapp}}" class="text-decoration-none">
                                    <img class="hu5pjgll cwsop09l" src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/LO4H5gnjqGb.png" alt="" width="20" height="20"> {{ $user->whatsapp }}
                                </a>
                            </p>

                        </div> 

                        <div class="col-lg-12 changedvalues text-muted" style="display: none;">
                            <p class=" alert alert-danger" style="display: none;">Something Went Wrong <span class="close" data-target="alert" data-dismiss="alert" style="cursor: pointer;" id="alretmessagesome">&times;</span></p>
                            <form method="POST" id="updatecityinsta" action="{{route('profile.update',$user->name)}}">
                                Your City
                                <input type="text" name="city" class="form-control">
                                <br>
                                Your Instagram Username
                                <input type="text" name="instagram" class="form-control">
                                <br>
                                @csrf
                                <button class="btn btn-block btn-sm btn-primary" type="submit">Update</button>
                                <br>
                                <p class="btn btn-block btn-sm bg-light" id="canceleditprofile">Cancel</p>
                            </form>
                        </div>

                        <div class="col-lg-12">
                            @if(auth()->user()->name == $user->name)
                                <button class="btn btn-block bg-light" id="editprofile">Edit Details</button> 
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" ">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @include('createpost.app')
                </div>
                <div class="col-lg-8 mt-4">
                     @include('posts.app',[
                            'posts'=>$user->posts
                        ])
                </div>
                <div class="col-lg-8 bg-white  text-center mt-4 p-5 shadow-sm rounded-lg"> 
                    <h1 class="text-muted">Welcome<br> This Is Facebook Clone App</h1>
                    Rate this
                        <button class="btn" style="font-size: 30px">😍</button>
                        <button class="btn" style="font-size: 30px">😣</button>
                </div>
            </div>
        </div> 




    </div>
</div>





<script type="text/javascript">
         
  $(document).ready(function($) {
  	$('#Timeline').click(function(event) {
	  	$('#Friends').removeClass('active');
	  	$('#Photos').removeClass('active');
	  	$('#Archive').removeClass('active'); 
	  	$('#Timeline').addClass('active');

	  });

	$('#Archive').click(function(event) {
	  	$('#Timeline').removeClass('active');
	  	$('#Friends').removeClass('active');
	  	$('#Photos').removeClass('active'); 
	  	$('#Archive').addClass('active');

	  });


	$('#Friends').click(function(event) {
	  	$('#Timeline').removeClass('active'); 
	  	$('#Photos').removeClass('active');
	  	$('#Archive').removeClass('active');
	  	$('#Friends').addClass('active');

	  });

	$('#Photos').click(function(event) {
	  	$('#Timeline').removeClass('active');
	  	$('#About').removeClass('active');
	  	$('#Friends').removeClass('active');
	  	$('#Archive').removeClass('active');
	  	$('#Photos').addClass('active');

	  });

    });
</script>  



<script type="text/javascript">
            
        //edit desc  

            //cancel
                 $('#cancel').click(function(event) {
                     $('.editdesc').hide('slow');
                     $('.desctopappended').hide('slow');
                     $('.desctop').show('slow');
                 });

            //show textarea

                $("#edit").one('click', function() {
                    $('.desctop').hide('slow');
                    $('.desc').show('slow');
                });

            //edit

                $('.editdesc').on("submit",function (e) {
                    e.preventDefault();

                    var desc=$("textarea[name=desc]").val();
                    var _token=$("input[name=_token]").val();


                    $.ajax({
                        type: "POST", 
                        url:"{{route('profile.update', $user->name)}}",
                        data: {
                            desc:desc,
                            _token:_token,
                        },
                         success: function (response) {  
                            $('.editdesc').hide('slow');

                            $('.desctopappended').show('slow');                                
                            $(".desctopappended").prepend('<p class="text-muted">'+ desc +'</p>'); 
                        },

                         error: function (error) { 
                            console.log('error');
                            $("#alretmessage").show("slow");
                            
                         }
                    });

                }); 



        //edit profile name

        $('#username').click(function() { 
				$('.editinputarea').show('slow', function() { 

				});
        	});
        		
		$('#cancelname').click(function() { 
				$('.editinputarea').hide('slow');
				$('.editusername').hide('fast');
			}); 

        $('.editnameform').on('submit', function(event) {
        	event.preventDefault();

				var name=$("input[name=name]").val();
				var _token=$("input[name=_token]").val();


	            $.ajax({
                        type: "POST", 
                        url:"{{route('profile.update', $user->name)}}",
                        data: {
                            name:name,
                            _token:_token,
                        },

	                    success: function (response) {  
	                    	$('.refresh').show('slow');
                            $('.editinputarea').hide('slow');     
                            $(".username").prepend('<p class="text-muted">'+ name +'</p>'); 
                        },


        				});		

        			});
        		
    
     
 


//edit city and instagram


 		$('#editprofile').click(function() {
            $('.realvalues').hide('slow');
            $('#editprofile').hide('slow');
            $('.changedvalues').show('slow');

            $('#canceleditprofile').click(function() {

                $('.realvalues').show('slow');
                $('#editprofile').show('slow');
                $('.changedvalues').hide('slow');

            });

        $('#updatecityinsta').on('submit', function(e) {
            e.preventDefault();
 
                    var city=$("input[name=city]").val();
                    var instagram=$("input[name=instagram]").val();
                    var _token=$("input[name=_token]").val();
            
                 $.ajax({
                    type: "POST", 
                    url:"{{route('profile.update', $user->name)}}",
                    data: {
                        city:city,
                        instagram:instagram,
                        _token:_token,
                    },
                     success: function (response) {   
                        $('.realvalues').hide('slow');
                        $('#editprofile').hide('slow');
                        $('.changedvalues').hide('slow'); 
						$('.values').hide('slow'); 

						$(".newrefresh").prepend('<p class="alert alert-info"><a href="">Refresh This Page</a></p>');

					 },

                     error: function (error) { 
  						$('.realvalues').hide('slow');
                        $('#editprofile').hide('slow');
                        $('.changedvalues').hide('slow'); 
						$('.values').hide('slow');
						
                        $(".newrefresh").prepend('<p class="alert alert-info"><a href="">Refresh This Page</a></p>');
                        $("#alretmessagesome").show("slow");
                        
                     },
                });

            });

           
        });


        </script>

@endsection



        