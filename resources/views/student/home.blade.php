@extends('layouts.S_backend')
@section('title',$module)
@section('head',$module)
@section('content')

    <div class="pcoded-main-container">
        <div class="main-body">
            <div class="row">
                <div class="col-sm-10">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{$data['record']->name}}'s Dashboard</h3>
                        </div>
                        <div class="card-body">
                            {{--             main body                    --}}

                            <div class="alert alert-info mb-0" role="alert">
                                @if($users)
                                    <span>
                                        <table class="table">
                                             <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Student</th>
                                                    <th>project</th>
                                                    <th>topic</th>
                                                    <th>Feedback</th>
                                                    <th>language_tools_project_id</th>
                                                    <th>supervisor_approval_key</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                   <tr>
                                                       <td>{{$loop->index+1}}</td>
                                                       <td>{{\Illuminate\Support\Facades\DB::table('students')->where('id', $user->student_id)->value('name')}}</td>
                                                       <td>{{\Illuminate\Support\Facades\DB::table('projects')->where('id', $user->project_id)->value('title')}}</td>
                                                       <td>{{$user->topic}}</td>
                                                       <td>{{ $user->feedback }}</td>
                                                       <td>{{\Illuminate\Support\Facades\DB::table('language_tools_project')->where('id', $user->language_tools_project_id)->value('language')}}</td>
                                                       <td>
                                                           @if($user->supervisor_approval_key==0)
                                                               <span class="text-success">Pending</span>
                                                           @elseif($user->supervisor_approval_key==1)
                                                               <span class="text-danger"> Not Approved</span>
                                                           @else
                                                               <span class="text-success">Approved</span>
                                                           @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </span>
                                @endif
                            </div>

{{--                            <div>--}}
{{--                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add logs</button>--}}
{{--                                <!-- Modal -->--}}
{{--                                <div class="modal fade" id="myModal" role="dialog">--}}
{{--                                    <div class="modal-dialog">--}}
{{--                                        <!-- Modal content-->--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}

{{--                                                <h4 class="modal-title">Logs Form</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}
{{--                            --}}{{--              Pop up Form                                  --}}
{{--                                                <div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        {!!Form::open(['route' => [$base_route.'store'],'method'=>'post'])!!}--}}
{{--                                                        @include($base_view .'main_form',['button'=>'Save'])--}}
{{--                                                        {{Form::close()}}--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                            --}}{{--              Pop up Form Ends                               --}}
{{--                                            </div>--}}
{{--                                            <div class="modal-footer">--}}
{{--                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                --}}{{--             main body  ends                 --}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


