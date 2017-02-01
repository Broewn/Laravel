@extends('master')
@section('content')
<div class="containter" style="width:80%;margin:auto;">
    <div class="row">
        <div class="col-md-9">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" style="margin:4px;" >
                            <h3 class="col pull-left">Producten</h3>
                            <div class="col pull-right">
                                <form class="" action="{{route('product.destroy',$product->id)}}" method="post">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('product.create')}}" class="btn btn-primary">Create</a>
                                  <input type="submit" class="btn btn-danger" onclick="return confirm('Bent u zeker?');" name="name" value="Delete">
                                   <a href="{{route('product.index')}}" class="btn btn-warning">Cancel</a>
                                </form>
                            </div>
                     </div>
                </div>
            </div>
            
            <table class="table table-striped list-group">
          <tr><td>
              <label for="name">Naam:</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" readonly>
          </td></tr>
          <tr><td>
              <label for="description">Omschrijving:</label>
              <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}" readonly>
          </td></tr>
          <tr><td>
              <label for="price">Prijs:</label>
              <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}" readonly>
          </td></tr>
          <tr><td>
              <label for="shippingcost">Verzendkosten:</label>
              <input type="text" class="form-control" id="shippingcost" name="shippingcost" value="{{$product->shippingcost}}" readonly>
          </td></tr>
          <tr><td>
              <label for="totalrating">Totaal rating:</label>
              <input type="text" class="form-control" id="totalrating" name="totalrating" value="{{$product->totalrating}}" readonly>
          </td></tr>
          <tr><td>
              <label for="thumbnail">Miniatuur:</label>
              <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="{{$product->thumbnail}}" readonly>
          </td></tr>
          <tr><td>
              <label for="image">Afbeelding:</label>
              <input type="text" class="form-control" id="image" name="image" value="{{$product->image}}" readonly>
          </td></tr>
          <tr><td>
              <label for="discountpercentage">Aanbeidingspercent:</label>
              <input type="text" class="form-control" id="discountpercentage" name="discountpercentage" value="{{$product->discountpercentage}}" readonly>
          </td></tr>
          
          <tr><td>
              <label for="votes">Stemmen:</label>
              <input type="text" class="form-control" id="votes" name="votes" value="{{$product->$product}}" readonly>
          </td></tr>
          
          <tr><td>
              <label for="idcategory">Categorie:</label>
              <select id="idcategory" class="form-control" name="idcategory" value="{{$category->name}}" readonly>
              </select>
          </td></tr>
                
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
                            @foreach($products as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>
                                      <a href="{{route('product.show',$item->id)}}" class="btn btn-primary">Select</a> </form>
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
