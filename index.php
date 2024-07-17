<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="form-body">
      <div class="row">
        <div class="form-holder">
          <div class="form-content">
            <div class="form-items">
              <h3>Register Today</h3>
              <p>Fill in the data below.</p>
              <form action="registers.php" method="post">
                <div class="col-md-12">
                  <input class="form-control" type="text" name="name" placeholder="Full Name">
                </div>
                <div class="col-md-12">
                  <input class="form-control" type="email" name="email" placeholder="E-mail Address">
                </div>
                <div class="col-md-12">
                  <select class="form-select mt-3" name="position">
                    <option value="">Position</option>
                    <option value="jweb">Junior Web Developer</option>
                    <option value="sweb">Senior Web Developer</option>
                    <option value="pmanager">Project Manager</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-button" style="margin-top: 20px;">
                  <button type="submit" id="submit" class="button">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="javascript.js"></script>
  </body>
</html>