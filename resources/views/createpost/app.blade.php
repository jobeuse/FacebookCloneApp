<div class="row bg-white p-2 rounded-lg shadow-sm">
	<div class="col-lg-12">
		<div class="d-flex flex-row">
			<div class="p-1">
				<a href="{{ route('profile',auth()->user()->name) }}">
    				<img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black' width="50px" />
    			</a>
    		</div>
    		<div class="flex-grow-1 p-1 mt-2" data-toggle="modal" data-target="#PostModal">
    			<input type="text" class="form-control" placeholder="What's on your mind, {{ auth()->user()->name }}">
    		</div>
    	</div>
    </div>

    <div class="col-lg-12">
    	<hr>
    </div>

	<div class="col-lg-12">
		<div class="d-flex bd-highlight">
		  	<div class="p-2 bottomiconcreatepost flex-fill text-muted text-truncate bd-highlight">
				<div class="d-flex flex-row text-truncate">
		  			<div class=" flex-fill">
				  		<svg class="svg-icon videolive" viewBox="0 0 20 20" width="30px">
							<path d="M17.919,4.633l-3.833,2.48V6.371c0-1-0.815-1.815-1.816-1.815H3.191c-1.001,0-1.816,0.814-1.816,1.815v7.261c0,1.001,0.815,1.815,1.816,1.815h9.079c1.001,0,1.816-0.814,1.816-1.815v-0.739l3.833,2.478c0.428,0.226,0.706-0.157,0.706-0.377V5.01C18.625,4.787,18.374,4.378,17.919,4.633 M13.178,13.632c0,0.501-0.406,0.907-0.908,0.907H3.191c-0.501,0-0.908-0.406-0.908-0.907V6.371c0-0.501,0.407-0.907,0.908-0.907h9.079c0.502,0,0.908,0.406,0.908,0.907V13.632zM17.717,14.158l-3.631-2.348V8.193l3.631-2.348V14.158z"></path>
						</svg>
					</div>
					<div class="flex-fill text-truncate">
		  				video
					</div>
				</div>
		  	</div>
		  	<div class="p-2 flex-fill bottomiconcreatepost text-truncate text-muted bd-highlight" data-toggle="modal" data-target="#FileModal">
		  		<div class="d-flex flex-row text-truncate">
		  			<div class=" flex-fill">
			  			<svg class="svg-icon image" viewBox="0 0 20 20" width="30px">
						<path d="M18.555,15.354V4.592c0-0.248-0.202-0.451-0.45-0.451H1.888c-0.248,0-0.451,0.203-0.451,0.451v10.808c0,0.559,0.751,0.451,0.451,0.451h16.217h0.005C18.793,15.851,18.478,14.814,18.555,15.354 M2.8,14.949l4.944-6.464l4.144,5.419c0.003,0.003,0.003,0.003,0.003,0.005l0.797,1.04H2.8z M13.822,14.949l-1.006-1.317l1.689-2.218l2.688,3.535H13.822z M17.654,14.064l-2.791-3.666c-0.181-0.237-0.535-0.237-0.716,0l-1.899,2.493l-4.146-5.42c-0.18-0.237-0.536-0.237-0.716,0l-5.047,6.598V5.042h15.316V14.064z M12.474,6.393c-0.869,0-1.577,0.707-1.577,1.576s0.708,1.576,1.577,1.576s1.577-0.707,1.577-1.576S13.343,6.393,12.474,6.393 M12.474,8.645c-0.371,0-0.676-0.304-0.676-0.676s0.305-0.676,0.676-0.676c0.372,0,0.676,0.304,0.676,0.676S12.846,8.645,12.474,8.645"></path>
							</svg>
						</div>
						<div class="flex-fill text-truncate">
							Photo
						</div>
				</div>
		  	</div>

		  	<div class="p-2 flex-fill bottomiconcreatepost bd-highlight text-truncate text-muted">
		  		<div class="d-flex flex-row text-truncate">
		  			<div class=" flex-fill">
		  				<i class="fa fa-smile-o feelings"></i>
		  			</div>
		  			<div class="flex-fill text-truncate">
		  				<span>Feelings</span>
		  			</div>
		  		</div>
		  	</div>
		</div>
	</div>
</div>



<!--  modal create post-->

<div class="modal fade rounded shadow-sm border-0" id="PostModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog  border-0">
        <form id="post_now" method="POST" enctype="multipart/form-data" class="modal-content border-0" action="{{route('post.store')}}">
            <div class="modal-header border-bottom">
                <h5 class="modal-title text-center">Create post</h5>
                <button type="" class="close bg-light" data-dismiss="modal" aria-label="Close"> &times; 
                </button>
            </div>
            <div class="modal-body">
    	        <div class="row">

                    <div class="col-lg-12">
                        <div class="d-flex flex-row">
                            <div class="p-1">
                                <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black' width="50px" />
                            </div>
                            <div class="flex-grow-1 p-1 mt-2">
                                <p class="text-muted">
                                    {{ auth()->user()->name }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-1" id="normalpost">
                        <input type="text" value="{{auth()->user()->id}}" name="user_id" hidden>
                        <input type="text" value="{{auth()->user()->name}}" name="username" hidden>
                        <input type="text" value="normal" name="normal" hidden>
                        <textarea name="bodynormal" class="form-control" placeholder="What's on your mind, {{ auth()->user()->name }}" style="background: none;border-radius:0px;font-size: 20px"></textarea>
                        
                        <p class="btn btn-sm btn-outline-primary mt-3" id="lounchtemplate">
                        Template
                        </p>
                    </div>

                    <div class="col-lg-12 alert alert-danger" id="alretmessage" style="display: none">
                        Please Write Something
                        <span class="close" style="cursor: pointer" data-dismiss="alert" data-target="alert">&times;</span>
                    </div> 

                    <div class="col-lg-12 alert alert-success" id="alretmessagework" style="display: none">
                           Post Created, now close model or add more post
                            <span class="close" style="cursor: pointer" data-dismiss="alert" data-target="alert">&times;</span>
                            @csrf
                    </div> 

                    <div class="col-lg-12"  id="Templatepost" style="display: none;">
                        <input type="text" value="{{auth()->user()->id}}" name="user_id" hidden>
                        <input type="text" value="{{auth()->user()->name}}" name="username" hidden>
                         <input type="text" value="template" name="template" hidden>
                        <textarea  name="bodytemplate" class=" mt-2 text-white form-control bg-info" placeholder="What's on your mind, {{ auth()->user()->name }}" style=" position: relative;color: rgb(255, 255, 255);font-size: 30px;font-style: normal;border-radius: 0px;height: 200px;font-weight: bold;text-align: center,"></textarea>
                        <p class="btn btn-sm rounded-lg bg-light mt-3" id="cancelTemplate">
                            <svg class="svg-icon" viewBox="0 0 20 20" width="30px">
                                <path fill="grey" d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
                            </svg>
                        </p>
                    </div>
                
    	        </div>

            </div>
            <div class="modal-footer border-0">
    		    <div class="col-lg-12">
    			    <div class="d-flex border p-2 rounded-lg bd-highlight">
    				    <div class="flex-grow-1">
    					    <p>Add To Your Post</p>
    				    </div>
                        <div class="p-1 text-muted  bd-highlight">
                            <svg name="image" class="svg-icon videolive" viewBox="0 0 20 20" width="30px">
                                <path d="M17.919,4.633l-3.833,2.48V6.371c0-1-0.815-1.815-1.816-1.815H3.191c-1.001,0-1.816,0.814-1.816,1.815v7.261c0,1.001,0.815,1.815,1.816,1.815h9.079c1.001,0,1.816-0.814,1.816-1.815v-0.739l3.833,2.478c0.428,0.226,0.706-0.157,0.706-0.377V5.01C18.625,4.787,18.374,4.378,17.919,4.633 M13.178,13.632c0,0.501-0.406,0.907-0.908,0.907H3.191c-0.501,0-0.908-0.406-0.908-0.907V6.371c0-0.501,0.407-0.907,0.908-0.907h9.079c0.502,0,0.908,0.406,0.908,0.907V13.632zM17.717,14.158l-3.631-2.348V8.193l3.631-2.348V14.158z"></path>
                            </svg>
                        </div>
                        <div class="p-1 text-muted bd-highlight"> 
                            <svg name="video" style="cursor: pointer;" class="svg-icon image" viewBox="0 0 20 20" width="30px">
                                <path d="M18.555,15.354V4.592c0-0.248-0.202-0.451-0.45-0.451H1.888c-0.248,0-0.451,0.203-0.451,0.451v10.808c0,0.559,0.751,0.451,0.451,0.451h16.217h0.005C18.793,15.851,18.478,14.814,18.555,15.354 M2.8,14.949l4.944-6.464l4.144,5.419c0.003,0.003,0.003,0.003,0.003,0.005l0.797,1.04H2.8z M13.822,14.949l-1.006-1.317l1.689-2.218l2.688,3.535H13.822z M17.654,14.064l-2.791-3.666c-0.181-0.237-0.535-0.237-0.716,0l-1.899,2.493l-4.146-5.42c-0.18-0.237-0.536-0.237-0.716,0l-5.047,6.598V5.042h15.316V14.064z M12.474,6.393c-0.869,0-1.577,0.707-1.577,1.576s0.708,1.576,1.577,1.576s1.577-0.707,1.577-1.576S13.343,6.393,12.474,6.393 M12.474,8.645c-0.371,0-0.676-0.304-0.676-0.676s0.305-0.676,0.676-0.676c0.372,0,0.676,0.304,0.676,0.676S12.846,8.645,12.474,8.645"></path>
                            </svg>  
                        </div>
                        <div class="p-1 bd-highlight text-muted">
                            <div class="d-flex flex-row">
                                <div class=" flex-fill">
                                    <i class="fa fa-smile-o feelings"></i>
                                </div>
                            </div>
                        </div>
				    </div>
    		    </div>
                    <button class="btn btn-block btn-primary" type="submit">
                        POST
                    </button>
            </div>
        </form>
    </div>
</div>


<!--  modal upload file-->

<div class="modal fade border-0" id="FileModal" tabindex="-1" aria-labelledby="FileModal" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" id="file_post_now"  enctype="multipart/form-data" action="{{route('fileupload.store')}}">
            <div class="modal-header">
                <h5 class="modal-title" id="FileModal">Upload Photos</h5>
                <button type="button" class="bg-light close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex flex-row">
                            <div class="p-1">
                                <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black' width="50px" />
                            </div>
                            <div class="flex-grow-1 p-1 mt-2">
                                <p class="text-muted">
                                    {{ auth()->user()->name }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-1">
                        <input type="text" name="username" hidden>
                        <textarea class="form-control" name="caption" style="background: none;" placeholder="Add Caption" autofocus></textarea>
                        @csrf
                    </div>

                    <div class="col-lg-12 mt-1">
                        <img id="thumb" src="" width="" class="img-thumbnail border-0" />
                    </div>

                    <div class="col-lg-12 alert alert-danger" id="alretmessage" style="display: none">
                        Samething goes Wrong
                        <span class="close" style="cursor: pointer" data-dismiss="alert" data-target="alert">&times;</span>
                    </div> 
                     <div class="col-lg-12 alert alert-success" id="calretmessage" style="display: none">
                       POst is ready now
                        <span class="close" style="cursor: pointer" data-dismiss="alert" data-target="alert">&times;</span>
                    </div> 

                </div>
            </div>
            <div class="modal-footer">
                <div class="col-lg-12">
                    <div class="d-flex border p-2 rounded-lg bd-highlight">
                        <div class="flex-grow-1">
                            <p>Add To Your Post</p>
                        </div>
                        <div class="p-1 text-muted bd-highlight">
                            <div class="upload text-truncate">
                            <label for="file-input">
                                <svg name="video" style="cursor: pointer;" class="svg-icon image" viewBox="0 0 20 20" width="40px">
                                    <path d="M18.555,15.354V4.592c0-0.248-0.202-0.451-0.45-0.451H1.888c-0.248,0-0.451,0.203-0.451,0.451v10.808c0,0.559,0.751,0.451,0.451,0.451h16.217h0.005C18.793,15.851,18.478,14.814,18.555,15.354 M2.8,14.949l4.944-6.464l4.144,5.419c0.003,0.003,0.003,0.003,0.003,0.005l0.797,1.04H2.8z M13.822,14.949l-1.006-1.317l1.689-2.218l2.688,3.535H13.822z M17.654,14.064l-2.791-3.666c-0.181-0.237-0.535-0.237-0.716,0l-1.899,2.493l-4.146-5.42c-0.18-0.237-0.536-0.237-0.716,0l-5.047,6.598V5.042h15.316V14.064z M12.474,6.393c-0.869,0-1.577,0.707-1.577,1.576s0.708,1.576,1.577,1.576s1.577-0.707,1.577-1.576S13.343,6.393,12.474,6.393 M12.474,8.645c-0.371,0-0.676-0.304-0.676-0.676s0.305-0.676,0.676-0.676c0.372,0,0.676,0.304,0.676,0.676S12.846,8.645,12.474,8.645"></path>
                                </svg>
                                 <input type="file" name="image" onchange="preview()" id="file-input" style="display:none;">
                                 
                                </label>   
                            </div>
                        </div> 
                    </div>
                </div>
                <button class="btn btn-block btn-primary" type="submit">
                        POST
                </button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    function preview() {
           thumb.src=URL.createObjectURL(event.target.files[0]);
        }

    $(document).ready(function() {
         $('#file_post_now').on("submit",function (e) {
             e.preventDefault();
            var caption=$("input[textarea=caption]").val();
            var image=$("input[file=image]").val();
            var username=$("input[name=username]").val(); 
            var _token=$("input[name=_token]").val();
            var datee=new Date();
            var btndate=((datee.getMinutes())-datee.getMinutes());

            $.ajax({
                url: '{{route('fileupload.store')}}',
                type: 'POST',
                data: {
                    caption:caption,
                    image:image,
                    username:username,
                    _token:_token,
                },
                success: function (response) {
              
                    if (image == "") {
                        $("#alretmessage").show("slow");
                    }else{
                        $("#calretmessage").show("slow");
                    };
                },
            });         

         });  
    });


</script>




