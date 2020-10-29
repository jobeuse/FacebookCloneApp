<div class="d-flex flex-row bg-white">
    @forelse ($users as $user)
    @if(auth()->user()->name != $user->name)
    @if(auth()->user()->following($user))
    @else
        <div class="p-2 ml-3 rounded-lg bg-white shadow-sm text-center shadow-sm">
            <a href="{{ route('profile',$user->name) }}" class="text-decoration-none text-muted">
            <img src='https://avataaars.io/?topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black' class="rounded-lg border-0 img-thumbnail" width="180px" />            
                <p class="text-dark text-sm" >{!!  Str::limit($user->name, 30) !!}
                    <br>
                    <span class="text-muted text-sm " >
                        {!!  Str::limit($user->email, 30) !!}
                    </span>
                </p>
            </a>
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
            <button class="btn btn-block bg-light mt-3">Remove</button>
        </div>
    @endif
    @endif

    @empty
    <p>No users</p>
    @endforelse
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
