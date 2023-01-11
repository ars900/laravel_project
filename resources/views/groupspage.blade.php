@extends('layouts.app')

@section('content')
    <div class = "bgmain">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Welcome to group page</h2>

                            </div>
                        </div>
                        <hr>
                    </div>

                    <!-- Container (TOUR Section) -->
                    <div id="tour" class="bg-1">
                        <div class="container">
                            <h3 class="text-center">Your Groups</h3>
{{--                            <div class = "groups">--}}
{{--                                <table class="table table-hover">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Firstname</th>--}}
{{--                                        <th>Lastname</th>--}}
{{--                                        <th>Email</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach($users as  $user)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$user['name']}}</td>--}}
{{--                                            <td>{{$user['surname']}}</td>--}}
{{--                                            <td>{{$user['email']}}</td>--}}
{{--                                            <td><button type = "button" class="btn" data-id =  "{{$user['id']}}"data-toggle="modal" data-target="#myModal">Add in Group</button></td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
                            <div class="row text-center">
                                @foreach($group as $group_name)
                                <div class="col-sm-4">
                                    <div class="thumbnail {{$group_name['name']}}">
                                        <p><strong>It's your Group {{$group_name['name']}}</strong></p>
                                        <div class = "added_groups">

                                        </div>
                                        <button class="btn group_add " name="group_name" data-id = "{{$group_name['id']}}" data-toggle="modal" data-target="#myModal">ADD Group</button>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                        <h4><span class="glyphicon glyphicon-lock"></span> Add users</h4>
                                    </div>
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Users</label>
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Firstname</th>
                                                        <th>Lastname</th>
                                                        <th>Email</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($users as  $user)
                                                        <tr>
                                                            <td>{{$user['name']}}</td>
                                                            <td>{{$user['surname']}}</td>
                                                            <td>{{$user['email']}}</td>
                                                            <td><button type = "button" class="add_user" data-id =  "{{$user['id']}}">Add in Group</button></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <button type="button" class=" add btn btn-block">ADD
                                                <span class="glyphicon glyphicon-ok"></span>
                                            </button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove"></span> Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="text-center">
                        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                            <span class="glyphicon glyphicon-chevron-up"></span>
                        </a><br><br>
                        <p> Theme Made By <a href="https://www.pinterest.com/arsen_900/" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>
                    </footer>

                </div>
            </div>
        </div>
    </div>
@endsection
    @push('script')
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function(){
                $(".add_user").on('click', function() {
                    window.user_id = $(this).data("id");
                });
                $(".group_add").on('click', function() {
                    window.group_add = $(this).data("id");
                });

                $(".add").on('click', function(){
                   $.ajax({
                       type:"GET",
                       url:"/add_user",
                       data:{'groupid':group_add,'userid':user_id},
                       dataType: "json",
                       success: function(response){
                           $.each(response.users, function (key, item){

                               $('.added_groups').append('<tr>\
                                    <td scope="col">'+item.id+'</td>\
                                    <td scope="col">'+item.name+'</td>\
                                    <td scope="col">'+item.email+'</td>\
                            </tr>')
                           })
                       }
                   })
                });






            })
        </script>
    @endpush
