 @extends('userprofileHeader')

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
 
 <div id="profile" class="container  p-5 align-items-center  h-100">
             
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card  shadow-2-strong" style="border-radius: 1rem; box-shadow: gray 0 0 20px;">
          <div class="card-body p-5 text-center">
            <h1>User Details</h1> 
            <hr class="my-3" > 
      <div class="Customerdetails">
               <div class="container">
                       <div id="resp-table-header">
                           <div id="table-header-cell">Id</div> 
                           <div id="table-header-cell">Name</div>
                           <div id="table-header-cell">Email</div>
                           <div id="table-header-cell"> Gender</div>
                           <div id="table-header-cell">Phone No.</div>
                           <div id="table-header-cell">Edit</div>
                       </div><br>
                 <div id="resp-table-body">
                   <div class="resp-table-row">
                       <div class="table-body-cell">
                          {{$data['user']['id']}}
                       </div>
                       <div class="table-body-cell"> 
                         {{$data['user']['name']}}
                       </div>
                       <div class="table-body-cell">
                          {{$data['user']['email']}}
                       </div>
                       <div class="table-body-cell">
                          {{$data['user']['gender']}}
                       </div>
                       <div class="table-body-cell">
                          {{$data['user']['phone']}}
                       </div>
                       <div>
                           <a href="{{ url('edituser/'.$data['user']['id']) }}" class="btn btn-primary" >Edit</a>
                       </div>
        </div>
               </div> 
           </div> 
       </div>
      </div> 
    </div> 
</div>
</div> 
</div>
 @endSection