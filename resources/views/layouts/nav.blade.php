



 <div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
         <nav class ="nav blog=nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/login">Sign in</a>
            <a class="nav-link" href="/logout">Sign out</a>
            
                
        </nav>
        
    </div>
</div>

<div class= "blog-masthead">
    <div class =" container">
        <nav class ="nav blog=nav">
           
            @if (Auth::check())
               <a class="nav-link ml-auto" href="#">Welcome {{Auth::user()->name}}!</a>
            @endif
        </nav>
    </div>
</div>