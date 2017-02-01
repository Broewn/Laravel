
@extends('master')
@section('content')
<div class="containter" style="width:80%;margin:auto;">
    <div class="row">
        <div class="col-md-9">
          <form class="" action="{{route('customer.store')}}" method="post">
          {{csrf_field()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" style="margin:4px;" >
                            <h3 class="col pull-left">Klanten - Create</h3>
                            <div class="col pull-right">
                                <input type="submit" class="btn btn-success" value="Save">
                                <a href="{{route('customer.index')}}" class="btn btn-warning">Cancel</a>
                            </div>
                     </div>
                </div>
            </div>
            
        
        <table class="table table-striped list-group">
          <tr><td>
              <label for="nickname">Roepnaam:</label>
              <input type="text" class="form-control" id="nickname" name="nickname">
          </td></tr>
          
          <tr><td>
              <label for="firstname">Voornaam:</label>
              <input type="text" class="form-control" id="firstname" name="firstname">
          </td></tr>
          
          <tr><td>
              <label for="lastname">Achternaam:</label>
              <input type="text" class="form-control" id="lastname" name="lastname">
          </td></tr>
          
          <tr><td>
              <label for="address1">Adres 1:</label>
              <input type="text" class="form-control" id="address1" name="address1">
          </td></tr>
          
          <tr><td>
              <label for="address2">Adres 2:</label>
              <input type="text" class="form-control" id="address2" name="address2">
          </td></tr>
          
          <tr><td>
              <label for="city">Stad:</label>
              <input type="text" class="form-control" id="city" name="city">
          </td></tr>
          
          <tr><td>
              <label for="region">Regio:</label>
              <input type="text" class="form-control" id="region" name="region">
          </td></tr>
          
          <tr><td>
              <label for="postalcode">Postcode:</label>
              <input type="text" class="form-control" id="postalcode" name="postalcode">
          </td></tr>
          
           <tr><td>
              <label for="idcountry">Land:</label>
              <select id="idcountry" class="form-control" name="idcountry">
                  @foreach ($countries as $item)
                      <option value="{{$item->id}}" >{{$item->name}}</option>
                  @endforeach
              </select>
          </td></tr>
          
          <tr><td>
              <label for="phone">Telefoon:</label>
              <input type="text" class="form-control" id="phone" name="phone">
          </td></tr>
           <tr><td>
              <label for="mobile">Mobieltje:</label>
              <input type="text" class="form-control" id="mobile" name="mobile">
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
                                <td>Achternaam</td>
                                <td>Acties</td>
                            </tr>
                            @foreach($customers as $item)
                            
                            <tr>
                                <td>{{$item->firstname}}</td>
                                <td>{{$item->lastname}}</td>
                                <td>
                                      <a href="{{route('customer.show',$item->id)}}" class="btn btn-primary">Select</a>
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