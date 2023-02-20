@extends('layouts.backend')
@section('title',$module.'List')
@section('head',$module)
@section('content')
{{--    <div class="col-md-6 col-lg-3">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <h5>To Check</h5>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <div class="col-md-6 col-lg-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <div class="container">--}}
{{--                                <h2>Modal Example</h2>--}}
{{--                                <!-- Trigger the modal with a button -->--}}
{{--                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}
{{--                                <!-- Modal -->--}}
{{--                                <div class="modal fade" id="myModal" role="dialog">--}}
{{--                                    <div class="modal-dialog">--}}
{{--                                        <!-- Modal content-->--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                                                <h4 class="modal-title">Modal Header</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}
{{--                                                <p>Some text in the modal.</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-footer">--}}
{{--                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h5>To Check2</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h5>To Check3</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-md-6 col-lg-3">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <h5>In Progress</h5>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <ol>--}}
{{--                    <li>Lorem ipsum dolor sit amet</li>--}}
{{--                    <li>Consectetur adipiscing elit</li>--}}
{{--                    <li>Integer molestie lorem at massa</li>--}}
{{--                    <li>Facilisis in pretium nisl aliquet</li>--}}
{{--                    <li>Nulla volutpat aliquam velit--}}
{{--                        <ul>--}}
{{--                            <li>Phasellus iaculis neque</li>--}}
{{--                            <li>Purus sodales ultricies</li>--}}
{{--                            <li>Vestibulum laoreet porttitor sem</li>--}}
{{--                            <li>Ac tristique libero volutpat at</li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>Faucibus porta lacus fringilla vel</li>--}}
{{--                    <li>Aenean sit amet erat nunc</li>--}}
{{--                    <li>Eget porttitor lorem</li>--}}
{{--                </ol>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-md-6 col-lg-3">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <h5>Feedback</h5>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <ol>--}}
{{--                    <li>Lorem ipsum dolor sit amet</li>--}}
{{--                    <li>Consectetur adipiscing elit</li>--}}
{{--                    <li>Integer molestie lorem at massa</li>--}}
{{--                    <li>Facilisis in pretium nisl aliquet</li>--}}
{{--                    <li>Nulla volutpat aliquam velit--}}
{{--                        <ul>--}}
{{--                            <li>Phasellus iaculis neque</li>--}}
{{--                            <li>Purus sodales ultricies</li>--}}
{{--                            <li>Vestibulum laoreet porttitor sem</li>--}}
{{--                            <li>Ac tristique libero volutpat at</li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>Faucibus porta lacus fringilla vel</li>--}}
{{--                    <li>Aenean sit amet erat nunc</li>--}}
{{--                    <li>Eget porttitor lorem</li>--}}
{{--                </ol>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-md-12 col-lg-3">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <h5>Complete</h5>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <ul class="list-unstyled">--}}
{{--                    <li>Lorem ipsum dolor sit amet</li>--}}
{{--                    <li>Integer molestie lorem at massa--}}
{{--                        <ul>--}}
{{--                            <li>Phasellus iaculis neque</li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>Faucibus porta lacus fringilla vel</li>--}}
{{--                    <li>Eget porttitor lorem</li>--}}
{{--                </ul>--}}
{{--                <h5>Inline</h5>--}}
{{--                <hr>--}}
{{--                <ul class="list-inline m-b-0">--}}
{{--                    <li class="list-inline-item">Lorem ipsum</li>--}}
{{--                    <li class="list-inline-item">Phasellus iaculis</li>--}}
{{--                    <li class="list-inline-item">Nulla volutpat</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsectionma
@section('js')
@endsection
