@extends('master')
@section('content')
<div class="containter" style="width:80%;margin:auto;">
    <div class="row">
        <div class="col-md-9">
          <form method="post" action="{{ route('category.update',$category->id) }}">
          {{csrf_field()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" style="margin:4px;" >
                            <h3 class="col pull-left">Category - Edit</h3>
                            <div class="col pull-right">
                                <input type="submit" class="btn btn-success" value="Save">
                                <a href="{{route('category.index')}}" class="btn btn-warning">Cancel</a>
                            </div>
                     </div>
                </div>
            </div>
            
        <input type="hidden" name="_method" value="PUT">
        <table class="table table-striped list-group">
          <tr>
              <td>
                    <label for="name">Naam:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
              </td>
          </tr>
          <tr>
              <td>
                    <label for="description">Omschrijving:</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{$category->description}}">
              </td>
          </tr>
          
        </table>
        
      </form>
          <textarea rows="2" class="textarea" readonly>
        @if(count($errors) > 0)
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        @endif
    </textarea>
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