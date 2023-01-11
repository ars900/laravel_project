@extends('layouts.app')

@section('content')
    <div class = "bgmain">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="container ">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Welcome to group page</h2>
                                <form method="POST" action="{{ route('makegroup') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="groupname" class="col-md-4 col-form-label text-md-end">{{ __('Groupname') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('groupname') is-invalid @enderror" name="name" value="{{ old('groupname') }}" required autocomplete="name" autofocus>

                                            @error('groupname')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" data-user-id="{{Auth::user()->id}}" class="btn btn-primary">
                                                {{ __('Add Group') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <a href ="{{ route('gogroup') }}"type="submit" data-user-id="{{Auth::user()->id}}" class="btn btn-primary">
                                    {{ __('Already Added Groups') }}
                                </a>
                            </div>
                            <div class = "col-sm-2">
                                    <div class = "groups">
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
