@extends('master')


@section('content')
     



<section class="section">
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col md-4">
                 <form class="form control text-centre" method=POST action="/updatetasks">
<input type="text" name="id" value={{$tasks->id}}>
                    {{ csrf_field() }}
             <div class="form group">
                 <input class="input control" type="text" name="title" value={{$tasks->title}} placeholder="Enter title">
                     </div>
             <div class="form group">
                 <textarea name="description" placeholder="Enter description">{{$tasks->description}}</textarea>
                 </div>
             <div class="form group">
                 <input class="input control" type="date" name="date" value={{$tasks->date}} placeholder="Date">
                    </div>
             <div class="form group">
                 <input class="input control" type="time" name="time" value={{$tasks->time}} placeholder="Time">
                     </div>
             <div class="form group">
                 <input  type="submit" value="edit" >
                     </div>
                     </div>
                     <div class="col-md-4"></div>
</div>
</div>  
</section>
    </body></html>

@endsection
