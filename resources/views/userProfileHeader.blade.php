 
   @section('header')
   <head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <link rel="stylesheet" href="{{ url("css/profile.css")}}">
       
   <style>
      #subPost{
    display: none;
  }
  #subPublicPost{
    display: none;
  }
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}
.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
} 
  
         @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
         :root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}.header_img img{width: 40px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}
   </style>
  
 </head>

 <body id="body-pd">
   <header class="header" id="header">
       <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
       <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
   </header>
   <div class="l-navbar" id="nav-bar">
       <nav class="nav">
           <div> <a  class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Your Profile</span> </a>
               <div class="nav_list">
                 <a href="/userProfile"   class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Profile</span> </a>

                 <a  href="" id="post" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Your Post</span> </a>

                  <a href="" id="publicPost" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Public Posts</span> </a>
               </div>
            </div> <a href="/logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>

       </nav>
   </div>
  
   <!--Container Main start-->
   <div id="subPost" >
     
    <div class="container"><br>
      <div class="row">
          <div class="col-md-12">
              @if(session('status'))
              <h6 class="alert alert-success">{{ session('status')}}</h6>
              @endif
              <div class="card">
                  <div class="card-header">
                      <h4>Add Images
                           <a href="{{ url('students')}}" class="btn btn-primary float-end">All Posts</a>
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
   </div>
   
   <div id="subPublicPost" >
    <div class="container"><br>
      <div class="row">
          <div class="col-md-12">
              <div class="">
                  <div class="">
                      <h4>Images Post
                      </h4>
                  </div>
                  <div class="">
                      <table class="">
                          <thead >
                              <tr>
                              {{$data['user']['id']}}
                                {{$data['user']['name']}}
                              </tr>
                          </thead>
                           
                        
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
   </div>
  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--Container Main end-->
    {{-- <script src="{{ url("javascripts/profile.js") }}"></script> --}}
    <script>
var post = document.getElementById('post');
  post.addEventListener('click',function(e){
    e.preventDefault();
   var profile= document.getElementById('profile') 
   profile.style.display = "none";
   var subPublicPost = document.getElementById('subPublicPost')
     subPublicPost.style.display = "none";
     var subPost = document.getElementById('subPost')
    subPost.style.display = "block";
  });

  
  var publicPost = document.getElementById('publicPost');
  publicPost.addEventListener('click',function(e){
    e.preventDefault();
   var profile= document.getElementById('profile') 
   profile.style.display = "none";
   var subPost = document.getElementById('subPost')
    subPost.style.display = "none";
     var subPublicPost = document.getElementById('subPublicPost')
     subPublicPost.style.display = "block";
  });


 
   document.addEventListener("DOMContentLoaded", function(event) {

const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

 // Your code to run since DOM is loaded and ready
});
const wrapper = document.querySelector(".wrapper");
            const fileName = document.querySelector(".file-name");
            const defaultBtn = document.querySelector("#default-btn");
            const customBtn = document.querySelector("#custom-btn");
            const cancelBtn = document.querySelector("#cancel-btn i");
            const img = document.querySelector("img");
            let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
            function defaultBtnActive(){
              defaultBtn.click();
            }
            defaultBtn.addEventListener("change", function(){
              const file = this.files[0];
              if(file){
                const reader = new FileReader();
                reader.onload = function(){
                  const result = reader.result;
                  img.src = result;
                  wrapper.classList.add("active");
                }
                cancelBtn.addEventListener("click", function(){
                  img.src = "";
                  wrapper.classList.remove("active");
                })
                reader.readAsDataURL(file);
              }
              if(this.value){
                let valueStore = this.value.match(regExp);
                fileName.textContent = valueStore;
              }
            });
    </script>
@show



@section('content')
@show
</div>
