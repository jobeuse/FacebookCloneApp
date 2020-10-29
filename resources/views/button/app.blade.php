@if(auth()->user()->name == $user->name )
	<form action="/profile/dalete/{{$user->name}}" method="POST">
		<button class="btn bg-light mt-3 font-weight-bold"><i class="fa fa-pencil"></i> 
			Delete Profile
		</button>
		@csrf
	</form>
@else
	<form action="{{ route('profile.friends',$user->id) }}" method="POST" id="sendfriendrequest">
		@csrf
		@if(auth()->user()->following($user))
	 	<button class="btn btn-block mt-3" style="background-color: #DAE0E5" id="requestsent">
	 		{{'Request Sent'}}
	 	</button>
	 	@else
		 	<button class="btn btn-block btn-primary mt-3" id="addfriend">
		 		{{'Add Friend '}}
		 	</button>
	 	@endif
	</form>
@endif

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
                	$('#requestsent').show('fast'); 
                },
            });         

         }); 

 		$('#requestsent').one("submit",function (e) {
             e.preventDefault(); 
             $('#requestsent').hide('fast'); 
             $('#addfriend').show('fast');  

         });

    });

</script>







