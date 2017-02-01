@extends('master')
@section('content')
<div class="containter" style="width:80%;margin:auto;">
    <div class="row">
        <div class="col-md-9">
          <form class="" action="{{route('category.store')}}" method="post">
          {{csrf_field()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" style="margin:4px;" >
                            <h3 class="col pull-left">Categorie - Create</h3>
                            <div class="col pull-right">
                                <input type="submit" class="btn btn-success" value="Save">
                                <a href="{{route('category.index')}}" class="btn btn-warning">Cancel</a>
                            </div>
                     </div>
                </div>
            </div>
            
        
        <table class="table table-striped list-group">
          <tr>
              <td>
                <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
                  <label for="name">Naam:</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name Here">
                  {!! $errors->first('name','<p class="help-block">:message</p>') !!}
                </div>
              </td>
          </tr>
          <tr>
              <td>
                <div class="form-group{{ ($errors->has('description')) ? $errors->first('description') : '' }}">
                  <label for="description">Omschrijving:</label>
                  <input type="text" name="description" class="form-control" placeholder="Enter description Here">
                  {!! $errors->first('description','<p class="help-block">:message</p>') !!}
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
                                <td>Naam</td>
                                <td>Acties</td>
                            </tr>
                            @foreach($categories as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>
                                      <a href="{{route('category.show',$item->id)}}" class="btn btn-primary">Select</a> </form>
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