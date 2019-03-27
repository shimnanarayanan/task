



  
        @extends('master')


        @section('content')
             
       
   

   <section class="section">
   <div class="container">
   <div class="row">
   <div class="col-md-4"></div>
   <div class="col md-4">
                         <form class="form control text-centre" method=POST actions='/tasks'>

                            {{ csrf_field() }}
                     <div class="form group">
                         <input class="input control" type="text" name="title" placeholder="Enter title">
                             </div>
                     <div class="form group">
                         <textarea name="description" placeholder="Enter description"></textarea>
                         </div>
                     <div class="form group">
                         <input class="input control" type="date" name="date" placeholder="Date">
                            </div>
                     <div class="form group">
                         <input class="input control" type="time" name="time" placeholder="Time">
                             </div>
                     <div class="form group">
                         <input  type="submit" value="submit" >
                             </div>
                             </div>
                             <div class="col-md-4"></div>
   </div>
   </div>
   </section>

<section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10"> 
<table class="table table-striped text-center">
     <tr>
        <th>slno</th>
        <th>title</th>
        <th>description</th>
        <th>date</th>
        <th>time</th>
        

        <th>edit</th>
        <th>finish</th>
        <th>delete</th>
        </tr>

         @foreach($tasks as $key=>$t)
         @if($t->status==1)

            <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $t->title}}</td>
            <td>{{ $t->description}}</td>
            <td>{{ $t->date}}</td>
            <td>{{ $t->time}}</td>
            {{-- <td>{{$t->status}}</td>  --}}

            {{-- <td><button class="btn btn-success" >EDIT</button></td> --}}
             <td><a href="/tasks/{{$t->id}}" class="btn btn-success" >EDIT</a></td>
            <td><a href="/finish/{{$t->id}}" class="btn btn-warning">FINISH</a></td>
            <td><a href="/delete/{{$t->id}}"class="btn btn-danger">DELETE</a></td>
            </tr>
            @endif
@endforeach
</table>
<div class="col-md-1"></div>

</div>
</div>
</section>

@endsection


