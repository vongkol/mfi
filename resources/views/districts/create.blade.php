@extends("layouts.parameter")
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Create District</strong>&nbsp;&nbsp;
                    <a href="{{url('/district')}}" class="text-success"><i class="fa fa-arrow-left"></i> Back</a>

                </div>
                <div class="card-block">
                    @if(Session::has('sms'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div>
                                {{session('sms')}}
                            </div>
                        </div>
                    @endif
                    @if(Session::has('sms1'))
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div>
                                {{session('sms1')}}
                            </div>
                        </div>
                    @endif
                    <form action="{{url('/district/save')}}" class="form-horizontal" method="post" onsubmit="return confirm('You want to save?')">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="code" class="control-label col-sm-3 lb">code <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="{{old('code')}}" name="code" id="code" required>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label for="name" class="control-label col-sm-3 lb">Name <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name" required>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="province_id" class="control-label col-sm-3 lb">Province <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                       <select name="province_id" id="province_id" class="form-control">
                                        @foreach($provinces as $pro)
                                            <option value="{{$pro->id}}">{{$pro->name}}</option>
                                        @endforeach
                                       </select>
                                       
                                        <p style="margin-top: 9px">
                                            <button class="btn btn-primary btn-flat" type="submit">Save</button>
                                            <button class="btn btn-danger btn-flat" type="reset">Cancel</button>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                               
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset("chosen/chosen.jquery.js")}}"></script>
    <script src="{{asset("chosen/chosen.proto.js")}}"></script>
    <script>
        $(document).ready(function () {
            $("#siderbar li a").removeClass("current");
            $("#district").addClass("current");
            $("#province_id").chosen();
        });
    </script>

@endsection