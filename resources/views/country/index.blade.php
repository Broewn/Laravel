@extends('master')
@section('content')
<div class="containter" style="width:80%;margin:auto;">
    <div class="row">
        <div class="col-md-9">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" style="margin:4px;" >
                            <h3 class="col pull-left">Landen</h3>
                             <a href="{{route('country.create')}}" class="btn btn-primary col pull-right">Create</a>
                     </div>
                </div>
            </div>
            
           
        </div>
        
        <div class ="row">
            <div class="col-md-3 col pull-right">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <table class="table table-striped list-group">
                            <tr>
                                <td>Land</td>
                                <td>Acties</td>
                            </tr>
                            @foreach($countries as $item)
                            
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>
                                      <a href="{{route('country.show',$item->id)}}" class="btn btn-primary">Select</a> </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
            
    </div>
</div>


@stop