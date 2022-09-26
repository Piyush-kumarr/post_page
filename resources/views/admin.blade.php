@extends('adminHeader')

@section('content')
 
<style>
    .container{
display: table;

}

#resp-table-header{
display: table-header-group;

}

#table-header-cell{
display: table-cell;

padding: 20px 30px 20px 0px; 
} 

#resp-table-body{
display: table-row-group;

}

.resp-table-row{
display: table-row;

} 



.table-body-cell{
display: table-cell;
 

}
</style>
 

<div>

<div class="Customerdetails">
     <h1>Users Details</h1> 

        <div class="container "> 
            
                <div id="resp-table-header">
                    <div id="table-header-cell">Id</div> 
                    <div id="table-header-cell">Name</div>
                    <div id="table-header-cell">Email</div>
                    <div id="table-header-cell"> Gender</div>
                    <div id="table-header-cell">Phone No.</div>
                    <div id="table-header-cell">Edit</div>
              </div>
               


              {{-- <div>Name:{{$data['user'] }}</div> --}}
           <div id="resp-table-body">
            <div class="resp-table-row ">
               @foreach($user as $u)
                <div class="table-body-cell">
                   {{$u->id}}
                </div>
                <div class="table-body-cell"> 
                   {{$u->name}}
                </div>
                <div class="table-body-cell">
                   {{$u->email}}
                </div>
                <div class="table-body-cell">
                   {{$u->gender}}
                </div>
                <div class="table-body-cell">
                   {{$u->phone}}
                </div>
                <div>
                    <a href="/adminedit" class="btn btn-primary" >Edit</a>
                </div>
            </div>
            @endforeach
        </div> 
    </div> 
</div>
  
@endSection 