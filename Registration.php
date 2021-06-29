

<html>
    <head>
    <meta charset="UTF-8">
     <script src="skripty/registration.js"></script>
     <link rel = "stylesheet" type="text/css" href="css/registration.css">  
    </head>

    <body>
        <!--Registrační formulář-->
        <form class="modal-content animate" action="/action_page.php">
                            <div class="imgcontainer">
                            <span onclick="document.getElementById('js_close').style.display='none'" class="close" title="Close Modal">&times;</span>
                          </div>
                      
                          <div class="container" style="background-color: rgb(230, 144, 16);">
                            <label for="uname"><b>Uživatelské jméno</b></label>
                            <input type="text" placeholder="Uživatelské jméno" name="username_reg" required>

                            <label for="uname"><b>e-mail</b></label>
                            <input type="text" placeholder="e-mail" name="email_reg" required>
                      
                            <label for="psw_reg"><b>Heslo</b></label>
                            <input type="password" placeholder="Heslo...." name="password" required>
                      
                            <button class="btn_login" type="submit">Registrace</button>
                            <label>
                              <input type="checkbox" checked="checked" name="remember"> Podmínky Registrace
                            </label>
                          </div>
                      
                          <div class="container" style="background-color:#171717">
                            <button type="button" onclick="document.getElementById('js_close').style.display='none'" class="cancelbtn">Cancel</button>
                            
                          </div>
                        </form>
                      </div>
    </body>
</html>