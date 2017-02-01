
@extends('master')
@section('content')
<div class="containter" style="width:80%;margin:auto;">
    <div class="row">
        <div class="col-md-9">
          <form class="" action="{{route('country.store')}}" method="post">
          {{csrf_field()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" style="margin:4px;" >
                            <h3 class="col pull-left">Landen - Create</h3>
                            <div class="col pull-right">
                                <input type="submit" class="btn btn-success" value="Save">
                                <a href="{{route('country.index')}}" class="btn btn-warning">Cancel</a>
                            </div>
                     </div>
                </div>
            </div>
            
        
        <table class="table table-striped list-group">
          <tr>
              <td>
                <div class="form-group{{ ($errors->has('code')) ? $errors->first('code') : '' }}">
                  <label for="code">Code:</label>
                  <input type="text" name="code" class="form-control" placeholder="Enter code Here">
                  {!! $errors->first('code','<p class="help-block">:message</p>') !!}
                </div>
              </td>
          </tr>
          <tr>
              <td>
                <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
                  <label for="code">Naam:</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name Here">
                  {!! $errors->first('name','<p class="help-block">:message</p>') !!}
                </div>
              </td>
          </tr>
          
          <tr>
              <td>
                <div class="form-group{{ ($errors->has('latitude')) ? $errors->first('latitude') : '' }}">
                  <label for="code">Lengtegraad:</label>
                  <input type="text" name="latitude" class="form-control" placeholder="Enter latitude Here">
                  {!! $errors->first('latitude','<p class="help-block">:message</p>') !!}
                </div>
              </td>
          </tr>
          
          <tr>
              <td>
                <div class="form-group{{ ($errors->has('longitude')) ? $errors->first('longitude') : '' }}">
                  <label for="code">Breedtegraad:</label>
                  <input type="text" name="longitude" class="form-control" placeholder="Enter longitude Here">
                  {!! $errors->first('longitude','<p class="help-block">:message</p>') !!}
                </div>
              </td>
          </tr>
          
          <tr>
              <td>
                <div class="form-group{{ ($errors->has('shippingcostmultiplier')) ? $errors->first('shippingcostmultiplier') : '' }}">
                  <label for="code">Verzendkosten:</label>
                  <input type="text" name="shippingcostmultiplier" class="form-control" placeholder="Enter shippingcostmultiplier Here">
                  {!! $errors->first('shippingcostmultiplier','<p class="help-block">:message</p>') !!}
                </div>
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