
@extends('master')
@section('content')
<div class="containter" style="width:80%;margin:auto;">
    <div class="row">
        <div class="col-md-9">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" style="margin:4px;" >
                            <h3 class="col pull-left">Categorie</h3>
                            <div class="col pull-right">
                                <form class="" action="{{route('category.destroy',$category->id)}}" method="post">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('category.create')}}" class="btn btn-primary">Create</a>
                                  <input type="submit" class="btn btn-danger" onclick="return confirm('Bent u zeker?');" name="name" value="Delete">
                                   <a href="{{route('category.index')}}" class="btn btn-warning">Cancel</a>
                                </form>
                            </div>
                     </div>
                </div>
            </div>
            
            <table class="table table-striped list-group">
                <tr>
                    <td>
                        <label for="name">Naam:</label>
                    <input type="text" class="form-control"  id="name" name="name" value="{{$category->name}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description">Omschrijving:</label>
                    <input type="text"  class="form-control" id="description" name="description" value="{{$category->description}}" readonly>
                    </td>
                </tr>
            </table>
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