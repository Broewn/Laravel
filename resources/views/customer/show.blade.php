

@extends('master')
@section('content')
<div class="containter" style="width:80%;margin:auto;">
    <div class="row">
        <div class="col-md-9">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" style="margin:4px;" >
                            <h3 class="col pull-left">Klanten</h3>
                            <div class="col pull-right">
                                <form class="" action="{{route('customer.destroy',$customer->id)}}" method="post">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <a href="{{route('customer.edit',$customer->id)}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('customer.create')}}" class="btn btn-primary">Create</a>
                                  <input type="submit" class="btn btn-danger" onclick="return confirm('Bent u zeker?');" name="name" value="Delete">
                                   <a href="{{route('customer.index')}}" class="btn btn-warning">Cancel</a>
                            </div>
                     </div>
                </div>
            </div>
            
            <table class="table table-striped list-group">
            <tr>
                <td>
                  <label for="nickname">Roepnaam:</label>
                  <input type="text" class="form-control" id="nickname" name="nickname" value="{{ $customer->nickname }}" readonly>
                  
                </td>
            </tr>
          
            <tr>
                <td>
              <label for="firstname">Voornaam:</label>
              <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $customer->firstname }}" readonly>
                </td>
            </tr>
          
            <tr>
                <td>
              <label for="lastname">Achternaam:</label>
              <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $customer->lastname }}" readonly>
                </td>
            </tr>
          
            <tr>
                <td>
              <label for="address1">Adres 1:</label>
              <input type="text" class="form-control" id="address1" name="address1" value="{{ $customer->address1 }}" readonly>
                </td>
            </tr>
          
            <tr>
                <td>
              <label for="address2">Adres 2:</label>
              <input type="text" class="form-control" id="address2" name="address2" value="{{ $customer->address2 }}" readonly>
                </td>
            </tr>
          
            <tr>
                <td>
              <label for="city">Stad:</label>
              <input type="text" class="form-control" id="city" name="city" value="{{ $customer->city }}" readonly>
                </td>
            </tr>
          
            <tr>
                <td>
              <label for="region">Regio:</label>
              <input type="text" class="form-control" id="region" name="region" value="{{ $customer->region }}" readonly>
                </td>
            </tr>
          
            <tr>
                <td>
              <label for="postalcode">Postcode:</label>
              <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ $customer->postalcode }}" readonly>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="idcountry">Land:</label>
                    <input type="text" name="idcountry" id="idcountry" class="form-control" value="{{ $country->name }}" readonly>
                </td>
            </tr>
          
          <tr>
                    <td>
              <label for="phone">Telefoon:</label>
              <input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}" readonly>
                </td>
            </tr>
            <tr>
                <td>
              <label for="mobile">Mobieltje:</label>
              <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $customer->mobile }}" readonly>
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