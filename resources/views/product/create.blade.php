@extends('master')
@section('content')
<div class="containter" style="width:80%;margin:auto;">
    <div class="row">
        <div class="col-md-9">
          <form class="" action="{{route('product.store')}}" method="post">
          {{csrf_field()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" style="margin:4px;" >
                            <h3 class="col pull-left">Producten - Create</h3>
                            <div class="col pull-right">
                                <input type="submit" class="btn btn-success" value="Save">
                                <a href="{{route('product.index')}}" class="btn btn-warning">Cancel</a>
                            </div>
                     </div>
                </div>
            </div>
            
        
        <table class="table table-striped list-group">
                   <tr><td>
              <label for="name">Naam:</label>
              <input type="text" class="form-control" id="name" name="name">
          </td></tr>
          <tr><td>
              <label for="description">Omschrijving:</label>
              <input type="text" class="form-control" id="description" name="description">
          </td></tr>
          <tr><td>
              <label for="price">Prijs:</label>
              <input type="text" class="form-control" id="price" name="price">
          </td></tr>
          <tr><td>
              <label for="shippingcost">Verzendkosten:</label>
              <input type="text" class="form-control" id="shippingcost" name="shippingcost">
          </td></tr>
          <tr><td>
              <label for="totalrating">Totaal rating:</label>
              <input type="text" class="form-control" id="totalrating" name="totalrating">
          </td></tr>
          <tr><td>
              <label for="thumbnail">Miniatuur:</label>
              <input type="text" class="form-control" id="thumbnail" name="thumbnail">
          </td></tr>
          <tr><td>
              <label for="image">Afbeelding:</label>
              <input type="text" class="form-control" id="image" name="image">
          </td></tr>
          <tr><td>
              <label for="discountpercentage">Aanbeidingspercent:</label>
              <input type="text" class="form-control" id="discountpercentage" name="discountpercentage">
          </td></tr>
          
          <tr><td>
              <label for="votes">Stemmen:</label>
              <input type="text" class="form-control" id="votes" name="votes">
          </td></tr>
          
          <tr><td>
              <label for="idcategory">Categorie:</label>
              <select id="idcategory" class="form-control" name="idcategory">
                  @foreach ($categories as $item)
                      <option value="{{$item->id}}" >{{$item->name}}</option>
                  @endforeach
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
                                <td>Naam</td>
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