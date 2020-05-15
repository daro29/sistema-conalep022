@extends('general._master')
@section('title','Home')
@section('content')

        
       <br><br><br><br>
        <div class="grid">
          <div class="nested-grid">

         <div class="img-grid">
        <img src="{{ asset('/img/logo-conalep.png') }}" alt="conalep022"> 
         </div>

    <div class="datos-grid">
        <div>
           <h3 class="icon-warning">No. de Control</h2> 
           <p>16270166</p>
           <hr>
        </div>
        <div>
            <h3 class="icon-user">Nombre Completo </h2>
            <p>Ivan Miguel Chame Marroquin</p>
            <hr>
        </div>
        <div>
            <h3 class="icon-v-card">Carrera</h2>
            <p>Ptb-Informatica</p>
            <hr>
        </div>
        <div>
            <h3>Semestre Actual</h2>
            <p>6</p>
            <hr>
        </div>
    </div>

</div>

<div class="aviso-grid">

    <div>
       <h2 class="mensaje"> Mensajes</h2>
       <hr>
       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, et. 
           Exercitationem illo sunt, repudiandae sint adipisci 
           consectetur aliquid possimusasperiores qui voluptatem. 
           Ullam distinctio culpa alias quisquam sit ipsa laudantium.</p>
    </div>
    

    <div>
        <h2>AVISO A TODA LA POBLACIÓN ESTUDIANTIL</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Sed eaque consectetur vitae nam, iure quam, perferendis, amet nihil suscipit quo sequi. 
            Blanditiis libero quibusdam accusamus labore sapiente porro corrupti iure.</p>
    </div>
    
</div>

</div>
         </div>
        

        
 
@endsection
