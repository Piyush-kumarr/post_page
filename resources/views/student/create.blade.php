<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 



<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h6 class="alert alert-success">{{ session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Add Images
                        <a href="{{ url('students')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                   
                    <form   action="{{ url('add-student')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" id="addUser" class="btn btn-primary">save User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// var addUser = document.getElementById('addUser');
// addUser.addEventListener('click',function(e){
//     e.preventDefault();
//  const _token = document.getElementsByName("_token")[0].value;

//     var title = document.getElementsByName('title')[0];
//     var description = document.getElementsByName('description')[0];
//     var image = document.getElementsByName('image')[0];

//     xhttp = new XMLHttpRequest();
//   xhttp.open("POST","/saveUser",true);
//   xhttp.setRequestHeader("Content-Type", "application/json");
//   xhttp.setRequestHeader("X-CSRF-Token", _token);
  
//   xhttp.onreadystatechange = function(){
//     if (this.readyState == 4 && this.status == 200){
//         JSON.parse(this.responseText);
//     }

//   data = {
//     title:title.value,
//     description:description.value,
//     image:image.value
//   };
// xhttp.send(JSON.stringify(data));
//   }
// })
</script>