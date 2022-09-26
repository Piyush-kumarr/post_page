<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 


<div class="container ml-5" style="background-color:rgb(240,242,245); " >
    <div class="row  justify-content-center">
        <div class="col-md-5 p-2">
            <div class="card" style="border-radius: 1rem; box-shadow: gray 0 0 20px;">
                <div class="card-header bg-primary bg-gradient ">
                    <h1>Facebook</h1>
                    </div>
                    <div class="card-body" style="border-radius: 1rem; box-shadow: gray 0 0 20px;">
                        <table class="table  table-stripped ">
                            <thead>
                                <tr>
                                <tbody> 
                             {{--   {{$data['user']['id']}}
                                {{$data['user']['name']}}--}}
                            @foreach($post as $p)
                                <tr>
 
                                <td>{{$p->title}}</td> 
                                </tr>      
                            </thead> 
                                 <td>
                                    <img src="{{ asset('upload/images/'.$p->images)}}" width="410px" height="300px"  alt="Images">
                                </td>
                                
                            </tbody>
                            <td >{{$p->description}}</td>
          
                        </table>
                        <div>
    <button class="btn btn-dark" id="primary">Like</button>
    <button class="btn btn-dark" id="danger">Dislike</button> 
  </div> 
  @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>
  <script>
    let btnPrimary = document.querySelector('#primary');
let btnDanger = document.querySelector('#danger');

btnPrimary.addEventListener('click', () => btnPrimary.style.backgroundColor = '#337ab7')
btnDanger.addEventListener('click', () => btnDanger.style.backgroundColor = '#c9302c')
  </script>