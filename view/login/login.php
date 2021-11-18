<?php include "./header.php" ?>


<main style="width:1450px; margin:auto; padding:auto;">
        
        <section style="margin-bottom: 100px;">
            <span class="back">
                <a href="#">Home</a>    /   <span style="padding-left:10px ">Page</span> 
            </span>
            <div class="user">
                <div>
                    <h2 class="login">Login</h2>
                    <h5>Enter your username and password to login.</h5>
                    <form action="">
                        <label for="username" class="label">Username or mail</label><br>
                        <input type="text" name="user" class="input"><br>
                        <label for="password" class="label">Password</label><br>
                        <input type="password" name="pass" class="input"><br>
                        <div class="pass">
                            <div>
                                <label for="remember" class="remember">
                                <input type="checkbox" name="remember" class="check" id="remember" value="remember"><span class="text-remem">Remember Me</span> 
                                </label>
                            </div>
                            <div>
                                <a href="#" class="lost">Lost Password?</a>
                            </div>
                        </div>
                        <input type="submit" class="sm-login" value="Login">
                    </form>
                </div>
                <!-- login -->
                <div>
                    <h2 class="login">Register</h2>
                    <h5>Fill out the form below to register account.</h5>
                    <form action="">
                        <label for="username" class="label">Email Address</label><br>
                        <input type="text" name="user" class="input"><br>
                        <label for="password" class="label">Password</label><br>
                        <input type="password" name="pass" class="input"><br>
                        <input type="submit" class="sm-login" value="Register">
                    </form>
                </div>
                <!-- Register -->
            </div>
        </section>        
        <br>
    </main>

<?php include "./footer.php" ?>