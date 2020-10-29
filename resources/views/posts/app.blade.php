<div class="contentpost" id="contentpost">
@foreach ($posts as $post)
<div class="row bg-white appendedposts rounded-lg mb-3  shadow-sm">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12 p-3">
                 <div class="d-flex flex-row">

                    <div class="flex-grow-1">
                        <div class="d-flex flex-row">
                            <div class="p-1">
                                <a href="">
                                    <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black' width="40px" />
                                </a>
                            </div>
                            <div class="flex-grow-1 text-truncate ml-1">
                                <div class="row text-truncate">
                                    <div class="col-lg-12 text-truncate">
                                        {{ $post->user->name }}
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="text-muted text-truncate">
                                            {{$post->created_at->diffForHumans()}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <svg class="svg-icon-dots" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre viewBox="0 0 20 20" width="30px">
                            <path fill="grey" d="M3.936,7.979c-1.116,0-2.021,0.905-2.021,2.021s0.905,2.021,2.021,2.021S5.957,11.116,5.957,10
                                            S5.052,7.979,3.936,7.979z M3.936,11.011c-0.558,0-1.011-0.452-1.011-1.011s0.453-1.011,1.011-1.011S4.946,9.441,4.946,10
                                            S4.494,11.011,3.936,11.011z M16.064,7.979c-1.116,0-2.021,0.905-2.021,2.021s0.905,2.021,2.021,2.021s2.021-0.905,2.021-2.021
                                            S17.181,7.979,16.064,7.979z M16.064,11.011c-0.559,0-1.011-0.452-1.011-1.011s0.452-1.011,1.011-1.011S17.075,9.441,17.075,10
                                            S16.623,11.011,16.064,11.011z M10,7.979c-1.116,0-2.021,0.905-2.021,2.021S8.884,12.021,10,12.021s2.021-0.905,2.021-2.021
                                            S11.116,7.979,10,7.979z M10,11.011c-0.558,0-1.011-0.452-1.011-1.011S9.442,8.989,10,8.989S11.011,9.441,11.011,10
                                            S10.558,11.011,10,11.011z">
                                                
                            </path>
                        </svg>
                        <div class="dropdown-menu border-0 p-2 shadow dropdown-menu-right" aria-labelledby="navbarDropdown">
                            {{ $post->id }}
                        </div>
                    </div>
                 </div>
            </div>

            @if($post->cat == 'template')
                <div class="col-lg-12 postcontent text-break bg-info">
                    <div class="">
                        <div class="">
                            <p class="showless">
                                {!!  Str::limit($post->body, 100) !!}
                                @if (strlen(strip_tags($post->body)) > 100)
                                  <a href="#" id="showmore" class="btn-sm">Read More</a>
                                @endif
                            </p>

                            <p class="showdescription" style="display: none">
                                {!! $post->body !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            @if($post->cat =='normal')
               <div class="col-lg-12 text-break">
                    <div class="">
                        <div class="">
                            <p class="showlessnormal">
                                {!!  Str::limit($post->body, 100) !!}
                                @if (strlen(strip_tags($post->body)) > 100)
                                  <a href="#" id="showmore" class="btn-sm">Read More</a>
                                @endif
                            </p>

                            <p class="showdescription" style="display: none">
                                {!! $post->body !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            @if($post->image !=null)
               <div class="col-lg-12 text-break">
                    <div class="">
                        <div class="">
                            <p class="showlessnormal">
                                {!!  Str::limit($post->body, 100) !!}
                                @if (strlen(strip_tags($post->body)) > 100)
                                  <a href="#" id="showmore" class="btn-sm">Read More</a>
                                @endif
                            </p>

                            <p class="showdescription" style="display: none">
                                {!! $post->body !!}
                            </p>
                            <img src="{{$post->image}}" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="col-lg-12">
    	<hr>
    </div>

	<div class="col-lg-12">
		<div class="d-flex bd-highlight">
		  	<div class="p-2 flex-fill text-muted text-truncate bd-highlight">
				<div class="d-flex flex-row text-truncate">
		  			<div class=" flex-fill">
                        <svg width="30px" viewBox="0 0 1222.000000 1280.000000" >
                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="none">
                            <path d="M7258 12774 c-60 -19 -84 -33 -112 -64 -42 -47 -52 -83 -61 -215 -18 -291 -98 -951 -150 -1240 -83 -456 -247 -909 -432 -1190 -133 -201 -233 -303 -568 -576 -331 -269 -493 -448 -600 -664 -30 -60 -115 -254 -188 -430 -257 -610 -395 -906 -578 -1235 -404 -727 -746 -1118 -1086 -1242 -49 -18 -85 -21 -227 -24 -93 -2 -173 -7 -177 -11 -12 -12 -12 -5224 -1 -5235 5 -5 27 -13 48 -18 45 -10 716 -135 1129 -210 273 -50 946 -176 1312 -246 101 -19 242 -39 315 -44 73 -6 207 -17 298 -25 486 -43 917 -65 1910 -96 766 -24 1478 9 1851 85 274 57 469 154 729 363 180 145 414 400 478 522 63 119 64 127 66 466 1 290 2 313 22 361 39 95 98 168 305 374 271 270 347 373 385 520 35 137 13 235 -134 600 -89 221 -112 303 -112 400 0 124 41 189 315 505 188 215 237 315 217 433 -14 85 -60 177 -209 425 -192 319 -223 400 -199 517 15 72 49 128 208 343 71 95 145 206 165 247 36 71 38 80 38 170 -1 85 -5 108 -42 216 -51 148 -119 286 -210 424 -159 239 -329 429 -465 518 -174 113 -368 154 -883 187 -515 33 -1594 45 -2222 25 -467 -15 -452 -15 -475 8 -46 46 -62 256 -33 428 51 296 167 579 558 1361 209 416 250 524 327 847 60 254 64 294 64 636 1 339 -3 384 -56 600 -87 361 -195 573 -396 776 -140 141 -304 254 -468 321 -73 30 -143 49 -351 98 -94 23 -214 18 -305 -11z"/>
                            <path d="M435 6135 c-94 -18 -145 -37 -210 -81 -94 -62 -179 -178 -200 -271 -3 -18 -11 -35 -16 -38 -12 -8 -12 -5078 0 -5090 5 -6 16 -35 25 -66 41 -143 202 -284 364 -318 37 -8 310 -11 880 -11 911 0 896 -1 1016 63 139 73 234 211 259 377 3 19 7 1146 9 2505 2 2373 2 2473 -16 2540 -51 194 -178 328 -360 379 -68 20 -104 20 -876 23 -638 1 -820 -1 -875 -12z"/>
                            </g>
                            </svg>
					</div>
					<div class="flex-fill text-truncate">
		  				Like
					</div>
				</div>
		  	</div>
		  	<div class="p-2 flex-fill text-truncate text-muted bd-highlight">
		  		<div class="d-flex flex-row text-truncate">
		  			<div class="text-truncate flex-fill">
                        <svg class="svg-icon" viewBox="0 0 20 20" width="30px">
							<path d="M17.211,3.39H2.788c-0.22,0-0.4,0.18-0.4,0.4v9.614c0,0.221,0.181,0.402,0.4,0.402h3.206v2.402c0,0.363,0.429,0.533,0.683,0.285l2.72-2.688h7.814c0.221,0,0.401-0.182,0.401-0.402V3.79C17.612,3.569,17.432,3.39,17.211,3.39M16.811,13.004H9.232c-0.106,0-0.206,0.043-0.282,0.117L6.795,15.25v-1.846c0-0.219-0.18-0.4-0.401-0.4H3.189V4.19h13.622V13.004z"></path>
						</svg><span>Comment</span>
					</div>
				</div>
		  	</div>

		  	<div class="p-2 flex-fill bd-highlight text-truncate text-muted">
		  		<div class="d-flex flex-row text-truncate">
		  			<div class=" flex-fill text-truncate">
                        <svg class="svg-icon" viewBox="0 0 20 20" width="30px">
							<path d="M16.76,7.51l-5.199-5.196c-0.234-0.239-0.633-0.066-0.633,0.261v2.534c-0.267-0.035-0.575-0.063-0.881-0.063c-3.813,0-6.915,3.042-6.915,6.783c0,2.516,1.394,4.729,3.729,5.924c0.367,0.189,0.71-0.266,0.451-0.572c-0.678-0.793-1.008-1.645-1.008-2.602c0-2.348,1.93-4.258,4.303-4.258c0.108,0,0.215,0.003,0.321,0.011v2.634c0,0.326,0.398,0.5,0.633,0.262l5.199-5.193C16.906,7.891,16.906,7.652,16.76,7.51 M11.672,12.068V9.995c0-0.185-0.137-0.341-0.318-0.367c-0.219-0.032-0.49-0.05-0.747-0.05c-2.78,0-5.046,2.241-5.046,5c0,0.557,0.099,1.092,0.292,1.602c-1.261-1.111-1.979-2.656-1.979-4.352c0-3.331,2.77-6.041,6.172-6.041c0.438,0,0.886,0.067,1.184,0.123c0.231,0.043,0.441-0.134,0.441-0.366V3.472l4.301,4.3L11.672,12.068z"></path>
                        </svg>
                        <span>Share</span>
                    </div>
		  		</div>
		  	</div>
		</div>
    </div>

    <div class="col-lg-12">
        <hr>
    </div>

    <div class="col-lg-12 mb-2">
        @include('comment.app')
    </div>
</div>
@endforeach
</div>
