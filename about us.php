<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: black;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <h2> Narayanan </h2>  
  <p>Vehicle verify with face recognition</p>
  <p>This system has veify the document to use the face recognition to give the rc to the  owner</p>
</div>

<h2 style="text-align:center">Our Works</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="bgimage/owner.jfif" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Owner</h2>
        <p class="title"> User of the vehicle</p>
        <p>Enter your details to login by the user to new rc click to apply the rc to enter all the details and face verify in self verify by you</p>
        <p>Finally admin can approval to download the rc</p>
        <br>
        <p><button class="button">user</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="bgimage/h.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Verifier</h2>
        <p class="title">Verify the document of the soft copy manually</p>
        <p>Enter the engine number to search the user details can check correct to approval</p>
        <p>The documents are not correct to reject the apply</p>
        <br>
        <br>
        <p><button class="button">verifier</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="bgimage/admin.jfif" alt="John" style="width:100%">
      <div class="container">
        <h2>Admin</h2>
        <p class="title">Smart RC will be given</p>
        <p>Admin can check the user details for two times to given the rc</p>
        <p>This system has two rc are given smart and book</p>
        <br>
        <br>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
