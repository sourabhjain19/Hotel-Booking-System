<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="form">
      <form action="process.php" method="post">
        <p>
          <label>Username</label>
          <input type="text" id="user" name="user" />
            <select name='option'>
              <option value='SiteManager'>Site Manager</option>
              <option value='HotelManager'>Hotel Manager</option>
              <option value='User'>User</option>
            </select>
        </p>
        <p>
          <label>Password</label>
          <input type="password" id="pass" name="pass" />
        </p>
        <p>
       New users are requested to register
        </p>
        <p>
          <input type="submit" id="btn" name="Login" />
        </p>
      </form>
  </div>

<form id='register' action='register.php' method='post'>
  <p>
  <label>Name</label>
  <input type="text" id="cname" name="cname" />
  </p>
  <p>
  <label>Username</label>
  <input type="text" id="user" name="user" />
  </p>
  <p>
  <label>Password</label>
  <input type="password" id="pass" name="pass" />
  </p>
  <p>
  <label>Age</label>
  <input type="text" id="address" name="cage" />
  </p>
  <p>
  <label>Aadhar No</label>
  <input type="text" id="price" name="cadhar" />
  </p>
  <p>
  <label>Phone No</label>
  <input type="text" id="phone" name="cno" />
  </p>
  <p>
  <input type="submit" value="Submit" name="Sub" />
  </p>
</form>
</body>
</html>
