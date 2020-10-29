@extends('layouts.app')
@section('content')
@include('navbar.app')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="row ">
                <div class="col-lg-12">
                    @include('leftbar.app')
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    @include('stories.app')
                </div>
                <div class="col-lg-9 mt-3 ">
                    @include('createpost.app')
                </div>
                <div class="col-lg-9 rounded-lg mt-3 bg-white shadow-sm">
                    <div class="row p-3">
                        <div class="col-lg-12 p-3 text-muted">
                            <div class="d-flex flex-row">
                                <div class="flex-grow-1">
                                    <h5>Suggested Friends</h5>
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
                                        Hide Panel
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-12" style="overflow-y: hidden;overflow-x: scroll; ">
                            @include('friends.app')
                        </div>
                        <div class="col-lg-12 text-center p-2">
                            <a href="">See All</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mt-4">
                    @if(session('error'))
                    {{ session('error') }}
                    @endif
                    @include('posts.app')
                </div>
            </div>
        </div>
         <div class="col-lg-3">
            @include('right.app')
        </div>
    </div>
</div>
@endsection
