@extends('master')
@section('content')
<style>
    .container{
        width:80%;
        height:80%;
    }
    
    .rij{
        width:100%;
        
        float:left;
    }
    
    .tegel{
        width:25%;
        height:200px;
        background-color: #337AB7;
        text-align: center;
        vertical-align: middle;
        float:left;
        color: white;
        border:solid white 0.3em;
    }
    .tegelgroot{
        width:50%;
        height:200px;
        background-color: #337AB7;
        text-align: center;
        float:left;
        vertical-align: middle;
        color: white;
    }
    .e:hover{
           background-color:white;
           color:#337AB7;
    }
</style>
    
<div class="container">
        
        <!-- RIJ 1 -->
        <!-- RIJ 1 -->
        <!-- RIJ 1 -->
        
        <div class="rij">
        
        <a href="/product" >
        <div class="tegel e">
            
                <h2>Product</h2>
            
        </div>
        </a>
        
        <a href="" >
        <div class="tegel e">
            
                <h2>Leverancier</h2>
            
        </div>
        </a>
        
        <a href="" >
        <div class="tegelgroot">
            
                <img src='{{URL::to("images/image1.jpg")}}' width="100%"; height="100%"/>
            
        </div>
        </a>
        
        </div>
        
        <!-- RIJ 2 -->
        <!-- RIJ 2 -->
        <!-- RIJ 2 -->
        
        <div class="rij">
        
        <a href="/customer" >
        <div class="tegel e">
            
                <h2>Klant</h2>
            
        </div>
        </a>
        
        <a href="" >
        <div class="tegel">
            
                <img src='{{URL::to("images/image2.jpg")}}' width="100%"; height="100%"/>
            
        </div>
        </a>
        
        <a href="" >
        <div class="tegel e">
            
                <h2>Bestelling</h2>
            
        </div>
        </a>
        
        <a href="" >
        <div class="tegel e">
            
                <h2>Bestel items</h2>
            
        </div>
        </a>
        </div>
        
        
        <!-- RIJ 3 -->
        <!-- RIJ 3 -->
        <!-- RIJ 3 -->
        
        
        <div class="rij">
        <a href="" >
        <div class="tegel e">
            
                <img src='{{URL::to("images/image3.jpg")}}' width="100%"; height="100%"/>
            
        </div>
        </a>
        
        <a href="/country" >
        <div class="tegel e">
            
                <h2>Land</h2>
            
        </div>
        </a>
        
        <a href="" >
        <div class="tegel e">
            
                <h2>Bestelling status</h2>
            
        </div>
        </a>
        
         <a href="/category" >
        <div class="tegel e">
            
                <h2>Categorie</h2>
            
        </div>
        </a>
        </div>
</div>

@stop