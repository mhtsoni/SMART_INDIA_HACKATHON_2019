<style>
* {
  box-sizing: border-box;
}

html {
  font-family: 'Lato', sans-serif;
}
body{
    background-color:#03264F;
}
.section-form {
    position:relative;
    top:40vh;
  width: 100vw;
  margin:auto;
  background-color: #214064;
  padding: 2em;
}
.section-form .intro {
  margin-bottom: 2em;
}
.section-form h1 {
  text-align: center;
  color:white;
  font-size: 1.6em;
  margin-bottom: 0.6em;
}
.section-form h2 {
  text-align: center;
  color:white;
  font-size: 1.23077em;
}

input[type=text] {
  height: 45px;
}

input[type=text], textarea {
  width: 100%;
  margin-bottom: 1em;
  font-size: .9em;
  color: #cfcece;
  font-weight: 300;
  padding: .5em 1em;
  border: none;
  color: #555555;
  font-weight: 300;
}

input[type=submit] {
  cursor: pointer;
  margin: 0;
  padding: .5em 2em;
  background: black;
  border: none;
  color: #fff;
  font-size: 1em;
  font-weight: 400;
}
@media only screen and (min-width: 1200px) {
  .section-form  {
    top:10vh;
  }
}

</style>
<div class="section-form">
  <form method="post" action="signup.php">
    <div class="intro"> 
      <h1>Just a Few Steps Away To Track Water?</h1>
      <h2>Get started today</h2>
    </div>
    <input type="text" name="username" value="" placeholder="UserName" name="name" tabindex="1"/>
    <input type="text" name="email" value="" placeholder="E-mail" name="email" tabindex="3"/>
    <input type="text" name="address" value="" placeholder="Address" name="name" tabindex="1"/>
    <input type="text" value="" name="phone" placeholder="Phone No" name="name" tabindex="1"/>
    <input type="submit" value="Sign Up" tabindex="6"/>
  </form>
</div>