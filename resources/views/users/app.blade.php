@extends('layouts.app')
@section('content')
@include('navbar.app')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 shadow-sm bg-white"  style="height: 100vh;overflow-x: hidden;overflow-y: scroll;">
			<div class="row">
				<div class="col-lg-12 p-3 bg-white mt-2 sticky-top">
					<h5>Peaple you may know</h5>
				</div>
				<div class="col-lg-12">
					<div class="d-flex flex-row">
						<div class="flex-grow-1">
							  @forelse ($users as $user)
							    @if(auth()->user()->name != $user->name)
							    	@if(auth()->user()->following($user))
							    	@else
							    	<div class="d-flex p-1 hoverfriends flex-row">
							    		<div class=""> 
							    			<img src='https://avataaars.io/?topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black' class="rounded-lg border-0 img-thumbnail" width="70px" /> 
										</div>
										<div class="p-2 flex-grow-1">
											<div class="d-flex flex-column"> 
												<div class=""> 
													{{$user->name}}
												</div>
												<div class="text-truncate">
													<div class="d-flex text-truncate flex-row">
														<form action="{{ route('profile.friends',$user->id) }}" method="POST" class="" id="sendfriendrequest">
											                @csrf
											                @if(auth()->user()->following($user))
											                <button class="btn text-truncate btn-block mt-3" style="background-color: #DAE0E5" id="requestsent">
											                    {{'Request Sent'}}
											                </button>
											                @else
											                    <button class="btn text-truncate btn-block btn-primary mt-3" id="addfriend">
											                        {{'Add Friend '}}
											                    </button>
											                @endif
											            </form>
										              <button class="text-truncate btn btn-block bg-light mt-3 ml-3">Remove</button>
										        	</div>
												</div>
											</div>
										</div>
									</div>
									@endif
								@endif
							@empty
							<p> No users</p>
							@endforelse


						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

    $(document).ready(function() {
         $('#sendfriendrequest').one("submit",function (e) {
             e.preventDefault(); 
            var _token=$("input[name=_token]").val(); 

            $.ajax({
                url: '{{ route('profile.friends',$user->id) }}',
                type: 'POST',
                data: { 
                    _token:_token,
                },
                success: function (response) {
                    $('#addfriend').hide('fast'); 
                },
            });         

         });  
    });

</script>
@endsection