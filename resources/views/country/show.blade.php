@extends('master')
@section('content')
<div class="containter" style="width:80%;margin:auto;">
    <div class="row">
        <div class="col-md-9">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" style="margin:4px;" >
                            <h3 class="col pull-left">Landen</h3>
                            <div class="col pull-right">
                                <form class="" action="{{route('country.destroy',$country->id)}}" method="post">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <a href="{{route('country.edit',$country->id)}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('country.create')}}" class="btn btn-primary">Create</a>
                                  <input type="submit" class="btn btn-danger" onclick="return confirm('Bent u zeker?');" name="name" value="Delete">
                                   <a href="{{route('country.index')}}" class="btn btn-warning">Cancel</a>
                                
                            </div>
                     </div>
                </div>
            </div>
            
            <table class="table table-striped list-group">
                <tr>
                    <td>
                        <label for="code">Code:</label>
                        <input type="text"  class="form-control" id="code" name="code" value="{{$country->code}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="name">Naam:</label>
                        <input type="text" class="form-control"  id="name" name="name" value="{{$country->name}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="longitude">Lengtegraad:</label>
                        <input type="text" class="form-control"  id="longitude" name="longitude" value="{{$country->longitude}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="latitude">Breedtegraad:</label>
                    <input type="text" class="form-control"  id="latitude" name="latitude" value="{{$country->latitude}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="shippingcostmultiplier">Verzendkosten:</label>
                        <input type="text" class="form-control"  id="shippingcostmultiplier" name="shippingcostmultiplier" value="{{$country->shippingcostmultiplier}}" readonly>
                    </td>
                </tr>
                
            </table>
            </form>
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