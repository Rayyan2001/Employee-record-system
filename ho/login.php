
   
<link rel="stylesheet" href="index.css">
<div class="loginpage">
        <div id='login-form' class="login-page">
            <div class="form-box">
                <div class="button-box">
                    <div class="btn1"></div>
                    <button type="button" onclick='login()' class="toggle-btn">Admin</button>
                    <button type="button" onclick='register()' class="toggle-btn">Employee</button>
                   
                </div>
                <form id="login" class="input-group-login" >
                    <input type="text" class="input-field" placeholder="Admin Id" required>
                    <input type="password" class="input-field" placeholder="Password" required>
                    
                  <br>  <button type="submit" class="submit-btn">Log In</button>
                </form> 
                <form id="register" class="input-group-register">
                    <input type="text" class="input-field" placeholder="Employee Id" required>
                    <input type="password" class="input-field" placeholder="Password" required>
                    
                   <br> <button type="submit" class="submit-btn">Log In</button>
                </form> 
            </div>
        </div>
</div>

<script>
    var x= document.getElementById('login');
    var y= document.getElementById('register');
    var z= document.getElementById('btn');
    function register()
    {
        x.style.left='-400px';
        y.style.left='50px';
        z.style.left='110px';
    }
    function login()
    {
        x.style.left='50px';
        y.style.left='450px';
        z.style.left='0px';
    }

</script>

<script>
    var m= document.getElementById('login-form');
    window.onclick= function (e) {
        if(e.target==m)
        {
            m.style.display="none";
        }
    }
</script>    