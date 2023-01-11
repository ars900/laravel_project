@extends('layouts.app')

@section('content')
    <div class = "bgmain">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    {{--            <nav class="navbar navbar-inverse">--}}
                    {{--                <div class="container-fluid">--}}
                    {{--                    <div class="navbar-header">--}}
                    {{--                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">--}}
                    {{--                            <span class="icon-bar"></span>--}}
                    {{--                            <span class="icon-bar"></span>--}}
                    {{--                            <span class="icon-bar"></span>--}}
                    {{--                        </button>--}}
                    {{--                        <a class="navbar-brand" href="#">Logo</a>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="collapse navbar-collapse" id="myNavbar">--}}
                    {{--                        <ul class="nav navbar-nav">--}}
                    {{--                            <li class="active"><a href="#">Home</a></li>--}}
                    {{--                            <li><a href="#">About</a></li>--}}
                    {{--                            <li><a href="#">Projects</a></li>--}}
                    {{--                            <li><a href="#">Contact</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                        <ul class="nav navbar-nav navbar-right">--}}
                    {{--                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--            </nav>--}}

                    <div class="container ">
                        <div class="row">
                            <div class="col-sm-8">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="https://web-static.wrike.com/blog/content/uploads/2016/11/Working-Effectively.jpg?av=d6fcc963c5c6f56257c39149bf1fd177" alt="Image">
                                            <div class="carousel-caption">
                                                <h3>FOR YOUR COMPANY</h3>
                                                <p>Money Money.</p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <img src="https://www.english-language.ru/assets/images/articles/working.jpg" alt="Image">
                                            <div class="carousel-caption">
                                                <h3>BEST TEAM</h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well">
                                    <p>Welcome home</p>
                                </div>
                                <div class="well">
                                    <p>Upcoming Events..</p>
                                </div>
                                <div class="well">
                                    <p>Visit Our Blog</p>
                                </div>
                                <div class="well">
                                    <a href = "{{ route('group') }}"><p>Add group</p></a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="container text-center">
                        <h3>What We Do</h3>
                        <br>
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="https://www.colliers.com/-/media/images/colliers/asia/philippines/colliers-review/collierreview_hero_image_01312022_v2/hero_image_tondominium/hero_image_021522/hero_image_colliersviewpoint_022222.ashx?bid=0f5b3ed2a8de41f89e1a8d557e48f9f8" class="img-responsive" style="width:100%" alt="Image">
                                <p>Current Project</p>
                            </div>
                            <div class="col-sm-3">
                                <img src="https://www.betterup.com/hubfs/Man%20has%20overwork%20and%20sitting%20with%20laptop%20and%20table%20lamp.%20Mental%20work%20with%20paper.%20Empty%20office.jpg" style="width:100%" alt="Image">
                                <p>Project 2</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="well">
                                    <p>Editing</p>
                                </div>
                                <div class="well">
                                    <p>Modeling</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="well">
                                    <p>Programing</p>
                                </div>
                                <div class="well">
                                    <p>Marketing</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="container text-center">
                        <h3>Our Partners</h3>
                        <br>
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="https://images-platform.99static.com/8FoUkYeCFkP2qp7_MXbOJdZqqag=/500x500/top/smart/99designs-contests-attachments/4/4740/attachment_4740449" class="img-responsive" style="width:100%" alt="Image">
                                <p>Programmator</p>
                            </div>
                            <div class="col-sm-2">
                                <img src="https://www.shutterstock.com/image-vector/programer-logo-code-idea-symbol-260nw-1438760342.jpg" class="img-responsive" style="width:100%" alt="Image">
                                <p>Programer</p>
                            </div>
                            <div class="col-sm-2">
                                <img src="https://images-platform.99static.com//GqiNYfr25HeRZ-I7ivnrKIe3DGg=/176x145:735x704/fit-in/500x500/99designs-contests-attachments/116/116714/attachment_116714964" class="img-responsive" style="width:100%" alt="Image">
                                <p>AltumCode</p>
                            </div>
                            <div class="col-sm-2">
                                <img src="https://images-platform.99static.com//dSQhzTpWXDcpuu9Y2xEpXV84QMg=/129x129:992x992/fit-in/500x500/99designs-contests-attachments/118/118295/attachment_118295052" class="img-responsive" style="width:100%" alt="Image">
                                <p>Codeflix</p>
                            </div>
                            <div class="col-sm-2">
                                <img src="https://i.pinimg.com/originals/4d/e4/f3/4de4f33671e2a9e1aa05d13612f0dddf.png" class="img-responsive" style="width:100%" alt="Image">
                                <p>Tankcode</p>
                            </div>
                            <div class="col-sm-2">
                                <img src="https://cdn.dribbble.com/users/1161944/screenshots/11405399/media/c184714ddf9ac81cd470a616fe2d2cf1.png?compress=1&resize=400x300" class="img-responsive" style="width:100%" alt="Image">
                                <p>Procode</p>
                            </div>
                        </div>
                    </div><br>

                    <footer class="container-fluid text-center">
                        <p>Footer Text</p>
                    </footer>

                </div>
            </div>
        </div>
    </div>
@endsection
